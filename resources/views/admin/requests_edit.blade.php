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
    <form class="form-horizontal" action="{{route('admin_requests_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered table-striped">
            <tr>
                <th>Id</th><td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Type</th><td>{{$data->type}}</td>
            </tr>
            <tr>
                <th>Subject</th><td>{{$data->subject}}</td>
            </tr>
            <tr>
                <th>Message</th><td>{!!$data->message!!}</td>
            </tr>
            <tr>
                <th>User Name</th><td>{{$data->user->name}}</td>
            </tr>
            <tr>
                <th>Admin Note</th><td>
                    <textarea name="adminnote" id="adminnote" >{{$data->adminnote}}</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>

                        <button type="submit" class="btn btn-success">Update Request</button>

                </td>
            </tr>

        </table>
    </form>
</div>
