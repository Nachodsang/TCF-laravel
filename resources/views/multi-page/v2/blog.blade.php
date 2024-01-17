<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nankai Express (Thailand) Co., Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="นำเข้า-ส่งออก, คลังสินค้า, การขนส่ง, บริการด้านโลจิสติกส์" name="keywords">
    <meta content="Is service facilitator about logistics (Import-Export, Warehouse,Transportation) and include about install machinery by specialist." name="description">
    <link href="{{ config('web.folder_prefix') }}/images/logo/logo-nankai-ico.ico" rel="icon">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ config('web.folder_prefix') }}/css/animated.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
</head>

<body>

    @include(config('web.folder_prefix') . '/header')

    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax"
            data-bg-img="{{ config('web.folder_prefix') }}/images/gallery_11092023-1459541694419194482.jpeg"
            data-bg-opacity="1"
            style="background-image: url(&quot;images/gallery_11092023-1459541694419194482.jpeg&quot;); opacity: 1;">
        </div>
        <div class="overlay-color" data-bg-opacity=".75" style="opacity: 0.75;"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">BLOG</h1>
                <div class="row">
                    <div class="col-12 offset-lg-2 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <p class="text-uppercase">We have a global network to facilitate our customer. However, The
                            aim of company is develop about logistics service all the time for customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg bg-02">
        <div id="blog" class="blog section">
            <div class="container-xxl py-6">
                <div class="row g-5 d-flex justify-content-center " >     
                    @if(@$blogs->links->allPage > 0 )               
                        @foreach($blogs->data as $i => $v)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.{{$i}}s">    
                            <a href="{{$v->url}}" class="blog-img">
                                <div class="hover-14">
                                    <figure><img src="{{$v->cover}}" class="img-fluid"></figure>
                                </div>
                                <h5 class="my-3">{{$v->name}}</h5>
                            </a>
                        </div>
                        @endforeach
                    @else
                        <div class="col-lg-12 text-center">ไม่พบทความ</div>
                    @endif
                </div>
            </div>
            @php
                $page = Request::get('page');
                $prev = ($page>1)? $page-1 : 0;
                $next = $page==''? 2 : $page +1;
                $prevPage = ($page>1) ? "blog?page=$prev" : "javascript:" ;
                $nextPage = ($page < @$blogs->links->allPage) ? "blog?page=$next" : "javascript:" ;
            @endphp
            @if(@$blogs->links->allPage > 0 )   
            <div class="pagination-area mt-5">
                <div class="container-xxl">
                    <div class="row d-flex justify-content-between">
                        <div class="col-auto">
                            <a href="{{$prevPage}}"class="prev-page @if($prev==0)d-none @endif">ก่อนหน้า</a>
                        </div>
                        <div class="col-auto">
                            @if(@$blogs->links->allPage)
                            <select name="page" class="form-select form-select-sm paginate">
                                @for($i=1; $i<=$blogs->links->allPage; $i++)
                                <option value="blog?page={{$i}}" @if(Request::get('page')==$i)selected @endif>{{$i}}</option>
                                @endfor
                            </select>
                            @endif
                        </div>
                        <div class="col-auto">
                            <a href="{{$nextPage}}"class="next-page font-weight-bold @if($page>=$blogs->links->allPage)d-none @endif">ถัดไป</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>


    @include(config('web.folder_prefix') . '/footer')

    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <script>
        document.addEventListener('change',function(e){
            const paginate = e.target.closest('.paginate');
            if (paginate) {
                window.location.href = paginate.value;
            }
        })
    </script>
</body>

</html>
