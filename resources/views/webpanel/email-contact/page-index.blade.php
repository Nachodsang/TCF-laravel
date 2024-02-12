<section>
    <div class="row mb-4">
        <div class="col d-flex justify-content-between align-items-center">
            <h2 class="m-0"><span class="badge bg-main"># Email Contact</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table caption-top table-hover">
                        <caption>List of Email Contact</caption>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" width="20%">Email</th>
                                <th scope="col" width="">Company</th>
                                <th scope="col" width="">Name</th>
                                <th scope="col" width="">Telephone</th>
                                <th scope="col" width="25%">Detail</th>
                                <th scope="col" width="15%" class="text-center">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($email) > 0)
                                @foreach ($email as $key => $v)
                                    <tr class="EmailRow-{{ $v->id }}">
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $v->email }}</td>
                                        <td>{{ $v->company_name }}</td>
                                        <td>{{ $v->name }}</td>
                                        <td>{{ $v->phone }}</td>
                                        <td>{{ $v->details }}</td>
                                        <td class="text-center">{{ $v->created_at }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">
                                        No Data Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $email->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
