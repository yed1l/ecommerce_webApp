@extends('master')
@section('title'.$category->name)
@section('content')
    <div class="mt-5">
        <div class="banner-image mt-5">
            <div class="container mt-5">
                <div class="jumbotron home-spacer" id="products-jumbotron">
                    <h1>Welcome to our Lifestyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

                </div>
                <center>

                <div class="banner_content mt-5">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="/products" method="get" class="btn btn-danger
                    btn-lg active">Shop Now</a>
                </div>
                </center>

            </div>

        </div>
        <div class="container mt-5">
                <div class="row mt-5">
                    <div class="mt-5 col-sm-4">
                        <a href="products.php#cameras" ><div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" ><div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" ><div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    @endsection

