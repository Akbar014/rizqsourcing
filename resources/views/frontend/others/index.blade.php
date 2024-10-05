@extends('welcome')
@section('content')


<div id="content">

    <div class="main container">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a>
                            </li>
                            <li><span>—› </span> <strong> {{$type}} </strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="row">
                        <div id="content" class="col-sm-12">
                            <div class="page-title">
                                <h2>{{$type}}</h2>
                            </div>
                               
                                    <div class="row">
                                        <div id="content" class="col-sm-12">
                                            {{-- <div class="page-title"><h2>{{$category->cname}}</h2></div> --}}
                
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
                                        {!! $data->description !!}
                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div>
                                    </div>  
                                
                           
                            <!--<form action="http://arperfume.com/index.php?route=information/contact" method="post"
                                  enctype="multipart/form-data" class="form-horizontal">
                                <fieldset>
                                    <h3>Contact Form</h3>

                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-name">Your Name</label>

                                        <div class="col-sm-10">
                                            <input name="name" value="" id="input-name" class="form-control"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>

                                        <div class="col-sm-10">
                                            <input name="email" value="" id="input-email" class="form-control"
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>

                                        <div class="col-sm-10">
                                            <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <button class="button" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection