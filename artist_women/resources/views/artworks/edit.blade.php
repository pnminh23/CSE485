@extends('layouts.app')
@section('title','Edit artist')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card" style="width: 90rem;">
            <div class="card-head">
                <h2>Edit artworks</h2>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <form action="{{ route('artworks.update',$artwork->id) }}" class="row g-3 justify-content-evenly" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="">Artist id</label>
                                <input type="text" value="{{$artwork->id}}" name="id" class="form-control" disabled readonly required>
                            </div>
                            <div class="mb-3">
                                <label for="">Artist Name</label>
                                <input type="text" value="{{$artwork->artist_name}}" name="artist_name" class="form-control"  required>
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" value="{{$artwork->description}}" name="description" class="form-control"  required>
                            </div>
                            
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="">Artist type</label>
                                <select class="form-select" aria-label="Default select example"  name="art_type" required>
                                    <option selected>{{$artwork->art_type}}</option>
                                    <option value="Hội hoạ">Hội hoạ</option>
                                    <option value="Văn học">Văn học</option>
                                    <option value="Âm nhạc">Âm nhạc</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Media link</label>
                                <input type="text" value="{{$artwork->media_link}}" name="media_link" class="form-control" placeholder="url" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="text" value="{{$artwork->cover_image}}" name="cover_image" class="form-control" placeholder="url" required>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
