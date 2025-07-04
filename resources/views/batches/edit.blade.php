@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ route('batches.update', $batches->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $batches->id }}">

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $batches->name }}" class="form-control"><br>

            <label>Course</label><br>
            <input type="text" name="course_id" value="{{ $batches->course_id }}" class="form-control"><br>

            <label>Start Date</label><br>
            <input type="text" name="start_date" value="{{ $batches->start_date }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop