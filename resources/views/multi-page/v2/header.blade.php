@php
    $logoHeader = \App\Models\HomeMd::where('type', 'logo-header')->first();
@endphp

<header class=" sticky-top">
    <nav class="navbar navbar-expand-xl navbar-bg ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="@if (@$logoHeader->detail) {{ @$logoHeader->detail }}@else/images/no_image.webp @endif"
                    class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center pb-4 pb-xl-0 " id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" href={{ url('/about') }}>About</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a name="service" href={{ url('/service') }} class="nav-link dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach (\App\Models\ServiceCatMd::where('status', 1)->orderBy('sort')->get() as $k => $v)
                                @if ($v->type === 'sub-page')
                                    <li><a name="header-menu" class="header-dropdown dropdown-item text-muted"
                                            href="{{ url('/service/category/' . $v->url) }}"><small>{{ $v->name }}</small>
                                        </a>
                                    </li>
                                @else
                                    <li><a name="header-menu" class="header-dropdown dropdown-item text-muted"
                                            href="{{ url('/' . $v->url) }}"><small>{{ $v->name }}</small></a>
                                    </li>
                                @endif
                            @endforeach

                            <li><a name="header-menu" class="dropdown-item text-muted"
                                    href={{ url('/service') }}>All</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" href={{ url('/consultant') }}>CONSULTANT</a>
                    </li>
                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" href={{ url('/m&a') }}>M&A</a>
                    </li>
                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" href={{ url('/blog') }}>Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a name="header-menu" class="nav-link" href={{ url('/contact') }}>Contact</a>
                    </li>
                </ul>
                <div id="google_translate_element"></div>
            </div>


        </div>
    </nav>
</header>


<script>
    var url = window.location.href;

    var els = document.querySelectorAll(".navbar-nav a");
    els.forEach((i) => {
        (i?.href === url || url?.includes(i?.name)) && i.classList.add("active")
    })
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'auto',
            includedLanguages: "en,th,ja",
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&hl=en">
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
