<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Service Category / Edit</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" id="serviceCategoryEditForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $serviceCat->id }}" id="serviceCatId" name="serviceCatId">
                        <div class="row mb-2">
                            <div class="col-xl-6 mb-2">
                                <label for="imgAlt" class="form-label">Name Of Service Category : </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $serviceCat->name }}">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="imgTitle" class="form-label">Icon : <small class="text-muted"><a
                                            href="https://fontawesome.com/v5/search?o=r&m=free"
                                            target=”_blank”>fontawesome.com</a></small></label>
                                <input type="text" class="form-control" id="icon" name="icon"
                                    value="{{ $serviceCat->icon }}">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="url" class="form-label">URL : <small
                                        class="text-danger">service-category</small></label>
                                <input type="text" class="form-control" id="url" name="url"
                                    value="{{ $serviceCat->url }}">
                            </div>
                            {{-- <div class="col-xl-6 mb-2">
                                <label for="url" class="form-label">Type : </label>
                                <select class="form-select" aria-label="Default select example" name="type" id="type">
                                    <option value="" hidden>Please Select ...</option>
                                    <option value="sub-page" @if ($serviceCat->type == 'sub-page') selected @endif>Sub-Page</option>
                                    <option value="main-page" @if ($serviceCat->type == 'main-page') selected @endif>Main-Page</option>
                                </select>
                            </div> --}}
                            <div class="col-xl-12 mb-2">
                                <label for="service" class="form-label">Description : </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $serviceCat->description }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-2">
                                <label for="detail" class="form-label">Detail : </label>
                                <div class="sk-area" data-lang="th">
                                    <textarea name="detail_th" id="detail_th" class="sk-editor" hidden="">{{ $serviceCat->detail }}</textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label for="seo_title" class="form-label">SEO Title : </label>
                                <input type="text" class="form-control" id="seo_title" name="seo_title"
                                    value="{{ $serviceCat->seo_title }}">
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label for="seo_description" class="form-label">SEO Description : </label>
                                <input type="text" class="form-control" id="seo_description" name="seo_description"
                                    value="{{ $serviceCat->seo_description }}">
                            </div>
                            <div class="col-xl-12 mb-4">
                                <label for="seo_keyword" class="form-label">SEO Keywords : <span
                                        class="text-danger">first, second</span></label>
                                <input type="text" class="form-control" id="seo_keyword" name="seo_keyword"
                                    value="{{ $serviceCat->seo_keyword }}">
                            </div>
                            <div class="col">
                                <button type="submit"
                                    class="btn btn-primary btn-sm rounded-pill float-right">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
