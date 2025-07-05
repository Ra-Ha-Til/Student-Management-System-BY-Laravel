@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ route('payments.update', $payments->id) }}" method="POST">
            @csrf
            @method("PATCH")

            <input type="hidden" name="id" value="{{ $payments->id }}">

            <label>Enrollment No</label><br>
            <input type="text" name="name" value="{{ $payments->name }}" class="form-control"><br>

            <label>Paid Date</label><br>
            <input type="text" name="paid_date" value="{{ $payments->paid_date }}" class="form-control"><br>

            <label>Amount</label><br>
            <input type="text" name="amount" value="{{ $payments->amount }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>

    </div>
</div>
@stop