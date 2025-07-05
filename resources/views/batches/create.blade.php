@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="POST">
            {!! csrf_field() !!}
            <label>Batch Name</label><br />
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Course</label><br />
            <input type="text" name="course_id" id="course_id" class="form-control"></br>
            <select name="course_id" id="course_id" class=" from-control">
                @foreach($courses as $id => $name)
                <option value="{{ $id }}"> {{ $name }}</option>
                @endforeach
            </select>

            <label>Start Date</label><br />
            <input type="text" name="start_date" id="start_date" class="form-control"></br>

            <input type="Submit" value="Save" class="btn btn-success"></br> <!-- For Adding Submit button -->

        </form>

    </div>
</div>

@stop