@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Payment</div>
    <div class="card-body">
        <form action="{{ url('payments') }}" method="POST">
            {!! csrf_field() !!}
            <label>Enrollment No</label><br />
            <select name="enrollment_id" id="enrollment_id" class=" from-control">
                @foreach($payments as $id => $enrollment_id)
                <option value="{{ $id }}"> {{ $enrollment_id }}</option>
                @endforeach
            </select>

            <label>Paid Date</label><br />
            <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

            <label>Amount</label><br />
            <input type="text" name="amount" id="amount" class="form-control"></br>

            <input type="Submit" value="Save" class="btn btn-success"></br> <!-- For Adding Submit button -->

        </form>

    </div>
</div>

@stop