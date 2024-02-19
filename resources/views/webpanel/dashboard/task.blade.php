<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Log Modified</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-xl-4 mb-2">
                                        <label for="module" class="form-label">Module</label>
                                        <select class="form-select rounded-pill" id="module" name="module">
                                            <option value="">Select Module</option>
                                            <option value="banner" @if(Request::get('module') == "banner") @selected(true) @endif>Banner</option>
                                            <option value="service" @if(Request::get('module') == "service") @selected(true) @endif>Service</option>
                                            <option value="service-category" @if(Request::get('module') == "service-category") @selected(true) @endif>Service Category</option>
                                            <option value="user" @if(Request::get('module') == "user") @selected(true) @endif>Users</option>
                                            <option value="filter" @if(Request::get('module') == "filter") @selected(true) @endif>Filter(MA)</option>
                                            <option value="contact-email" @if(Request::get('module') == "contact-email") @selected(true) @endif>Contact Email</option>
                                            <option value="consultant" @if(Request::get('module') == "consultant") @selected(true) @endif>Consultant</option>
                                            <option value="home" @if(Request::get('module') == "home") @selected(true) @endif>Home</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 mb-2">
                                        <label for="date" class="form-label">Date Picker</label>
                                        <input id="date" name="date" class="form-control rounded-pill" type="text" placeholder="Date" value="{{Request::get('date')}}"/>
                                    </div>
                                    <div class="col-xl-1 mb-2">
                                        <label class="form-label text-white">.</label>
                                        <input class="form-control btn btn-primary rounded-pill" type="submit" value="Search" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="hr" />
                    <div class="card">
                        <div class="card-body">
                            <table class="table caption-top table-hover">
                                <caption>Log Of Users</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center" width="5%">#</th>
                                        <th scope="col" width="">Action</th>
                                        <th scope="col" width="10%" class="text-center">Module</th>
                                        <th scope="col" width="15%" class="text-center">Action By</th>
                                        <th scope="col" width="15%" class="text-center">Modified</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($log) > 0)
                                        @foreach ($log as $key => $v)
                                            <tr class="LogRow">
                                                <td class="text-center">{{ $key + 1 }}</td>
                                                <td>{{ $v->action }}</td>
                                                <td class="text-center"><div class="btn btn-warning btn-sm rounded-pill">{{ $v->module }}</div></td>
                                                <td class="text-center"><div class="btn btn-info btn-sm rounded-pill">{{ $v->name }}</div></td>
                                                <td class="text-center">{{ $v->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                No Data Found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{ $log->appends($_GET)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
