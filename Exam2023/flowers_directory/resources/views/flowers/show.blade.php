@extends('layout.app')
@section('title','Detail flower')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8">
                <div class="card-header">
                    <h2>Chi tiết loài hoa</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-3">
                            <p><span class="fw-bold">Mã loài hoa: </span>{{$flower->id}}</p>
                            <p><span class="fw-bold">Tên loài hoa: </span>{{$flower->name}}</p>
                            <p><span class="fw-bold">Mô tả: </span>{{$flower->description}}</p>
                        </div>
                        <div class="col-5">
                            <img style="width: 400px;" src="{{ asset($flower->image_url) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection