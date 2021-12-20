@extends('layouts.admin')
@section('title','Edit Setting')
@section('description','Edit Setting Form')
@section('keywords','')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="right_col" role="main">
        <form class="form-horizontal" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Settings</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="general-tab" role="tab" data-toggle="tab" aria-expanded="true">General</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="smtpemail-tab" data-toggle="tab" aria-expanded="false">Smtp Email</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="socialmedia-tab2" data-toggle="tab" aria-expanded="false">Social Media</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="aboutus-tab2" data-toggle="tab" aria-expanded="false">About US</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content5" role="tab" id="contactpage-tab2" data-toggle="tab" aria-expanded="false">Contact Page</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content6" role="tab" id="references-tab2" data-toggle="tab" aria-expanded="false">References</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="general-tab">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="{{$data->id}}" name="id" >
                                            <label>Title</label>
                                            <input type="text" class="form-control" value="{{$data->title}}" name="title" >
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" class="form-control" value="{{$data->keywords}}" name="keywords" >
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" class="form-control" value="{{$data->description}}" name="description" >
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" class="form-control" value="{{$data->company}}" name="company" >
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" value="{{$data->address}}" name="address" >
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{$data->phone}}" name="phone" >
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" value="{{$data->fax}}" name="fax" >
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="{{$data->email}}" name="email" >
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status"  class="form-control">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="smtpemail-tab">
                                        <div class="form-group">
                                            <label>Smtp Server</label>
                                            <input type="text" class="form-control" value="{{$data->smtpserver}}" name="smtpserver" >
                                        </div>
                                        <div class="form-group">
                                            <label>Smtp Email</label>
                                            <input type="text" class="form-control" value="{{$data->smtpemail}}" name="smtpemail" >
                                        </div>
                                        <div class="form-group">
                                            <label>Smtp Password</label>
                                            <input type="password" class="form-control" value="{{$data->smtpemail}}" name="smtpemail" >
                                        </div>
                                        <div class="form-group">
                                            <label>Smtp Port</label>
                                            <input type="text" class="form-control" value="{{$data->smtpport}}" name="smtpport" >
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="socialmedia-tab2">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" value="{{$data->facebook}}" name="facebook" >
                                        </div>
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" value="{{$data->instagram}}" name="instagram" >
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" value="{{$data->twitter}}" name="twitter" >
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="aboutus-tab2">
                                        <div class="form-group">
                                            <label>About Us</label>
                                            <textarea name="aboutus" id="about_editor" >{{$data->aboutus}}</textarea>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="contactpage-tab2">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <textarea name="contact" id="contact_editor" >{{$data->contact}}</textarea>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="references-tab2">
                                        <div class="form-group">
                                            <label>References</label>
                                            <textarea name="references" id="references_editor" >{{$data->references}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>

                <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>
                <script>
                    ClassicEditor.create(document.getElementById('about_editor'));
                    ClassicEditor.create(document.getElementById('contact_editor'));
                    ClassicEditor.create(document.getElementById('references_editor'));
                </script>
        </div>
        </form>
    </div>
@endsection

