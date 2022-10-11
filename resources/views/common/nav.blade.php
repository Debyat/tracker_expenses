{{-- Sidebar on PC --}}
<div class="sidebar_header">
    <div class="row">
        <div class="col">
            <div class="circle"></div>
        </div>
        <div class="col">
            Tracking Expenses
        </div>
    </div>
    <div class="lists">
        <ul>
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Dashboard</a></li>
        </ul>
    </div>
</div>
{{-- Header --}}
<div class="header">
    <div class="left" onclick="sidebar()">
        <div class="nav"></div>
        <div class="nav"></div>
        <div class="nav"></div>
    </div>
    <div class="right">
        <p>Welcome, John Doe <i class="arrow down"></i></p>
        <div class="dropdown">
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="last">
        <a class="top" href="">Settings</a>
        <a class="top" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
