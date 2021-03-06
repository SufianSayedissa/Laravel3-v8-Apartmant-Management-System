@extends('layouts.home')
@section('title','Add Request')
@section('headerjs')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
     <div class="container">
         <div class="row">
             <div class="">
                 <div class="page-title">
                     <div class="title_left">
                         <h3>Add Request</h3>
                     </div>

                     <div class="title_right">

                     </div>
                 </div>

                 <div class="clearfix"></div>

                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Add Request Form</h2>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">

                                 <div class="x_panel">

                                     <div class="clearfix"></div>
                                     <div class="x_content">
                                         <br>
                                         <form class="form-horizontal" action="{{route('user_requests_store')}}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group">
                                                 <label>Type</label>
                                                 <select name="type" class="form-control">
                                                     <option>Choose option</option>
                                                     <option>Breakdown</option>
                                                     <option>Cleaning</option>
                                                     <option>Other</option>
                                                 </select>
                                             </div>
                                             <div class="form-group">
                                                 <label>Subject</label>
                                                 <input type="text" class="form-control" name="subject" placeholder="subject">
                                             </div>
                                             <div class="form-group">
                                                 <label>Message</label>
                                                 <textarea name="message" id="text_editor" ></textarea>
                                                 <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>
                                                 <script>
                                                     ClassicEditor.create(document.getElementById('text_editor'));
                                                 </script>
                                             </div>
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
     </div>
</div>
@endsection
