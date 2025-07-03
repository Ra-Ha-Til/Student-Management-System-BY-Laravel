@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ route('teachers.update', $teachers->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $teachers->id }}">

            <label>Name</label><br>
            <input type="text" name="name" value="{{ $teachers->name }}" class="form-control"><br>

            <label>Address</label><br>
            <input type="text" name="address" value="{{ $teachers->address }}" class="form-control"><br>

            <label>Mobile</label><br>
            <input type="text" name="mobile" value="{{ $teachers->mobile }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop