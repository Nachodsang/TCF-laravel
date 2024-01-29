<style>
    .map-preview {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 160px;
        width: 100%;
        background-color: #f4f4f4;
        font-size: 20px;
        overflow: hidden;
    }

    .editing .-edit,
    .actions-contact.editing .edit-contact {
        display: none;
    }

    .actions-contact:not(.editing) .save-contact,
    .actions-contact:not(.editing) .cancel-contact,
    .actions:not(.editing) .-save,
    .actions:not(.editing) .-cancel {
        display: none;
    }
</style>
<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h2 class="m-0"><span class="badge bg-main"># Contact</span></h2>
    </div>
</div>
<section class="contact-section mb-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" name="telephone" id="telephone" class="form-control"
                                    old="{{ $row->telephone }}" value="{{ $row->telephone }}" pattern="[0-9]+"
                                    @readonly(true)>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    old="{{ $row->mobile }}" value="{{ $row->mobile }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    old="{{ $row->email }}" value="{{ $row->email }}" @readonly(true)>
                                <small id="email-error" class="is-invalid d-none">รูปแบบอีเมลไม่ถูกต้อง</small>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="x">X</label>
                                <input type="text" class="form-control" name="x" id="x"
                                    placeholder="url : https://x.com/" old="{{ $row->x }}"
                                    value="{{ $row->x }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <input type="text" class="form-control" name="fb" id="fb"
                                    placeholder="url : https://www.facebook.com/" old="{{ $row->fb }}"
                                    value="{{ $row->fb }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <input type="text" class="form-control" name="ig" id="ig"
                                    placeholder="url : https://www.instagram.com/" old="{{ $row->ig }}"
                                    value="{{ $row->ig }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="yt">Youtube</label>
                                <input type="text" class="form-control" name="yt" id="yt"
                                    placeholder="url : https://www.youtube.com/" old="{{ $row->yt }}"
                                    value="{{ $row->yt }}" @readonly(true)>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="actions-contact float-right">
                                <button class="btn btn-sm btn-info rounded-pill edit-contact" type="button"><i
                                        class="fas fa-pen"></i> Edit</button>
                                <button class="btn btn-sm btn-warning rounded-pill save-contact" type="button"><i
                                        class="fas fa-save"></i> Save</button>
                                <button class="btn btn-sm btn-danger rounded-pill cancel-contact" type="button"><i
                                        class="fas fa-undo"></i> Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="maps-section">
    <div class="d-flex align-items-center my-3">
        <h5 class="m-0 p-0 align-content-center">Google Map Iframe</h5>
        <a href="javascript:" class="btn btn-primary btn-sm ml-2 add-map"><i class="fas fa-plus"></i></a>
    </div>
    <div class="row mb-3">
        @if (@$map->count() > 0)
            @foreach ($map as $k => $v)
                <div class="col-lg-6 map-item mb-3">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn-close delete-map"></button><span
                                class="text-danger float-right">*กำหนด width="100%"</span>
                            <div class="form-group mt-2">
                                <input name="name" id="name" type="text" class="form-control"
                                    old="{{ $v->name }}" @readonly(true) value="{{ $v->name }}">
                            </div>
                            <div class="form-group">
                                <textarea name="address" id="address" rows="4" class="form-control" old="{{ $v->address }}"
                                    @readonly(true)>{{ $v->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="map" class="form-control" rows="4" old='{{ $v->map }}' @readonly(true)>{{ $v->map }}</textarea>
                            </div>
                            <div class="map-preview border rounded-3" style="">{!! $v->map !!}</div>
                            <div class="actions mt-3 float-right">
                                <button class="btn btn-info rounded-pill -edit btn-sm" aria-label="Edit"><i
                                        class="fas fa-pen"></i> Edit</button>
                                <button class="btn btn-warning rounded-pill -save btn-sm" aria-label="Save"><i
                                        class="fas fa-save"></i> Save</button>
                                <button class="btn btn-danger rounded-pill -cancel btn-sm" aria-label="Cancel"><i
                                        class="fas fa-undo"></i> Cancel</button>
                            </div>
                            <input type="hidden" name="id" value="{{ $v->id }}">
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-lg-6 map-item">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn-close delete-map"></button><span
                            class="text-danger float-right">*กำหนด width="100%"</span>
                        @method('PUT')
                        <div class="form-group mt-2">
                            <input name="name" id="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="address" id="address" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="map" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="map-preview border rounded-3" style="">Preview</div>
                        <div class="actions editing mt-3 float-right">
                            <button class="btn btn-info rounded-pill -edit btn-sm" aria-label="Edit"><i
                                    class="fas fa-pen"></i> Edit</button>
                            <button class="btn btn-warning rounded-pill -save btn-sm" aria-label="Save"><i
                                    class="fas fa-save"></i> Save</button>
                            <button class="btn btn-danger rounded-pill -cancel btn-sm" aria-label="Cancel"><i
                                    class="fas fa-undo"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
