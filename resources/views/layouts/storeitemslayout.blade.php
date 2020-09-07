@extends('layouts.layout')
<!-- about us -->
@section('main')
    <!-- store  items-->
    <div class="row" class="store-items" id="store-items">
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
            <div class="card ">
                <div class="img-container">
                    @yield('image0')
                    @yield('image1')
                    @yield('image2')

                    <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                </div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between text-capitalize">
                        @yield('name_price0')
                        @yield('name_price1')
                        @yield('name_price2')
                    </div>
                </div>
            </div>
            <!-- end of card-->
        </div>
        <!--end of single store item-->
       
@endsection

