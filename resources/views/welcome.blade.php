@extends('layout.app')

@section('content')
    <div class="contaienr-fluid">
        <h1 class="text-center text-success " style="margin-top:20%;font-size:60px;">Simple Crud with Pagination & Search</div>
        <a href="{{ route('users.index')}}" class="btn btn-info " >User's Table</a>
    </div>

@endsection