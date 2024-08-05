<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke() {
        $jobs = Job::query()
            ->with(['employer'])
            ->where('title', 'LIKE', '%'.request('q').'%') // %-> każda liczba znaków przed i po może się tam znajdować
            ->get();

        return view('result', ['jobs' => $jobs]);
    }
}
