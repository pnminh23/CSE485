
@extends('layout.app')
@section('content')
    <thead>
      <tr>
        <th scope="col">Mã sinh viên</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Lớp</th>
        <th scope="col">Chỉnh sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone_number}}</td>
                <td>{{$student->myClass->name_class}}</td>
                <td ><a href="{{route('students.edit',$student->id)}}"><i class="fa-solid fa-user-pen"></i></a></td>
                <td ><button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#deleteModal-{{$student->id}}">
                  <i class=" delete fa-solid fa-trash"></i>
                </button></td>
                {{-- Modal --}}
                <div class="modal fade " id="deleteModal-{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Bạn có chắc chắn muốn xoá sinh vien {{$student->name}}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('students.destroy',$student->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Xoá</button>
                       </form>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- end Modal --}}
            </tr>
        @endforeach
      
      
    </tbody>
@endsection