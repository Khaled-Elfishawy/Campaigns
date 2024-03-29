@extends('layouts.app')
@section('title')
Leads
@endsection
@section('main')
<div class="card mb-5 mb-xl-8">
   <!--begin::Header-->
   <div class="card-header border-0 pt-5">
      <h3 class="card-title align-items-start flex-column">
         <span class="card-label fw-bold fs-3 mb-1">Recent Leads</span>
      </h3>
      <div class="card-toolbar">
                           <!--begin::Form-->
                           <form action="#" method="post">
                              @csrf
                              <!--begin::Card-->
                              <div class="card mb-7">
                                 <!--begin::Card body-->
                                 <div class="card-body">
                                    <!--begin::Compact form-->
                                    <div class="d-flex align-items-center">
                                       <!--begin::Input group-->
                                       <div class="position-relative w-md-400px me-md-2">
                                          <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                          <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <!--end::Svg Icon-->
                                          <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin:Action-->
                                       <div class="d-flex align-items-center">
                                          <button type="submit" class="btn btn-primary me-5">Search</button>
                                          <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Advanced Search</a>
                                       </div>
                                       <!--end:Action-->
                                    </div>
                                    <!--end::Compact form-->
                                    <!--begin::Advance form-->
                                    <div class="collapse" id="kt_advanced_search_form">
                                       <!--begin::Separator-->
                                       <div class="separator separator-dashed mt-9 mb-6"></div>
                                       <!--end::Separator-->
                                       <!--begin::Row-->
                                       <div class="row g-8 mb-8">
                                          <!--begin::Col-->
                                          <div class="col-lg-6">
                                             <label class="fs-6 form-label fw-bold text-dark">Campagin:</label>
                                             <!--begin::Select-->
                                             <select name="campaign" class="form-select form-select-solid" data-control="select2" data-placeholder="Campagin" data-hide-search="true">
                                                <option selected value="0">empty</option>
                                                @foreach(\App\Models\Campaign::all() as $campaign)
                                                   <option @if(@$_GET['campaign'] == $campaign->id) selected @endif value="{{$campaign->id}}">{{$campaign->name}}</option>
                                                @endforeach
                                             </select>
                                             <!--end::Select-->
                                          </div>
                                          <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                   <label class="fs-6 form-label fw-bold text-dark">Status:</label>
                                                   <!--begin::Select-->
                                                   <select name="status" class="form-select form-select-solid" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                                      <option selected value="0">empty</option>
                                                      <option @if(@$_GET['status'] == 'new') selected @endif value="new">new</option>
                                                      <option @if(@$_GET['status'] == 'noreplay') selected @endif value="noreplay">noreplay</option>
                                                      <option @if(@$_GET['status'] == 'busy') selected @endif value="busy">busy</option>
                                                      <option @if(@$_GET['status'] == 'client') selected @endif value="client">client</option>
                                                      <option @if(@$_GET['status'] == 'client_with_deposit') selected @endif value="client_with_deposit">client with deposit</option>
                                                   </select>
                                                   <!--end::Select-->
                                                </div>
                                                <!--end::Col-->
                                       </div>
                                       <!--end::Row-->
                                    </div>
                                    <!--end::Advance form-->
                                 </div>
                                 <!--end::Card body-->
                              </div>
                              <!--end::Card-->
                           </form>
                           <!--end::Form-->
      </div>
   </div>
   <!--end::Header-->
   <!--begin::Body-->
   <div class="card-body py-3">
      <!--begin::Table container-->
      <div class="table-responsive">
         <!--begin::Table-->
         <form method="POST" action="{{url('assign')}}">
         <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
            <!--begin::Table head-->
            <thead>
                  @if(auth()->user()->type != 'sales')
                  <th class="min-w-150px">#</th>
                  @endif
                  <th class="min-w-150px">ID</th>
                  <th class="min-w-150px">Name</th>
                  <th class="min-w-140px">Phone</th>
                  <th class="min-w-120px">Email</th>
                  <th class="min-w-120px">Campagin</th>
                  <th class="min-w-120px">Status</th>
                  @if(auth()->user()->type != 'sales')
                  <th class="min-w-120px">Sales</th>
                  @endif
                  <th class="min-w-100px text-end">Actions</th>
               </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->

            <tbody>
               @foreach($leads as $lead)
               <tr>
 @if(auth()->user()->type != 'sales')                  
                  <td>
                     <input type="checkbox" name="ids[]" >
                  </td>
@endif                  
                  <td>
                     <a href="{{url('lead/'.$lead->id)}}" class="text-dark fw-bold text-hover-primary fs-6">{{$lead->id}}</a>
                  </td>
                  <td>
                     <a href="{{url('lead/'.$lead->id)}}" class="text-dark fw-bold text-hover-primary fs-6">{{$lead->name}}</a>
                  </td>
                  <td>
                     <a href="{{url('lead/'.$lead->id)}}" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$lead->phone}}</a>
                  </td>
                  <td>
                     <a href="{{url('lead/'.$lead->id)}}" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$lead->email}}</a>
                  </td>
                  <td>
                     <a href="{{url('lead/'.$lead->id)}}" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{App\Models\Campaign::find($lead->campaign)->name}}</a>
                  </td>
                  <td class="text-dark fw-bold text-hover-primary fs-6">
                     {{$lead->status}}
                  </td>
                  @if(auth()->user()->type != 'sales')
                  <td>
                     <select name="sales" data-sales="{{$lead->id}}" id="SelectSales" class="form-select">
                        @foreach(\App\Models\User::where('type','sales')->get() as $sales)
                           <option @if($sales->id == $lead->sales) selected @endif value="{{$sales->id}}">{{$sales->name}}</option>
                        @endforeach
                     </select>
                  </td>
                  @endif
                  <td class="text-end">
                     <a href="{{url('lead/'.$lead->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                        <span class="svg-icon svg-icon-3">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                              <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </a>                     
                     <a href="{{url('lead/edit/'.$lead->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                        <span class="svg-icon svg-icon-3">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                              <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                     </a>

                  </td>
               </tr>
               @endforeach
            </tbody>
            <!--end::Table body-->
         </table>
         <!--end::Table-->
         </form>
      </div>
      <!--end::Table container-->
   </div>
   <!--begin::Body-->
</div>
 @if(auth()->user()->type != 'sales')
   <div class="pagination">
      {{$leads->links()}}
   </div>
@endif
@endsection
@section('script')
<script type="text/javascript">
   $('select[name="sales"]').change(function(el) {
      $.ajax({
        method: "GET",
        url: "{{url('assign')}}",
        data: { lead: $(this).attr('data-sales'), sales: $(this).val() }
      }).done(function( msg ) {
         alert( "Data Saved");
      });      
   });
</script>
@endsection