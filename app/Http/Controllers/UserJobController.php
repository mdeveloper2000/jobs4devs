<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserJobController extends Controller
{
    
    public function competitors($id) {

        $competitors = DB::table('users')
                ->join('users_jobs', 'users.id', '=', 'users_jobs.user_id')
                ->where('users_jobs.job_id', '=', $id)->get();
        if(count($competitors) > 0) {
            return view('jobs.competitors', [
                'competitors' => $competitors,
                'title' => 'Competidores'
            ]);
        }
        else {
            return back();
        }

    }

    public function competing($id) {        
        $jobs = DB::table('jobs')
        ->join('users_jobs', 'jobs.id', '=', 'users_jobs.job_id')
        ->where('users_jobs.user_id', '=', $id)->get();
        return view('jobs.competing', [
            'jobs' => $jobs,
            'title' => 'Competindo'
        ]);
    }

}
