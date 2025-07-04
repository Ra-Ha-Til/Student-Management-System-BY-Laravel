@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Batches</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($batches->count() > 0)
                    @foreach ($batches as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->start_date}}</td>
                        <td>
                            <a href="{{ url('/batches/' . $course->id) }}" title="View Course">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>

                            <a href="{{ url('/batches/' . $course->id . '/edit') }}" title="Edit Course">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="{{ url('/batches/' . $course->id) }}" accept-charset="UTF-8"
                                style="display:inline"
                                onsubmit="return confirm('Are you sure you want to delete this Course?');">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center">No batches found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div> <!-- /.table-responsive -->
    </div> <!-- /.card-body -->
</div> <!-- /.card -->

@endsection