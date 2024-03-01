  <table class="table caption-top table-hover">
      <caption>List of Service Category
          <a href="{{ url('webpanel/service-category/') }}" class="btn btn-primary btn-sm rounded-pill float-right">
              DONE</a>
      </caption>
      <thead>
          <tr>
              <th scope="col" class="text-center" width="5%"></th>
              <th scope="col" class="text-center" width="5%">#</th>
              <th scope="col" width="40%">Name Of Service Category</th>
              {{-- <th scope="col" class="text-center" width="10%">Type</th> --}}

          </tr>
      </thead>
      <tbody wire:sortable="updateServiceCat">
          @if (count($serviceCat) > 0)

              @foreach ($serviceCat as $key => $v)
                  <tr class="ServiceRow-{{ $v->id }}" wire:sortable.item="{{ $v->id }}"
                      wire:key="sort-{{ $v->id }}">
                      <td class="text-center cursor-sort" wire:sortable.handle><i class="fas fa-bars"></i></td>
                      <td class="text-center">{{ 1 + $key }}</td>
                      <td>
                          <div>
                              <h6><b>{{ $v->name }}</b></h6>
                          </div>

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
