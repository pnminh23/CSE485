<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="/fontawesome/css/all.css">

</head>
<body>
    <div class="container-fluid">
        <h1>Chỉnh sửa sinh viên</h1>
        <form class="row d-felx justify-content-center" action="{{route('students.update',$student->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-auto">
                <div class="mb-3">
                    <label for="">Mã sinh viên: </label>
                    <input type="text" class="form-control" placeholder="{{$student->id}}" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên sinh viên: </label>
                    <input type="text" class="form-control" name="name" id="" value="{{$student->name}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email: </label>
                    <input type="email" class="form-control" name="email" value="{{$student->email}}" required>
                </div>
            </div>
            <div class="col-auto">
                <div class="mb-3">
                    <label for="" class="form-label">Số điện thoại: </label>
                    <input type="number" class="form-control" name="phone_number" value="{{$student->phone_number}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Lớp</label>
                    <select class="form-select" aria-label="Default select example" name="myclass_id" required>
                        <option selected>{{$student->myClass->name_class}}</option>
                        @foreach ($myClasses as $myClass)
                        <option value="{{$myClass->id}}">{{$myClass->name_class}}</option>
                        @endforeach
                    </select>

                </div>
                
            </div>
            <button  type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
</body>
</html>

