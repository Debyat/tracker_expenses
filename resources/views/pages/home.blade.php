@extends('layout.index')
@section('title', 'Home')
<style>
</style>
@section('content')
    <div class="body">
        {{-- Dashboard --}}
        <div class="row dashboard">
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col pc">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-title">
                        <h3>This is the title</h3>
                    </div>
                    <div class="card-body">
                        <p>This is the card body</p>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.parts.template_transactions')
    </div>
@endsection
