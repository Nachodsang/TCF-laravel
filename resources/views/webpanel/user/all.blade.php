@if (Auth::user()->type != 'user')

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
                                        <td class="text-center" width="5%">No.</td>
                                        <td width="50%">Name</td>
                                        <td width="10%">Role</td>
                                        <td width="20%">Email</td>
                                        <td class="text-center" width="10%">Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::user()->type == 'super')
                                        @if ($user->count() > 0)
                                            @php
                                                $item = $user->firstItem();
                                            @endphp
                                            @foreach ($user as $k => $v)
                                                <tr class="UserRow-{{ $v->id }}">
                                                    <td class="text-center">{{ $item + $k }}</td>
                                                    <td>{{ $v->name }}</td>
                                                    <td>{{ $v->type }}</td>
                                                    <td>{{ $v->email }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url("/webpanel/user/update/$v->id") }}"
                                                            title="Edit"
                                                            class="btn btn-outline-warning rounded-pill btn-sm"><i
                                                                class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="javascript:" data-id="{{ $v->id }}"
                                                            title="Move to trash"
                                                            class="btn btn-outline-danger rounded-pill btn-sm deleteUser"><i
                                                                class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    No Data Found.
                                                </td>
                                            </tr>
                                        @endif
                                    @else
                                        @if ($user->count() > 0)
                                            @php $item = 1; @endphp
                                            @foreach ($user as $k => $v)
                                                @if ($v->type != 'super')
                                                    <tr class="UserRow-{{ $v->id }}">
                                                        <td class="text-center">{{ $item }}</td>
                                                        <td>{{ $v->name }}</td>
                                                        <td>{{ $v->type }}</td>
                                                        <td>{{ $v->email }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ url("/webpanel/user/update/$v->id") }}"
                                                                title="Edit"
                                                                class="btn btn-outline-warning rounded-pill btn-sm"><i
                                                                    class="fas fa-pen"></i>
                                                            </a>
                                                            <a href="javascript:" data-id="{{ $v->id }}"
                                                                title="Move to trash"
                                                                class="btn btn-outline-danger rounded-pill btn-sm deleteUser"><i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @php $item ++; @endphp
                                                @endif
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    No Data Found.
                                                </td>
                                            </tr>
                                        @endif
                                    @endif
                                </tbody>
                            </table>
                            {{ $user->appends($_GET)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
