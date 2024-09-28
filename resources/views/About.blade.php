@extends('layout')
@section('title','AboutUs')
@section('content')
    <style>
        .about {
            margin-bottom: 20px;
        }

        .about-title-main {
            color: #667d01b8;
            font-weight: bold;
            margin-top: 30px;
            background-image: url(./img/pexels-photo-89267.jpeg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            height: 240px;
            margin-top: -1px;
        }

        .about-info {
            margin-left: 63px;
        }

        .about-info h2 {
            margin-top: 30px;
            color: #539030;
        }

        .about-info p {
            color: #6d6862;
        }

        .title-main {
            position: relative;

            top: -155px;
            font-weight: bolder;
            color: white;
        }

        .info-main {
            position: relative;
            top: -156px;
            font-weight: bold;

            color: #3c3b38;
        }

        .title-About::after {
            content: '';
            position: absolute;
            left: 47px;
            height: 5%;
            width: 100%;
            background-color: white;
            border-left: 4px solid #26a23d;
            animation: typing 4s steps(15) infinite;
        }

        body {
            overflow-x: hidden;
        }

        @keyframes typing {
            100% {
                left: 37%;
                margin: 0 -35px 0 35px;
            }
        }

        @media (max-width: 567px) {
            nav {
                width: 1000px;
            }

            .about-title-main {
                width: 1000px;
            }
        }
    </style>
    <div class="about-title-main text-center">

    </div>
    <div style="position: relative " class="">
        <h1 class="title-main container text-center animate__backInDown">About Us</h1>
        <p class="text-center info-main ">Shop for the best produce online at Health Food. Enjoy quality, variety, and
            great
            prices delivered right
            to your door.</p>

    </div>



    <section class="about container row">

        <div class="col-lg-7 about-info">
            <h2 class="title-About ">Health Food Make Life Better</h2>
            <p>Your Online Fresh Produce Market
                At [Health Food], we're passionate about bringing the freshest, most vibrant fruits and vegetables
                directly to your doorstep.
                Our mission is to provide a convenient and reliable online platform where you can shop for high-quality
                produce without leaving the comfort of your home. We believe that everyone deserves access to fresh.</p>
        </div>
        <div class="col-lg-4" style="position: relative;    margin-left: 40px;">
            <img src="./img/farm.png" width="437" height="240" style="border-radius: 4px">

        </div>
        <div class="services container" style="margin-left: 70px ;margin-top: 20px;">
            <h2 class="text-center" style="color: #539030;">Services</h2>
            <div class="card-deck">
                <div class="container">
                    <div class="row ">
                        @foreach($data as $item)
                            <div class="card col-lg-3 col-md-6 col-sm-12 m-5  shadow p-3 mb-5 bg-white rounded">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $item->Title}}</h5>
                                    <p class="card-text">{{ $item->Description }}</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
