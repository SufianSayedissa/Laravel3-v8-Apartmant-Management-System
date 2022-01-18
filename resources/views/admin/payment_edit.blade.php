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
    <h3 class="card-title">Payment Details</h3>
    @include('home.message')
    <br>
    <form class="form-horizontal" action="{{route('admin_payment_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered table-striped">
            <tr>
                <th>Id</th><td>{{$data->id}}</td>
            </tr>
            <tr>
                <th>Year</th><td>{{$data->year}}</td>
            </tr>
            <tr>
                <th>Month</th><td>{{$data->month}}</td>
            </tr>
            <tr>
                <th>Payment</th><td>{{$data->payment}}</td>
            </tr>
            <tr>
                <th>User Name</th><td>{{$data->user->name}}</td>
            </tr>
            <tr>
                <th>Admin Note</th><td>
                    <textarea name="note" id="note" >{{$data->note}}</textarea></td>
            </tr>
            <tr>
                <td></td>

            <tr>
                <th>Status</th><td>
                    <select id="status" name="status">
                        <option selected="selected">{{$data->status}}</option>
                        <option>Accepted</option>
                        <option>Rejected</option>
                    </select>
            </tr>
            <tr>
                <td></td>

                <td>

                        <button type="submit" class="btn btn-success">Update Payment</button>

                </td>
            </tr>

        </table>
    </form>
</div>
