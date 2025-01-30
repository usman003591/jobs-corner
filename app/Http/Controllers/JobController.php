<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get();

        return view('jobs.index', [
            'jobs' => $jobs, // All jobs including featured ones
        'featuredJobs' => $jobs->where('is_featured', 1), // Separate featured jobs list
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'location' => ['required'],
            'salary' => ['required'],
            'position' => ['required', Rule::in(['Part-Time', 'Full-Time'])],
            'url' => ['required'],
            'tags' => ['nullable', 'string'],
        ]);
        $attributes['is_featured'] = $request->has('is_featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if (!empty($attributes['tags'])) {
            foreach (explode(',', $attributes['tags']) as $tagName) {
                $job->tag(trim($tagName)); // Use the tag() method in Job model
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }

    public function search(){
        $jobs = Job::query()->with(['employer', 'tags'])->where("title","iLIKE","%".request('q').'%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
