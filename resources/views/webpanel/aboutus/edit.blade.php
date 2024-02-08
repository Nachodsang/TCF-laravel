<div class="row mb-4">
    <div class="col d-flex justify-content-between align-items-center">
        <h2 class="m-0"><span class="badge bg-main"># About Us</span></h2>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="form-group float-right">
                                <button class="btn btn-success rounded-pill" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control" rows="5" name="description">{{ $row->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="detail_first"class="form-label">Detail First</label>
                            <div class="sk-area" data-lang="th">
                                <textarea name="detail_first" id="detail_first" class="sk-editor" hidden="">{{ $row->detail_first }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <label for="detail_secondary"class="form-label">Detail Secondary</label>
                            <div class="sk-area" data-lang="th">
                                <textarea name="detail_secondary" id="detail_secondary" class="sk-editor" hidden="">{{ $row->detail_secondary }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
