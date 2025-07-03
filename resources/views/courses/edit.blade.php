@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ route('courses.update', $courses->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $courses->id }}">

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $courses->name }}" class="form-control"><br>

            <label>Syllabus</label><br>
            <input type="text" name="address" value="{{ $courses->syllabus }}" class="form-control"><br>

            <label>Duration</label><br>
            <input type="text" name="mobile" value="{{ $courses->duration }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop