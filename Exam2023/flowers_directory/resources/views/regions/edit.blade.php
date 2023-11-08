@extends('layout.app')
@section('title','Cập nhật khu vực')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Chỉnh sửa khu vực</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('regions.update',$region->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Mã khu vực:</label>
                            <input type="text" name="id" id="id" class="form-control" disabled readonly required value="{{$region->id}}" >
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Loài hoa trong khu vực:</label>
                            <select class="form-select" aria-label="Default select example" name="flower_id" required>
                                <option selected>{{$region->flowers->name}}</option>
                                @foreach ($flowers as $flower)
                                <option value="{{$flower->id}}">{{$flower->name}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên khu vực:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$region->region_name}}" required >
                        </div>
                        
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection