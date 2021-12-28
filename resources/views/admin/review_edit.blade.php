<link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<!-- bootstrap-progressbar -->
<link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- JQVMap -->
<link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

                                <div class="x_content">
                                    <h3 class="card-title">Message Details</h3>
                                    @include('home.message')
                                    <br>
                                    <form class="form-horizontal" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>User Name</th><td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Content</th><td>{{$data->content->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Comment</th><td>{{$data->comment}}</td>
                                        </tr>
                                            <tr>
                                                <th>Rate</th><td>{{$data->rate}}</td>
                                            </tr>
                                            <tr>
                                                <th>Ip</th><td>{{$data->ip}}</td>
                                            </tr>
                                            <tr>
                                                <th>Created Time</th><td>{{$data->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Updated Time</th><td>{{$data->updated_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>New</option>
                                                        <option>Read</option>
                                                    </select>
                                                </td>
                                            </tr>


                                        <tr>
                                                <td></td><td>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Update Review</button>
                                                </div>
                                            </td>
                                        </tr>

                                        </table>
                                    </form>
                                </div>
