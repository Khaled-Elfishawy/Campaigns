@extends('layouts.app')
@section('main')
<div class="card mb-5 mb-xl-10">
                              <!--begin::Card header-->
                              <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                 <!--begin::Card title-->
                                 <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Create Campagin</h3>
                                 </div>
                                 <!--end::Card title-->
                              </div>
                              <!--begin::Card header-->
                              <!--begin::Content-->
                              <div id="kt_account_settings_profile_details" class="collapse show">
                                 <!--begin::Form-->
                                 <form id="kt_account_profile_details_form" action="{{url('campaigns/create')}}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                       @csrf
                                       <!--begin::Input group-->
                                       <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-semibold fs-6">Campagin Name</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8">
                                             <!--begin::Row-->
                                             <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                   <input type="text" name="campaign_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Campagin Name">
                                                   <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                             </div>
                                             <!--end::Row-->
                                          </div>
                                          <!--end::Col-->
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin::Input group-->
                                       <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-semibold fs-6">Template</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                             <select name="template" aria-label="Select a Country" data-control="select2" data-placeholder="Select a template..." class="form-select form-select-solid form-select-lg fw-semibold" >
                                                <option value="" data-select2-id="select2-data-12-iul6">Select a Templte</option>
                                                <option value="1">Template 1</option>
                                                <option value="2">Template 2</option>
                                                <option value="3">Template 3</option>
                                                <option value="4">Template 4</option>
                                                <option value="5">Template 5</option>
                                                <option value="6">Template 6</option>
                                             </select>
                                             <div class="fv-plugins-message-container invalid-feedback"></div>
                                          </div>
                                          <!--end::Col-->
                                       </div>
                                       <!--end::Input group-->
                                       <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                             <select name="status" aria-label="Select a Country" data-control="select2" data-placeholder="Select a status..." class="form-select form-select-solid form-select-lg fw-semibold" >
                                                <option value="1">ON</option>
                                                <option value="2">OFF</option>
                                             </select>
                                             <div class="fv-plugins-message-container invalid-feedback"></div>
                                          </div>
                                          <!--end::Col-->
                                       </div>
                                       <!--end::Input group-->
                                       <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-semibold fs-6">Platform</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                             <select multiple="multiple" name="platform[]" aria-label="Select a platform" data-control="select2" data-placeholder="Select a platform..." class="form-select form-select-solid form-select-lg fw-semibold" >
                                                <option value="FaceBook">FaceBook</option>
                                                <option value="Inftagram">Inftagram</option>
                                             </select>
                                             <div class="fv-plugins-message-container invalid-feedback"></div>
                                          </div>
                                          <!--end::Col-->
                                       </div>
                                       <!--begin::Input group-->

                                       <!--begin::Input group-->
                                       <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-semibold fs-6">Expire Date</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8">
                                             <!--begin::Row-->
                                             <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                   <input type="date" name="expire_at" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                                   <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                             </div>
                                             <!--end::Row-->
                                          </div>
                                          <!--end::Col-->
                                       </div>
                                       <!--end::Input group-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                       <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                       <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                 <input type="hidden"></form>
                                 <!--end::Form-->
                              </div>
                              <!--end::Content-->
                           </div>
@endsection