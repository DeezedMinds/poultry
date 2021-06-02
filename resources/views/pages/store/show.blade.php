@extends('layouts.template')
@section('content')
<!--site-main start-->
<div class="site-main">
    <!-- sidebar -->
    <div class="sidebar ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 content-area">
                    <div class="ttm-single-product-details product">
                        <div class="ttm-single-product-info clearfix">
                            <div class="product-gallery images">
                                <figure class="ttm-product-gallery__wrapper">
                                    <div class="product-gallery__image">
                                        @if($product->image)
                                        <img class="img-fluid" src="{{ $product->image }}" alt="product-img">
                                        @else
                                        <img class="img-fluid" src="https://via.placeholder.com/470X520/444444.jpg" alt="product-img">
                                        @endif
                                    </div>
                                </figure>
                            </div>
                            <div class="summary entry-summary">
                                <h3 class="singel_product_title">{{ $product->name }}</h3>
                                <div class="product-details__short-description">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <h5 class="">Subcategorias</h5>
                                @foreach($product->subcategory as $sub)
                                    <div class="product-rating clearfix">
                                        <a class="review-link" rel="nofollow"> {{ $sub->category->name . ' - ' . $sub->name }}</a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                            <ul class="tabs clearfix">
                                <li class="tab active"><a href="#">Descripción</a></li>
                                <li class="tab"><a href="#">Información adicional</a></li>
                            </ul>
                            <div class="content-tab ttm-bgcolor-white">
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <h2>Descripción</h2>
                                    <p>{{ $product->description }}</p>
                                </div><!-- content-inner end-->
                                <!-- content-inner -->
                                <div class="content-inner">
                                    <h2>Información adicional</h2>
                                    <p>Sin información</p>
                                </div><!-- content-inner end-->
                            </div>
                        </div>
                    </div>
                    <div class="related products">
                        <h3>Productos Relacionados</h3>
                        <div class="row">
                            @foreach($relatedProducts as $relatedProduct)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product" onclick="window.location.href='{{route('web.products.show', $relatedProduct->id)}}'">
                                    <!-- product -->
                                    <div class="product-thumbnail">
                                        <!-- product-thumbnail -->
                                        @if($relatedProduct->image)
                                        <img class="img-fluid w-100" src="{{ $relatedProduct->image }}" alt="product-img">
                                        @else
                                        <img class="img-fluid w-100" src="https://via.placeholder.com/470X520/444444.jpg" alt="product-img">
                                        @endif <div class="ttm-shop-icon">
                                            <!-- ttm-shop-icon -->
                                        </div>
                                    </div><!-- product-thumbnail end -->
                                    <div class="product-content text-left">
                                        <!-- product-content -->
                                        <div class="product-title">
                                            <!-- product-title -->
                                            <h2><a href="product-details.html">{{ $relatedProduct->name }}</a></h2>
                                        </div>
                                        <span class="product-price">
                                            <!-- product-Price -->
                                            
                                            </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
</div>
<!--site-main end-->
@endsection