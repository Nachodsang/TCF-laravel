<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Merger and Acquisition</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card" style="overflow: auto">
                <div class="card-body">
                    <table class="table caption-top table-hover">
                        <caption>List of Industry
                            <a href="{{ url('webpanel/ma/add') }}" class="btn btn-primary btn-sm float-right rounded-pill">
                                <i class="fas fa-plus fa-xs"></i> ADD
                            </a>
                            <button class="btn btn-outline-secondary btn-sm rounded-pill float-right mr-2" id="sort" data-text="Sort"><i class="fas fa-sort"></i> Sort</button>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="65%">Industry</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                                <th scope="col" width="5%" class="text-center">Status</th>
                                <th scope="col" width="10%" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($industry->count() > 0)
                                @php
                                    $item = $industry->firstItem();
                                @endphp
                                @foreach ($industry as $key => $v)
                                @php
                                    $product = \App\Models\MaProductMd::where('industry_id', $v->id)->orderBy('sort')->get()
                                @endphp
                                    <tr role="row" class="FilterRow_industry_{{$v->id}}">
                                        <td class="text-center">
                                            {{ $item + $key }}
                                        </td>
                                        <td>
                                            {!! $v->icon !!} {{ $v->name }}
                                            @if (count($product) > 0)
                                                <a class="badge badge-success menu-nd" data-bs-toggle="collapse" href="#col2{{ $key }}" role="button" aria-expanded="false" aria-controls="col2{{ $key }}">
                                                    Product
                                                </a>
                                                <div class="collapse" id="col2{{ $key }}">
                                                    <div class="sort-action text-right">
                                                        <a class="badge badge-secondary sort-category"
                                                            href="javascript:">Sort</a>
                                                        <a class="badge badge-success sort-save d-none"
                                                            href="javascript:">Save</a>
                                                        <a class="badge badge-light sort-cancel d-none"
                                                            href="javascript:">Cancel</a>
                                                    </div>
                                                    <ul class="list-group" id="sort{{ $key }}"
                                                        style="margin-top:5px">
                                                        @foreach ($product as $col2)
                                                            <li class="list-group-item p-2 FilterRow_product_{{$col2->id}}">
                                                                <div class="d-flex justify-content-between">
                                                                    <span>
                                                                        {{ $col2->name }}
                                                                    </span>
                                                                    <div class="justify-content-end">
                                                                        <a class="badge badge-warning"
                                                                            href="{{ url("webpanel/ma/update/product/$col2->id") }}"><i
                                                                                class="fas fa-pen"></i></a>
                                                                        <a class="badge badge-danger deleteFilter" data-id="{{ $col2->id }}" data-type="product" href="javascript:">
                                                                            <i class="fas fa-times"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ date('d-M-Y H:i:s', strtotime($v->created_at)) }}
                                        </td>
                                        <td class="text-center">
                                            <div class="form-switch">
                                                <input class="form-check-input status" type="checkbox" data-id="{{ $v->id }}" @if ($v->status == true) checked @endif>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ url("webpanel/ma/update/industry/$v->id") }}" class="btn btn-warning btn-sm rounded-pill" title="Edit">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="javascript:0" class="btn btn-danger btn-sm rounded-pill deleteFilter" data-id="{{ $v->id }}" data-type="industry" title="Delete">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center no-data"> No Data Found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $industry->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
