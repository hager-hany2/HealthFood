<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="{{asset('Style/style.css')}}"/>

    <nav style="    background-color: #e5e7e221;" class="navbar navbar-expand-lg  p-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#button"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" herf="#button"></span>
        </button>
        <div class="collapse navbar-collapse" id="button">
            <svg style="    margin-right: -55px;margin-left: 60px;" xmlns="http://www.w3.org/2000/svg" version="1.1"
                 xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="27" x="0" y="0" viewBox="0 0 472 472"
                 style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
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
                    <path d="M300 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z" style=""
                          fill="#ff8800" data-original="#ff8800"></path>
                    <path d="M332 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z" style=""
                          fill="#ff6536" data-original="#ff6536" class=""></path>
                    <path d="M364 200c-13.255 0-24 10.745-24 24v40h48v-40c0-13.255-10.745-24-24-24z" style=""
                          fill="#ff421d" data-original="#ff421d" class=""></path>
                    <path d="M260 256h144v64H260v-64z" style="" fill="#ffa900" data-original="#ffa900" class=""></path>
                    <path d="M444 328H28V136h16v176h384V136h16v192z" style="" fill="#763a02"
                          data-original="#763a02"></path>
                    <path d="M212 0h48v112h-48V0zM164 112V0h-35.552L116 112h48z" style="" fill="#de0418"
                          data-original="#de0418"></path>
                    <path
                        d="M164 0h48v112h-48V0zM116 112 128.448 0h-35.56L68 112h48zM404 112 379.112 0h-35.56L356 112h48z"
                        style="" fill="#fbbf00" data-original="#fbbf00"></path>
                    <path d="M92.888 0H68L20 96v16h48L92.888 0zM356 112 343.552 0H308v112h48z" style="" fill="#de0418"
                          data-original="#de0418"></path>
                    <path d="M260 0h48v112h-48V0z" style="" fill="#fbbf00" data-original="#fbbf00"></path>
                    <path d="M404 0h-24.888L404 112h48V96L404 0z" style="" fill="#de0418"
                          data-original="#de0418"></path>
                    <path d="M20 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24H20z" style="" fill="#ff421d"
                          data-original="#ff421d" class=""></path>
                    <path d="M68 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24H68z" style="" fill="#ffdb0c"
                          data-original="#ffdb0c" class=""></path>
                    <path d="M116 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ff421d"
                          data-original="#ff421d" class=""></path>
                    <path d="M164 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ffdb0c"
                          data-original="#ffdb0c" class=""></path>
                    <path d="M212 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ff421d"
                          data-original="#ff421d" class=""></path>
                    <path d="M260 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ffdb0c"
                          data-original="#ffdb0c" class=""></path>
                    <path d="M308 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ff421d"
                          data-original="#ff421d" class=""></path>
                    <path d="M356 112v24c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48z" style="" fill="#ffdb0c"
                          data-original="#ffdb0c" class=""></path>
                    <path d="M404 136c0 13.255 10.745 24 24 24s24-10.745 24-24v-24h-48v24z" style="" fill="#ff421d"
                          data-original="#ff421d" class=""></path>
                    <path d="M12 312h448v160H12V312z" style="" fill="#ffdb0c" data-original="#ffdb0c" class=""></path>
                    <path d="M284 280h96v16h-96v-16z" style="" fill="#e47700" data-original="#e47700" class=""></path>
                    <path d="m294.343 362.363 24.002-24.002 11.314 11.314-24.002 24.002-11.314-11.314z" style=""
                          fill="#33bc00" data-original="#33bc00" class=""></path>
                    <path d="M308 368h24v16h-24v-16z" style="" fill="#33bc00" data-original="#33bc00" class=""></path>
                    <path
                        d="M283.28 352h-2.56a32.802 32.802 0 0 0-26.632 13.704l-30.344 42.488c-6.455 9.045-4.356 21.61 4.689 28.065A20.122 20.122 0 0 0 240.12 440h1.024a20.272 20.272 0 0 0 8.992-2.12l47.784-23.896c16.162-8.083 22.711-27.738 14.628-43.9A32.72 32.72 0 0 0 283.28 352z"
                        style="" fill="#ff6536" data-original="#ff6536" class=""></path>
                    <path
                        d="M196 360h-8c-8.837 0-16 7.163-16 16v8c.035 30.913 25.087 55.965 56 56h8c8.837 0 16-7.163 16-16v-8c-.035-30.913-25.087-55.965-56-56z"
                        style="" fill="#79d60d" data-original="#79d60d"></path>
                </g>
                        </svg>
            <a style="    margin-left: 64px;" class="navbar-brand " href="#">Healthy Food</a>
            <ul style="    margin: auto;" class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active ">
                    <a class="nav-link" href="/welcome">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/showServices">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin/shop">shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
                @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Sigin</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Sigout</a>
                    </li>
                @endauth
                @if(Auth::check() && Auth::user()->type === 'admin')
                    <li><a href="{{ route('dashboard.show') }}" class="nav-link">Admin Dashboard</a></li>
                    <!-- Add more admin-specific links here -->
                @endif
            </ul>

        </div>
        {{--        @if(session('cart'))--}}

        <div><a href="{{ route('cart.index') }}" class=""
                style="margin-right: 13px;text-decoration: none;color: #e3c528;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="#e3c528"
                     fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/>
                </svg>
                <sup class="">{{count((array)session('cart'))}}</sup>
            </a>
            <a href="/profile">
                <svg style="  margin-right: 48px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     fill="currentColor"
                     class="bi bi-person-fill profile" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
            </a>
        </div>

        {{--        @endif--}}

    </nav>
</head>
<body>
@yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="{{asset('app.js')}}"></script>

</html>
