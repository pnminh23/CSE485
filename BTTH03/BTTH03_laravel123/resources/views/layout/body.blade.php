@php
    use Illuminate\Support\Facades\Route;
@endphp
    <div class="title-content row d-flex justify-content-between my-2">
        @if(Request::route()->getName() === 'students.index')
            <h1 class="col">Danh sách học sinh</h1>
        @else
            <h1 class="col">Danh sách lớp</h1>
        @endif
        @if(Request::route()->getName() === 'students.index')
            <a href="{{route('students.create')}}" class="col-2 btn btn-dark">Thêm mới</a>
        @else
            <a href="{{route('myClasses.create')}}" class="col-2 btn btn-dark">Thêm mới</a>
        @endif
        
<div class="content d-flex justify-content-center my-2">
    
    <table class="table table-dark table-striped ">
        @yield('content')
    </table>
</div>