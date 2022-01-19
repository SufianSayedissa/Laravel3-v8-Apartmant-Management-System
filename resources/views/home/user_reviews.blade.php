@extends('layouts.home')
@section('title','My Revıews')

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
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Content</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Date</th>
                                <th style="" colspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            <tr>
                                @foreach($datalist as $rs)
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('content',['id'=>$rs->content->id])}}" target="_blank">
                                            {{$rs->content->title}}</a></td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}/5</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>
                                        <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are You Sure')">
                                            <center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a>
                                    </td>
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
@endsection
