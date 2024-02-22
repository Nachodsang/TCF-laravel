<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Menu</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table caption-top table-striped table-hover">
                        <caption>List of Menu
                            {{-- <a 
                                    href="{{ url('webpanel/menu/add') }}"
                                    class="btn btn-outline-primary btn-sm float-right rounded-pill">
                                    <i class="fas fa-plus fa-xs"></i> ADD
                                </a> --}}
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="45%">Menu</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                                <th scope="col" width="" class="text-center">Status</th>
                                {{-- <th scope="col" width="10%" class="text-center">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="-row d-none">
                                <td class="text-center no"></td>
                                <td class="name"></td>
                                <td class="created text-center"></td>
                                <td class="status text-center">
                                    <div class="form-switch">
                                        <input class="form-check-input status" type="checkbox">
                                    </div>
                                </td>
                                {{-- <td class="text-center">
                                    <a 
                                        class="btn btn-warning btn-sm rounded-pill"
                                        href="" 
                                        role="button"
                                        title="Edit"
                                    >
                                            <i class="far fa-edit"></i>
                                    </a>
                                    <a 
                                        class="btn btn-danger btn-sm rounded-pill delete"
                                        data-id=""
                                        href="javascript:0" 
                                        role="button"
                                        title="Move to trash"
                                    >
                                            <i class="far fa-trash-alt"></i>
                                    </a>
                                </td> --}}
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center no-data"> No Data Found.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/moment/moment-with-locales.min.js"></script>
<script>
    var data;
    var host = "{{ url('') }}";
    async function getData() {
        const response = await fetch(`${host}/api/get/menu`, {
            headers: {
                "Content-Type": "application/json"
            }
        });
        const res = await response.json();
        return res;
    }
    getData().then(res => {
        data = res.data;
        fetchItem(data)
    })

    function fetchItem(items) {
        let d = document.querySelector('.-row');
        const noData = document.querySelector('.no-data');
        const tbody = document.querySelector('tbody');
        items.length > 0 ? noData.classList.add('d-none') : noData.classList.remove('d-none');
        items.map((v, i) => {
            let row = d.cloneNode(true);
            row.classList.remove('d-none');
            row.classList.remove('-row');
            row.setAttribute(`id`, v.id)
            row.querySelector('.no').innerHTML = i + 1;
            row.querySelector('.created').innerHTML = moment(v.created_at).format('Do MMMM YYYY, h:mm:ss a');
            let status = row.querySelector('.form-check-input');
            status.setAttribute('data-id', v.id);
            if (v.status == 1) {
                status.setAttribute('checked', true)
            }
            row.querySelector('.name').innerHTML = v.name;
            tbody.appendChild(row)
        })
    }
    async function changeStatus(id, changeTo) {
        const response = fetch(`api/menu/status`, {
            method: 'POST',
            header: {
                Authorization: `Bearer {{ Request::get('bearerToken') }}`,
                Accept: 'application/json'
            },
            body: JSON.stringify({
                id: id,
                to: changeTo
            })
        })
        const res = await response.json();
        return res;
    }
    document.addEventListener('change', function(e) {
        const status = e.target.closest('.form-check-input');
        if (status) {
            const id = status.getAttribute('data-id');
            changeTo = status.checked
            changeStatus(id, changeTo)
        }
    })
</script>
