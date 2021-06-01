@extends('layouts.template')
@section('content')
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-sidebar ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- sidebar -->
            <div class="sidebar ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 content-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="products-result-count">Viendo {{ $products->count() }} de {{ $products->total() }} resultados</p>
                                    <form class="products-ordering float-sm-right" method="get">
                                        <div class="form-group mb-30">
                                            <select name="orderby" class="form-control border">
                                                <option value="menu_order" selected="selected">Todos los productos</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="product">
                                        <!-- product -->
                                        <div class="product-thumbnail">
                                            @if($product->featured)
                                            <span class="onsale">Destacado</span>
                                            @endif
                                            <!-- product-thumbnail -->
                                            @if($product->image)
                                            <img class="img-fluid w-100" src="{{ $product->image }}" alt="{{ $product->name }}">
                                            @else
                                            <img class="img-fluid w-100" src="https://via.placeholder.com/470X520/444444.jpg" alt="">
                                            @endif
                                            <div class="ttm-shop-icon">
                                                <!-- ttm-shop-icon -->
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ver Más</a></div>
                                            </div>
                                        </div><!-- product-thumbnail end -->
                                        <div class="product-content text-left">
                                            <!-- product-content -->
                                            <div class="product-title">
                                                <!-- product-title -->
                                                <h2><a href="product-details.html">{{ $product->name }}</a></h2>
                                            </div>
                                            <div class="ttm-ratting-star">
                                                <!-- ratting-star -->
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="product-price">
                                                <!-- product-Price -->
                                                <span class="product-Price-currencySymbol">$</span>{{ $product->price }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->
</div>
<!--site-main end-->
@endsection