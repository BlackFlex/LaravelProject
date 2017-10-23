<ul class="main-menu">
    <li><a href="/dashboard">home</a></li>
    <li><a href="/services">services</a></li>
    <li><a href="/about">about</a></li>
    <li><a href="/posts">Posts</a></li>
    @if( Auth::guest())
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    @else
     <li> {{Auth::user()->name}}</li>
     <li><a href="{{ route('logout') }}">Sign Out</a></li>
    @endif
</ul>

