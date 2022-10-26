@extends('layout.index')
@section('title', 'Home')
<style>
</style>
@section('content')
    <div class="body">
        @include('pages.parts.template_transactions',[
            'transactions' => '[]',
            'title' => 'Budget History'
        ])
    </div>
@endsection
