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
                                    <form class="form-horizontal" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th><td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th><td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th><td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Subject</th><td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th>Message</th><td>{{$data->message}}</td>
                                        </tr>
                                        <tr>
                                            <th>Admin Note</th><td>{{$data->note}}
                                                <textarea name="note" id="note" >{{$data->details}}</textarea></td>
                                        </tr>
                                        <tr>
                                                <td></td><td>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Update Message</button>
                                                </div>
                                            </td>
                                        </tr>

                                        </table>
                                    </form>
                                </div>
