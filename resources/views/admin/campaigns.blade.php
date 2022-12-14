@extends('layouts.app')
@section('title')
Campaigns
@endsection
@section('main')

            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-5 mb-xl-12">
                    <div class="card card-flush h-xl-100" data-select2-id="select2-data-150-3qwp">
                        <!--begin::Card header-->
                        <div class="card-header py-7">
                            <!--begin::Tabs-->
                            <div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
                                <!--begin::Tab item-->
                                <div class="fs-4 fw-bold pb-3 cursor-pointer border-bottom border-3 border-primary" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">All Campaigns ({{$count}})</div>
                                <!--end::Tab item-->
                            </div>
                            <!--end::Tabs-->
                            <!--begin::Create campaign button-->
                            <div class="card-toolbar">
                                <a href="{{url('campaigns/create')}}" type="button" class="btn btn-primary">Create Campaign</a>
                            </div>
                            <!--end::Create campaign button-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-1" data-select2-id="select2-data-149-i6tj">
                           <!--begin::Seprator-->
                           <div class="separator separator-dashed my-5"></div>
                           <!--end::Seprator-->
                           <!--begin::Table-->
                           <div id="kt_widget_table_3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="table-responsive">
                                 <table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3 dataTable no-footer" data-kt-table-widget-3="all">
                                    <thead class="d-none">
                                       <tr>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Campaign: activate to sort column ascending" style="width: 0px;">Campaign</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Platforms: activate to sort column ascending" style="width: 0px;">Platforms</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Team: activate to sort column ascending" style="width: 0px;">Team</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 0px;">Progress</th>
                                          <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 0px;">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($campaigns as $campaign)
                                       <tr class="odd">
                                          <td class="min-w-175px">
                                             <div class="position-relative ps-6 pe-3 py-2">
                                                <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                                <a href="{{url('/campaign/'.base64_encode($campaign->id).'?utm-campaign='.md5($campaign->name).'&expires_at='.md5($campaign->expires_at))}}" class="mb-1 text-dark text-hover-primary fw-bold">
                                                   {{$campaign->name}}
                                                </a>
                                                
                                                <div class="fs-7 text-muted fw-bold LinkCopy" data-url="" >
                                                   <input type="text" name="linkCamp" disabled class="form-control linkCamp" value="{{url('/campaign/'.base64_encode($campaign->id).'?utm-campaign='.md5($campaign->name).'&expires_at='.md5($campaign->expires_at))}}">
                                                   <span class="Copy">Copy Link</span>
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             @if($campaign->status == 1 || $campaign->expires_at > date('Y-m-d'))
                                                <span class="badge badge-light-success">Live Now</span>
                                             @else
                                                <span class="badge badge-light-danger">Ended</span>
                                             @endif
                                          </td>
                                          <td class="min-w-150px">
                                             <div class="mb-2 fw-bold">{{$campaign->expires_at}}</div>
                                             <div class="fs-7 fw-bold text-muted">Expire Date</div>
                                          </td>
                                          <td class="min-w-150px">
                                             <div class="mb-2 fw-bold">{{\App\Models\Lead::where('campaign',$campaign->id)->count()}}</div>
                                             <div class="fs-7 fw-bold text-muted">Leads</div>
                                          </td>
                                          <td class="min-w-150px">
                                             <div class="mb-2 fw-bold">{{$campaign->visits}}</div>
                                             <div class="fs-7 fw-bold text-muted">visits</div>
                                          </td>
                                          <td class="d-none">Pending</td>
                                          <td class="text-end">
                                             <a href="{{url('campaigns/edit/'.$campaign->id)}}" type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon">
                                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                      <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                   </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                             </a>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                    <!--end::Table-->
                                 </table>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                 <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                              </div>
                           </div>
                           <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Col-->                             
            </div>
            <!--end::Row-->

@endsection
@section('script')
<script type="text/javascript">
   $('.Copy').click(function(){
         var $temp = $("<input>");
         var inputN = $(this).parent().children('.linkCamp');
         $("body").append($temp);
         $temp.val(inputN.val()).select();
         document.execCommand("copy");
         $temp.remove();
   }); 
</script>
@endsection