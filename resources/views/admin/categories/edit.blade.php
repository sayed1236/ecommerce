
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
            <form action="{{route('admin.update.category',$value->id)}}" method="post">
                @csrf
                @method('POST')
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong>add-categories</strong>
                        </div>
                        <div class="card-block">




                            <div class="form-group col-md-12">
                                <label>image</label>
                                <input type="text" name="category" class="form-control" placeholder="enter  category"
                                  value="{{$value->category}}" >
                            </div>



                            <div class="form-group col-md-12">
                                <label>status</label>
                                <select name="parent" id="" class="form-control">
                                    <option value="0">قسم رئيسي</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>









                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                update</button>

                        </div>



                    </div>
            </form>
        </div>
    </div>
@endsection
