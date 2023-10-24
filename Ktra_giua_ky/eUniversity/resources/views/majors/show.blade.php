@extends('layout.app')
@section('title','Detail Major')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-8">
                <div class="card-header">
                    <h2>Major Information</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="major-id" class="col-2 col-form-label ">Id</label>
                        <div class="col-5"><input type="text" readonly class="form-control-plaintext" id="major-id" value="{{$major->id}}"></div>
                    </div>
                    <div class="mb-3 row">
                        <label for="major-name" class="col-2 col-form-label">name</label>
                        <div class="col-5"><input type="text" readonly class="form-control-plaintext" id="major-name" value="{{$major->name}}"></div>
                    </div>
                    <div class="mb-3 row">
                        <label for="major-description" class="col-2 col-form-label">Description</label>
                        <div class="col-5"><input type="text" readonly class="form-control-plaintext" id="major-description" value="{{$major->description}}"></div>
                    </div>
                    <div class="mb-3 row">
                        <label for="major-duration" class="col-2 col-form-label">Duration</label>
                        <div class="col-5"><input type="text" readonly class="form-control-plaintext" id="major-duration" value="{{$major->duration}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection