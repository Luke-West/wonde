@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Classes') }}</div>
                <div class="card-body">
                    @if (count($classesAndStudents))
                        @foreach ($classesAndStudents as $key => $classAndStudent)
                            <h3>{{ $key }}</h3>
                            <h4>{{ __("Students") }}</h4>
                            <ul>
                                @foreach ($classAndStudent['students'] as $student)
                                    <li>{{ $student->forename}} {{ $student->surname }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    @else
                        <p>{{ __("You don't have any classes this week.") }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
