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
        <h1>Chỉnh sửa lớp</h1>
        <form class="row d-felx justify-content-center" action="{{route('myClasses.update',$myClass->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-auto">
                <div class="mb-3">
                    <label for="">Mã lớp: </label>
                    <input type="text" class="form-control" placeholder="{{$myClass->id}}" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên lớp: </label>
                    <input type="text" class="form-control" name="name_class" id="" value="{{$myClass->name_class}}" required>
                </div>
                
            </div>
            
            <button  type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
</body>
</html>

