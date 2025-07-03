@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Course Details</div>
    <div class="card-body">
        <form action="{{ url('courses') }}" method="POST">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Syllabus</label><br />
            <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
            <label>Duration</label><br />
            <input type="text" name="duration" id="duration" class="form-control"></br>

            <input type="Submit" value="Save" class="btn btn-success"></br> <!-- For Adding Submit button -->

        </form>

    </div>
</div>

@stop