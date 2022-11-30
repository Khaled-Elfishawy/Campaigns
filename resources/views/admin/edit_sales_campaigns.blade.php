@extends('layouts.app')
@section('main')
<style type="text/css">
	label.form-check-label.btn.btn-secondary {
	    line-height: 30px;
	    padding-left: 15px;
	}	
	.form-check-input {
	    margin: 0 14px 0 0 !important;
	}	
</style>
<div class="card card-flush pt-3 mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bold">Edit Sales Campaigns</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<form method="POST">
		@csrf
		<!--begin::Card body-->
		<div class="card-body pt-3">
			<!--begin::Section-->
			<div class="mb-10">
				<!--begin::Title-->
				<h5 class="mb-4">Select Campaigns:</h5>
				<!--end::Title-->
				<!--begin::Details-->
				<div class="d-flex flex-wrap py-5">
					<!--begin::Row-->
					<div class="flex-equal me-5">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<tbody>
								<!--begin::Row-->
									<tr>
								@foreach($campaigns as $campaign)	
										<td class="text-gray-800">
											<div class="form-check form-check-custom form-check-solid me-10">
											    <label class="form-check-label btn btn-secondary" for="flexCheckbox{{$campaign->id}}">
											    <input class="form-check-input h-30px w-30px" name="campaigns[]" type="checkbox" @if(in_array($campaign->id,$sales->campaigns?$sales->campaigns:[])) checked="checked" @endif value="{{$campaign->id}}" id="flexCheckbox{{$campaign->id}}"/>
											        {{$campaign->name}}
											    </label>
											</div>
										</td>
								@endforeach
									</tr>
								<!--end::Row-->
							</tbody>
						</table>
						<!--end::Details-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Section-->
		</div>
		<!--end::Card body-->
		<div class="card-footer d-flex justify-content-end py-6 px-9">
		   <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
		   <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
		</div>
	</form>	
</div>
@endsection