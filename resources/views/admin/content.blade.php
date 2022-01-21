@extends('layouts.admin')
@section('title','Content')
@section('description','Content List')
@section('keywords','')


@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Contents </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="{{route('admin_content_add')}}"><button type="button" class="btn btn-success btn-lg">Add Content</button></a>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                            <div class="x_content">

                                <h2 class="section-title-underline mb-5">
                                </h2>
                                <div class="table-responsive">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Menu</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Image Gallery</th>
                                        <th style="..."colspan="2">Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->type}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu,$rs->menu?->title)}}
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            @if($rs->image)
                                                <center><img src="{{Storage::url($rs->image)}}" height="50" width="50" alt=""></center>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin_image_add',['content_id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=650 height=700')"><center><img src="{{asset('assets')}}/admin/images/gallery.png"height="40" width="40"></center></a>
                                        </td>


                                        <td><a href="{{route('admin_content_edit', ['id'=>$rs->id])}}">
                                                <center><img src="{{asset('assets')}}/admin/images/edit.png" height="25"width="25"></center></a></td>
                                        <td><a href="{{route('admin_content_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')"><center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
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
