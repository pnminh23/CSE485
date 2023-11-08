@extends('layout.app')
@section('title','Trang chủ')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-10">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h3 class="text-primary col-5">Danh sách loài hoa</h3>
                        <a href="{{ route('flowers.create') }}" class="btn btn-success col-1">Thêm mới</a>
                    </div>
                    <div class="row">
                        @if (Session::has('success'))
                            <div class="alert alert-success mt-3">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger mt-3">
                                {{Session::get('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th scope="col">Mã </th>
                            <th scope="col">Tên </th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Ảnh minh hoạ</th>
                            <th scope="col">Thao tác</th>
                        </thead>
                        <tbody>
                            @foreach ($flowers as $flower)
                                <tr>
                                    <th scope="row">{{$flower->id}}</th>
                                    <td>{{$flower->name}}</td>
                                    <td class="col-5">{{$flower->description}}</td>
                                    <td><img style="width: 150px;" src="{{ asset($flower->image_url) }}" alt="Lỗi"></td>
                                    <td class="">
                                        <a href="{{ route('flowers.show', $flower->id) }}" class="btn btn-dark col-2 m-2"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-primary col-2 m-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-danger col-2 m-2" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$flower->id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade" id="deleteModal-{{$flower->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xoá</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 Bạn có chắc chắn muốn xoá {{$flower->name}}?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                                  <form action="{{ route('flowers.destroy', $flower->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xoá</button>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        {{ $flowers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection