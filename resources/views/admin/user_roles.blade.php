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
    <h3 class="card-title">User Details</h3>
    @include('home.message')
    <br>
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
                <th>Role</th>
                <td>
                  <table>
                      @foreach($data->roles as $row)
                          <tr>
                              <td>{{$row->name}}</td>
                              <td><a href="{{route('admin_user_role_delete', ['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Are You Sure You Want To Delete?!')">
                                      <center><img src="{{asset('assets')}}/admin/images/trash.png" height="25"width="25"></center></a></td>
                          </tr>
                      @endforeach
                  </table>
                </td>
            </tr>

            <tr>
                <th>Add Role</th>
                <td>
                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="roleid">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Add Role</button>
                    </form>
                </td>
            </tr>
        </table>
</div>
