<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIZQ SOURCING</title>
    <base href="" />
    <meta name="description" content="fashion" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="" rel="icon" />

    <link rel="icon" type="image/x-icon" href="{{asset('assets\frontend\image\favicon.png')}}">
    <script src="{{ asset('assets/frontend') }}/js/jquery.min.js" type="text/javascript"></script>
    <link href="{{ asset('assets/frontend') }}/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link href="{{ asset('assets/frontend') }}/css/hover.css" rel="stylesheet" media="screen" />


    <script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="{{ asset('assets/frontend') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


    {{-- <!-- external css/js -->
    <link href="{{ asset('assets/frontend') }}/css/jquery.fancybox.css" rel="stylesheet">
    <script src="{{ asset('assets/frontend') }}/js/jquery.fancybox.js" type="text/javascript"></script> --}}
    <!-- external css/js end-->

  

    <!-- Google Fonts // magik theme-->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600'
        rel='stylesheet' type='text/css'>
    <!-- end font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMPQowDMD8mNtq1+zha/ppJTD8a/Tf42zfnc0D" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/frontend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets/frontend') }}/css/stylesheet.css" rel="stylesheet">
    <link href="{{ asset('assets/frontend') }}/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/owl.carousel.css">
    <link href="{{ asset('assets/frontend') }}/css/style.css" rel="stylesheet">

    <link href="{{ asset('assets/frontend') }}/css/eislideshow.css" type="text/css" rel="stylesheet" media="screen" />
    <!-- <script src="catalog/view/javascript/common.js" type="text/javascript"></script> -->


    <script src="{{ asset('assets/frontend') }}/js/parallax.js" type="text/javascript"></script>
    {{-- <script src="{{ asset('assets/frontend') }}/js/common.js" type="text/javascript"></script> --}}
    <script src="{{ asset('assets/frontend') }}/js/common1.js" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend') }}/js/cloudzoom.js" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js" type="text/javascript"></script>

    <script src="{{ asset('assets/frontend') }}/js/eislideshow.js" type="text/javascript"></script>

    <script src="{{(asset('assets/frontend'))}}/js/hover.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css">


      <!--fancybox gallery -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script>
          $(document).ready(function() {
              $("[data-fancybox='gallery']").fancybox({
                  buttons: [
                      "close",
                      "slideShow",
                      "fullScreen",
                      "thumbs",
                      "arrowLeft",
                      "arrowRight"
                  ],
                  loop: true
              });
          });
      </script>

      
    <style type="text/css">
        /* sale label */
        .sale-label {
            background: #d12631
        }

        /*Main color section */

        /* header color section */

        /*Top Menu */
        /*background*/
        /*main menu links*/
        /*main menu link hover*/
        /*sub links hover*/

        /*buttons*/

        /*price*/

        /*footer*/
    </style>
</head>


