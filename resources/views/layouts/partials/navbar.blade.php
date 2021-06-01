<!--header start-->
<header id="masthead" class="header ttm-header-style-01">
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div class="ttm-widget_header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex flex-row align-items-center">
                                <!-- site-branding -->
                                <div class="site-branding mr-auto">
                                    <a class="home-link" href="/" title="Agrotek" rel="home">
                                        <img src="/images/logo.png" id="logo-img" class="img-center" alt="logo">
                                    </a>
                                </div><!-- site-branding end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon flaticon-speech-bubble"></i></div>
                                    <div class="widget_content">
                                        <a href="https://api.whatsapp.com/send?phone=51994239667">
                                            <h5 class="widget_title">Llámanos</h5>
                                            <p class="widget_desc">+51 994239667</p>
                                        </a>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon-email"></i></div>
                                    <div class="widget_content">
                                        <h5 class="widget_title">Email</h5>
                                        <p class="widget_desc">info@poultryindustrial.com</p>
                                    </div>
                                </div><!-- widget-info end -->
                                <!-- widget-info -->
                                <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                    <div class="widget_icon"><i class="flaticon-worldwide"></i></div>
                                    <div class="widget_content">
                                        <h5 class="widget_title">Ubícanos</h5>
                                        <p class="widget_desc">Miraflores - Lima</p>
                                    </div>
                                </div><!-- widget-info end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="ttm-custombutton">
                            </div>
                            <!-- header-icons -->
                            <div class="ttm-header-icons ">
                                <div class="ttm-header-icon ttm-header-search-link">
                                    <a href="#" class="sclose"><i class="ti ti-search"></i></a>
                                    <div class="ttm-search-overlay">
                                        <div class="ttm-bg-layer"></div>
                                        <div class="ttm-icon-close"></div>
                                        <div class="ttm-search-outer">
                                            <form method="get" class="ttm-site-searchform" action="#">
                                                <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                <button type="submit">
                                                    <i class="ti ti-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-header-icon ttm-header-user-link">
                                    <a href="{{route('login')}}" class=""><i class="ti ti-user"></i></a>
                                </div>
                            </div><!-- header-icons end -->
                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li><a href="/nosotros">Nosotros</a></li>
                                    <li><a href="/aves">Aves</a>
                                        <ul>
                                            @foreach(App\Models\Category::birds()->get() as $bird)
                                            <li><a href="/aves">{{$bird->name }}</a>
                                                <ul>
                                                    @foreach($bird->subcategories as $sub)
                                                        <li><a href="{{route('web.products.subcategoryIndex', $sub->id)}}">{{ $sub->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="/cerdos">Cerdos</a>
                                        <ul>
                                        @foreach(App\Models\Subcategory::pigs()->get() as $pig)
                                            <li><a href="{{route('web.products.subcategoryIndex', $pig->id)}}">{{ $pig->name }}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    </li>
                                    <li><a href="/servicios">Servicios</a>
                                        <ul>
                                            <li><a href="/obras">Construcciones y obras civiles</a></li>
                                            <li><a href="#">Instalaciones de equipos</a></li>
                                            <li><a href="#">Mantenimiento</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/representaciones">Representaciones</a>
                                    </li>
                                    <li><a href="#">Recursos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div>
    <!--ttm-header-wrap end -->
</header>
<!--header end-->