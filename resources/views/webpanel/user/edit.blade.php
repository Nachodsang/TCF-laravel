@if (Auth::user()->type != 'user' || $user->id == Auth::user()->id)

    <section>
        <div class="row mb-4">
            <div class="col d-flex justify-content-between align-items-center">
                <h2 class="m-0"><span class="badge bg-main"># User / Edit</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lx-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" id="userEditForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <a href="{{ url('webpanel/user') }}"
                                        class="btn btn-outline-secondary rounded-pill btn-sm">
                                        <i class="fas fa-chevron-left"></i> Back
                                    </a>
                                </div>
                                @if (\Session::has('status'))
                                    <div class="alert alert-{{ \Session::get('status') }} d-flex justify-content-center"
                                        style="border-radius: 10px">
                                        {{ \Session::get('message') }}
                                    </div>
                                @endif
                                <div class="col-lg-5 col-lx-12 col-md-12">
                                    @if (Auth::user()->type == 'user')
                                        <div class="form-group">
                                            <label for="name">Type of user:</label>
                                            <select name="type" id="type"
                                                class="form-select @error('type') is-invalid @enderror">
                                                <option value="user"
                                                    @if ($user->type == 'user') selected @endif>
                                                    User
                                                </option>\
                                            </select>

                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">Type of user:</label>
                                            <select name="type" id="type"
                                                class="form-select @error('type') is-invalid @enderror">
                                                <option value="admin"
                                                    @if ($user->type == 'admin') selected @endif>
                                                    Admin
                                                </option>
                                                <option value="user"
                                                    @if ($user->type == 'user') selected @endif>
                                                    User
                                                </option>
                                                @if ($user->type == 'super' || Auth::user()->type == 'super')
                                                    <option value="super"
                                                        @if ($user->type == 'super') selected @endif>
                                                        Super</option>
                                                @endif
                                            </select>
                                            @error('type')
                                                <small class="is-invalid">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label for="name">Name: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name"
                                            value="@if (old('name')) {{ old('name') }}@else{{ $user->name }} @endif">
                                        @error('name')
                                            <small class="is-invalid">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Email: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="@if (old('email')) {{ old('email') }}@else{{ $user->email }} @endif">
                                        @error('email')
                                            <small class="is-invalid">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">New Password: <span class="text-danger"></span></label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password">
                                        @error('password')
                                            <small class="is-invalid">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm New Password: <span
                                                class="text-danger"></span></label>
                                        <input type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation">
                                        @error('password_confirmation')
                                            <small class="is-invalid">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="float-right">
                                        <button class="btn btn-outline-warning btn-sm rounded-pill">Cancel</button>
                                        <button type="submit" class="btn btn-primary btn-sm rounded-pill">Save
                                            change</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
