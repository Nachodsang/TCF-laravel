<table class="table caption-top table-hover">
    <caption>Drage and Drop to sort Services <!-- Button trigger modal -->

        <a href="{{ url('webpanel/service') }}" class="btn btn-primary btn-sm rounded-pill float-right ">DONE</a>

    </caption>
    {{-- @livewire('service-sort') --}}
    <thead>
        <tr>
            <th scope="col" class="text-center" width="5%"></th>
            <th scope="col" class="text-center" width="5%">#</th>
            <th scope="col" width="35%">Service</th>
            <th scope="col" width="15%">Category</th>


        </tr>
    </thead>
    <tbody wire:sortable="updateService">
        @if (count($service) > 0)

            @foreach ($service as $key => $v)
                <tr class="ServiceRow-{{ $v->id }}" wire:sortable.item="{{ $v->id }}"
                    wire:key="sort-{{ $v->id }}">
                    <td class="text-center cursor-sort" wire:sortable.handle><i class="fas fa-bars"></i></td>
                    <td class="text-center">{{ 1 + $key }}</td>
                    <td>
                        <div>
                            <h6><b>{{ $v->service }}</b></h6>
                        </div>

                    </td>
                    <td>
                        {{-- <img src="{{ $v->image }}" class="img-fluid rounded" alt="..."> --}}
                        <h6>{{ $v->name }}</h6>
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
