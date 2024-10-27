<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Wyszykaj w bazie danych
     */
    public function __invoke() {
        $jobs = Job::query()
            ->with(['employer'])
            ->where('title', 'LIKE', '%'.request('q').'%')
            ->get();

        $count = count($jobs);

        if (($count === 0))  {
            
        return view('result', ['jobs' => $jobs])->with('message','Brak Wyniku');
        }
        
        else

        {

        return view('result', ['jobs' => $jobs])->with('message','Wynik wyszukiwania');
        }

    }
}
