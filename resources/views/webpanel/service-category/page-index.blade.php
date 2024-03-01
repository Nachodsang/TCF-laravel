<section>
    <div class="row">
        <div class="col ">
            <h2 class="m-0"><span class="badge bg-main"># Service Category</span></h2>
            <a class="btn btn-primary btn-sm rounded-pill float-end" data-bs-toggle="collapse" href="#collapseDescription"
                role="button" aria-expanded="false" aria-controls="collapseDescription"><i class="fas fa-plus fa-xs"></i>
                DESCRIPTION ALL SERVICE</a>
            <a href="{{ url('webpanel/service-category/sort') }}"
                class="btn btn-warning btn-sm rounded-pill float-right mx-1 "><i class="fas fa-bars"></i> SORT</a>

        </div>
    </div>
    <div class="collapse mt-3" id="collapseDescription">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="" id="descriptionService" method="POST">
                            @csrf
                            <div class="sk-area" data-lang="th">
                                <textarea name="detail_th" id="detail_th" class="sk-editor" hidden="">{{ $servicePageDetail }}</textarea>
                            </div>
                            <button type="submit"
                                class="btn btn-primary btn-sm rounded-pill float-right mt-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table caption-top table-hover">
                        <caption>List of Service Category
                            <a href="{{ url('webpanel/service-category/add') }}"
                                class="btn btn-primary btn-sm rounded-pill float-right"><i
                                    class="fas fa-plus fa-xs"></i> ADD</a>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="40%">Name Of Service Category</th>
                                {{-- <th scope="col" class="text-center" width="10%">Type</th> --}}
                                <th scope="col" width="15%" class="text-center">Upload By</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                                <th scope="col" width="5%" class="text-center">Status</th>
                                <th scope="col" width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($serviceCat) > 0)
                                @php
                                    $item = $serviceCat->firstItem();
                                @endphp
                                @foreach ($serviceCat as $key => $v)
                                    <tr class="ServiceRow-{{ $v->id }}">
                                        <td class="text-center">{{ $item + $key }}</td>
                                        <td>
                                            <div>
                                                <h6><b>{{ $v->name }}</b></h6>
                                            </div>
                                            <div>
                                                <p>{{ $v->description }}</p>
                                            </div>
                                        </td>
                                        {{-- <td class="text-center">
                                            <div class="btn btn-secondary btn-sm rounded-pill">{{ $v->type }}</div>
                                        </td> --}}
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
                                                href="{{ url("webpanel/service-category/update/$v->id") }}"
                                                role="button">
                                                <i class="far fa-edit"></i></a>
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
                    {{ $serviceCat->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
