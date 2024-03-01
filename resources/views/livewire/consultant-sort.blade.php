 <table class="table caption-top table-hover">
     <caption>Drag and Drop to sort Consultant<a href="{{ url('webpanel/consultant') }}"
             class="btn btn-primary btn-sm rounded-pill float-right">DONE</a>

     </caption>
     <thead>
         <tr>
             <th scope="col" class="text-center" width="5%"></th>
             <th scope="col" class="text-center" width="5%">#</th>

             <th scope="col" width="40%">Consultant Name</th>
             <th scope="col" width="20%">Role</th>

         </tr>
     </thead>
     <tbody wire:sortable="updateConsultant">
         @if (count($consultant) > 0)

             @foreach ($consultant as $key => $v)
                 <tr class="ConsultantRow-{{ $v->id }}" wire:sortable.item="{{ $v->id }}"
                     wire:key="sort-{{ $v->id }}">
                     <td class="text-center cursor-sort" wire:sortable.handle><i class="fas fa-bars"></i></td>
                     <td class="text-center">{{ 1 + $key }}</td>

                     <td>
                         <div>
                             <h6 class="fw-bold">{{ $v->name }}</h6>
                             <i>{{ $v->role }}</i>
                         </div>

                     </td>
                     <td>

                         <h6 class="">{{ $v->role }}</h6>



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
