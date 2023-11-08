@extends('layout.app')
@section('title','Thêm mới Khu vực')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8 mt-3">
                <div class="card-header">
                    <h2>Thêm mới Khu vực phân bố</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('regions.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="region_name" class="form-label">Tên khu vực:</label>
                            <input type="text" name="region_name" id="region_name" class="form-control" required >
                        </div>
                        <div class="mb-3">
                            <label for="flower_id" class="form-label">Hoa:</label>
                            <select class="form-select" aria-label="Default select example" name="flower_id" required>
                                <option selected>---Chọn loài hoa---</option>
                                @foreach ($flowers as $flower)
                                <option value="{{$flower->id}}">{{$flower->name}}</option>
                                @endforeach
                              </select>
                              
                        </div>
                        
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection