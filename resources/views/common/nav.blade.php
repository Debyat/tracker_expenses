{{-- Sidebar on PC --}}
@php
    $user = \Auth::user();
@endphp
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
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="{{ request()->routeIs('expenses') ? 'active' : '' }}"><a href="{{ route('expenses') }}">Expenses</a></li>
            <li class="{{ request()->routeIs('budget') ? 'active' : '' }}"><a href="{{ route('budget') }}">Budget</a></li>
            <li><a href="#">History</a></li>
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
        <p>Welcome, {{ $user->first_name }}! <i class="arrow down"></i></p>
        <div class="dropdown">
            <a href="#">Account</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <div class="last">
        <a class="top" href="">Account</a>
        <a class="top" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
