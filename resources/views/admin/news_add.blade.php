@extends('layouts.admin')
@section('title','Add News')
@section('description','Add News Form')
@section('keywords','')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add News</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add News Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_news_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                                <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                                <input type="text" class="form-control" name="keywords" placeholder="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                                <input type="text" class="form-control" name="description" placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Menu</label>
                                                <select name="menu_id" class="form-control">
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->menu_id}}">{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            <textarea name="details" id="text_editor" ></textarea>
                                            <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>
                                            <script>
                                                ClassicEditor.create(document.getElementById('text_editor'));
                                            </script>
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                                <input type="text" class="form-control" name="type" placeholder="type">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select name="status" class="form-control">
                                                    <option>Choose option</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="image" >
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button type="reset" class="btn btn-primary">Reset</button>
                                                <button type="submit" class="btn btn-success">Add</button>
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

