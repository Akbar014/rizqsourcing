@extends('welcome')
@section('content')
<div id="content">

    <div class="main container">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i></a>
                            </li>
                            <li><span>—› </span> <strong>Buying Service / {{$category->cname}}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
       
            
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div class="page-title"><h2>{{$category->cname}}</h2></div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                <p>
                {{-- <i style="color:navy"><strong>Fabrics: </strong></i> Jersey, Rib, Interlock, French Terry, Fleece etc.  <br/>
                <i style="color:navy"><strong>Finishes: </strong></i> Dyed, Undyed, placement prints, all over prints (AOP), special pronts etc.  <br/>                        
                <i style="color:navy"><strong>Products: </strong></i> T-shirts, Polo Shirts, Tank top, Pajama set, Nightwear, Lounge wear, Trousers etc.  <br/>
                <i style="color:navy"><strong>Catgeories: </strong></i> Women, Kids, Mens etc.  <br/><br/>
                
                Some of the example products from our portfolio presented below: --}}
                {!! $category->description !!}
                </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>                        
            
            

             
        
        @php
            $categoryimages = App\Models\CategoryImage::where('category_id', $category->id)->get();
        @endphp

            <div class="row">
                @foreach($categoryimages as $data)
                <div class="col-lg-3 col-6 mt-4">
                    <a class="lightbox img-mask " href="{{ asset('images/' . $data->image) }}" data-fancybox="gallery" data-caption="">
                        <img src="{{ asset('images/' . $data->image) }}" style="width: 100%; height:200px" alt="">
                    </a>
                </div>
                @endforeach
            </div>
                
            <div class="row mt-5">
                <div class="new_title center">
                    <h2>Products </h2>
                </div>

                @if($products)
                    @foreach ($products as $item)
                        <div class="product-layout product-grid col-md-3">
                            <div class="product-thumb col-item">

                                <div class="image item-img">

                                    <div class="item-img-info">
                                        <a href="#" title="" class="product-image">
                                            <img src="{{ asset('images/' . $item->image) }}"
                                                alt="SA-M-0001">
                                            <div class="product-description">
                                                <h3 style="color: goldenrod">Product Description</h3>
                                                <p>{{$item->description}}</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>


                                <div class="item-info">
                                    <div class="caption info-inner">
                                        <div class="item-title"><a href="#">
                                            <button class="button btn-cart"><span>{{$item->product_code}}</span></button>
                                        </a></div>
                                    </div>
                                    <!-- info-inner -->
                                </div>
                                <!-- item-info -->
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        
    </div>


</div>  
@endsection