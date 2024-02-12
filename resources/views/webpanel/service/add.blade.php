<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Service / Add</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" id="serviceAddForm">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-xl-3 mb-2">
                                <img id="imgPreview" src="images/no_image.webp" class="img-fluid rounded"
                                    style="max-height: 350px">
                            </div>
                            <div class="col-xl-9 mb-2">
                                <div class="row">
                                    <div class="col-xl-12 mb-2">
                                        <label for="imgService" class="form-label">Image : </label>
                                        <input type="file" class="form-control" id="imgService" name="imgService"
                                            accept="image/*">
                                    </div>
                                    <div class="col-xl-6 mb-2">
                                        <label for="imgAlt" class="form-label">Image Alt : </label>
                                        <input type="text" class="form-control" id="imgAlt" name="imgAlt">
                                    </div>
                                    <div class="col-xl-6 mb-2">
                                        <label for="imgTitle" class="form-label">Image Title : </label>
                                        <input type="text" class="form-control" id="imgTitle" name="imgTitle">
                                    </div>
                                    <div class="col-xl-6 mb-2">
                                        <label for="url" class="form-label">URL : </label>
                                        <input type="text" class="form-control" id="url" name="url">
                                    </div>
                                    <div class="col-xl-6 mb-2">
                                        <label for="url" class="form-label">Service Category : </label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="service_category" id="service_category">
                                            <option value="">Please Select ...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="service" class="form-label">Service : </label>
                                        <input type="text" class="form-control" id="service" name="service"
                                            placeholder="Name Of Service">
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="description" class="form-label">Short Description : </label>
                                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-2">
                                <label for="detail" class="form-label">Detail : </label>
                                <div class="sk-area" data-lang="th">
                                    <textarea name="detail_th" id="detail_th" class="sk-editor" hidden=""></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label for="seo_description" class="form-label">SEO Description : </label>
                                <input type="text" class="form-control" id="seo_description" name="seo_description">
                            </div>
                            <div class="col-xl-12 mb-4">
                                <label for="seo_keyword" class="form-label">SEO Keysords : <span
                                        class="text-danger">first, second</span></label>
                                <input type="text" class="form-control" id="seo_keyword" name="seo_keyword">
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
