@extends('layout.app')
@section('content')

    <thead>
      <tr>
        <th scope="col">Mã Lớp</th>
        <th scope="col">Tên lớp</th>
        <th scope="col">Chỉnh sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($myClasses as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name_class}}</td>
                <td ><a href="#"><i class="fa-solid fa-user-pen"></i></a></td>
                <td ><a href=""><i class=" delete fa-solid fa-trash"></i></a></td>

        @endforeach
      
      
    </tbody>
@endsection

