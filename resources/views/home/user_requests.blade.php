@extends('layouts.home')
@section('title','My Requests')

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
                                    <a href="{{route('user_requests_add')}}"><button type="button" class="btn btn-success btn-lg">Add Request</button></a>
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
                                                    <th>Type</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                    <th style="..."colspan="2">Actions</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>{{$rs->type}}</td>
                                                        <td>{{$rs->subject}}</td>
                                                        <td>{!!$rs->message!!}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td><a href="{{route('user_requests_edit', ['id'=>$rs->id])}}">
                                                                <center><img src="{{asset('assets')}}/admin/images/edit.png" height="25"width="25"></center></a></td>
                                                        <td><a href="{{route('user_requests_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')"><center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
                                                    </tr>
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
