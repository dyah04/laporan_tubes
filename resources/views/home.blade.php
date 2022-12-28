@extends('layouts.app')

@section('content')
    <!--Carousel -->
    <div id="carousel" class="carousel slide latar" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border" src="{{asset('asset/image/tas125.jpg')}}" alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Goodest Bag</b> </h1>
                                <h3 class="h2">Complete Your Fashion</h3>
                                <p>Find your beautiful and quality bag here!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border"
                            src="{{asset('asset/image/tas21.jpg')}}"
                            alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Goodest Bag</h1>
                                <h3 class="h2">Complate your OOTD</h3>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-6 col-lg-3 order-lg-last">
                            <img class="rounded-circle img-fluid border"
                                src="{{asset('asset/image/tas25.png')}}"
                                alt="" />
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Goodest Bag</h1>
                                <h3 class="h2"> High Quality</h3>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#carousel" role="button"
            data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#tcarousel" role="button"
            data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- Carousel end -->
    <!-- Start Best Seller -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p> Pilihan BestSeller kami bulan ini!!!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img
                        src="https://cdn.shopify.com/s/files/1/0290/8271/4190/products/notebook-with-spring-line-deli-a5-60-sheets-original-11833.jpg?v=1608032201"
                        class="rounded-circle img-fluid border" /></a>
                <h5 class="text-center mt-3 mb-3">Notebook a5</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
            </div>
        </div>
    </section>
    <!-- End Best Seller -->
    <!--Start Feature Product-->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"> Produk Unggulan</h1>
                    <p> Beberapa Produk Unggulan dari Toko Kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="https://th.bing.com/th/id/OIP.SJrbuGSOvP-aPwQFHqRk7AHaHa?pid=ImgDet&w=2000&h=2000&rs=1"
                                class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.10.000</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark"> Colorful Tape</a>
                            <p class="card-text"> Untuk menghias dan mempercantik alat tulis kesayanganmu</p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                            <img src="{{asset('asset/image/tas1.jpg')}}"
                                class="card-img-top" alt="..." />
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp. 15.000</li>
                            </ul>
                            <a href="cutter.png" class="h2 text-decoration-none text-dark">Cutter</a>
                            <p class="card-text"> Sebagai alat potong yang tajam, yang dapat kamu gunakan untuk memotong
                                berbagai macam barang.</p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop.html">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp.5000</li>
                            </ul>
                            <a href="shop.html" class="h2 text-decoration-none text-dark">Mini Notebook</a>
                            <p class="card-text">Buku catatan kecil yang sangat lucu.</p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    <!-- Start Footer -->
    <footer class="bg-dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <div class="h2 text-success border-bottom pb-3 border-light logo"> Dream Stationary</div>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jl. Menuju Kemenangan No.99
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">(021) 326 917</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">Copyright &copy; 2022 Dream</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
@endsection
