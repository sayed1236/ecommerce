
@extends('admin.layouts.layout')

@section('body')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">{{__('words.dashboard')}}</li>
        <li class="breadcrumb-item"><a href="#">{{__('words.dashboard')}}</a>
        </li>
        <li class="breadcrumb-item active">{{__('words.dashboard')}}</li>


    </ol>


    {{-- {{dd($setting)}} --}}

    <div class="container-fluid">

        <div class="animated fadeIn">
            <form action="{{ route('admin.collection.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                            <strong>settings</strong>
                        </div>
                        <div class="card-block">

                            <div class="form-group col-md-6">
                                <label>photo1</label>
                                <img src="{{ asset($collection->photo1) }}" alt="" style="height: 50px">
                            </div>
                            <div class="form-group col-md-6">
                                <label>photo2</label>
                                <img src="{{ asset($collection->photo2) }}" alt="" style="height: 50px">
                            </div>
                            <div class="form-group col-md-6">
                                <label>photo1</label>
                                <input type="file" name="photo1" class="form-control" placeholder="Enter Email..">
                            </div>
                            <div class="form-group col-md-6">
                                <label>photo2</label>
                                <input type="file" name="photo2" class="form-control"
                                    placeholder="" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>text1</label>
                                <input  type="text" name="text1" class="form-control"
                                    placeholder="" value="{{$collection->text1}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>text2</label>
                                <input  type="text" name="text2" class="form-control"
                                    placeholder="" value="{{$collection->text2}}">
                            </div>
                            

                        </div>




                     
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    Submit</button>
                                
                            </div>

                        </div>

                    </div>
            </form>
        </div>
    </div>
    @endsection
