
@extends('layout.app')
@section('content')
    <thead>
      <tr>
        <th scope="col">Mã sinh viên</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Mã lớp</th>
        <th scope="col">Chỉnh sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->myclass_id}}</td>
                <td ><a href="#"><i class="fa-solid fa-user-pen"></i></a></td>
                <td ><a href=""><i class=" delete fa-solid fa-trash"></i></a></td>
            </tr>
        @endforeach
      
      
    </tbody>
@endsection