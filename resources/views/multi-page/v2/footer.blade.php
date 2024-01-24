<!-- Back to Top -->
{{-- <a href="#" class="btn btn-lg btn-top btn-lg-square rounded-circle back-to-top "><img
        src="{{ config('web.folder_prefix') }}/images/triangle.png">Top</a>
<footer class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="@if (@$logoFooter->detail) {{ @$logoFooter->detail }}@else/images/no_image.webp @endif"
                    class="img-fluid logo-footer">
            </div>
            <div class="col-lg-9 d-flex align-items-center justify-content-end">
                <ul class="link-page mb-0">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/service') }}">Service</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <hr class="pb-1">
            @php
                $contact = \App\Models\ContactMd::first();
                $address = \App\Models\AddressMd::all();
                $social = \App\Models\contactMd::first();
            @endphp
            <div class="col-lg-7">
                @if ($address->count() > 0)
                    @foreach ($address as $k => $v)
                        <div class="d-flex addressFooter">
                            <div>
                                <span class="material-symbols-outlined point">
                                    highlighter_size_3
                                </span>
                            </div>
                            <div>
                                <strong class="mb-2">{{ $v->name }}</strong>
                                <div class="my-2" style="max-width: 500px">{{ $v->address }}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="d-flex">
                    <div>
                        <span class="material-symbols-outlined point">
                            highlighter_size_3
                        </span>
                    </div>
                    <div>
                        <strong class="mb-2">Contact</strong>
                        <div class="my-2">Tel : {{ @$contact->telephone }}</div>
                        <div class="my-2">Mobile : {{ @$contact->mobile }}</div>
                        <div class="my-2">Email : {{ @$contact->email }}</div>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div>
                        <span class="material-symbols-outlined point">
                            highlighter_size_3
                        </span>
                    </div>
                    <div>
                        <strong class="mb-2"> Follow</strong>
                        <div class="social">
                            <ul class="right-icons">
                                <li><a class="icon-social me-1" target="_blank"
                                        @if (@$social->x) href="{{ $social->x }}" @endif><img
                                            src="{{ config('web.folder_prefix') }}\images\icon\x-twitter.png"
                                            class="img-fluid" alt="x-twitter"></a></li>
                                <li><a class="icon-social me-1" target="_blank"
                                        @if (@$social->fb) href="{{ $social->fb }}" @endif><img
                                            src="{{ config('web.folder_prefix') }}\images\icon\facebook.png"
                                            class="img-fluid" alt="facebook"></a></li>
                                <li><a class="icon-social me-1" target="_blank"
                                        @if (@$social->ig) href="{{ $social->ig }}" @endif><img
                                            src="{{ config('web.folder_prefix') }}\images\icon\instagram-02.png"
                                            class="img-fluid" alt="instagram"></a></li>
                                <li><a class="icon-social me-1" target="_blank"
                                        @if (@$social->yt) href="{{ $social->yt }}" @endif><img
                                            src="{{ config('web.folder_prefix') }}\images\icon\youtube.png"
                                            class="img-fluid" alt="youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<footer class="footer section">
    @php
        $contact = \App\Models\ContactMd::first();
        $address = \App\Models\AddressMd::all();
        $social = \App\Models\contactMd::first();
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">

                <div class="footer-heading">
                    <a href="{{ url('/') }}">
                        {{-- <img src="images/logo/logoTCF.png" class="logo"> --}}
                        <img src="@if (@$logoFooter->detail) {{ @$logoFooter->detail }}@else/images/no_image.webp @endif"
                            class="logo">
                    </a>
                </div>

                <p class="menu">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/service') }}">Service</a>
                    <a href="{{ url('/consultant') }}">Consultant</a>
                    <a href="{{ url('/m&a') }}">M&A</a>
                    <a href="{{ url('/blog') }}">BLOGS</a>
                    <a href="{{ url('/contacts') }}">Contact</a>
                </p>
                <ul class="footer-social p-0">
                    <li class="animate"><a @if (@$social->x) href="{{ $social->x }}" @endif
                            data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><svg
                                xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path fill="#ffff"
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg></a></li>
                    <li class="animate"><a @if (@$social->fb) href="{{ $social->fb }}" @endif
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Facebook"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path fill="#ffff"
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg></a></li>
                    <li class="animate"><a @if (@$social->ig) href="{{ $social->ig }}" @endif
                            data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path fill="#ffff"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg></a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">

                @if ($address->count() > 0)
                    @foreach ($address as $k => $v)
                        <div>
                            {{-- <strong class="mb-2">{{ $v->name }}</strong> --}}
                            <div class="copyright">{{ $v->address }}</div>
                        </div>
                    @endforeach
                @endif


                <div class="copyright">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is developed <i class="ion-ios-heart"
                        aria-hidden="true"></i> by <a href="https://at-once.info" target="_blank">at-once.info</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" id="back-to-top" title="Back to top"><span class="material-symbols-outlined">
        arrow_upward
    </span></a>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('#back-to-top').fadeIn(200);
            } else {
                $('#back-to-top').fadeOut(200);
            }
        });

        // Animate the scroll to top
        $('#back-to-top').click(function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 300);
        })
    });
</script>
