@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{ url('students') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="Enter name" required>
            <input type="text" name="address" placeholder="Enter address" required>

            <!-- ✅ Add this for age -->
            <input type="number" name="age" placeholder="Enter age" required>

            <!-- optional: mobile -->
            <!-- <input type="text" name="mobile" placeholder="Enter mobile"> -->

            <button type="submit">Submit</button>
        </form>

    </div>
</div>

@stop