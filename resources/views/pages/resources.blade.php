@extends('layouts.template')
@section('content')


<!-- portfolio-text-section -->
<section class="ttm-row portfolio-text-section ttm-bgcolor-grey clearfix" style="padding-top: 50px !important">
    <div class="container">
        <div class="row">
            <!-- row -->
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title text-center clearfix">
                    <div class="title-header">
                        <h5>Descargar PDFs</h5>
                        <h2 class="title">Todos los Recursos</h2>
                    </div>
                    <div class="heading-seperator">
                        <span></span>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row -->
    </div>
</section>
<!-- portfolio-section -->
<section class="ttm-row topzero-padding-section clearfix">
    <div class="container">
        <div class="row multi-columns-row ttm-boxes-spacing-10px ttm-bgcolor-white mt_140">
            <!-- row -->

            @foreach(App\Models\Resource::all() as $resource)
            <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                <!-- featured-imagebox -->
                <div class="featured-imagebox featured-imagebox-portfolio style1">
                    <div class="featured-thumbnail">
                        <!-- featured-thumbnail-->
                        <img class="img-fluid" src="images/downloadpdf.png" alt="image">
                    </div><!-- featured-thumbnail END-->
                    <div class="ttm-box-view-overlay">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-media-link">
                            <!-- ttm-media-link-->
                            <a href="{{$resource->pdf}}" download="{{$resource->name}}.pdf" class="">
                                <i class="ti ti-download"></i>
                            </a>
                        </div>
                        <div class="featured-content">
                            <!-- featured-content-->
                            <div class="featured-title">
                                <!-- featured-title-->
                                <h5>
                                    <a href="{{$resource->pdf}}" download="{{$resource->name}}.pdf">
                                        {{ $resource->name }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div><!-- ttm-box-view-overlay end-->
                </div>
                <!-- featured-imagebox -->
            </div>
            @endforeach

            
        </div><!-- row -->
    </div>
</section>
@endsection