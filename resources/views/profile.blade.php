<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<h1>Profile page</h1>

@if(session('user'))
<h1>Welcome,{{session('user')}}</h1>
@else
<h1>No user found in session</h1>
@endif
<a href="logout">Logout</a>
<a href="login">Login</a>
</div>
