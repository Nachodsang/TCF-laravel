<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># User / Add</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lx-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" id="userAddForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <a href="{{ url('webpanel/user') }}"
                                    class="btn btn-outline-secondary btn-sm rounded-pill"><i
                                        class="fas fa-chevron-left"></i> Back</a>
                            </div>
                            <div class="-alert"></div>
                            <div class="col-lg-5 col-lx-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Type of user:</label>
                                    <select name="type" id="type"
                                        class="form-select @error('type') is-invalid @enderror">
                                        <option value="admin" @if (old('type') == 'admin') selected @endif>Admin
                                        </option>
                                        @if (Auth::user()->type == 'super')
                                            <option value="super" @if (old('type') == 'super') selected @endif>
                                                Super</option>
                                        @endif
                                    </select>
                                    @error('type')
                                        <small class="is-invalid">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="name">Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name')is-invalid @enderror"
                                        name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('email')is-invalid @enderror"
                                        name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password">Password: <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('password')is-invalid @enderror"
                                        name="password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm password: <span
                                            class="text-danger">*</span></label>
                                    <input type="password"
                                        class="form-control @error('password_confirmation')is-invalid @enderror"
                                        name="password_confirmation">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="btn-group w-100">
                                    <button class="btn btn-warning" type="reset"><i class="fas fa-undo"></i> Reset</a>
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>
                                            Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
