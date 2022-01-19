@extends('layouts.admin')
@section('title','Payments')
@section('description','Payments List')
@section('keywords','')


@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Payments</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        @include('home.message')
                        <br>
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="table-responsive">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>Year</th>
                                        <th>Month</th>
                                        <th>Payment</th>
                                        <th>Payment Date</th>
                                        <th>Admin Note</th>
                                        <th>Status</th>
                                        <th style="..."colspan="2">Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=650 height=700')">
                                                {{$rs->user->name}}</a>
                                        </td>
                                        <td>{{$rs->year}}</td>
                                        <td>{{$rs->month}}</td>
                                        <td>{{$rs->payment}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            <a href="{{route('admin_payment_edit',['id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=650 height=700')">
                                                <center><img src="{{asset('assets')}}/admin/images/edit.png"height="25" width="25"></center></a>
                                        </td>
                                        <td><a href="{{route('admin_payment_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')"><center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
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
    </div>
@endsection

@section('footer')
    <script src="{{asset('assets')}}/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
@endsection
