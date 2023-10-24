@extends('layout.app')
@section('title','Update Major')
    
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card col-8">
                <div class="card-header">
                    <h1>Edit major</h1>
                </div>
                <div class="card-body">
                    <form action="">
                        <form action="{{ route('majors.update',$major->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="">Id:</label>
                                <input type="text" class="form-control" name="name" id="" value="{{$major->id}}" disabled readonly required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Name:</label>
                                <input type="text" class="form-control" name="name" id="" value="{{$major->name}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{{$major->description}}</textarea>
                              </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Duration:</label>
                                <select name="duration" id="" class="form-select"  required>
                                    <option selected>{{$major->duration}} năm</option>
                                    <option value="2">2 năm</option>
                                    <option value="3">3 năm</option>
                                    <option value="4">4 năm</option>
                                    <option value="5">5 năm</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection