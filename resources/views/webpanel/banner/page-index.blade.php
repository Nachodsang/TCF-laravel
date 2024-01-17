<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Banner</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover caption-top">
                        <caption>List of Banner<a href="{{ url('webpanel/banner/add') }}"
                                class="btn btn-primary btn-sm float-right rounded-pill"><i class="fas fa-plus fa-xs"></i> ADD</a>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="50%"></th>
                                <th scope="col" width="10%" class="text-center">Upload By</th>
                                <th scope="col" width="10%" class="text-center">Created</th>
                                <th scope="col" width="5%" class="text-center">Status</th>
                                <th scope="col" width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($banner) > 0)
                                @foreach ($banner as $key => $v)
                                    <tr class="BannerRow-{{ $v->id }}">
                                        <td scope="row" class="text-center">{{ $key + 1 }}</td>
                                        <td><img src="{{ $v->image }}" class="img-fluid rounded" alt="...">
                                        </td>
                                        <td class="text-center"><div class="btn btn-info btn-sm rounded-pill">{{ $v->name }}</div></td>
                                        <td class="text-center">{{ $v->created_at }}</td>
                                        <td class="text-center">
                                            <div class="form-switch">
                                                <input class="form-check-input status" type="checkbox"
                                                    id="statusBanner" data-id="{{ $v->id }}" 
                                                    @if ($v->status == true) checked @endif>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-warning rounded-pill btn-sm"
                                                href="{{ url("webpanel/banner/update/$v->id") }}" role="button"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm rounded-pill deleteBanner" data-id="{{ $v->id }}"
                                                href="javascript:0" role="button"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">
                                        No Data Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
