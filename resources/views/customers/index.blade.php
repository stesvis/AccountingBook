@extends('layouts.app')

@section('styles')
    <!-- DATA TABLES -->
    <link href="{{ asset('AdminLTE/css/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>
@endsection

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

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-body table-responsive">
                    <table id="myTable" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if (count($customers) > 0)
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->contact }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->email }}</td>
                                </tr>
                            @endforeach
                        @else
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')

    <!-- DATA TABES SCRIPT -->
    <script src="{{ asset('AdminLTE/js/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('AdminLTE/js/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                bPaginate: true,
                bLengthChange: false,
                bFilter: false,
                bSort: true,
                bInfo: true,
                bAutoWidth: false,
                searchable: true
            });
        });
    </script>
@endsection
