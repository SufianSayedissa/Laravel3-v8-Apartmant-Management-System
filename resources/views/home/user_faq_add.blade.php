@extends('layouts.home')
@section('title','User Profile')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
     <div class="container">
         <div class="row">
             <form class="form-horizontal" action="{{route('user_faq_store')}}" method="post" enctype="multipart/form-data">
                 @csrf
                 @include('home.message')
                 <div class="form-group">
                     <label>Question</label>
                     <input type="text" class="form-control" name="question" placeholder="Question">
                 </div>
{{--                 <div class="form-group">--}}
{{--                     <label>Answer</label>--}}
{{--                     <textarea name="answer" id="text_editor" ></textarea>--}}
{{--                     <script src="{{asset('assets')}}/admin/ckeditor5-build-classic/ckeditor.js"></script>--}}
{{--                     <script>--}}
{{--                         ClassicEditor.create(document.getElementById('text_editor'));--}}
{{--                     </script>--}}
{{--                 </div>--}}
{{--                 <div class="form-group">--}}
{{--                     <label>Status</label>--}}
{{--                     <select name="status" class="form-control">--}}
{{--                         <option>Choose option</option>--}}
{{--                         <option>False</option>--}}
{{--                         <option>True</option>--}}
{{--                     </select>--}}
{{--                 </div>--}}


                 <div class="ln_solid"></div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-success">Add</button>
                 </div>

             </form>
         </div>
     </div>
</div>
@endsection
