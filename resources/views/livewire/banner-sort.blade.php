 <table class="table table-hover caption-top">
     <caption>Drag and Drop to sort Banner<a href="{{ url('webpanel/banner') }}"
             class="btn btn-primary btn-sm rounded-pill float-right">DONE</a>

     </caption>
     <thead>
         <tr>
             <th scope="col" class="text-center" width="5%">Sort</th>
             <th scope="col" class="text-center" width="5%">#</th>
             <th scope="col" width="50%"></th>
             {{-- <th scope="col" class="text-center">Type</th> --}}

         </tr>
     </thead>
     <tbody wire:sortable="updateBanner">
         @if (count($banner) > 0)
             @foreach ($banner as $key => $v)
                 <tr class="BannerRow-{{ $v->id }}" wire:sortable.item="{{ $v->id }}"
                     wire:key="sort-{{ $v->id }}">
                     <td class="text-center cursor-sort" wire:sortable.handle><i class="fas fa-bars"></i></td>
                     <td scope="row" class="text-center">{{ $key + 1 }}</td>
                     <td><img src="{{ $v->image }}" class="img-fluid rounded" alt="..."
                             style="max-height: 300px">
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
