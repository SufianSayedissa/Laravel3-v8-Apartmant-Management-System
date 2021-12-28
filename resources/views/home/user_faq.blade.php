@extends('layouts.home')
@section('title','My Questions')

@section('content')

<div class="container pt-5 mb-5">
</div>
<div class="site-section">
     <div class="container">
         <div class="row">
         <div id="aside" class="col-md-2">
             @include('home.usermenu')
         </div>
             <br>
             <div class="col-md-10 ">
                 <h2 class="section-title-underline mb-5">
                     <span>Frequently Asked Question</span>
                 </h2>
                 <div class="x_panel">
                     <div class="x_title">
                         <a href="{{route('user_faq_add')}}"><button type="button" class="btn btn-success btn-lg">Add Faq</button></a>
                         @include('home.message')
                     </div>
                     <div class="x_panel">
                         <div class="x_faq">

                             <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                 <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Question</th>
                                     <th>Status</th>
                                     <th style="..."colspan="2">Actions</th>

                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($datalist as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>{{$rs->question}}</td>
                                         <td>{{$rs->status}}</td>
                                         <td><a href="{{route('user_faq_edit', ['id'=>$rs->id])}}">
                                                 <center><img src="{{asset('assets')}}/admin/images/edit.png" height="25"width="25"></center></a></td>
                                         <td><a href="{{route('user_faq_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')"><center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
</div>
@endsection
