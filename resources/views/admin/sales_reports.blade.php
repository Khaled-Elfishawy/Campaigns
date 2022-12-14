@extends('layouts.app')
@section('title')
Sales Reports
@endsection
@section('main')
<div class="d-flex flex-column flex-lg-row">
   <div class="flex-lg-row-fluid">
      
      <div class="card mb-5 mb-xl-12">
         <!--begin::Header-->
         <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bold fs-3 mb-1">Sales Report</span>
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
                                          <label>From</label>
                                          <input type="date" class="form-control form-control-solid ps-10" name="from" value=""/>
                                       </div>
                                       <div class="position-relative w-md-400px me-md-2">
                                          <label>To</label>
                                          <input type="date" class="form-control form-control-solid ps-10" name="to" value=""/>
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin:Action-->
                                       <div class="d-flex align-items-center">
                                          <button type="submit" class="btn btn-primary me-5">Search</button>
                                       </div>
                                       <!--end:Action-->
                                    </div>
                                    <!--end::Compact form-->
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
               <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                  <!--begin::Table head-->
                  <thead>
                        <th class="min-w-120px">Sales Name</th>
                        <th class="min-w-120px">No Answer</th>
                        <th class="min-w-120px">No AnswerX2</th>
                        <th class="min-w-120px">high Potential</th>
                        <th class="min-w-120px">low Potential</th>
                        <th class="min-w-120px">FTD</th>
                        <th class="min-w-120px">Rejected</th>
                        <th class="min-w-120px">Total Calls</th>
                     </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <!--begin::Table body-->
                  <tbody>
                     @foreach($sales as $salesman)
                     <tr>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{$salesman->name}}</a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','noanswer')->count()}}
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','noanswer2')->count()}}  
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','high')->count()}}  
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','low')->count()}}  
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','FTD')->count()}}  
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->where('action','rejected')->count()}}                              
                           </a>
                        </td>
                        <td>
                           <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">
                              {{$leads->where('user_id',$salesman->id)->count()}}                              
                           </a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
                  <!--end::Table body-->
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
@endsection