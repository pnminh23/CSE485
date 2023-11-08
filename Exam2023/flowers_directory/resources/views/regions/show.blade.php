@extends('layout.app')
@section('title','Detail flower')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8">
                <div class="card-header">
                    <h2>Chi tiết khu vực</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <p><span class="fw-bold">Mã khu vực: </span>{{$region->id}}</p>
                            <p><span class="fw-bold">Hoa thuộc khu vực: </span>{{$region->flower_id}}</p>
                            <p><span class="fw-bold">Tên khu vực: </span>{{$region->region_name}}</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection