@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ route('students.update', $students->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $students->id }}">

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $students->name }}" class="form-control"><br>

            <label>Address</label><br>
            <input type="text" name="address" value="{{ $students->address }}" class="form-control"><br>

            <label>Mobile</label><br>
            <input type="text" name="mobile" value="{{ $students->mobile }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop