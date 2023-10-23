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
    <div class="container-fluid  d-flex flex-column align-items-center">
        <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        <h1>Thêm sinh viên</h1>
        <form class="row d-felx justify-content-center" action="{{route('students.store')}}" method="POST">
            @csrf
            <div class="col-auto">
                <div class="mb-3">
                    <label for="" class="form-label">Tên sinh viên: </label>
                    <input type="text" class="form-control" name="name" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email: </label>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>
            <div class="col-auto">
                <div class="mb-3">
                    <label for="" class="form-label">Số điện thoại: </label>
                    <input type="number" class="form-control" name="phone_number" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Lớp</label>
                    <select class="form-select" aria-label="Default select example" name="myclass_id" required>
                        <option selected>---Chọn lớp---</option>
                        @foreach ($myClasses as $myClass)
                        <option value="{{$myClass->id}}">{{$myClass->name_class}}</option>
                        @endforeach
                    </select>

                </div>
                
            </div>
            <button type="submit" class=" col-3 btn btn-success">Thêm sinh viên</button>
        </form>
    </div>
</body>
</html>

