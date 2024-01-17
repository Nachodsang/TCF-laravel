<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># User</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-lx-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-right mb-2">
                                <a href="{{ url('/webpanel/user/add') }}"
                                    class="btn btn-outline-success btn-sm rounded-pill">Create
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <td width="10%">No.</td>
                                    <td width="50%">Name</td>
                                    <td width="10%">Role</td>
                                    <td width="15%">Email</td>
                                    <td width="15%">Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $k => $v)
                                    <tr class="UserRow-{{ $v->id }}">
                                        <td>{{ $k + 1 }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td>{{ $v->type }}</td>
                                        <td>{{ $v->email }}</td>
                                        <td>
                                            <a href="{{ url("/webpanel/user/update/$v->id") }}" title="Edit"
                                                class="btn btn-outline-secondary rounded-pill btn-sm"><i
                                                    class="fas fa-pen"></i>
                                            </a>
                                            <a href="javascript:" data-id="{{ $v->id }}" title="Move to trash"
                                                class="btn btn-outline-warning rounded-pill btn-sm deleteUser"><i
                                                    class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
