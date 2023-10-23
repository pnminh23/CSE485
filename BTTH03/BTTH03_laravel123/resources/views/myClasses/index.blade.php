@extends('layout.app')
@section('content')
    <div class="content">
        <thead>
            <tr>
              <th scope="col">Mã Lớp</th>
              <th scope="col">Tên lớp</th>
              <th scope="col">Chỉnh sửa</th>
              <th scope="col">Xoá</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($myClasses as $myClass)
                  <tr>
                      <th scope="row">{{$myClass->id}}</th>
                      <td>{{$myClass->name_class}}</td>
                      <td ><a href="{{route('myClasses.edit',$myClass->id)}}"><i class="fa-solid fa-user-pen"></i></a></td>
                      <td ><button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal-{{$myClass->id}}">
                        <i class=" delete fa-solid fa-trash"></i>
                      </button></td>
                      {{-- Modal --}}
                      <div class="modal fade " id="deleteModal-{{$myClass->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Bạn có chắc chắn muốn xoá lớp {{$myClass->name_class}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <form action="{{route('myClasses.destroy',$myClass->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xoá</button>
                             </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- end Modal --}}
              @endforeach
            
            
          </tbody>
          
    </div>
@endsection

