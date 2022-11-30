@extends('layouts.app')
@section('main_old')
   <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xxl-325px mb-8 mb-lg-0 me-lg-9 me-5">
      <!--begin::Form-->
      <form action="#" method="post">
         @csrf
         <!--begin::Card-->
         <div class="card">
            <!--begin::Body-->
            <div class="card-body">
               <!--begin:Search-->
               <div class="position-relative">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                  <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <input type="text" class="form-control form-control-solid ps-10" name="search" value="{{@$request->search}}" placeholder="Search" />
               </div>
               <!--end:Search-->
               <!--begin::Border-->
               <div class="separator separator-dashed my-8"></div>
               <!--end::Border-->
               <!--begin::Input group-->
               <div class="mb-5">
                  <label class="fs-6 form-label fw-bold text-dark">Status:</label>
                  <!--begin::Select-->
                  <select name="status" class="form-select form-select-solid" data-control="select2" data-placeholder="Status" data-hide-search="true">
                     <option selected value="0">empty</option>
                     <option @if(@$request->status == 'new') selected @endif value="new">new</option>
                     <option @if(@$request->status == 'noreplay') selected @endif value="noreplay">noreplay</option>
                     <option @if(@$request->status == 'busy') selected @endif value="busy">busy</option>
                     <option @if(@$request->status == 'client') selected @endif value="client">client</option>
                     <option @if(@$request->status == 'client_with_deposit') selected @endif value="client_with_deposit">client with deposit</option>
                  </select>
                  <!--end::Select-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="mb-5">
                  <label class="fs-6 form-label fw-bold text-dark">From:</label>
                  <input type="date" value="{{@$request->date_from}}" class="form-control form-control form-control-solid" name="date_from" />
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="mb-5">
                  <label class="fs-6 form-label fw-bold text-dark">To:</label>
                  <input type="date" value="{{@$request->date_to}}" class="form-control form-control form-control-solid" name="date_to" />
               </div>
               <!--end::Input group-->

               <!--begin::Input group-->
               <div class="mb-10">
                  <label class="fs-6 form-label fw-bold text-dark mb-5">Campagin</label>
                  @foreach(\App\Models\Campaign::all() as $campaign)
                     <!--begin::Checkbox-->
                     <div class="form-check form-check-custom form-check-solid mb-5">
                        <input value="{{$campaign->id}}" name="campaign" class="form-check-input" @if(@$request->campaign == $campaign->id) checked="true" @endif type="radio" id="kt_search_category_{{$campaign->id}}" />
                        <label class="form-check-label flex-grow-1 fw-semibold text-gray-700 fs-6" for="kt_search_category_{{$campaign->id}}">{{$campaign->name}}</label>
                        <span class="text-gray-400 fw-bold">28</span>
                     </div>
                     <!--end::Checkbox-->
                  @endforeach
               </div>
               <!--end::Input group-->
               <!--begin::Action-->
               <div class="d-flex align-items-center justify-content-end">
                  <button type="submit" class="btn btn-primary">Search</button>
               </div>
               <!--end::Action-->
            </div>
            <!--end::Body-->
         </div>
         <!--end::Card-->
      </form>
      <!--end::Form-->
   </div>   
@endsection
@section('main')
<div class="d-flex flex-column flex-lg-row">
   <div class="flex-lg-row-fluid">
      
      <div class="card mb-5 mb-xl-12">
         <!--begin::Header-->
         <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bold fs-3 mb-1">Campaigns Report</span>
            </h3>
         </div>
         <!--end::Header-->
         <!--begin::Body-->
         <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
               <!--begin::Table-->
               <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                  <!--begin::Table head-->
                  <thead>
                        <th class="min-w-150px">Source</th>
                        <th class="min-w-140px">Campaign Name</th>
                        <th class="min-w-120px">Leads</th>
                        <th class="min-w-120px">FTD</th>
                        <th class="min-w-120px">Deposit</th>
                     </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody>
                     @foreach($campaigns as $campaign)
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Fresh</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$campaign->name}}</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{count($campaign->Leads)}}</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{count($campaign->Leads()->where('status','FTD')->get())}}</a>
                        </td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{$campaign->Leads()->sum('deposit')}}</td>
                     </tr>
                     @endforeach
                  </tbody>
                  <!--end::Table body-->
               </table>
               <!--end::Table-->
            </div>
            <!--end::Table container-->
         </div>
         <!--begin::Body-->
      </div>  
      <div class="col-lg-5">
         
         <div class="card mb-5 mb-xl-5">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
               <h3 class="card-title align-items-start flex-column">
                  <span class="card-label fw-bold fs-3 mb-1">Leads Report</span>
               </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
               <!--begin::Table container-->
               <div class="table-responsive">
               <!--begin::Table-->
               <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                  <!--begin::Table head-->
                  <thead>
                        <th class="min-w-150px">Status</th>
                        <th class="min-w-140px">Leads</th>
                     </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody>                     
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">New</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','new')->count()}}
                           </a>
                        </td>
                     </tr>                   
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">No Answer</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','noanswer')->count()}}
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">No Answer x2</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','noanswer2')->count()}}
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">High Potential</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','high')->count()}}
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Low Potential</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','low')->count()}}
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">FTD</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','FTD')->count()}}
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Rejected</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{\App\Models\Lead::where('status','rejected')->count()}}
                           </a>
                        </td>
                     </tr>
                  </tbody>
                  <!--end::Table body-->
               </table>
               <!--end::Table-->
               </div>
               <!--end::Table container-->
            </div>
            <!--begin::Body-->
         </div>
      </div>

   </div>
</div>
@endsection