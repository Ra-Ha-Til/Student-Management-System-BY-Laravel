@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Enrollment Application</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($enrollments->count() > 0)
                    @foreach ($enrollments as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->enroll_no}}</td>
                        <td>{{ $course->batch_id }}</td>
                        <td>{{ $course->student_id}}</td>
                        <td>{{ $course->join_date }}</td>
                        <td>{{ $course->fee}}</td>
                        <td>
                            <a href="{{ url('/enrollments/' . $course->id) }}" title="View Enrollment">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>

                            <a href="{{ url('/enrollments/' . $course->id . '/edit') }}" title="Edit Course">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="{{ url('/enrollments/' . $course->id) }}" accept-charset="UTF-8"
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
                        <td colspan="5" class="text-center">No enrollments found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div> <!-- /.table-responsive -->
    </div> <!-- /.card-body -->
</div> <!-- /.card -->

@endsection