@extends('layout.app')
@section('title','Thêm mới')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Thêm mới loài hoa</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('flowers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên loài hoa:</label>
                            <input type="text" name="name" id="name" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả:</label>
                            <textarea name="description" id="description" rows="3" class="form-control" required ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh minh hoạ: </label>
                            <input type="file" name="image_url" id="image" class="form-control" required >
                        </div>
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection