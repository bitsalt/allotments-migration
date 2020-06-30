@extends('layouts.app')
@section('content')
    <div class="title m-b-md">
        Legacy Allotment Test Site
    </div>

    <div class="row">
        <div class="card" style="width:75%">
            <div class="card-header">Rollover from legacy to active</div>
            <div class="card-body">
                <p>1. Select a year
                <select id="yearSelect" class="list-group">
                    @foreach($years as $year)
                        @foreach($year as $key => $val)
                            <option class="list-group-item" value="{{$key}}">{{$val}}</option>
                        @endforeach
                    @endforeach
                </select>
                    <br><input type="checkbox" name="truncateYear" id="truncateYear" value="1" />
                    Check to truncate the data for the selected year before running the rollover
                </p>
                <p>2. Run the process, watching for errors and/or mismatched numbers
                <br>
                    <button class="button-blue" onclick="makeVisible('progressCard'); rolloverSteps(1)">Start rollover</button>
                </p>
                <p>3. Review the new data on the <a href="http://adminallotdevl.wcpss.net">legacy site</a>.</p>
            </div>
        </div>
    </div>
    <div class="row d-inline-block" style="height:200px; width:75%">
        <div id="progressCard" class="card mt-5 invisible h-">
            <div class="card-header">Progress</div>
            <div class="card-body">
                <div id="serverResponse"></div>
                <div id="spinner" class="spinner spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                &nbsp;
            </div>
        </div>
    </div>


@endsection
