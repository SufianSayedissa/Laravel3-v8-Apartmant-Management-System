@extends('layouts.home')
@section('title','Add Payment')
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
                         <h3>Add Payment</h3>
                     </div>

                     <div class="title_right">

                     </div>
                 </div>

                 <div class="clearfix"></div>

                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Add Payment Form</h2>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">

                                 <div class="x_panel">

                                     <div class="clearfix"></div>
                                     <div class="x_content">
                                         <br>
                                         <form class="form-horizontal" action="{{route('user_payment_store')}}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group">
                                                 <label>Year</label>
                                                 <input type="year" id="year" name="year"
                                                        min="2021" value="2022">
                                             </div>
                                             <div class="form-group">
                                                 <label>Month</label>
                                                 <input type="month" id="month" name="month"
                                                        min="2021-01" value="2022-12">
                                             </div>
                                             <div class="form-group">
                                                 <label>Payment</label>
                                                 <input type="text" id="payment" name="payment">
                                             </div>

                                             <div class="form-group">
                                                 <button type="submit" class="btn btn-success">Add Payment</button>
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
