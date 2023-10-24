
@extends('layout.app')
@section('title','Home page')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h2 class="col">List majors</h2>
                        <a href="{{ route('majors.create') }}" class="btn btn-success col-2 ">Add</a>
                    </div>
                    <div class="row">
                        @if (Session::has('success'))
                            <div class="alert alert-success mt-3">
                                {{Session::get('success')}}
                            </div>
                            
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Action</th>
                        </thead>
                            @foreach ($majors as $major)
                                <tr>
                                    <td>{{$major->id}}</td>
                                    <td>{{$major->name}}</td>
                                    <td>{{$major->description}}</td>
                                    <td>{{$major->duration}}</td>
                                    <td>
                                        {{-- detail --}}
                                        <a href="{{ route('majors.show', $major->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                        {{-- edit --}}
                                        <a href="{{ route('majors.edit', $major->id) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                        {{-- delete --}}
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$major->id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        {{-- Modal delete --}}
                                        <div class="modal fade" id="deleteModal-{{$major->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  Do you want to delete {{$major->name}}?
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <form action="{{ route('majors.destroy', $major->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          
                                
                                    </td>   
                                </tr>
                            @endforeach
                    </table>
                    <nav aria-label="Page navigation example">
                        {{ $majors->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
    
