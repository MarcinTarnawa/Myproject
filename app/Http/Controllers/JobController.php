<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(8);

        return view('jobs.index', ['jobs' => $jobs]);
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
            'salary' => ['required', 'numeric'],
            'value' => ['required'],
        ]);

        $job = Auth::user()->employer->jobs()->create($attributes);

        return redirect('/job');
    }


    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {

        Gate::authorize('edit', $job);

        request()->validate([
            'title' => ['required'],
            'salary' => ['required', 'numeric'],
            'value' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'value' => request('value'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('edit', $job);

        $job->delete();

        return redirect('/job');
    }
}
