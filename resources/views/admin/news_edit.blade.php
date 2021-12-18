@extends('layouts.admin')
@section('title','Edit News')
@section('description','Edit News Form')
@section('keywords','')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit News</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit News Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_news_update',['id'=>$data->id])}}" method="post" >
                                    @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                                <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                                <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords" placeholder="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                                <input type="text" class="form-control" value="{{$data->description}}" name="description" placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Menu</label>
                                                <select name="menu_id"  class="form-control">
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"@if($rs->id == $data->menu_id) selected="selected" @endif>{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            <textarea name="details" id="text_editor" >{{$data->details}}</textarea>
                                            <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>
                                            <script>
                                                ClassicEditor.create(document.getElementById('text_editor'));
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                                <input type="text" class="form-control" value="{{$data->type}}" name="type" placeholder="type">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                                <select name="status"  class="form-control">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
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

