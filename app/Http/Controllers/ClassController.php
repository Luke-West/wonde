<?php

namespace App\Http\Controllers;

use App\Services\WondeApiClient;

class ClassController extends Controller
{
    public function list()
    {
        $service = new WondeApiClient(env('SCHOOL_ID'));
        $classesAndStudents = [];

        if ($employee = $service->getEmployee('A1851920782')) {
            foreach ($employee->data->classes->data as $class) {
                $class->students = $service->getClassStudents($class->id);
                $classesAndStudents[$class->description] = ['students' => $class->students->data->students->data];
            }
        }

        dd($classesAndStudents);
    }
}
