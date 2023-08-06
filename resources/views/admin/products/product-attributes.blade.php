
@extends('admin.layouts.layout')

@section('body')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">admin</li>
        <li class="breadcrumb-item"><a href="#">products</a>
        </li>
        <li class="breadcrumb-item active">add product</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp; products</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp; add product</a>
            </div>
        </li>
    </ol>


    <div class="container-fluid">

        <div class="animated fadeIn">
            <form action="{{route('admin.productattributes.store')}}" method="post">
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
                            <strong>add-products</strong>
                        </div>
                        <div class="card-block">
                         <div class="form-group col-md-12">
                                <label>products</label>
                                <select name="product_id" id="" class="form-control">
                                    <option value="0"> المنتجات </option>
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>

                            </div>


                             <div class="form-group col-md-12">
                                <label>describtion</label>
                                <input type="text" name="describtion" class="form-control"  placeholder="enter describtion"
                                   >
                             </div>







                        </div>









                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                Submit</button>

                        </div>



                    </div>
            </form>
        </div>
    </div>
@endsection
