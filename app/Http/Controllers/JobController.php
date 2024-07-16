<?php
namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('employer')->latest()->simplePaginate(10);
        return view('jobs.index', ['jobs'=>$jobs]);
    }

    public function create(Request $request){
        return view('jobs.create');
    }

    public function show(Job $job){
        return view('jobs.show',['job'=>$job]);
    }

    public function store(Request $request){
        //authorize

        $request->validate([
            'title' =>  'required|string|max:255|min:3',
            'salary' =>  'required|integer|min:1000|max:10000000000',
            'location' =>  'required|string|max:255|min:3',
            'description' =>  'string|max:500',
        ]);


        Job::create([
            'title' => request('title'),
            'description' => request('description'),
            'employer_id' => 1,
            'location' => request('location'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs');
    }


    public function edit(Job $job){
        return view('jobs.edit', ['job'=> $job]);
    }

    public function update(Job $job, Request $request){
        //authorize
        $request->validate([
            'title' =>  'required|string|max:255|min:3',
            'salary' =>  'required|integer|min:1000|max:10000000000',
            'location' =>  'required|string|max:255|min:3',
            'description' =>  'string|max:500',
        ]);

        $job->update([
            'title' => request('title'),
            'description' => request('description'),
            'employer_id' => 1,
            'location' => request('location'),
            'salary' => request('salary'),
        ]);

        return view('jobs.show', ['job'=> $job]);
    }

    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');
    }
}
