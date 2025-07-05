@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Batch Details </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment No:{{ $payments->name }}</h5>
            <p class="card-text">Paid_id:{{ $payments->course_id }}</p>
            <p class="card-text">Amount{{ $payments->start_date) }}</p>
        </div>
        </hr>
    </div>
</div>
@endsection