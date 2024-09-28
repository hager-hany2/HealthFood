@extends('layout')
@section('title','contactus')
@section('content')
    <main style="  background-color: #f3f2f2;">
        <div class="box">
            <div class="inner-box contact_us">
                <div class="forms-wrap">
                    <form method="post" action="{{route('contact.save')}}" autocomplete="off" class="sign-in-form">
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
                            <h2>Contact Us</h2>

                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input
                                    type="text"

                                    class="input-field"
                                    autocomplete="off"
                                    name="name"
                                    value="{{old('name')}}"
                                    placeholder="Name"
                                    required

                                />


                            </div>
                            @error('name')
                            <p style="    position: relative;top: -24px;" class=" text-danger m-1">{{$message}}</p>
                            @enderror

                            <div class="input-wrap">
                                <input
                                    type="text"
                                    class="input-field"
                                    autocomplete="off"
                                    name="phone"
                                    value="{{old('phone')}}"
                                    placeholder="phone"
                                    required
                                />


                            </div>
                            @error('phone')
                            <p style="    position: relative;top: -24px;" class=" text-danger">{{$message}}</p>
                            @enderror
                            <div class="input-wrap">

                                <textarea placeholder="Message" class="input-field" name="info"
                                          value="{{old('info')}}">{{old('info')}}</textarea>


                            </div>
                            @error('info')
                            <p style="    position: relative;top: -24px;" class=" text-danger">{{$message}}</p>
                            @enderror

                            @if(session('success'))
                                <p class="alert alert-info">{{session('success')}}</p>
                            @endif
                            <input type="submit" value="send" class="sign-btn"/>


                        </div>

                    </form>


                </div>

                <div class="imgs" id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.361281103524!2d-74.00356277573063!3d40.71006263773465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sar!2seg!4v1725908252015!5m2!1sar!2seg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contact_info">

                        <h4>Contact Info</h4>

                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="20" height="20" x="0" y="0" viewBox="0 0 512 512"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                <path
                                    d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 278.719c-51.442 0-93.292-41.851-93.292-93.293S204.559 92.134 256 92.134s93.291 41.851 93.291 93.293-41.85 93.292-93.291 93.292z"
                                    fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g></svg>
                        <span style="    font-size: 13px;">Downtown Conference Center</span>


                        <svg style=" margin-left: 13px;" xmlns="http://www.w3.org/2000/svg" version="1.1"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                             viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 512 512" xml:space="preserve"
                             class="">
                               <g>
                                   <path
                                       d="M365.354 317.9c-15.7-15.5-35.3-15.5-50.9 0-11.9 11.8-23.8 23.6-35.5 35.6-3.2 3.3-5.9 4-9.8 1.8-7.7-4.2-15.9-7.6-23.3-12.2-34.5-21.7-63.4-49.6-89-81-12.7-15.6-24-32.3-31.9-51.1-1.6-3.8-1.3-6.3 1.8-9.4 11.9-11.5 23.5-23.3 35.2-35.1 16.3-16.4 16.3-35.6-.1-52.1-9.3-9.4-18.6-18.6-27.9-28-9.6-9.6-19.1-19.3-28.8-28.8-15.7-15.3-35.3-15.3-50.9.1-12 11.8-23.5 23.9-35.7 35.5-11.3 10.7-17 23.8-18.2 39.1-1.9 24.9 4.2 48.4 12.8 71.3 17.6 47.4 44.4 89.5 76.9 128.1 43.9 52.2 96.3 93.5 157.6 123.3 27.6 13.4 56.2 23.7 87.3 25.4 21.4 1.2 40-4.2 54.9-20.9 10.2-11.4 21.7-21.8 32.5-32.7 16-16.2 16.1-35.8.2-51.8-19-19.1-38.1-38.1-57.2-57.1zM346.254 238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89-25.7-25.7-58.2-41.9-94-46.9l-5.2 37.1c27.7 3.9 52.9 16.4 72.8 36.3 18.8 18.8 31.1 42.6 35.6 68.8zM403.954 77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2 37.1c51.4 7.2 98 30.5 134.8 67.2 34.9 34.9 57.8 79 66.1 127.5l36.9-6.3c-9.7-56.2-36.2-107.2-76.6-147.7z"
                                       fill="#000000" opacity="1" data-original="#000000" class=""></path>
                               </g>
                           </svg>
                        <span style="    font-size: 13px;">+201002444738</span>

                        <div>
                            <svg style="    margin-left: 3px;" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                 class=""><g>
                                    <path
                                        d="m331.756 277.251-42.881 43.026c-17.389 17.45-47.985 17.826-65.75 0l-42.883-43.026L26.226 431.767C31.959 434.418 38.28 436 45 436h422c6.72 0 13.039-1.58 18.77-4.232L331.756 277.251z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path
                                        d="M467 76H45c-6.72 0-13.041 1.582-18.772 4.233l164.577 165.123c.011.011.024.013.035.024a.05.05 0 0 1 .013.026l53.513 53.69c5.684 5.684 17.586 5.684 23.27 0l53.502-53.681s.013-.024.024-.035c0 0 .024-.013.035-.024L485.77 80.232C480.039 77.58 473.72 76 467 76zM4.786 101.212C1.82 107.21 0 113.868 0 121v270c0 7.132 1.818 13.79 4.785 19.788l154.283-154.783L4.786 101.212zM507.214 101.21 352.933 256.005 507.214 410.79C510.18 404.792 512 398.134 512 391V121c0-7.134-1.82-13.792-4.786-19.79z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                </g></svg>
                            <span style="  font-size: 13px;">hagerhany@gmail.com</span>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </main>


    <!-- Javascript file -->

    <script src="app.js"></script>
@endsection
