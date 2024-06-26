<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Statistics</span></h2>
            <h2 class="m-0"><span class="badge bg-main"># {{ $test }}</span></h2>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row p-4">
                        <div class="col-4  d-flex justify-content-center">
                            <div
                                class="bg-primary text-white w-75 text-center d-flex flex-column align-items-center py-2 rounded">
                                <h2 class="h4"><i class="fas fa-eye"></i> Visits </h2>
                                <h2 class="h1"> {{ $visitorAmount }}</h2>
                            </div>
                        </div>
                        <div class="col-4   d-flex justify-content-center">
                            <div
                                class="bg-info text-white  w-75 text-center  d-flex flex-column align-items-center py-2 rounded">
                                <h2 class="h4"><i class="fas fa-inbox"></i> Messages</h2>
                                <h2 class="h1">{{ $emailAmount }}</h2>
                            </div>
                        </div>
                        <div class="col-4  d-flex justify-content-center">
                            <form action=""
                                class="bg-success text-white w-75 px-4 gap-2 text-center d-flex flex-column align-items-center py-2 rounded">
                                <div class="">
                                    <label for="date" class="form-label h4"><i class="far fa-calendar-alt"></i>
                                        Select Date</label>
                                    <input id="date" name="date" class="form-control rounded-pill"
                                        type="text" placeholder="Date" value="{{ Request::get('date') }}" />
                                </div>
                                <div class="w-75">
                                    <input class="form-control btn btn-primary btn-small  rounded-pill" type="submit"
                                        value="Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table caption-top table-hover">
                        <caption>Locations
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="40%">Cities</th>
                                <th scope="col" width="10%">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($visitorLogs) > 0)
                                @foreach ($visitorLogs as $key => $v)
                                    <tr class="ConsultantRow-{{ $v->id }}">
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>
                                            <div>
                                                <h6 class="fw-bold">{{ $v->city ? $v->city : 'Unidentified' }}
                                                    ,{{ $v->country ? $v->country : 'Unidentified' }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <h6 class="fw-bold">{{ $v->count }}</h6>
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
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row p-4">
                        <div class="col-4  d-flex justify-content-center">
                            <div
                                class="bg-primary text-white w-75 text-center d-flex flex-column align-items-center py-2 rounded">
                                <h2 class="h4"><i class="fas fa-eye"></i> Visits </h2>
                                <h2 class="h1"> {{ $gaVisit }}</h2>
                            </div>
                        </div>
                        <div class="col-4   d-flex justify-content-center">
                            <div
                                class="bg-info text-white  w-75 text-center  d-flex flex-column align-items-center py-2 rounded">
                                <h2 class="h4"><i class="fas fa-inbox"></i> Messages</h2>
                                <h2 class="h1">{{ $emailAmount }}</h2>
                            </div>
                        </div>
                        <div class="col-4  d-flex justify-content-center">
                            <form action=""
                                class="bg-success text-white w-75 px-4 gap-2 text-center d-flex flex-column align-items-center py-2 rounded">
                                <div class="">
                                    <label for="date" class="form-label h4"><i class="far fa-calendar-alt"></i>
                                        Select Date</label>
                                    <input id="date" name="date" class="form-control rounded-pill"
                                        type="text" placeholder="Date" value="{{ Request::get('date') }}" />
                                </div>
                                <div class="w-75">
                                    <input class="form-control btn btn-primary btn-small  rounded-pill" type="submit"
                                        value="Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="height:40vh; overflow-y:scroll;">
                        <table class="table caption-top table-hover ">
                            <caption>Page Views
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="5%">#</th>
                                    <th scope="col" width="40%">Page Title</th>
                                    <th scope="col" width="10%">Users</th>
                                    <th scope="col" width="10%">Page Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($analyticsData) > 0)
                                    @foreach ($analyticsData as $key => $v)
                                        <tr class="">
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td>
                                                <div>
                                                    <h6 class="fw-bold">{{ $v['pageTitle'] }}</h6>

                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <h6 class="fw-bold">{{ $v['activeUsers'] }}</h6>
                                            </td>
                                            <td class="text-left">
                                                <h6 class="fw-bold">{{ $v['screenPageViews'] }}</h6>
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
                    </div>
                    <table class="table caption-top table-hover">
                        <caption>Locations
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="40%">Cities</th>
                                <th scope="col" width="10%">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($visitorLogs) > 0)
                                @foreach ($visitorLogs as $key => $v)
                                    <tr class="ConsultantRow-{{ $v->id }}">
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>
                                            <div>
                                                <h6 class="fw-bold">{{ $v->city ? $v->city : 'Unidentified' }}
                                                    ,{{ $v->country ? $v->country : 'Unidentified' }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <h6 class="fw-bold">{{ $v->count }}</h6>
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
                </div>
            </div>
        </div>
    </div>
</section>
