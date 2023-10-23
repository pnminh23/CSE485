@extends('layouts.app')
@section('title','artworks')
    
@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="card" style="width: 90rem;">
                <div class="card-header">
                    <div class="row mb-3">
                      <h2 class="text-primary col">Danh sách tất cả các tác phẩm nghệ thuật</h2>
                      <a href="{{ route('artworks.create') }}" class="btn btn-success btn-lg col-2">Thêm mới</a>
                    </div>
                    <div class="row">
                      @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                          
                      @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Media link</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($artworks as $artwork)
                              <tr>
                                <th scope="row">{{$artwork->id}}</th>
                                <td>{{ $artwork->artist_name }}</td>
                                <td>{{ $artwork->description }}</td>
                                <td>{{ $artwork->art_type }}</td>
                                <td><a href="{{$artwork->media_link}}">{{ $artwork->media_link }}</a></td>
                                <td><img class="rounded float-start" style="width: 80px;" src="{{asset($artwork->cover_image)}}" alt="Lỗi" ></td>
                                
                                {{-- edit --}}
                                <td><a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                {{-- end edit --}}

                                {{-- delete --}}
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$artwork->id}}"><i class="fa-solid fa-trash-can"></i></button></td>
                                {{-- end delete --}}
                                
                                {{-- Modal delete --}}
                                <div class="modal fade " id="deleteModal-{{$artwork->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xác nhận xoá</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        Bạn có chắc chắn muốn xoá lớp {{$artwork->artist_name}}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('artworks.destroy',$artwork->id)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Xoá</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                {{-- end Modal delete --}}

                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection