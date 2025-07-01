@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ url('/student/create') }}"> <i class="fa fa-plus"></i> Add New
                    Student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th width="220px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ url('/student/' . $item->id) }}" title="View">View</a>
                        <a class="btn btn-primary btn-sm" href="{{ url('/student/' . $item->id . '/edit') }}"
                            title="Edit">Edit</a>
                        <form action="{{ url('/student/' . $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection