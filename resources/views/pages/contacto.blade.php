@extends('layouts.template')
@section('content')

<div class="site-main">

    <!-- processbar-section -->
    <section class="ttm-row zero-padding-section position-relative z-1 clearfix">
        <div class="container">
            <div class="row no-gutters">
                <!-- row -->
                <div class="col-lg-12">
                    <div class="spacing-6 ttm-bgcolor-grey">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>Enviar mensaje</h5>
                                <h2 class="title">Pedir una cotización</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                        </div><!-- section title end -->
                        {{ Form::open(['route' => 'contact', 'method' => 'post', 'class' => 'row ttm-quote-form clearfix']) }}
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control with-border bg-white" placeholder="Nombre completo:" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Telefono:" required="required" class="form-control with-border bg-white">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="email" type="text" placeholder="Email: " required="required" class="form-control with-border bg-white">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <input name="subject" type="text" placeholder="Asunto:" required="required" class="form-control with-border bg-white">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="type" class="form-control with-border bg-white">
                                    <option value="Aves">Aves</option>
                                    <option value="Cerdos">Cerdos</option>
                                    <option value="Servicios">Servicios</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" rows="4" placeholder="Escribir mensaje…" required="required" class="form-control with-border bg-white"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-left">
                                <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-darkgrey w-100" value="">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </section>
    <!-- processbar-section -->
</div>
@endsection