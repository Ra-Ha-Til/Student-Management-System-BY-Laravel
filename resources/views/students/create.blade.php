@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{ url('students') }}" method="POST">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address</label><br />
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile</label><br />
            <input type="text" name="mobile" id="mobile" class="form-control"></br>

            <input type="Submit" value="Save" class="btn btn-success"></br> <!-- For Adding Submit button -->

        </form>

    </div>
</div>

@stop