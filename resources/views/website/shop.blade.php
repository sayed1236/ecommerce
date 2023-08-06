@extends('website.layouts.layout')
@section('content')
<div class="product_panel panel active" style="padding:100px">
            <div class="featured_slider slider">
             @foreach ($products as $product)


                <!-- Slider Item -->
                <div class="featured_slider_item">
                    <div class="border_active">
                    </div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ 'images/' . $product->photo }}" alt=""></div>
                        <div class="product_content">
                            <div class="product_price ">$225<span>${{$product->price}}</span></div>
                            <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                            <div class="product_extras">
                                {{--  <div class="product_color">
                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                    <input type="radio" name="product_color" style="background:#000000">
                                    <input type="radio" name="product_color" style="background:#999999">
                                </div>  --}}
                            <a href="{{ route('website.show',$product->id) }}"><button class="product_cart_button" href="#">Add to Cart</button></a>

                            <a href="{{ route('website.favourite',$product->id) }}">Add to favourite</a>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                        <ul class="product_marks">
                            <li class="product_mark product_discount">-25%</li>
                            <li class="product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="featured_slider_dots_cover"></div>
        </div>

@endsection
