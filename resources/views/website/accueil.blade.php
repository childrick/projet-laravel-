@extends("layouts.template")

@section("titre")
page d'accueil
@endsection

@section("contenu")
<h1><!-- debut main -->
    <!-- debut product -->
    <div class="product-area pb-70">
        <div class="container">
            <div class="product-tab-list nav pb-55 text-center">
                <a href="#product-1" data-bs-toggle="tab" >
                    <h4>Dog Food</h4>
                </a>
                <a class="active" href="#product-2" data-bs-toggle="tab">
                    <h4>Fish Food </h4>
                </a>
                <a href="#product-3" data-bs-toggle="tab">
                    <h4>Cat Food</h4>
                </a>
            </div>
            <div class="tab-content jump">
                <div class="tab-pane" id="product-1">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt=" ">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt=" ">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="product-2">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="product-3">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-8.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-7.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-6.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-5.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-4.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-3.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-2.jpg') }}" alt="">
                                    </a>
                                    <span class="pink">-10%</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                        <span class="old">$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                            <div class="product-wrap mb-25">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/img/product/hm24-pro-1.jpg') }}" alt="">
                                    </a>
                                    <span class="purple">New</span>
                                    <div class="product-action">
                                        <div class="pro-same-action pro-wishlist">
                                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-same-action pro-cart">
                                            <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="pro-same-action pro-quickview">
                                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="product-details.html">Product Title Here</a></h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <span>$ 60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin product -->

    <!-- debut banner area p70 -->
    {{-- <div class="banner-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <a href="product-details.html"><img src="{{ asset('assets/img/banner/banner-57.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="single-banner mb-30">
                        <a href="product-details.html"><img src="{{ asset('assets/img/banner/banner-58.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- fin banner area p70 -->

    <!-- debut deal -->
    <div class="deal-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="common-deal-img">
                        <a href="#"><img class="wow fadeInLeft" src="{{ asset('assets/img/banner/deal-6.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="funfact-content funfact-res text-center">
                        <h2>Deal of the day</h2>
                        <div class="timer">
                            <div data-countdown="2022/06/01"></div>
                        </div>
                        <div class="funfact-btn btn-only-round funfact-btn-red-2 btn-hover">
                            <a href="#">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin deal -->

    <!-- debut suppoer -->
    <div class="suppoer-area pb-90">
        <div class="container padding-10-row-col">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-1 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset('assets/img/icon-img/support-5.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset('assets/img/icon-img/support-8.png') }}" alt="">
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-2 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset('assets/img/icon-img/support-6.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset('assets/img/icon-img/support-9.png') }}" alt="">
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-3 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset('assets/img/icon-img/support-7.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset('assets/img/icon-img/support-10.png') }}" alt="">
                            <p>Onevery order over $150</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin suppoer -->

    <!-- debut blog -->
    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title-6 mb-50 text-center">
                <h2>Latest News</h2>
                <p>But I must explain to you how all this mistaken idea of denouncing. </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img mb-10">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt=""></a>
                            <span class="red">Lifestyle</span>
                        </div>
                        <div class="blog-content-3 text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit amet cons adipisic elit.</a></h3>
                            <span>By: <a href="#">Shop Admin</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img mb-10">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog-11.jpg') }}" alt=""></a>
                            <span class="red">Lifestyle</span>
                        </div>
                        <div class="blog-content-3 text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit amet cons adipisic elit.</a></h3>
                            <span>By: <a href="#">Shop Admin</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img mb-10">
                            <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog-12.jpg') }}" alt=""></a>
                            <span class="red">Lifestyle</span>
                        </div>
                        <div class="blog-content-3 text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit amet cons adipisic elit.</a></h3>
                            <span>By: <a href="#">Shop Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin blog -->
    <!-- fin main --></h1>
@endsection
