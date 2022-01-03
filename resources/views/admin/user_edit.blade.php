@extends('layouts.admin')
@section('title','Edit User')
@section('description','Edit User Form')
@section('keywords','')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit User</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit User Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf


                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Photo</label>
                                                <input type="file" class="form-control" name="image" >
                                            @if($data->profile_photo_path)
                                                <img src="{{Storage::url($data->profile_photo_path)}}" height="200"style="border-radius: 10px"alt="">
                                                @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                                <input type="text" class="form-control" value="{{$data->email}}" name="email" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{$data->phone}}" name="phone" placeholder="phone">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" value="{{$data->address}}" name="address" placeholder="address">
                                        </div>
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-success">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

