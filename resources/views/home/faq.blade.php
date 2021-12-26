@extends('layouts.home')
@section('title','Frequently Asked Question')

@section('content')


<div class="container pt-5 mb-5">
</div>
<div class="site-section">
     <div class="container">
         <div class="row">
             <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <th>Question</th>
                <th>Answer</th>
                </thead>
                 <tbody>
                 @foreach($datalist as $rs)
                     <tr>
                     <td>{{$rs->question}}</td>
                     <td>{!! $rs->answer !!}</td>
                     </tr>
                 @endforeach
                 </tbody>
             </table>
         </div>
     </div>
</div>
@endsection
