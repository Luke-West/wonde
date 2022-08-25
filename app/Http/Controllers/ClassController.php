<?php

namespace App\Http\Controllers;

use App\Services\WondeApiClient;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function list()
    {
        $service = new WondeApiClient(env('SCHOOL_ID'));
        $classesAndStudents = [];

        //A1851920782

        if ($employee = $service->getEmployee(Auth::user()->wonde_user_id)) {
            foreach ($employee->data->classes->data as $class) {
                $class->students = $service->getClassStudents($class->id);
                $classesAndStudents[$class->description] = ['students' => $class->students->data->students->data];
            }
        }

        dd($classesAndStudents);
    }
}
