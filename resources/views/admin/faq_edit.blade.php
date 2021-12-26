@extends('layouts.admin')
@section('title','Edit FAQ')
@section('description','Edit FAQ Form')
@section('keywords','')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit FAQ</h3>
                </div>

                <div class="title_right">

                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit FAQ Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_faq">

                            <div class="x_panel">

                                <div class="clearfix"></div>
                                <div class="x_faq">
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        @include('home.message')
                                        <div class="form-group">
                                            <label>Question</label>
                                                <input type="text" class="form-control" value="{{$data->question}}" name="question">
                                        </div>

                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea name="answer" id="text_editor" >{{$data->answer}}</textarea>
                                            <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>
                                            <script>
                                                ClassicEditor.create(document.getElementById('text_editor'));
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select name="status"  class="form-control">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
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

