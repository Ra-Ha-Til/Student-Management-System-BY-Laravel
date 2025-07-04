@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <form action="{{ url('enrollments') }}" method="POST">
            {!! csrf_field() !!}
            <label>Enroll No</label><br />
            <input type="text" name="enrol_no" id="enroll_no" class="form-control"></br>
            <label>Batch</label><br />
            <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
            <label>Student</label><br />
            <input type="text" name="student_id" id="student_id" class="form-control"></br>
            <label>Join Date</label><br />
            <input type="text" name="join_date" id="join_date" class="form-control"></br>
            <label>Fee</label><br />
            <input type="text" name="fee" id="fee" class="form-control"></br>

            <input type="Submit" value="Save" class="btn btn-success"></br> <!-- For Adding Submit button -->

        </form>

    </div>
</div>

@stop