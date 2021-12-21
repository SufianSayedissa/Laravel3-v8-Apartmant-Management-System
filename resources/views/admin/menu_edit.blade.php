@extends('layouts.admin')
@section('title','Edit Menu')
@section('description','Edit Menu Form')
@section('keywords','')


@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Menu</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit Menu Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_menu_update',['id'=>$data->id])}}" method="post"enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Parent</label>
                                                <select name="parent_id" class="form-control">
                                                    <option value="0" selected="selected">Main Menu</option>
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                                <input type="text" class="form-control" name="keywords" placeholder="keywords" value="{{$data->keywords}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                                <input type="text" class="form-control" name="description" placeholder="description" value="{{$data->description}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                                <select name="status" class="form-control">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" value="{{$data->image}}" name="image">
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" height="50" width="50" alt="">
                                            @endif
                                        </div>

                                        <div class="ln_solid"></div>
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

