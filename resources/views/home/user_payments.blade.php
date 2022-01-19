@extends('layouts.home')
@section('title','My Payments')

@section('content')

    <div class="container pt-5 mb-5">
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <a href="{{route('user_payment_add')}}"><button type="button" class="btn btn-success btn-lg">Add Payment</button></a>
                                    @include('home.message')
                                </div>
                                <br>
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="table-responsive">
                                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Year</th>
                                                    <th>Month</th>
                                                    <th>Payment</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Admin Note</th>



                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->year}}</td>
                                                        <td>{{$rs->month}}</td>
                                                        <td>{{$rs->payment}}</td>
                                                        <td>{{$rs->created_at}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td>{{$rs->note}}</td>

                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
