@extends('welcome')
@section('content')
    <div>
        <div id="content">
            <!-- Slider -->
            <div id="magik-slideshow" class="magik-slideshow">
                <div id="slider-elastic" class="slider slider-elastic elastic ei-slider">
                    <ul class="ei-slider-large">
                        @php
                            $sliders = App\Models\Slider::all();
                        @endphp
                        <style>
                            #ms0 {
                                cursor: pointer;
                            }
                        </style>

                        @foreach ($sliders as $slider)
                            <li id="ms0" class="slide-1 slide align-">
                                <img src="{{ asset('images/' . $slider->image) }}"
                                    class="attachment-full"alt="Slider image 1" />
                            </li>
                        @endforeach
                    </ul>
                    <!-- ei-slider-large -->

                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element"> Current</li>
                        @foreach ($sliders as $slider)
                            <li><a href="#">Slider image 1</a> <img src="{{ asset('images/' . $slider->image) }}"
                                    alt="Slider image 1" />
                            </li>
                        @endforeach
                    </ul>
                    <!-- ei-slider-thumbs -->
                    <div class="shadow"></div>
                </div>
            </div>
            <!-- end Slider -->

            {{-- who we are  --}}

            <section class="py-3 py-md-5 py-xl-8 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-8">
                            {{-- <h3 class="fs-5 mb-2 text-secondary text-uppercase">Contact</h3> --}}
                            {{-- <h2 class="text-center">Contact Us</h2> --}}
                            {{-- <h2 class="display-5 mb-4 mb-md-5 mb-xl-8">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h2> --}}
                        </div>
                    </div>
                </div>
    
                <div class="container">
                    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center" style="border: 1px solid #C4BD97;
                    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        <div class="col-12 col-lg-6">
                            <div class="border overflow-hidden">
    
                                <img src="{{ asset('assets\frontend\image\side_banner.jpg') }}" style="width: 100%"
                                    alt="">
    
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row justify-content-xl-center">
                                <div class="col-12 col-xl-11">
                                    <div class="mb-4 mb-md-5">
                                        <div class="mb-3 text-info">
                                            {{-- <h1 class="text-center text-italic">Who We are </h1> --}}
                                        </div>
                                        @php
                                            // $info = App\Models\Other::where('type', 'production_unit')->first();
                                            $info = App\Models\Other::where('type', 'who_we_are')->first();
                                        @endphp
                                        <div style="text-align: justify">
                                            {!! $info->description !!}
                                            
                                        </div>
                                    </div>
    
                                    <div>
    
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <script type="text/javascript">
                jQuery(document).ready(function(jQuery) {
                    jQuery('#slider-elastic.elastic').eislideshow({
                        easing: 'easeOutExpo',
                        titleeasing: 'easeOutExpo',
                        titlespeed: 1200,
                        autoplay: true,
                        slideshow_interval: 3000,
                        speed: 800,
                        animation: 'sides'
                    });
                });
            </script>

            <!--Men product - container-->
            <div class="featured-pro container wow bounceInUp animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2>Men</h2>
                    </div>

                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">
                            <!-- Item -->
                            @php
                                $men_products = App\Models\Product::where('type', 'Men')->get();
                                $women_products = App\Models\Product::where('type', 'Women')->get();
                            @endphp
                            @foreach ($men_products as $item)
                                <div class="item">
                                    <div class="col-item">

                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a href="#" title="" class="product-image">
                                                    <img src="{{ asset('images/' . $item->image) }}" alt="SA-M-0001">
                                                    <div class="product-description">
                                                        <h3 style="color:goldenrod;">Product Description</h3>
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="item-info">
                                            <div class="info-inner">

                                            </div>
                                            <!-- info-inner -->

                                            <div class="actions">
                                                <span class="add-to-links">
                                                    <br>
                                                    <button
                                                        class="button btn-cart"><span>{{ $item->product_code }}</span></button>
                                                </span>
                                            </div>
                                            <!-- actions -->

                                        </div>

                                        <!-- item-infor -->

                                    </div>
                                    <!-- col-item -->
                                </div>
                            @endforeach

                            <!-- item -->


                        </div>
                        <!-- slider-items slider-width-col4 -->
                    </div>
                    <!-- featured-slider -->

                </div>
                <!-- slider-items-products -->
            </div>
            <!--Women product - container-->

            <div class="middle-slider container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bag-product-slider small-pr-slider wow bounceInUp animated">
                            <div class="slider-items-products">
                                <div class="new_title center">
                                    <h2>Women</h2>
                                </div>

                                <div id="bag-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col3">
                                        <!-- Item -->
                                        @foreach ($women_products as $item)
                                            <div class="item">
                                                <div class="col-item">

                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a href="#" title="" class="product-image">
                                                                <img src="{{ asset('images/' . $item->image) }}"
                                                                    alt="SA-M-0001">
                                                                <div class="product-description">
                                                                    <h3 style="color:goldenrod;">Product
                                                                        Description</h3>
                                                                    <p>{{ $item->description }}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="item-info">
                                                        <div class="info-inner">

                                                        </div>
                                                        <!-- info-inner -->

                                                        <div class="actions">
                                                            <span class="add-to-links">
                                                                <br>
                                                                <button
                                                                    class="button btn-cart"><span>{{ $item->product_code }}</span></button>
                                                            </span>
                                                        </div>
                                                        <!-- actions -->

                                                    </div>

                                                    <!-- item-infor -->

                                                </div>
                                                <!-- col-item -->
                                            </div>
                                        @endforeach

                                        <!-- item -->
                                    </div>
                                    <!-- slider-items slider-width-col3 -->
                                </div>
                                <!-- bag-slider -->
                            </div>
                            <!-- slider-items-products -->
                        </div>
                        <!-- bag-product-slider small-pr-slider wow bounceInUp animated -->
                    </div>
                </div>
            </div>

            {{-- product end --}}

            {{-- what we do  --}}

            <section class="py-3 py-md-5 py-xl-8 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-8">
                            {{-- <h3 class="fs-5 mb-2 text-secondary text-uppercase">Contact</h3> --}}
                            {{-- <h2 class="text-center">Contact Us</h2> --}}
                            {{-- <h2 class="display-5 mb-4 mb-md-5 mb-xl-8">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h2> --}}
                        </div>
                    </div>
                </div>
    
                <div class="container">
                    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center" style="border: 1px solid #C4BD97;
                    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                        
                        <div class="col-12 col-lg-6">
                            <div class="row justify-content-xl-center">
                                <div class="col-12 col-xl-11">
                                    
                                        <div class="mb-3 text-info">
                                            {{-- <h1 class="text-center text-italic">Who We are </h1> --}}
                                        </div>
                                        @php
                                            // $info = App\Models\Other::where('type', 'production_unit')->first();
                                            $info = App\Models\Other::where('type', 'what_we_do')->first();
                                        @endphp
                                        <div style="text-align: justify">
                                            {!! $info->description !!}
                                            
                                        </div>
                                    
    
                                    <div>
    
    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="border overflow-hidden">
    
                                <img src="{{ asset('assets\frontend\image\what_we_do.png') }}" style="width: 100%;"
                                    alt="">
    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            
        </div>
    </div>
@endsection
