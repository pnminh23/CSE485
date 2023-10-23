@extends('layouts.app')
@section('title','Add artwork')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card" style="width: 90rem;">
                <div class="card-head">
                    <h2>Add artworks</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form action="{{ route('artworks.store') }}" class="row g-3 justify-content-evenly" method="POST">
                            @csrf
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="">Artist Name</label>
                                    <input type="text" value="" name="artist_name" class="form-control" placeholder="Artist name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <input type="text" value="" name="description" class="form-control" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Artist type</label>
                                    <select class="form-select" aria-label="Default select example" name="art_type" required>
                                        <option selected>Open this select menu</option>
                                        <option value="Hội hoạ">Hội hoạ</option>
                                        <option value="Văn học">Văn học</option>
                                        <option value="Âm nhạc">Âm nhạc</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="">Media link</label>
                                    <input type="text" value="" name="media_link" class="form-control" placeholder="url" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input type="text" value="" name="cover_image" class="form-control" placeholder="url" required>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection