@extends('layouts.app')
@section('title','Trang chủ')

@section('content')
<div class="container-fluid">
    <h1>Hello</h1>
    <a href="{{ route('artworks.index') }}">Nhấn vào đây để xem artworks</a>
</div>
@endsection
    
