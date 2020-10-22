@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">DANH SÁCH SẢN PHẨM</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>$ {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh sản phẩm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection