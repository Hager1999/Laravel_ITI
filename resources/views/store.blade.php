@extends('layouts.layout')
<!-- about us -->
@section('main')
    <section id="store" class="store py-5">
        <div class="container">
            <!-- section title -->
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
                </div>
            </div>
            <!-- end of section title -->
            <!--filter buttons -->
            <div class="row">
                <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cakes">cakes</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">cupcakes</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="sweets">sweets</a>
                    <a href="#" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">doughnuts</a>
                </div>
            </div>
            <!-- search box -->
            <div class="row">

                <div class="col-10 mx-auto col-md-6">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend ">
                                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder='item....' id="search-item">
                        </div>

                    </form>
                </div>
            </div>
            <!--end of filter buttons -->
            <!-- store  items-->
            <div class="row" class="store-items" id="store-items">
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-1.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-2.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">10</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/sweets-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cupcakes" data-item="cupcakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cupcake-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cupcake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item cakes" data-item="cakes">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/cake-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">cake item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->
                <!-- single item -->
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item doughnuts" data-item="dougnuts">
                    <div class="card ">
                        <div class="img-container">
                            <img src="img/doughnut-3.jpeg" class="card-img-top store-img" alt="">
                            <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">dougnut item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">15</strong></h5>

                            </div>
                        </div>


                    </div>
                    <!-- end of card-->
                </div>
                <!--end of single store item-->

            </div>
    </section>
    <!--end of store items -->
@endsection
<!-- end of about us -->
