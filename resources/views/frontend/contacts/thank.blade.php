@extends('welcome')
@section('content')


<div id="content">

    <div class="main container">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        {{-- <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a>
                            </li>
                            <li><span>—› </span> <strong> </strong></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="main-container col1-layout">
            <div class="main container">
                <section class="thankyou-page-area section-top pb-100" style="background: aliceblue;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-6">
                                <div class="thankyou-content text-center">
                                    <img src="https://e2ebd.com/frontend/assets/images/thankyou-img.png" class="thanks-img" alt="img">
                                    <h3>Thank you for your Queries !</h3>
                                    <p>Your query has been placed and will be processed as soon as possible. We will contact you very soon.</p>
                                    
                                </div>
                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


</div>
@endsection