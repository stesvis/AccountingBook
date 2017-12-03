@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Customers
            <small>All Customers</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><i class="fa fa-address-card"></i>Customers</li>
        </ol>
    </section>

    @if (count($customers) > 0)
        <ul>
            @foreach($customers as $customer)
                <li>{{ $customer->name }}</li>
            @endforeach
        </ul>
    @endif

@endsection
