@extends('layouts.admin')
@section('title','News')
@section('description','News List')
@section('keywords','')


@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>News </h3>
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
                        <div class="x_title">
                            <a href="{{route('admin_news_add')}}"><button type="button" class="btn btn-success btn-lg">Add News</button></a>
                        </div>
                        <br>
                        <div class="x_panel">
                            <div class="x_content">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Menu</th>
                                        <th>Image</th>
                                        <th>Keywords</th>
                                        <th>Image Gallery</th>
                                        <th>Type</th>
                                        <th style="..."colspan="2">Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu,$rs->menu?->title)}}
                                        </td>
                                        <td>
                                            @if($rs->image)
                                                <center><img src="{{Storage::url($rs->image)}}" height="50" width="50" alt=""></center>
                                            @endif
                                        </td>
                                        <td>{{$rs->keywords}}</td>

                                        <td>
                                            <a href="{{route('admin_image_add',['news_id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=650 height=700')"><center><img src="{{asset('assets')}}/admin/images/gallery.png"height="40" width="40"></center></a>
                                        </td>

                                        <td>{{$rs->type}}</td>
                                        <td><a href="{{route('admin_news_edit', ['id'=>$rs->id])}}">
                                                <center><img src="{{asset('assets')}}/admin/images/edit.png" height="25"width="25"></center></a></td>
                                        <td><a href="{{route('admin_news_delete', ['id'=>$rs->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')"><center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
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
