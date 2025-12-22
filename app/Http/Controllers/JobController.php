<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
 
    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $jobs = $category->jobs()->paginate(12);

        return view('jobs.category', compact('category', 'jobs'));
    }


    public function show($categorySlug, $jobSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $job = Job::where('slug', $jobSlug)
                  ->where('category_id', $category->id)
                  ->firstOrFail();

        return view('jobs.detail', compact('job', 'category'));
    }


    public function apply(Request $request, $categorySlug, $jobSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $job = Job::where('slug', $jobSlug)
                  ->where('category_id', $category->id)
                  ->firstOrFail();

 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'cv' => 'required|mimes:pdf|max:10240',
            'cover_letter' => 'nullable|string',
        ]);


        $cvPath = $request->file('cv')->store('cvs', 'public');

        JobApplication::create([
            'job_id' => $job->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv_path' => $cvPath,
            'cover_letter' => $request->cover_letter,
        ]);

        return redirect()->back()->with('success', 'Lamaran Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}