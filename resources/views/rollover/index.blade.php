@extends('layouts.app')
@section('content')
        <div class="title m-b-md">
            Rollover
        </div>

        <div>
            <h3>New School Year Data</h3>
            @foreach($newSchoolYear as $year)
                {{$year}},
            @endforeach
            <h3>School Types</h3>
            @foreach($schoolTypes as $num => $schoolType)
                @foreach($schoolType as $type)
                    {{$type}},
                @endforeach
                <br>
            @endforeach
            <h3>Grade Levels</h3>
            @foreach($gradeLevels as $gradeLevel)
                @foreach($gradeLevel as $level)
                    {{$level}},
                @endforeach
                <br>
            @endforeach
            <h3>Categories</h3>
            @foreach($categories as $category)
                {{$category}}<br>
            @endforeach
            <h3>Legacy Allotments</h3>
            @foreach($legacyAllotments as $legacyAllotment)
                {{$legacyAllotment}}<br>
            @endforeach
        </div>
@endsection
