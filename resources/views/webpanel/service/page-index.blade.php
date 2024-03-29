<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Service</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table caption-top table-hover">
                        <caption>List of Service <!-- Button trigger modal -->


                            <a href="{{ url('webpanel/service/add') }}"
                                class="btn btn-primary btn-sm rounded-pill float-right "><i
                                    class="fas fa-plus fa-xs"></i> ADD</a>
                            <a href="{{ url('webpanel/service/sort') }}"
                                class="btn btn-warning btn-sm rounded-pill float-right mx-1 "><i
                                    class="fas fa-bars"></i> SORT</a>

                        </caption>
                        {{-- @livewire('service-sort') --}}
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="35%">Service</th>
                                <th scope="col" width="15%">Category</th>
                                <th scope="col" width="15%" class="text-center">Upload By</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                                <th scope="col" width="5%" class="text-center">Status</th>
                                <th scope="col" width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($service) > 0)
                                @php
                                    $item = $service->firstItem();
                                @endphp
                                @foreach ($service as $key => $v)
                                    <tr class="ServiceRow-{{ $v->id }}">
                                        <td class="text-center">{{ $item + $key }}</td>
                                        <td>
                                            <div>
                                                <h6><b>{{ $v->service }}</b></h6>
                                            </div>
                                            <div>
                                                {{-- <p>{{ $v->seo_description }}</p> --}}
                                                <p>{{ $v->description }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            {{-- <img src="{{ $v->image }}" class="img-fluid rounded" alt="..."> --}}
                                            <h6>{{ $v->name }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn btn-info btn-sm rounded-pill">{{ $v->userName }}</div>
                                        </td>
                                        <td class="text-center">{{ $v->created_at }}</td>
                                        <td class="text-center">
                                            <div class="form-switch">
                                                <input class="form-check-input status" type="checkbox"
                                                    id="statusService" data-id="{{ $v->id }}"
                                                    @if ($v->status == true) checked @endif>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-warning rounded-pill btn-sm"
                                                href="{{ url("webpanel/service/update/$v->id") }}" role="button"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm rounded-pill deleteService"
                                                data-id="{{ $v->id }}" href="javascript:0" role="button"><i
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
                    {{ $service->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
