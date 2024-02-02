<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Consultant</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table caption-top table-hover">
                        <caption>List of Consultant<a href="{{ url('webpanel/consultant/add') }}"
                                class="btn btn-primary btn-sm rounded-pill float-right"><i
                                    class="fas fa-plus fa-xs"></i> ADD</a>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="10%"></th>
                                <th scope="col" width="40%">Consultant Name</th>
                                <th scope="col" width="15%" class="text-center">Upload By</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                                <th scope="col" width="5%" class="text-center">Status</th>
                                <th scope="col" width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($consultant) > 0)
                                @php
                                    $item = $consultant->firstItem();
                                @endphp
                                @foreach ($consultant as $key => $v)
                                    <tr class="ConsultantRow-{{ $v->id }}">
                                        <td class="text-center">{{ $item + $key }}</td>
                                        <td><img src="{{ $v->image }}" class="img-fluid rounded" alt="..." style="max-height: 250px">
                                        </td>
                                        <td>
                                            <div>
                                                <h6 class="fw-bold">{{ $v->name }}</h6>
                                            </div>
                                            <div>
                                                <p>{{ $v->description }}</p>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn btn-info btn-sm rounded-pill">{{ $v->userUpload }}</div>
                                        </td>
                                        <td class="text-center">{{ $v->created_at }}</td>
                                        <td class="text-center">
                                            <div class="form-switch">
                                                <input class="form-check-input status" type="checkbox"
                                                    id="statusConsultant" data-id="{{ $v->id }}"
                                                    @if ($v->status == true) checked @endif>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-warning rounded-pill btn-sm"
                                                href="{{ url("webpanel/consultant/update/$v->id") }}" role="button"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm rounded-pill deleteConsultant" data-id="{{ $v->id }}" href="javascript:0" role="button"><i
                                                    class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">
                                        No Data Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $consultant->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
