@extends('layout.app')
@section('title','Add Major')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8">
                <div class="card-header">
                    <h2>Major Information</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('majors.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="">Name:</label>
                            <input type="text" class="form-control" name="name" id="" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Duration:</label>
                            <select name="duration" id="" class="form-select" required>
                                <option selected>--Choose--</option>
                                <option value="2">2 năm</option>
                                <option value="3">3 năm</option>
                                <option value="4">4 năm</option>
                                <option value="5">5 năm</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    
