@extends('layout.index')
@section('title', 'Home')
<style>
    body{
        margin: 0;
        font-family: system-ui;
    }
    .wrapper .header{
        box-shadow: 1px 2px 6px dimgrey;
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }
    .wrapper .header .nav{
        background: black;
        padding: 4px;
        width: 35px;
        margin: 5px;
    }
    .wrapper .header .right{
        position: relative;
        display: inline-block;
    }
    .wrapper .header .right p{
        font-weight: bold;
    }
    .wrapper .header .right .dropdown{
        position: absolute;
        box-shadow: 1px 1px 1px dimgrey;
        padding: 12px 16px;
        z-index: 1;
    }
</style>
@section('content')
    <div class="wrapper">
        <div class="header">
            <div class="left">
                <div class="nav"></div>
                <div class="nav"></div>
                <div class="nav"></div>
            </div>
            <div class="right">
                <p>Welcome, John Doe</p>
                <div class="dropdown">
                    <a href="#">Settings</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-title">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-title">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-title">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
