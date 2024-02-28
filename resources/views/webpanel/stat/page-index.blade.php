<section>
    <div class="row mb-4">
        <div class="d-flex justify-content-between  align-items-center ">

            <div class="col d-flex mb-2 align-items-center justify-content-between ">
                <h2 class="m-0"><span class="badge bg-main"># Statistics</span></h2>
            </div>

        </div>
    </div>
    <div>
        <div class="collapse" id="collapseExample">
            <form method="POST" id="consultantPageDescription" class="col-xl-12 mb-2">
                @csrf
                @method('POST')
                <label for="description" class="form-label">Description : </label>
                <textarea class="form-control mb-2" name="description" id="description" rows="3">{{ $description }}</textarea>
                <div class="d-flex justify-content-end ">
                    <button type="submit" class="btn-primary btn">Update</button>
                </div>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row p-4">
                        <div class="col-4  d-flex justify-content-center">
                            <div
                                class="bg-primary text-white w-75 text-center d-flex flex-column align-items-center py-2 rounded">
                                <h2><i class="fas fa-eye"></i> Visits </h2>
                                <h2>xxxxx</h2>
                            </div>
                        </div>
                        <div class="col-4   d-flex justify-content-center">
                            <div
                                class="bg-info text-white  w-75 text-center  d-flex flex-column align-items-center py-2 rounded">

                                <h2><i class="fas fa-inbox"></i> Messages</h2>
                                <h2>xxxxx</h2>

                            </div>
                        </div>
                        <div class="col-4  d-flex justify-content-center">
                            <div
                                class="bg-success text-white w-75 text-center d-flex flex-column align-items-center py-2 rounded">
                                Date</div>
                        </div>
                    </div>
                    <table class="table caption-top table-hover">
                        <caption>Locations
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>

                                <th scope="col" width="40%">Cities</th>

                                <th scope="col" width="10%">Clicks</th>
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

                                        <td>
                                            <div>
                                                <h6 class="fw-bold">{{ $v->name }}</h6>

                                            </div>

                                        </td>

                                        <td class="text-left">
                                            <a class="btn btn-warning rounded-pill btn-sm"
                                                href="{{ url("webpanel/consultant/update/$v->id") }}" role="button"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm rounded-pill deleteConsultant"
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
                    {{ $consultant->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
