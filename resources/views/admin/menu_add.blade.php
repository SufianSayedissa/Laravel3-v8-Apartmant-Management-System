@extends('layouts.admin')
@section('title','Admin Add Menu')
@section('description','Add Menu Form')
@section('keywords','')


@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Menu</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Menu Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_menu_create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label>Parent</label>
                                                <select name="parent_id" class="form-control">
                                                    <option value="0" selected="selected">Main Menu</option>
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->parent_id}}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
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

