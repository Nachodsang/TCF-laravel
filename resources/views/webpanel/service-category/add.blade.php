<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Service Category / Add</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" id="serviceCategoryAddForm">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-xl-6 mb-2">
                                <label for="imgAlt" class="form-label">Name Of Service Category : </label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="imgTitle" class="form-label">Icon : <small class="text-muted"><a
                                            href="https://fontawesome.com/v5/search?o=r&m=free" target=”_blank”>fontawesome.com</a></small></label>
                                <input type="text" class="form-control" id="icon" name="icon">
                            </div>
                            <div class="col-xl-6 mb-2">
                                <label for="url" class="form-label">URL : <small
                                        class="text-danger">service-category</small></label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            {{-- <div class="col-xl-6 mb-2">
                                <label for="url" class="form-label">Type : </label>
                                <select class="form-select" aria-label="Default select example" name="type"
                                    id="type">
                                    <option value="" hidden>Please Select ...</option>
                                    <option value="sub-page">Sub-Page</option>
                                    <option value="main-page">Main-Page</option>
                                </select>
                            </div> --}}
                            <div class="col-xl-12 mb-2">
                                <label for="service" class="form-label">Description : </label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-2">
                                <label for="detail" class="form-label">Detail : </label>
                                <div class="sk-area" data-lang="th">
                                    <textarea name="detail_th" id="detail_th" class="sk-editor" hidden=""></textarea>
                                </div>
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