<body class="common-home">

    <header class="header-container">

        <div class="header container">
            <div class="row">

                <div class="col-lg-2 col-sm-3 col-md-2">
                    <a class="logo" href="{{url('/')}}" title="RIZQ SOURCING">
                        <img src="{{asset('assets\frontend\image\logo2.png')}}" height="90" title="RIZQ SOURCING"
                            alt="RIZQ SOURCING" />
                    </a>

                </div>

                {{-- <div class="col-lg-8 col-sm-6 col-md-8">
                    <div class="os-phrases" id="os-phrases">
                        <h2 style="color: goldenrod;margin-top:5px">One stop apparel sourcing service</h2>
                    </div>
                </div> --}}

                <div class="col-lg-8 col-sm-6 col-md-8">
                    <div class="os-phrases" >
                        <h2 style="color: #B89B58;margin-top:5px; font-weight: 700;">Local Made, Global Touch</h2>
                   
                    </div>
                </div>
            </div>
        </div>
        

    </header>
    <!-- header-container -->


    <nav class="">
        <div class="container">
            <div class="nav-inner">
                <div class="hidden-desktop" id="mobile-menu">
                    <ul class="navmenu">
                        <li>
                            <div class="menutop">
                                <div class="toggle"><span class="icon-bar">&nbsp;</span> <span
                                        class="icon-bar">&nbsp;</span> <span class="icon-bar">&nbsp;</span></div>
                                <h2>Menu</h2>
                            </div>
                            <ul style="display:none;" class="submenu">
                                <li>
                                    <ul class="topnav">
                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{url('/')}}">Home</a></li>
                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{route('othersInfo', 'company_profile')}}">Company Profile</a>
                                        </li>

                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="index.php?page=capability">Our capabilities</a>
                                        </li>

                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                            href="#">Our Products</a>

                                        <ul class="level0">
                                            @php
                                                $categories = App\Models\Category::where('type','Buying_services')->get();
                                            @endphp
                                            @foreach ($categories as $item)
                                            <li class="level1 nav-6-1 parent item">
                                                <a href="{{route('categories.products',$item->id)}}"><span>{{$item->cname}}</span></a>
                                            </li>
                                            @endforeach
                                          
                                        </ul>

                                    </li>
                                        <ul class="level0">
                                            @php
                                                $capabilities = App\Models\Category::where('type','Capabilities')->get();
                                            @endphp
                                            @foreach ($capabilities as $item)
                                            <li class="level1 nav-6-1 parent item">
                                                <a href="{{route('categories.capability',$item->id)}}"><span>{{$item->cname}}</span></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        
                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{route('othersInfo', 'quality')}}">Quality</a>
                                        </li>
                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{route('othersInfo', 'compliance')}}">Compliance</a>
                                        </li>
                                        {{-- <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{route('othersInfo', 'production_unit')}}">Production units</a>
                                        </li> --}}
                                        <li class="level0 parent drop-menu {{ Request::is('*sustainability*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                                                href="{{route('othersInfo', 'sustainability')}}"><span>Sustainability & Innovations</span></a>
                                        </li>
                                        <li class="level0 nav-6 level-top first parent"><a class="level-top"
                                                href="{{route('contactUs')}}">Contact Us</a>
                                        </li>

                                    </ul>

                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--navmenu-->
                </div>

                <ul class="hidden-xs" id="nav">
                    <li class="level0 parent drop-menu {{ Request::is('/') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{url('/')}}"><span>Home</span></a>
                    </li>
                    <li class="level0 parent drop-menu {{ Request::is('*company_profile*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('othersInfo', 'company_profile')}}"><span>Company profile</span></a>
                    </li>
                    

                    <li class="level0 level-top parent ">


                        <a class="level-top" href="#"><span>Our capabilities
                            </span>
                        </a>

                        <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                            <div class="level0-wrapper2">
                                <div class="nav-block nav-block-center">
                                    <ul class="level0">
                                        @php
                                            $categories = App\Models\Category::where('type','Capabilities')->get();
                                        @endphp
                                        @foreach ($categories as $item)
                                        <li class="level1 nav-6-1 parent item">
                                            <a href="{{route('categories.capability',$item->id)}}"><span>{{$item->cname}}</span></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- mcalss -->


                            </div>
                            <!-- level0-wrapper2 -->
                        </div>
                    </li>

                    <li class="level0 level-top parent ">
                        <a class="level-top" href="#"><span>Our Products
                            </span>
                        </a>

                        <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">

                            <div class="level0-wrapper2">

                                <div class="nav-block nav-block-center">
                                    <!--  -->

                                    <ul class="level0">
                                        @php
                                            $categories = App\Models\Category::where('type','Buying_services')->get();
                                        @endphp
                                        @foreach ($categories as $item)
                                        <li class="level1 nav-6-1 parent item">
                                            <a href="{{route('categories.products',$item->id)}}"><span>{{$item->cname}}</span></a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <!-- mcalss -->


                            </div>
                            <!-- level0-wrapper2 -->
                        </div>
                    </li>

                    <!--<li class="level0 parent drop-menu " id="nav-home"><a class="level-top" href="index.php?page=stock"><span>Stock service</span></a>
                </li>-->
                    <li class="level0 parent drop-menu {{ Request::is('*quality*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('othersInfo', 'quality')}}"><span>Quality</span></a>
                    </li>
                    <li class="level0 parent drop-menu {{ Request::is('*compliance*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('othersInfo', 'compliance')}}"><span>Compliance</span></a>
                    </li>
                    <li class="level0 parent drop-menu {{ Request::is('*sustainability*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('othersInfo', 'sustainability')}}"><span>Sustainability & Innovations</span></a>
                    </li>
                    {{-- <li class="level0 parent drop-menu {{ Request::is('*production_unit*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('othersInfo', 'production_unit')}}"><span>Production units</span></a>
                    </li> --}}
                    <li class="level0 parent drop-menu {{ Request::is('*contactUs*') ? 'active' : '' }}" id="nav-home"><a class="level-top"
                            href="{{route('contactUs')}}"><span>Contact us</span></a>
                    </li>
                    <!--<li class="level0 level-top parent ">
                    <a class="level-top" href="our-factories.html"><span>Our Factories</span></a>
                </li>-->
                </ul>


            </div>
            <!-- nav-inner -->
        </div>
    </nav>


   @yield('content')


    <footer class="footer bounceInUp animated">

        <div class="footer-middle">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-3 col-sm-4 footer-column-1">

                        <div class="contacts-info">

                            <address>
                                <i class="add-icon"></i>
                                @php
                                    $contact = App\Models\Contacts::find(2);

                                @endphp
                                <div class="text-right" style="padding-right:10px;">RIZQ SOURCING<br />
                                    {{$contact->address}}<br />
                                    {{$contact->others}}<br /></div>
                            </address>

                            <div class="phone-footer">
                                <i class="phone-icon"></i>
                                {{$contact->phone}}
                            </div>

                            <div class="email-footer">
                                <i class="email-icon"> </i>
                                <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h4>Information</h4>
                        <ul class="links">
                            @php
                                $categories = App\Models\Category::where('type','Buying_services')->take(3)->get();
                            @endphp
                            @foreach($categories as $item)
                            <li class="first"><a href="{{route('categories.products',$item->id)}}">{{$item->cname}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h4>Customer Service</h4>
                        <ul class="links">
                            <li class="first"><a href="{{route('contactUs')}}">Contact us</a></li>
                            <li class="first"><a href="{{route('othersInfo', 'quality')}}">Quality assurance</a></li>
                            <li class="first"><a href="{{route('othersInfo', 'compliance')}}">Compliance</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <div class="info-line">
                            <h4>Extras</h4>
                            <ul class="links">
                                <li class="first"><a href="#">Webmail</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="social">
                            <h4>Follow Us </h4>
                            <ul class="link">
                                <li class="linkedin pull-left" title="linkedin"><a target="_blank" href="https://www.linkedin.com/company/rizq-sourcing-bangladesh/?originalSubdomain=bd"
                                        target="_blank"></a></li>
                                <li class="fb pull-left" title="facebook"><a target="_blank" href="https://www.facebook.com/rizqsourcing/"></a></li>
                                <li class="tw pull-left" title="twitter"><a target="_blank" href="https://www.twitter.com"></a></li>
                                <li class="youtube pull-left" title="youtube"><a target="_blank" href="https://www.youtube.com/watch?v=m21IOhBa7-s"></a></li>
                            </ul>
                        </div>


                    </div>

                    
                </div>
            </div>
        </div>
        <!-- footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex ">
                    <div class="col-md-6 coppyright">
                        <strong> RIZQ SOURCING</strong>
                    </div>
                    {{-- <div class="col-md-6 coppyright text-right">
                        Designed & Developed By <a href="https://www.dreamheavenit.com/" target"_blank"" class="">Dream Heaven IT</a>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- footer-bottom -->

    </footer>


</body>

</html>
