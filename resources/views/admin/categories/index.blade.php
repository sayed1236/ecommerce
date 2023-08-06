
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
                        <th>mail-categories</th>
                        <th>sub-categories</th>

                        <th>photo</th>

                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if(isset($categories))
                        @foreach ($categories as $category )
                        <tr>
                            <td><span class="badge bg-label-primary me-1">{{ $category->id }}</span></td>
                            <td><span class="badge bg-label-primary me-1">{{ $category->category }}</span></td>

                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>@if (count($category->children)>0)
                                @foreach ($category->children as $children )
                                          {{ $children->category }}
                                @endforeach
@else
<span class="badge bg-label-primary me-1">No children</span>

                            @endif</strong></td>
                            <td><img src="{{  $category->photo }}"></td>

                           <td> <form action="{{route('admin.delete.category',$category->id)}}" method="Post">
                            <a class="btn btn-outline-primary" href="{{route('admin.edit.category', $category->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                          </tr>

                        @endforeach
                       @endif


                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>




@endsection
