@extends('layout.app')
@section('title','Regions')
    
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-10">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h3 class="text-primary col-5">Danh sách Khu vực phân bổ</h3>
                        <a href="{{ route('regions.create') }}" class="btn btn-success col-1">Thêm mới</a>
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
                            <th scope="col">Tên loài hoa</th>
                            <th scope="col">Tên khu vực phân bổ </th>
                            <th scope="col">Thao tác</th>
                        </thead>
                        <tbody>
                            @foreach ($regions as $region)
                                <tr>
                                    <th scope="row">{{$region->id}}</th>
                                    <td class="col-5">{{$region->flowers->name}}</td>
                                    <td>{{$region->region_name}}</td>
                                    

                                    <td class="">
                                        <a href="{{ route('regions.show', $region->id) }}" class="btn btn-dark col-2 m-2"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-primary col-2 m-2"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <button type="button" class="btn btn-danger col-2 m-2" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$region->id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade" id="deleteModal-{{$region->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xoá</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 Bạn có chắc chắn muốn xoá {{$region->region_name}}?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                                  <form action="{{ route('regions.destroy', $region->id)}}" method="POST">
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
                        {{ $regions->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection