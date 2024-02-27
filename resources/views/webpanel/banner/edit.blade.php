<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Banner / Edit</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="form-floating" method="POST" id="bannerEditForm" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')
                        <input type="hidden" value="{{ $banner->id }}" id="bannerId" name="bannerId">
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <h6>Image Title : </h6>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="imgTitle" name="imgTitle"
                                        placeholder="" value="{{ $banner->title }}">
                                    <label for="imgTitle">Image Title</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h6>Image Alt : </h6>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="imgAlt" name="imgAlt"
                                        placeholder="" value="{{ $banner->alt }}">
                                    <label for="imgAlt">Image Alt</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-6 col-md-12">
                                <h6>Image URL : <small class="text-danger"></small></h6>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="imgUrl" name="imgUrl"
                                        placeholder="" value="{{ $banner->url }}">
                                    <label for="imgUrl">Image URL</label>
                                </div>
                            </div>
                            {{-- <div class="col-xl-6 col-md-12">
                                <h6>Image Type : </h6>
                                <div class="form-floating">
                                    <select class="form-select"  name="imgType" id="imgType">
                                        <option value="">Choose . . .</option>
                                        <option value="desktop" @if ($banner->type == 'desktop') selected @endif>Desktop</option>
                                        <option value="tablet" @if ($banner->type == 'tablet') selected @endif>Tablet</option>
                                        <option value="mobile" @if ($banner->type == 'mobile') selected @endif>Mobile</option>
                                    </select>
                                    <label for="imgType">Image Type</label>
                                </div>
                            </div> --}}
                            <div class="col-xl-6">
                                <div class="">
                                    <label for="imgBanner" class="form-label mb-0">
                                        <h6>Select Image : <small class="text-danger">Desktop: 1920x528, Tablet:
                                                1024x748, Mobile: 1000x1200</small></h6>
                                    </label>
                                    <input class="form-control" accept="image/*" type="file" id="imgBanner"
                                        name="imgBanner">
                                </div>
                            </div>
                        </div>



                        <div class="row mb-4">
                            <h6 class="mb-2" id="previewTitle" style="display: none">Preview : </h6>
                            <div class="col">
                                <img id="imgPreview" src="{{ $banner->image }}" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit"
                                    class="btn btn-primary btn-sm rounded-pill float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
