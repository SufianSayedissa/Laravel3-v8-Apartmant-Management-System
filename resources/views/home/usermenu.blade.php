@auth
<div >
    <h2 class="section-title-underline mb-5">
        <span>User panel</span>
    </h2>
    <ul>
        <li><a href="{{route('userprofile')}}">My Account</a></li>
        <li><a href="{{route('myreviews')}}">My Reviews</a></li>
        <li><a href="{{route('user_requests')}}">My Requests</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
        @php
         $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif

    </ul>
</div>
@endauth

