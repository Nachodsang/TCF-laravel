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
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-primary" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true"><i class="fas fa-inbox"></i>Inbox</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-warning" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false"><i class="fas fa-star"></i>Favourite</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-success" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false"><i class="far fa-check-circle"></i>Done</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <table class="table caption-top table-hover">
                                <caption class="text-primary h3"><i class="fas fa-inbox"></i>My Inbox</caption>
                                <thead>
                                    <tr class="text-primary">
                                        <th scope="col" class="5%" width="">#</th>
                                        <th scope="col" width="">Email</th>
                                        <th scope="col" width="">Company</th>
                                        <th scope="col" width="">Name</th>
                                        <th scope="col" width="">Telephone</th>
                                        <th scope="col" width="">Detail</th>
                                        <th scope="col" width="15%">Action</th>
                                        <th scope="col" width="" class="text-center">Sent</th>
                                        <th scope="col" width="" class="text-start">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="inbox-table">
                                    @if (count($email) > 0)
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($email as $key => $v)
                                            @php
                                                $no += 1;
                                            @endphp
                                            <tr class="emailRow-{{ $v->id }}">
                                                <td class="text-center">{{ $no }} </td>
                                                <td> {{ $v->email }}
                                                </td>
                                                <td>{{ $v->company_name }}</td>
                                                <td>{{ $v->name }}</td>
                                                <td>{{ $v->phone }}</td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $v->id }}">
                                                        See Detail
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $v->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        From: {{ $v->company_name }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body row">
                                                                    <div class="col-12 mb-4"
                                                                        style="white-space: pre-line;
overflow-wrap: break-word;">
                                                                        {{ $v->details }}
                                                                    </div>
                                                                    <i>
                                                                        <b>
                                                                            {{ $v->name }}
                                                                        </b>
                                                                    </i>
                                                                    <i>{{ $v->email }}</i>
                                                                    <i>{{ $v->phone }}</i>
                                                                    <i>{{ $v->created_at }}</i>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">

                                                    <a class="btn btn-success rounded-pill btn-sm status "
                                                        role="button" data-id="{{ $v->id }}">
                                                        <i class="far fa-check-square"></i></a>
                                                    <a class="btn btn-primary btn-sm rounded-pill "
                                                        data-id="{{ $v->id }}"
                                                        href="mailto:{{ $v->email }}" role="button">
                                                        <i class="fas fa-paper-plane"></i></a>
                                                    <a class="btn btn-warning rounded-pill btn-sm favourite "
                                                        role="button" data-id="{{ $v->id }}">
                                                        <i class="fas fa-star"></i></a>


                                                </td>
                                                <td class="text-center">{{ $v->created_at }}</td>
                                                <td> <a class="btn btn-danger btn-sm rounded-pill deleteItem "
                                                        data-id="{{ $v->id }}" href="javascript:0"
                                                        role="button"><i class="far fa-trash-alt"></i></a></td>
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
                            {{-- {{ $email->appends(['tab' => 'email'] + $_GET)->links() }} --}}
                        </div>



                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table caption-top table-hover">
                                <caption class="text-warning h3"><i class="fas fa-star"></i>My Favourites</caption>
                                <thead>
                                    <tr class="text-warning">
                                        <th scope="col" class="5%" width="">#</th>
                                        <th scope="col" width="">Email</th>
                                        <th scope="col" width="">Company</th>
                                        <th scope="col" width="">Name</th>
                                        <th scope="col" width="">Telephone</th>
                                        <th scope="col" width="">Detail</th>
                                        <th scope="col" width="15%">Action</th>
                                        <th scope="col" width="" class="text-center">Sent</th>
                                        <th scope="col" width="" class="text-start">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="favourite-table">
                                    @if (count($favourite) > 0)
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($favourite as $key => $v)
                                            @php
                                                $no += 1;
                                            @endphp
                                            <tr class="emailRow-{{ $v->id }}"
                                                style= "{{ $key % 2 == 0 ? 'background-color:white' : 'background-color:#FFFEDF' }}">
                                                <td class="">
                                                    {{ $no }}
                                                    @if ($v->status)
                                                        <i class="far fa-check-circle text-success fa-2x"></i>
                                                    @endif
                                                </td>
                                                <td> {{ $v->email }}
                                                </td>
                                                <td>{{ $v->company_name }}</td>
                                                <td>{{ $v->name }}</td>
                                                <td>{{ $v->phone }}</td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $v->id }}f">
                                                        See Detail
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $v->id }}f"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="exampleModalLabel">
                                                                        From: {{ $v->company_name }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body row">
                                                                    <div class="col-12 mb-4"
                                                                        style="white-space: pre-line;
overflow-wrap: break-word;">
                                                                        {{ $v->details }}
                                                                    </div>
                                                                    <i>
                                                                        <b>
                                                                            {{ $v->name }}
                                                                        </b>
                                                                    </i>
                                                                    <i>{{ $v->email }}</i>
                                                                    <i>{{ $v->phone }}</i>
                                                                    <i>{{ $v->created_at }}</i>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <a class="btn {{ $v->status ? 'btn-secondary' : 'btn-success' }} rounded-pill btn-sm status "
                                                        data-id="{{ $v->id }}" role="button">
                                                        <i class="far fa-check-square"></i></a>
                                                    <a class="btn btn-primary btn-sm rounded-pill "
                                                        data-id="{{ $v->id }}"
                                                        href="mailto:{{ $v->email }}" role="button">
                                                        <i class="fas fa-paper-plane"></i></a>
                                                    <a class="btn btn-secondary rounded-pill btn-sm favourite"
                                                        data-id="{{ $v->id }}" role="button">
                                                        <i class="fas fa-star"></i></a>

                                                </td>
                                                <td class="text-center">{{ $v->created_at }}</td>
                                                <td> <a class="btn btn-danger btn-sm rounded-pill deleteItem "
                                                        data-id="{{ $v->id }}" href="javascript:0"
                                                        role="button"><i class="far fa-trash-alt"></i></a></td>
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
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table caption-top table-hover">
                                <caption class="text-success h3"><i class="far fa-check-circle"></i>My Completed Msgs.
                                </caption>
                                <thead>
                                    <tr class="text-success">
                                        <th scope="col" class="5%" width="">#</th>
                                        <th scope="col" width="">Email</th>
                                        <th scope="col" width="">Company</th>
                                        <th scope="col" width="">Name</th>
                                        <th scope="col" width="">Telephone</th>
                                        <th scope="col" width="">Detail</th>
                                        <th scope="col" width="15%">Action</th>
                                        <th scope="col" width="" class="text-center">Sent</th>
                                        <th scope="col" width="" class="text-start">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="done-table">
                                    @if (count($done) > 0)
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($done as $key => $v)
                                            @php
                                                $no += 1;
                                            @endphp
                                            <tr class="emailRow-{{ $v->id }}"
                                                style= "{{ $key % 2 == 0 ? 'background-color:white' : 'background-color:#E8F5E9' }}">
                                                <td class="">
                                                    {{ $no }}
                                                    @if ($v->favourite)
                                                        <i class="fas fa-star text-warning fa-2x"></i>
                                                    @endif

                                                </td>
                                                <td> {{ $v->email }}
                                                </td>
                                                <td>{{ $v->company_name }}</td>
                                                <td>{{ $v->name }}</td>
                                                <td>{{ $v->phone }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $v->id }}d">
                                                        See Detail
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $v->id }}d"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="exampleModalLabel">
                                                                        From: {{ $v->company_name }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body row">
                                                                    <div class="col-12 mb-4"
                                                                        style="white-space: pre-line;
overflow-wrap: break-word;">
                                                                        {{ $v->details }}
                                                                    </div>
                                                                    <i>
                                                                        <b>
                                                                            {{ $v->name }}
                                                                        </b>
                                                                    </i>
                                                                    <i>{{ $v->email }}</i>
                                                                    <i>{{ $v->phone }}</i>
                                                                    <i>{{ $v->created_at }}</i>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-left">
                                                    <a class="btn btn-secondary rounded-pill btn-sm status "
                                                        data-id="{{ $v->id }}" role="button">
                                                        <i class="far fa-check-square"></i></a>
                                                    <a class="btn btn-primary btn-sm rounded-pill "
                                                        data-id="{{ $v->id }}"
                                                        href="mailto:{{ $v->email }}" role="button">
                                                        <i class="fas fa-paper-plane"></i></a>
                                                    <a class="btn {{ $v->favourite ? 'btn-secondary' : 'btn-warning' }}  rounded-pill btn-sm favourite"
                                                        data-id="{{ $v->id }}" role="button">
                                                        <i class="fas fa-star"></i></a>

                                                </td>
                                                <td class="text-center">{{ $v->created_at }}</td>
                                                <td> <a class="btn btn-danger btn-sm rounded-pill deleteItem "
                                                        data-id="{{ $v->id }}" href="javascript:0"
                                                        role="button"><i class="far fa-trash-alt"></i></a></td>
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
                            {{-- {{ $done->appends(['tab' => 'done'] + $_GET)->links() }} --}}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
