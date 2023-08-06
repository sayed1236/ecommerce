
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
            <form action="{{route('admin.update.product',$product->id)}}" method="post">
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
                               <img src="{{$product->photo}}">
                            </div>



                         <div class="form-group col-md-12">
                                <label>status</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="0">قسم رئيسي</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                </select>

                            </div>

                            
                            <div class="form-group col-md-12">
                                <label>name</label>
                                <input type="text" name="name" value="" class="form-control" placeholder="enter name"
                                value="{{$product->name}}"   >
                             </div>
                            <div class="form-group col-md-12">
                                <label>discount</label>
                                <input type="text" name="discount" value="" class="form-control" placeholder="enter discount"
                                value="{{$product->discount}}"   >
                             </div>
                             <div class="form-group col-md-12">
                                <label>price</label>
                                <input type="text" name="price" class="form-control" placeholder="enter price"
                                  value="{{$product->price}}" >
                             </div>
                              <div class="form-group col-md-12">
                            <span>offer </span>

                        <input
                            class=" mt-0"
                            type="checkbox"
                            name="offer"
                            value="offer"
                          />
                        </div>
                             {{--  <div class="form-group col-md-12">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" placeholder="enter product"
                                   >
                             </div>
                               --}}

                            {{--  </div> <div class="form-group col-md-12">
                                <label>describtion</label>
                                <input type="text" name="describtion" class="form-control" placeholder="describtion"
                                   >
                                   </div>  --}}





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
