
@extends('admin.layouts.layout')

@section('body')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">admin</li>
        <li class="breadcrumb-item"><a href="#">categories</a>
        </li>
        <li class="breadcrumb-item active">add category</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp; categories</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp; add category</a>
            </div>
        </li>
    </ol>

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <h5 class="card-header">categories</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-dark">
                        <thead>
                      <tr>
                        <th>id</th>
                        <th>email</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($admins as $admin )
                        <tr>
                            <td><span class="badge bg-label-primary me-1">{{ $admin->id }}</span></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $admin->email }}</strong></td>

                           <td> <form action="{{route('admin.delete.user',$admin->id)}}" method="Post">
                           <a class="btn btn-outline-primary" href="{{route('admin.edit.category', $admin->id)}}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                          </tr>

                        @endforeach




                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>




@endsection
