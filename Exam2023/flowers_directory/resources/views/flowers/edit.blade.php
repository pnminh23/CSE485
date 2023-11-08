@extends('layout.app')
@section('title','Cập nhật loài hoa')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Chỉnh sửa loài hoa</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('flowers.update',$flower->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id" class="form-label">Mã loài hoa:</label>
                            <input type="text" name="id" id="id" class="form-control" disabled readonly required value="{{$flower->id}}" >
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên loài hoa:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$flower->name}}" required  >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả:</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required >{{$flower->description}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh minh hoạ: </label>
                            <input type="file" name="image_url" id="image" class="form-control" accept="image/*" value="{{$flower->image_url}}" required >
                            @if ($flower->image_url)
                                <img src="{{asset($flower->image_url)}}" alt="img flower" style="max-width: 200px; margin-top: 10px;">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection