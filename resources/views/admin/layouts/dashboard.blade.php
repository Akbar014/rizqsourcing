@extends('admin')
@section('content')
@php
    $total_products = App\Models\Product::count();
    $total_queries = App\Models\Query::count();
    $total_sliders = App\Models\Slider::count();
@endphp
<div class="container">
  <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
          <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>

          </div>
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                  <div class="card-body">
                      <div class="row align-items-center">

                          <div class="col col-stats ms-3 ms-sm-0">
                              <div class="numbers">
                                  <p class="card-category">Total Products</p>
                                  <h4 class="card-title">{{$total_products}}</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                  <div class="card-body">
                      <div class="row align-items-center">

                          <div class="col col-stats ms-3 ms-sm-0">
                              <div class="numbers">
                                  <p class="card-category">Total Queries</p>
                                  <h4 class="card-title">{{$total_queries}}</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                  <div class="card-body">
                      <div class="row align-items-center">

                          <div class="col col-stats ms-3 ms-sm-0">
                              <div class="numbers">
                                  <p class="card-category">Total Sliders</p>
                                  <h4 class="card-title">{{$total_sliders}}</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          {{-- <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                  <div class="card-body">
                      <div class="row align-items-center">
                          <div class="col-icon">
                              <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                  <i class="far fa-check-circle"></i>
                              </div>
                          </div>
                          <div class="col col-stats ms-3 ms-sm-0">
                              <div class="numbers">
                                  <p class="card-category">Order</p>
                                  <h4 class="card-title">576</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> --}}
      </div>

  </div>
</div>
@endsection
