{{-- Sidebar on Mobile --}}
<div id="sidebar" class="hidden">
    <div class="close" onclick="close_sidebar()">
        X
    </div>
    <div class="logo">
        <div class="circle-logo">
        </div>
         <p>Tracking Expenses</p>
    </div>
    <div class="labels">
        <ul>
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="{{ request()->routeIs('expenses') ? 'active' : '' }}"><a href="{{ route('expenses') }}">Expenses</a></li>
            <li><a href="#">Tracking Expenses</a></li>
            <li><a href="#">Tracking Expenses</a></li>
            <li><a href="#">Tracking Expenses</a></li>
        </ul>
    </div>
</div>
