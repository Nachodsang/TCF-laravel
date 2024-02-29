<link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

<div class="row d-none w-100 " id="cookies">
    <div class=" col-xl-2  col-lg-4 col-12 bg-white p-4  shadow-lg  position-relative">

        <div class="d-flex flex-column align-items-center gap-3">
            <div class="c-secondary d-flex align-items-center  justify-content-center gap-2">
                <i class="fas fa-cookie fa-2x"></i>
                <h3 class="m-0">
                    We use cookies
                </h3>
            </div>
            <p class="" style="font-size:0.8rem">Cookies help us deliver the best experience on our website. By
                using
                our website, you agree to the use of
                cookies.</p>
            <button class="btn btn-secondary btn-sm" id="cookiesBtn">Accept Cookies</button>

        </div>


    </div>
</div>
<script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
<script>
    // check for cookie then
    setTimeout(() => {
        $('#cookies').removeClass('d-none')
        $('#cookies').addClass('d-block')
    }, 3500);

    $('#cookiesBtn').on('click', (e) => {
        $('#cookies').removeClass('d-block')
        $('#cookies').addClass('d-none')
    });
</script>
