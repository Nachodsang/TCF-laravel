<style>
    .editing .edit{
        display: none;
    }

    .actions:not(.editing) .save,
    .actions:not(.editing) .cancel {
        display: none;
    }
</style>
<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h2 class="m-0"><span class="badge bg-main"># Our Client</span></h2>
    </div>
</div>
<section class="client-section">
    <div class="d-flex align-items-center my-3">
        <h5 class="m-0 p-0 align-content-center">Add Client</h5>
        <a href="javascript:" class="btn btn-primary btn-sm ml-2 add-client"><i class="fas fa-plus"></i></a>
    </div>
    <div class="row">
        @if ($client->count() > 0)
            @foreach ($client as $k => $v)
                <div class="col-lg-4 client-item mb-3">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn-close delete-client" aria-label="Close"></button>
                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="img-thumbnail mb-2" style="min-height: 150px; display:flex; align-items:center; justify-content:center;">
                                            <img class="img-fluid rounded" id="imgPreview" name="imgPreview" old="{{ $v->image }}" src="{{ $v->image }}" style="height: 100%; object-fit: contain;">
                                        </div>
                                        <input class="form-control" accept="image/*" type="file" id="image" name="image" @disabled(true)>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="alt">Image Alt :</label>
                                        <input class="form-control" type="text" name="alt" id="alt" old="{{ $v->alt }}" value="{{ $v->alt }}" @readonly(true)>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Image Title :</label>
                                        <input class="form-control" type="text" name="title" id="title" old="{{ $v->title }}" value="{{ $v->title }}" @readonly(true)>
                                    </div>
                                    <div class="actions float-right">
                                        <button class="btn btn-info rounded-pill edit btn-sm"><i class="fas fa-pen"></i> Edit</button>
                                        <button class="btn btn-warning rounded-pill save btn-sm"><i class="fas fa-save"></i> Save</button>
                                        <button class="btn btn-danger rounded-pill cancel btn-sm"><i class="fas fa-undo"></i> Cancel</button>
                                    </div>
                                    <input type="hidden" name="id" value="{{ $v->id }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-lg-4 client-item mb-3">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn-close delete-client" aria-label="Close"></button>
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="img-thumbnail mb-2" style="min-height: 200px; display:flex; align-items:center; justify-content:center;">
                                        <span id="previewTitle">Preview</span>
                                        <img class="img-fluid rounded" id="imgPreview" name="imgPreview" src="" style="height: 100%; object-fit: contain;">
                                    </div>
                                    <input class="form-control" accept="image/*" type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="alt">Image Alt :</label>
                                    <input class="form-control" type="text" name="alt" id="alt">
                                </div>
                                <div class="form-group">
                                    <label for="title">Image Title :</label>
                                    <input class="form-control" type="text" name="title" id="title">
                                </div>
                                <div class="actions editing float-right">
                                    <button class="btn btn-info rounded-pill edit btn-sm"><i class="fas fa-pen"></i> Edit</button>
                                    <button class="btn btn-warning rounded-pill save btn-sm"><i class="fas fa-save"></i> Save</button>
                                    <button class="btn btn-danger rounded-pill cancel btn-sm"><i class="fas fa-undo"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
