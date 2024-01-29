@php
    $first = \App\Models\HomeMd::where('type', 'first')->first();
    $secondary = \App\Models\HomeMd::where('type', 'secondary')->first();
    $logoH = \App\Models\HomeMd::where('type', 'logo-header')->first();
    $logoF = \App\Models\HomeMd::where('type', 'logo-footer')->first();
    $color = \App\Models\ColorMd::find(1);
@endphp
<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Home</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <div class="card mb-3">
                <div class="card-body">
                    <label for="">Logo in Header</label>
                    <form method="post" action="webpanel/logo/header" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="img-thumbnail mb-2"
                                style="min-height: 75px; display:flex; align-items:center; justify-content:center;">
                                <span id="previewTitle"
                                    @if (@$logoH->detail != '') class="d-none" @endif>Preview</span>
                                <img @if (@$logoH->detail) src="{{ url($logoH->detail) }}" @endif
                                    @if (@$logoH->detail) data-src="{{ url("/$logoH->detail") }}" @endif
                                    class="img-fluid rounded img-preview @if (@$logoH->detail == '') d-none @endif"
                                    style="height: 65px">
                            </div>
                            <input class="form-control" accept="image/*" type="file" name="image">
                        </div>
                        <button class="btn btn-success btn-sm rounded-pill" type="submit">Save</button>
                        <button class="btn btn-secondary btn-sm rounded-pill cancel" type="button">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xs-12">
            <div class="card mb-3">
                <div class="card-body">
                    <form id="formColor">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="color-primary d-grid">
                                        <label for="exampleColorInput" class="form-label">Primary Color</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="color" class="form-control form-control-color p-1"
                                                value="{{ $color->primary }}" title="Choose your color">
                                            <input type="text" name="--c-primary" id="--c-primary"
                                                class="form-control" current="{{ $color->primary }}"
                                                value="{{ $color->primary }}">
                                            <button class="input-group-button btn btn-outline-secondary reset"
                                                type="button">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="color-primary d-grid">
                                        <label for="exampleColorInput" class="form-label">Secondary Color</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="color" class="form-control form-control-color p-1"
                                                value="{{ $color->secondary }}" title="Choose your color">
                                            <input type="text" name="--c-secondary" id="--c-secondary"
                                                class="form-control" current="{{ $color->secondary }}"
                                                value="{{ $color->secondary }}">
                                            <button class="input-group-button btn btn-outline-secondary reset"
                                                type="button">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="color-primary d-grid">
                                        <label for="exampleColorInput" class="form-label">Button Primary Color</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="color" class="form-control form-control-color p-1"
                                                value="{{ $color->button_primary }}" title="Choose your color">
                                            <input type="text" name="--btn-primary" id="--btn-primary"
                                                class="form-control" current="{{ $color->button_primary }}"
                                                value="{{ $color->button_primary }}">
                                            <button class="input-group-button btn btn-outline-secondary reset"
                                                type="button">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="color-primary d-grid">
                                        <label for="exampleColorInput" class="form-label">Button Secondary Color</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="color" class="form-control form-control-color p-1"
                                                value="{{ $color->button_secondary }}" title="Choose your color">
                                            <input type="text" name="--btn-secondary" id="--btn-secondary"
                                                class="form-control" current="{{ $color->button_secondary }}"
                                                value="{{ $color->button_secondary }}">
                                            <button class="input-group-button btn btn-outline-secondary reset"
                                                type="button">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-sm rounded-pill" type="submit">Save</button>
                        <button class="btn btn-secondary btn-sm rounded-pill cancel" type="button">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" id="homeTopForm"
                        action="webpanel/dashboard/home-top">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-12">
                                <label for="detail_first"class="form-label">Detail First</label>
                                <div class="sk-area" data-lang="th">
                                    <textarea name="detail_first" id="detail_first" class="sk-editor" hidden="">{{ @$first->detail }}</textarea>
                                </div>
                            </div>
                            <input type="hidden" value="first" name="type" id="type">
                            <div class="col-12 mt-3">
                                <div class="form-group float-right">
                                    <button class="btn btn-success rounded-pill" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <div class="card mb-3">
                <div class="card-body">
                    <label for="">Logo in Footer</label>
                    <form action="webpanel/logo/footer" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="img-thumbnail mb-2"
                                style="min-height: 75px; display:flex; align-items:center; justify-content:center;">
                                <span id="previewTitle"
                                    @if (@$logoF->detail != '') class="d-none" @endif>Preview</span>
                                <img @if (@$logoF->detail) src="{{ url($logoF->detail) }}" @endif
                                    @if (@$logoF->detail) data-src="{{ url($logoF->detail) }}" @endif
                                    class="img-fluid rounded img-preview @if (@!$logoF->detail) d-none @endif"
                                    style="height: 65px">
                            </div>
                            <input class="form-control" accept="image/*" type="file" id="image"
                                name="image">
                        </div>
                        <button class="btn btn-success btn-sm rounded-pill" type="submit">Save</button>
                        <button class="btn btn-secondary btn-sm rounded-pill cancel" type="button">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('change', function(e) {
        const file = e.target.closest('input[type="file"]');
        if (file) {
            const [img] = file.files;
            const preview = file.previousElementSibling.querySelector('.img-preview');
            const previewTitle = file.previousElementSibling.querySelector('span');
            if (img) {
                preview.setAttribute('src', URL.createObjectURL(img));
                preview.classList.remove('d-none');
                previewTitle.classList.add('d-none');
            } else {
                preview.classList.add('d-none');
                previewTitle.classList.remove('d-none');
            }
        }
        const color = e.target.closest('.form-control-color');
        if (color) {
            color.nextElementSibling.value = color.value;
        }
    });
    document.addEventListener('click', function(e) {
        cancel = e.target.closest('.cancel');
        if (cancel) {
            const preview = cancel.closest('form').querySelector('.img-preview');
            const previewTitle = cancel.closest('form').querySelector('span');
            const original = cancel.closest('form').querySelector('.img-preview').getAttribute('data-src');
            cancel.closest('form').querySelector('input[type="file"]').value = '';
            cancel.closest('form').querySelector('.img-preview').setAttribute('src', `${original}`);
            preview.classList.remove('d-none');
            previewTitle.classList.add('d-none');
        }
        const reset = e.target.closest('.reset');
        if (reset) {
            const current = reset.previousElementSibling;
            current.value = current.getAttribute('current');
            reset.closest('.input-group').querySelector('.form-control-color').value = current.value;
        }
    })
    document.querySelector('#formColor').addEventListener('submit', function(e) {
        e.preventDefault();
        UpdateColor({
            '--c-primary': this.querySelector('input[name="--c-primary"]').value,
            '--c-secondary': this.querySelector('input[name="--c-secondary"]').value,
            '--btn-primary': this.querySelector('input[name="--btn-primary"]').value,
            '--btn-secondary': this.querySelector('input[name="--btn-secondary"]').value,
        }).then(res => {
            if (res.status == true) {
                fetch('webpanel/config/set/color');
                if (confirm('Color has been updated.') === true) {
                    location.reload();
                }
            }
        })
    })

    async function UpdateColor(data) {
        const request = await fetch('webpanel/color/update', {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(data)
        });
        const response = await request.json();
        return response;
    }
</script>
