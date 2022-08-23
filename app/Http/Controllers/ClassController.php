<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function list()
    {
        $bearer = env('BEARER_TOKEN');
        $school = env('SCHOOL_ID');

        $client = new \Wonde\Client("{$bearer}");
        $school = $client->school("{$school}");

        foreach ($school->classes->all() as $event) {
            dd($event->students);
        }

        die;
    }
}
