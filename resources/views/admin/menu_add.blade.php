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
                                    <form class="form-horizontal" action="{{route('admin_menu_create')}}" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Parent</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="parent_id" class="form-control">
                                                    <option value="0">Main Menu</option>
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->parent_id}}">{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Keywords</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="keywords" placeholder="keywords">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="description" placeholder="description">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="status" class="form-control">
                                                    <option>Choose option</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button type="reset" class="btn btn-primary">Reset</button>
                                                <button type="submit" class="btn btn-success">Add</button>
                                            </div>
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

