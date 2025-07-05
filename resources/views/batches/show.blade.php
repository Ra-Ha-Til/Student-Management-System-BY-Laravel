@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header"> payments Page </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name:{{ $payments->name }}</h5>
                <p class="card-text">Address:{{ $payments->address }}</p>
                <p class="card-text">Mobile:{{ $payments->mobile }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection