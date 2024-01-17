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
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{url('webpanel/user')}}" class="btn btn-link"><i class="fas fa-chevron-left"></i> Back</a>
                            </div>
                            <div class="-alert"></div>
                            <div class="col-lg-5 col-lx-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Type of user:</label>
                                    <select name="type" id="type" class="form-select">
                                        <option value="admin" @if(old('type')=='admin')selected @endif>Admin</option>
                                        @if(Auth::user()->type == 'super')
                                            <option value="super" @if(old('type')=='super')selected @endif>Super</option>
                                        @endif
                                    </select>
                                    @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="name">Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" require="true" value="{{old('name')}}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" require="true" value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password">Password: <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" require="true">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm password: <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('password_confirmation')is-invalid @enderror" name="password_confirmation" require="true">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="btn-group w-100">
                                    <button class="btn btn-warning" type="reset"><i class="fas fa-undo"></i> Reset</a>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var validate = (e,c,s) => {
            const form = document.querySelector(e);
            const config = c;
            const rules = form.querySelectorAll('[require="true"]');
            let error = true;
            let required, values;
            const alert = document.createElement('div');
            alert.setAttribute('class','alert alert-warning alert-dismissible d-none')
            alert.innerHTML= `
                <strong class="mr-2">Holy guacamole!</strong><span>You should check in on some of those fields below.</span>
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            `;
            document.querySelector('.-alert').append(alert);
            form.addEventListener('submit',function(el){
                el.preventDefault();
                required = [];
                values = {};
                Array.prototype.map.call(rules,function(e,i){
                    if(e.value == '' | e.value == null){
                        required.push(e.getAttribute('name'))
                        e.classList.remove(config.validClass)
                        e.classList.add(config.invalidClass)
                    }else{
                        delete required[i];
                        values[`${e.getAttribute('name')}`] = e.value;
                        e.classList.remove(config.invalidClass)
                        e.classList.add(config.validClass)
                    }
                });
                if(required.length < 1){
                    form.submit();
                    // setTimeout(() => {
                    //     login(values).then(res => {
                    //         document.querySelector('.alert') === null ? document.querySelector('.-alert').append(alert) : '';
                    //         let title = res.status === true ? 'Success!' : 'Opps!';
                    //         let newClass = res.status === true ? 'alert-success': 'alert-danger';
                    //         alert.querySelector('strong').innerHTML = title;
                    //         alert.querySelector('span').innerHTML = res.message;
                    //         alert.classList?.remove('alert-warning');
                    //         alert.classList?.remove('alert-success');
                    //         alert.classList.add(newClass)
                    //         alert.classList?.remove('d-none');
                    //         res.status === true ? window.location.href='admin/dashboard':'';
                    //     });
                    // }, 800);
                }
            })

            async function login(data){
                const response = await fetch('api/login',{
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body:JSON.stringify(data)
                });
                const res = await response.json();
                return res;
            } 
        }

        const form = validate('#userAddForm',{
            validClass:'is-valid',
            invalidClass:'is-invalid'
        });
</script>