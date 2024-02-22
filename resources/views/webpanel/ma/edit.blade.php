<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Merger and Acquisition / Edit</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form id="filterFormEdit" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xl-12">
                                <h5 class="text-center mt-2 mb-3 font-weight-bold text-primary">Filter information</h5>
                                <div class="row mb-3">
                                    <div class="col-xl-12 d-flex justify-content-between">
                                        <a href="{{ url('webpanel/ma') }}"
                                            class="btn btn-sm btn-outline-secondary rounded-pill">Cancel</a>
                                        <button type="submit" class="btn btn-sm btn-primary rounded-pill">Save</button>
                                        <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                        <input type="hidden" name="type" id="type" value="{{ $type }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="position">Type</label>
                                            <select class="form-select" name="type" id="type" disabled>
                                                <option value="" hidden>Please Select</option>
                                                <option value="industry"
                                                    @if ($type == 'industry') selected @endif>Industry</option>
                                                <option value="product"
                                                    @if ($type == 'product') selected @endif>Product</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="position">Industry</label>
                                            <select class="form-select" name="industry" id="industry" disabled>
                                                <option value="" hidden>Please Select</option>
                                                @foreach ($industry as $v)
                                                    <option value="{{ $v->id }}"
                                                        @if ($data->industry_id == $v->id) selected @endif>
                                                        {{ $v->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 filter-information">
                                        <div class="card mb-3">
                                            <div class="card-body p-2">
                                                <div class="form-group m-0">
                                                    <div class="card-header-actions">
                                                        <small class="text-muted"><a
                                                                href="https://fontawesome.com/v5/search?o=r&m=free"
                                                                target=”_blank”>fontawesome.com</a></small>
                                                    </div>
                                                    <div class="input-group input-group-sm mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" for="icon">Icon</span>
                                                        </div>
                                                        <input class="form-control" id="icon" type="text"
                                                            name="icon"
                                                            @if ($type == 'product') disabled @endif
                                                            value="{{ $data->icon }}">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" for="name">Name</span>
                                                        </div>
                                                        <input class="form-control" id="name" type="text"
                                                            name="name" value="{{ $data->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
