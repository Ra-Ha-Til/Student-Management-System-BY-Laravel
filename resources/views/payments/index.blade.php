@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($students->count() > 0)
                    @foreach ($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->enrollment->enroll_no }}</td>
                        <td>{{ $item->paid_date}}</td>
                        <td>{{ $item->amount}}</td>
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" title="View Student">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>

                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Student">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="{{ url('/students/' . $item->id) }}" accept-charset="UTF-8"
                                style="display:inline"
                                onsubmit="return confirm('Are you sure you want to delete this student?');">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center">No students found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div> <!-- /.table-responsive -->
    </div> <!-- /.card-body -->
</div> <!-- /.card -->

@endsection