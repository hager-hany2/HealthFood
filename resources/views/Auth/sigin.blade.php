@extends('layout')
@section('title','Sign in ')

@section('content')
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="{{route('login.save')}}" method="POST" autocomplete="off" class="sign-in-form">
                        @csrf
                        <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="27" x="0" y="0"
                                 viewBox="0 0 472 472" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                 class=""><g>
                                    <path
                                        d="M100 216h-8c-8.837 0-16 7.163-16 16v8c.026 22.08 17.92 39.974 40 40h8c8.837 0 16-7.163 16-16v-8c-.026-22.08-17.92-39.974-40-40z"
                                        style="" fill="#33bc00" data-original="#33bc00" class=""></path>
                                    <path
                                        d="M148 216h-8c-8.837 0-16 7.163-16 16v8c.026 22.08 17.92 39.974 40 40h8c8.837 0 16-7.163 16-16v-8c-.026-22.08-17.92-39.974-40-40z"
                                        style="" fill="#79d60d" data-original="#79d60d">
                                    </path>
                                    <path
                                        d="M84 264h-8c-8.837 0-16 7.163-16 16v8c.026 22.08 17.92 39.974 40 40h8c8.837 0 16-7.163 16-16v-8c-.026-22.08-17.92-39.974-40-40z"
                                        style="" fill="#025902" data-original="#025902"></path>
                                    <path
                                        d="M132 264h-8c-8.837 0-16 7.163-16 16v8c.026 22.08 17.92 39.974 40 40h8c8.837 0 16-7.163 16-16v-8c-.026-22.08-17.92-39.974-40-40z"
                                        style="" fill="#008100" data-original="#008100" class=""></path>
                                    <path
                                        d="M180 264h-8c-8.837 0-16 7.163-16 16v8c.026 22.08 17.92 39.974 40 40h8c8.837 0 16-7.163 16-16v-8c-.026-22.08-17.92-39.974-40-40z"
                                        style="" fill="#33bc00" data-original="#33bc00" class=""></path>
                                    <path
                                        d="m292.407 205.475 8.003-23.997 15.178 5.062-8.003 23.997-15.178-5.062zM324.411 205.439l8.003-23.997 15.178 5.062-8.003 23.997-15.178-5.062zM356.423 205.466l8.003-23.997 15.178 5.062-8.003 23.997-15.178-5.062z"
                                        style="" fill="#008100" data-original="#008100" class=""></path>
                                    <path d="M300 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z"
                                          style="" fill="#ff8800" data-original="#ff8800"></path>
                                    <path d="M332 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z"
                                          style="" fill="#ff6536" data-original="#ff6536" class=""></path>
                                    <path d="M364 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z"
                                          style="" fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M260 256h144v64H260v-64z" style="" fill="#ffa900" data-original="#ffa900"
                                          class=""></path>
                                    <path d="M444 328H28V136h16v176h384V136h16v192z" style="" fill="#763a02"
                                          data-original="#763a02"></path>
                                    <path d="M212 0h48v112h-48V0zM164 112V0h-35.552L116 112h48z" style="" fill="#de0418"
                                          data-original="#de0418"></path>
                                    <path
                                        d="M164 0h48v112h-48V0zM116 112 128.448 0h-35.56L68 112h48zM404 112 379.112 0h-35.56L356 112h48z"
                                        style="" fill="#fbbf00" data-original="#fbbf00"></path>
                                    <path d="M92.888 0H68L20 96v16h48L92.888 0zM356 112 343.552 0H308v112h48z" style=""
                                          fill="#de0418" data-original="#de0418"></path>
                                    <path d="M260 0h48v112h-48V0z" style="" fill="#fbbf00"
                                          data-original="#fbbf00"></path>
                                    <path d="M404 0h-24.888L404 112h48V96L404 0z" style="" fill="#de0418"
                                          data-original="#de0418"></path>
                                    <path d="M20 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24H20z" style=""
                                          fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M68 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24H68z" style=""
                                          fill="#ffdb0c" data-original="#ffdb0c" class=""></path>
                                    <path d="M116 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M164 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ffdb0c" data-original="#ffdb0c" class=""></path>
                                    <path d="M212 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M260 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ffdb0c" data-original="#ffdb0c" class=""></path>
                                    <path d="M308 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M356 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style=""
                                          fill="#ffdb0c" data-original="#ffdb0c" class=""></path>
                                    <path d="M404 136c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48v24z" style=""
                                          fill="#ff421d" data-original="#ff421d" class=""></path>
                                    <path d="M12 312h448v160H12V312z" style="" fill="#ffdb0c" data-original="#ffdb0c"
                                          class=""></path>
                                    <path d="M284 280h96v16h-96v-16z" style="" fill="#e47700" data-original="#e47700"
                                          class=""></path>
                                    <path d="m294.343 362.363 24.002-24.002 11.314 11.314-24.002 24.002-11.314-11.314z"
                                          style="" fill="#33bc00" data-original="#33bc00" class=""></path>
                                    <path d="M308 368h24v16h-24v-16z" style="" fill="#33bc00" data-original="#33bc00"
                                          class=""></path>
                                    <path
                                        d="M283.28 352h-2.56a32.802 32.802 0 0 0-26.632 13.704l-30.344 42.488c-6.455 9.045-4.356 21.61 4.689 28.065A20.122 20.122 0 0 0 240.12 440h1.024a20.272 20.272 0 0 0 8.992-2.12l47.784-23.896c16.162-8.083 22.711-27.738 14.628-43.9A32.72 32.72 0 0 0 283.28 352z"
                                        style="" fill="#ff6536" data-original="#ff6536" class=""></path>
                                    <path
                                        d="M196 360h-8c-8.837 0-16 7.163-16 16v8c.035 30.913 25.087 55.965 56 56h8c8.837 0 16-7.163 16-16v-8c-.035-30.913-25.087-55.965-56-56z"
                                        style="" fill="#79d60d" data-original="#79d60d"></path>
                                </g>
                        </svg>
                            <h4>Healthy Food</h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="{{route('Register')}}" class="toggle">Sign up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input
                                    type="text"

                                    class="input-field"
                                    autocomplete="off"
                                    name="email"
                                    required
                                />
                                <label>email</label>
                            </div>
                            @error('name')
                            <p style="    position: relative;top: -24px;" class=" text-danger m-1">{{$message}}</p>
                            @enderror

                            <div class="input-wrap">
                                <input
                                    type="password"
                                    name="password"
                                    class="input-field"
                                    autocomplete="off"
                                    required
                                />
                                <label>Password</label>
                            </div>
                            @error('password')
                            <p style="    position: relative;top: -24px;" class=" text-danger m-1">{{$message}}</p>
                            @enderror

                            @if($errors->any())
                                @foreach($errors->all() as $err)
                                    <p class="alert alert-danger">{{$err}}</p>
                                @endforeach
                            @endif

                            <input type="submit" value="Sign In" class="sign-btn"/>

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>


                </div>

                <div class="imgs ">
                    <div class="images-wrapper">
                        <img src="./img/image3.avif" class="image img-1 show" alt=""/>

                    </div>

                </div>
            </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
@endsection
