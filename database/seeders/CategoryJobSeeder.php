<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Str;

class CategoryJobSeeder extends Seeder
{
    public function run(): void
    {
        // ==================== 1. CateringZ ====================
        $catering = Category::firstOrCreate(
            ['slug' => 'cateringz'],
            ['name' => 'CateringZ']
        );

        $cateringJobs = [
            [
                'title' => 'Head Chef',
                'description' => 'Bertanggung jawab atas seluruh operasi dapur, menciptakan menu inovatif, mengawasi tim koki, dan memastikan standar kualitas tinggi dalam setiap hidangan.',
                'location' => 'Jakarta',
                'employment_type' => 'Full-time',
                'salary_range' => '5 - 10 Juta',
                'full_description' => "Job Description\n\n1. Operasional & Kualitas Makanan\n• Pengembangan Menu: Merancang dan memperbarui menu secara berkala, menciptakan hidangan inovatif.\n• Kontrol Kualitas: Memastikan setiap hidangan yang keluar dari dapur memiliki rasa, suhu, dan porsi yang konsisten sesuai standar tertinggi.\n\n2. Manajemen Tim Dapur (20-30 orang)\n• Recruiting, training, melatih dan memotivasi tim dapur (Sous Chef, Chef de Partie, Commis, Steward).\n\n3. Kualifikasi\n• Pengalaman minimal 5 tahun sebagai Head Chef di hotel/restoran berbintang.\n• Kreatif, inovatif, dan mampu bekerja di bawah tekanan.",
                'image' => 'jobs/head-chef.jpg',
            ],
            [
                'title' => 'Restaurant Manager',
                'description' => 'Mengelola operasional restoran sehari-hari, mengawasi staf, menangani keluhan pelanggan, dan memastikan kepuasan pelanggan serta target penjualan tercapai.',
                'location' => 'Jakarta',
                'employment_type' => 'Full-time',
                'salary_range' => '7 - 12 Juta',
                'full_description' => "Job Description\n\n1. Operasional Harian\n• Mengawasi seluruh aktivitas restoran dari pembukaan hingga penutupan.\n• Memastikan pelayanan cepat, ramah, dan sesuai SOP.\n\n2. Manajemen Staf\n• Scheduling shift karyawan.\n• Training dan evaluasi performa staf.\n\n3. Kualifikasi\n• Pengalaman minimal 3 tahun sebagai Restaurant Manager.\n• Kemampuan leadership dan problem solving yang baik.",
                'image' => 'jobs/restaurant-manager.jpg',
            ],
            [
                'title' => 'Sous Chef',
                'description' => 'Asisten kepala chef, bertanggung jawab atas persiapan bahan, mengawasi staf dapur junior, dan memastikan hidangan sesuai standar.',
                'location' => 'Jakarta',
                'employment_type' => 'Full-time',
                'salary_range' => '4 - 8 Juta',
                'full_description' => "Job Description\n\n1. Persiapan & Eksekusi\n• Membantu Head Chef dalam prep harian dan mise en place.\n• Mengawasi staf junior di dapur.\n\n2. Kualitas Hidangan\n• Memastikan setiap plate sesuai standar presentasi dan rasa.\n\n3. Kualifikasi\n• Pengalaman 2-3 tahun di posisi serupa.\n• Paham teknik memasak modern dan tradisional.",
                'image' => 'jobs/sous-chef.jpg',
            ],
            [
                'title' => 'Head Barista',
                'description' => 'Memimpin tim barista, meracik minuman kopi berkualitas tinggi, melatih staf, dan memastikan pengalaman pelanggan yang memuaskan di area minuman.',
                'location' => 'Jakarta',
                'employment_type' => 'Full-time',
                'salary_range' => '4 - 7 Juta',
                'full_description' => "Job Description\n\n1. Operasional Bar\n• Meracik signature coffee dengan konsistensi rasa.\n• Kalibrasi grinder dan mesin espresso.\n\n2. Training & Development\n• Melatih barista junior teknik brewing dan latte art.\n\n3. Kualifikasi\n• Pengalaman 3 tahun sebagai barista.\n• Bisa latte art advanced.\n• Passionate tentang kopi specialty.",
                'image' => 'jobs/head-barista.jpg',
            ],
        ];

        foreach ($cateringJobs as $jobData) {
            Job::firstOrCreate(
                ['slug' => Str::slug($jobData['title'])],
                array_merge($jobData, ['category_id' => $catering->id, 'slug' => Str::slug($jobData['title'])])
            );
        }

        // ==================== 2. KeripikZ ====================
        $keripik = Category::firstOrCreate(
            ['slug' => 'keripikz'],
            ['name' => 'KeripikZ']
        );

        $keripikJobs = [
            [
                'title' => 'Host Live Streaming (TikTok/Shopee)',
                'description' => 'Mencari talenta yang cerewet dan asik buat jualan keripik secara live.',
                'location' => 'Bandung (WFO)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 3.000.000 - Rp 4.500.000 + Bonus Penjualan',
                'full_description' => "Apa yang dilakukan:\n• Live streaming 4-6 jam sehari di marketplace.\n• Menjelaskan varian rasa keripik dengan gaya yang menggugah selera.\n• Mengadakan games/kuis saat live untuk menarik penonton.\n\nSyarat:\n• Berani tampil di depan kamera (tidak pemalu).\n• Punya stamina tinggi dan suara lantang.\n• Paham fitur keranjang kuning TikTok/Shopee.",
                'image' => 'jobs/host-live-streaming.jpg',
            ],
            [
                'title' => 'Staff Produksi & Packing',
                'description' => 'Memastikan keripik diproduksi dengan higienis dan dikemas rapi agar tidak remuk.',
                'location' => 'Bandung (Pabrik)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 2.500.000 - Rp 3.000.000',
                'full_description' => "Apa yang dilakukan:\n• Mengoperasikan mesin pemotong dan penggorengan singkong/pisang.\n• Melakukan penimbangan berat bersih sesuai standar (misal: 100gr).\n• Packing keripik ke dalam kemasan foil dan memasukkan ke kardus.\n\nSyarat:\n• Bersedia kerja fisik dan berdiri lama.\n• Teliti dan bersih (wajib pakai masker & sarung tangan).\n• Pendidikan minimal SMP/SMA.",
                'image' => 'jobs/staff-produksi-packing.jpg',
            ],
            [
                'title' => 'Sales Motoris (Kanvasing)',
                'description' => 'Ujung tombak penjualan untuk mendistribusikan KeripikZ ke warung-warung kecil.',
                'location' => 'Jabodetabek (Mobile)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 4.500.000 + Insentif Target',
                'full_description' => "Apa yang dilakukan:\n• Keliling membawa produk menggunakan motor box ke warung/toko kelontong.\n• Menawarkan produk baru dan melakukan restock produk lama.\n• Menagih pembayaran tunai dari pemilik warung.\n\nSyarat:\n• Punya motor pribadi dan SIM C aktif.\n• Hafal jalanan area Jabodetabek.\n• Mental baja dan jago negosiasi.",
                'image' => 'jobs/sales-motoris.jpg',
            ],
            [
                'title' => 'Admin Order & Gudang',
                'description' => 'Mengurus pesanan yang masuk dari marketplace dan mencatat stok keluar-masuk.',
                'location' => 'Bandung',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 3.500.000',
                'full_description' => "Apa yang dilakukan:\n• Memproses resi pesanan dari online shop.\n• Update stok barang di sistem komputer.\n• Melakukan stock opname (hitung stok fisik) setiap akhir bulan.\n\nSyarat:\n• Bisa menggunakan Microsoft Excel (Vlookup/Sum).\n• Teliti dalam menghitung angka.\n• Pengalaman admin minimal 1 tahun.",
                'image' => 'jobs/admin-order-gudang.jpg',
            ],
        ];

        foreach ($keripikJobs as $jobData) {
            Job::firstOrCreate(
                ['slug' => Str::slug($jobData['title'])],
                array_merge($jobData, ['category_id' => $keripik->id, 'slug' => Str::slug($jobData['title'])])
            );
        }

        // ==================== 3. Kopi Masa Lalu ====================
        $kopi = Category::firstOrCreate(
            ['slug' => 'kopi-masa-lalu'],
            ['name' => 'Kopi Masa Lalu']
        );

        $kopiJobs = [
            [
                'title' => 'Senior Barista',
                'description' => 'Pemimpin di area bar yang menjaga konsistensi rasa kopi kenangan bagi pelanggan.',
                'location' => 'Jakarta Selatan',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 5.000.000 - Rp 6.500.000',
                'full_description' => "Apa yang dilakukan:\n• Kalibrasi mesin espresso setiap pagi.\n• Membuat menu kopi (Latte, Cappuccino, Manual Brew).\n• Mengajari barista junior teknik frothing susu yang benar.\n\nSyarat:\n• Pengalaman min. 2 tahun di Specialty Coffee Shop.\n• Bisa membuat Latte Art dasar (Heart/Tulip).\n• Ramah dan komunikatif.",
                'image' => 'jobs/senior-barista.jpg',
            ],
            [
                'title' => 'Kitchen Crew (Hot Kitchen)',
                'description' => 'Menyiapkan makanan pendamping kopi seperti pastry, pasta, dan rice bowl.',
                'location' => 'Jakarta Selatan',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 4.500.000 - Rp 5.500.000',
                'full_description' => "Apa yang dilakukan:\n• Memasak menu sesuai resep standar (SOP).\n• Prep bahan makanan (potong sayur, marinasi daging) sebelum buka.\n• Menjaga kebersihan area dapur (dishwashing).\n\nSyarat:\n• Pendidikan tata boga atau pengalaman masak 1 tahun.\n• Bisa bekerja cepat di bawah tekanan jam makan siang.",
                'image' => 'jobs/kitchen-crew.jpg',
            ],
            [
                'title' => 'Waiter/Waitress (Server)',
                'description' => 'Wajah depan cafe yang menyambut pelanggan dengan senyuman hangat.',
                'location' => 'Jakarta Selatan',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 3.800.000 + Service Charge',
                'full_description' => "Apa yang dilakukan:\n• Menyambut tamu dan memberikan buku menu.\n• Mengantar makanan dan minuman ke meja.\n• Membersihkan meja (clear up) setelah tamu pulang.\n\nSyarat:\n• Berpenampilan rapi dan bersih.\n• Bersedia kerja shift (termasuk akhir pekan/hari libur).\n• Sabar menghadapi pelanggan.",
                'image' => 'jobs/waiter-waitress.jpg',
            ],
            [
                'title' => 'Social Media Specialist',
                'description' => 'Membangun branding Kopi Masa Lalu agar terlihat estetik dan ramai di Instagram/TikTok.',
                'location' => 'Hybrid (Kantor & Cafe)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 5.000.000',
                'full_description' => "Apa yang dilakukan:\n• Datang ke outlet untuk ambil foto/video konten.\n• Membuat jadwal posting (Content Calendar).\n• Membalas DM dan komentar netizen dengan bahasa yang asik.\n\nSyarat:\n• Punya portofolio konten F&B yang menarik.\n• Bisa edit video di HP (CapCut/VN).\n• Paham copywriting bahasa gaul.",
                'image' => 'jobs/social-media-specialist.jpg',
            ],
        ];

        foreach ($kopiJobs as $jobData) {
            Job::firstOrCreate(
                ['slug' => Str::slug($jobData['title'])],
                array_merge($jobData, ['category_id' => $kopi->id, 'slug' => Str::slug($jobData['title'])])
            );
        }

        // ==================== 4. Bintang Surya ====================
        $bintang = Category::firstOrCreate(
            ['slug' => 'bintang-surya'],
            ['name' => 'Bintang Surya']
        );

        $bintangJobs = [
            [
                'title' => 'Teknisi Pendingin (AC & Kulkas)',
                'description' => 'Teknisi lapangan untuk pemasangan dan perbaikan unit elektronik pelanggan.',
                'location' => 'Surabaya',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 4.800.000 - Rp 6.000.000',
                'full_description' => "Apa yang dilakukan:\n• Melakukan instalasi AC baru di rumah/kantor pelanggan.\n• Melakukan servis cuci AC berkala.\n• Memperbaiki kerusakan pada Kulkas atau Mesin Cuci.\n\nSyarat:\n• Paham kelistrikan arus lemah/kuat.\n• Tidak takut ketinggian (pasang outdoor AC).\n• Memiliki sertifikat keahlian teknik lebih disukai.",
                'image' => 'jobs/teknisi-pendingin.jpg',
            ],
            [
                'title' => 'Sales Promotor Elektronik',
                'description' => 'Sales toko yang membantu pelanggan memilih TV, Laptop, atau HP yang tepat.',
                'location' => 'Surabaya (Showroom)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 4.000.000 + Komisi Penjualan',
                'full_description' => "Apa yang dilakukan:\n• Menjelaskan spesifikasi produk elektronik kepada pengunjung toko.\n• Mendemonstrasikan cara pakai produk (misal: fitur Smart TV).\n• Menjaga kebersihan display produk agar tidak berdebu.\n\nSyarat:\n• Berpenampilan menarik dan rapi.\n• Update dengan teknologi terbaru (Gadget enthusiast).\n• Target oriented.",
                'image' => 'jobs/sales-promotor.jpg',
            ],
            [
                'title' => 'Supir Pengiriman (Driver L300/Engkel)',
                'description' => 'Mengantarkan barang elektronik besar ke alamat konsumen dengan aman.',
                'location' => 'Surabaya & Sidoarjo',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 4.200.000 + Uang Makan Harian',
                'full_description' => "Apa yang dilakukan:\n• Mengangkat barang elektronik besar (Kulkas/TV 60 inch) ke mobil.\n• Mengemudikan mobil box/pickup ke lokasi pengiriman.\n• Memastikan barang sampai tanpa lecet sedikitpun.\n\nSyarat:\n• Memiliki SIM B1 atau A Umum.\n• Fisik kuat untuk angkat barang berat.\n• Jujur dan bertanggung jawab.",
                'image' => 'jobs/supir-pengiriman.jpg',
            ],
            [
                'title' => 'Staff Purchasing (Pembelian)',
                'description' => 'Mengatur pengadaan stok barang elektronik dari distributor pusat atau pabrik.',
                'location' => 'Surabaya (Kantor Pusat)',
                'employment_type' => 'Full-time',
                'salary_range' => 'Rp 5.500.000',
                'full_description' => "Apa yang dilakukan:\n• Mencari vendor elektronik dengan harga termurah tapi kualitas bagus.\n• Membuat Purchase Order (PO) untuk restock barang toko.\n• Nego harga dan tempo pembayaran dengan suplier.\n\nSyarat:\n• Lulusan S1 Ekonomi/Manajemen/Akuntansi.\n• Jago negosiasi dan analisa harga.\n• Bisa berbahasa Inggris/Mandarin (nilai plus untuk deal dengan suplier luar).",
                'image' => 'jobs/staff-purchasing.jpg',
            ],
        ];

        foreach ($bintangJobs as $jobData) {
            Job::firstOrCreate(
                ['slug' => Str::slug($jobData['title'])],
                array_merge($jobData, ['category_id' => $bintang->id, 'slug' => Str::slug($jobData['title'])])
            );
        }
    }
}