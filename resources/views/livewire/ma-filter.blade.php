<table class="table caption-top table-hover">
    <caption>List of Industry
        <a href="{{ url('webpanel/ma/add') }}" class="btn btn-primary btn-sm float-right rounded-pill">
            <i class="fas fa-plus fa-xs"></i> ADD
        </a>
    </caption>
    <thead>
        <tr>
            <th scope="col" class="text-center" width="3%">Sort</th>
            <th scope="col" class="text-center" width="3%">#</th>
            <th scope="col" width="60%">Industry</th>
            <th scope="col" width="19%" class="text-center">Created</th>
            <th scope="col" width="5%" class="text-center">Status</th>
            <th scope="col" width="10%" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody wire:sortable="updateIndustry">
        @if ($industry->count() > 0)
            @foreach ($industry as $key => $v)
                @php
                    $product = \App\Models\MaProductMd::where('industry_id', $v->id)
                        ->orderBy('sort')
                        ->get();
                @endphp
                <tr class="FilterRow_industry_{{ $v->id }}" wire:sortable.item="{{ $v->id }}"
                    wire:key="sort-{{ $v->id }}">
                    <td class="text-center cursor-sort" wire:sortable.handle><i class="fas fa-bars"></i></td>
                    <td class="text-center">
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {!! $v->icon !!} {{ $v->name }}
                        @if (count($product) > 0)
                            <a class="badge badge-success menu-nd" data-bs-toggle="collapse"
                                href="#col2{{ $key }}" role="button" aria-expanded="false"
                                aria-controls="col2{{ $key }}">
                                Product
                            </a>
                            <div class="collapse" id="col2{{ $key }}">
                                <div class="sort-action text-right">
                                    <a class="badge badge-secondary sort-category" href="javascript:">Sort</a>
                                </div>
                                <ul class="list-group" id="sort{{ $key }}" style="margin-top:5px">
                                    @foreach ($product as $col2)
                                        <li class="list-group-item p-2 FilterRow_product_{{ $col2->id }}">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                    {{ $col2->name }}
                                                </span>
                                                <div class="justify-content-end">
                                                    <a class="badge badge-warning"
                                                        href="{{ url("webpanel/ma/update/product/$col2->id") }}"><i
                                                            class="fas fa-pen"></i></a>
                                                    <a class="badge badge-danger deleteFilter"
                                                        data-id="{{ $col2->id }}" data-type="product"
                                                        href="javascript:">
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
                            <input class="form-check-input status" type="checkbox" data-id="{{ $v->id }}"
                                @if ($v->status == true) checked @endif>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{ url("webpanel/ma/update/industry/$v->id") }}"
                            class="btn btn-warning btn-sm rounded-pill" title="Edit">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:0" class="btn btn-danger btn-sm rounded-pill deleteFilter"
                            data-id="{{ $v->id }}" data-type="industry" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <div>
                <table class="table caption-top table-hover">
                    <caption>List of Industry
                        <a href="{{ url('webpanel/ma/add') }}" class="btn btn-primary btn-sm float-right rounded-pill">
                            <i class="fas fa-plus fa-xs"></i> ADD
                        </a>
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" width="3%"></th>
                            <th scope="col" class="text-center" width="3%">#</th>
                            <th scope="col" width="60%">Industry</th>
                            <th scope="col" width="19%" class="text-center">Created</th>
                            <th scope="col" width="5%" class="text-center">Status</th>
                            <th scope="col" width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody wire:sortable="updateIndustry">
                        @if ($industry->count() > 0)
                            @foreach ($industry as $key => $v)
                                @php
                                    $product = \App\Models\MaProductMd::where('industry_id', $v->id)
                                        ->orderBy('sort')
                                        ->get();
                                @endphp
                                <tr class="FilterRow_industry_{{ $v->id }}"
                                    wire:sortable.item="{{ $v->id }}" wire:key="sort-{{ $v->id }}">
                                    <td class="text-center" wire:sortable.handle><i class="fas fa-bars"></i></td>
                                    <td class="text-center">
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        {!! $v->icon !!} {{ $v->name }}
                                        @if (count($product) > 0)
                                            <a class="badge badge-success menu-nd" data-bs-toggle="collapse"
                                                href="#col2{{ $key }}" role="button" aria-expanded="false"
                                                aria-controls="col2{{ $key }}">
                                                Product
                                            </a>
                                            <div class="collapse" id="col2{{ $key }}">
                                                <div class="sort-action text-right">
                                                    <a class="badge badge-secondary sort-category"
                                                        href="javascript:">Sort</a>
                                                </div>
                                                <ul class="list-group" id="sort{{ $key }}"
                                                    style="margin-top:5px">
                                                    @foreach ($product as $col2)
                                                        <li
                                                            class="list-group-item p-2 FilterRow_product_{{ $col2->id }}">
                                                            <div class="d-flex justify-content-between">
                                                                <span>
                                                                    {{ $col2->name }}
                                                                </span>
                                                                <div class="justify-content-end">
                                                                    <a class="badge badge-warning"
                                                                        href="{{ url("webpanel/ma/update/product/$col2->id") }}"><i
                                                                            class="fas fa-pen"></i></a>
                                                                    <a class="badge badge-danger deleteFilter"
                                                                        data-id="{{ $col2->id }}"
                                                                        data-type="product" href="javascript:">
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
                                            <input class="form-check-input status" type="checkbox"
                                                data-id="{{ $v->id }}"
                                                @if ($v->status == true) checked @endif>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url("webpanel/ma/update/industry/$v->id") }}"
                                            class="btn btn-warning btn-sm rounded-pill" title="Edit">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="javascript:0" class="btn btn-danger btn-sm rounded-pill deleteFilter"
                                            data-id="{{ $v->id }}" data-type="industry" title="Delete">
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
            </div>
        @endif
    </tbody>
</table>
