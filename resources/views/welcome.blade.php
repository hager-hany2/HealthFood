@extends('layout')
@section('title','Home')

@section('content')
    <style>
        .hero {
            background: linear-gradient(rgb(253 246 232 / 12%), rgb(239 228 206 / 0%)), url(./img/bg2.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 585px;
            margin-bottom: 70px;
        }

        .title-hero {
            margin-top: 154px;

            color: #e3c528;
            font-weight: bolder;
            line-height: 55px;
            margin-left: 69px;
            width: 584px;
        }

        .info-hero {

            color: #26a23d;
            font-weight: bold;
            line-height: 53px;
            margin-left: 69px;
            width: 462px;
            position: relative;

        }

        .hero a {
            margin-left: 69px;
            display: inline-block;

            height: 43px;
            background-color: #e3c528;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 0.8rem;
            margin-bottom: 2rem;
            transition: 0.3s;
            width: 21%;
            font-size: 18px;
            margin-top: 20px;
        }

        .hero a:hover {
            margin-left: 69px;
            display: inline-block;

            height: 43px;
            background-color: #f2ce15;;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 0.8rem;
            margin-bottom: 2rem;
            transition: 0.3s;
            width: 21%;
            font-size: 18px;
        }

        /*.info-hero::after {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    height: 100%;*/
        /*    width: 100%;*/
        /*    background-color: #f5efe3;*/
        /*    border-left: 4px solid #26a23d;*/

        /*    animation: typing 3s steps(20) infinite;*/
        /*}*/

        /*@keyframes typing {*/
        /*    100% {*/
        /*        left: 37%;*/
        /*        margin: 0 -35px 0 35px;*/
        /*    }*/
        /*}*/
        .carousel {
            margin-top: 154px;
            width: 450px;
        }

        .carousel img {
            border-radius: 6px;
        }

        .carousel-caption h5 {
            color: white;
            border: 5px;
            background: linear-gradient(rgba(255, 181, 36, 0.7), rgba(255, 181, 36, 0.7));
            border-radius: 8px;
        }

        @media (max-width: 960px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .slider {
                margin-top: -131px;
            }

            /*.hero {*/
            /*    height: 784px;*/
            /*}*/
        }

        @media (max-width: 953px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .slider {
                margin-top: -131px;
            }

            /*.hero {*/
            /*    height: 784px;*/
            /*}*/
        }

        @media (max-width: 286px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            nav {


                width: 950px;
            }

            .hero {
                width: 648px;
            }

            .slider {
                margin-top: -131px;
                margin-left: 65px;
            }

            h1 {
                width: 580px;
            }

            /*.hero {*/
            /*    height: 784px;*/
            /*}*/
        }

        @media (max-width: 496px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            nav {
                width: 645px;
            }

            .hero {
                width: 648px;
            }

            .slider {
                margin-top: -131px;
                margin-left: 65px;
            }

            h1 {

                width: 544px;
            }

            /*.hero {*/
            /*    height: 784px;*/
            /*}*/
        }

        @media (max-width: 286px) {
            .hero {
                width: 801px;
            }
        }

        @media (max-width: 506px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            nav {
                width: 806px;
            }

            .hero {
                width: 799px;
            }

            .slider {
                margin-top: -131px;
                margin-left: 65px;
            }

            h1 {

                width: 544px;
            }

            .hero {
                /*height: 784px;*/
            }
        }


        @media (max-width: 286px) {
            .hero {
                width: 801px;
            }
        }

        @media (max-width: 970px ) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            nav {
                width: 956px
            }

            .hero {
                width: 965px
            }

            .slider {
                margin-top: -131px;
                margin-left: 65px;
            }

            h1 {

                width: 544px;
            }

            .hero {
                /*height: 784px;*/
            }
        }

        @media (max-width: 856px) {
            .hero {
                width: 857px;
            }

            nav {
                width: 838px;
            }
        }

        @media (max-width: 844px) {
            .hero {
                width: 849px;
            }

            nav {
                width: 830px;
            }
        }


        @media (max-width: 938px) {
            .hero {
                width: 943px;
            }

            nav {
                width: 921px
            }
        }

        @media (width: 977px) {
            .hero {
                /*height: 901px;*/
            }

            .slider {
                margin-top: -123px;
            }
        }

        /*@media (width: 1014px) {*/
        /*    .hero {*/

        /*        width: 1100px;*/
        /*    }*/

        /*    .nav {*/

        /*        width: 1100px;*/
        /*    }*/

        /*    .carousel {*/
        /*        margin-top: 291px;*/
        /*    }*/

        /*    .slider {*/
        /*        margin-top: -123px;*/
        /*    }*/
        /*}*/

        /*@media (width: 1009px) {*/
        /*    nav {*/
        /*        width: 1093px;*/
        /*    }*/

        /*    .hero {*/
        /*        width: 1093px;*/
        /*    }*/
        /*}*/
        .about h1 {

            color: #667d01b8;
            font-weight: bold;
        }
    </style>
    <header>
        <div class="hero container-fluid ">
            <div class="row container">


                <div class="col-lg-8 col-sm-12">
                    <h1 class="title-hero">Organic foods of vegetables foods</h1>
                    <h5 class="info-hero dynamic-text">Organic Foods 100%</h5>
                    <a href="/Admin/shop" class="btn">Get Start</a>
                </div>


            </div>

        </div>

    </header>

@endsection
