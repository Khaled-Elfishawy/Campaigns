@extends('layouts.app')
@section('title')
Upload
@endsection
@section('main')
<div class="card card-flush pt-3 mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bold">Upload Leads</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<form method="POST" enctype="multipart/form-data">
		@csrf
		<!--begin::Card body-->
		<div class="card-body pt-3">
			<!--begin::Section-->
			<div class="mb-10">
				<!--begin::Title-->
				<h5 class="mb-4">Leads File:</h5>
				<small>Upload Excel File</small>
				<!--end::Title-->
				<!--begin::Details-->
				<div class="d-flex flex-wrap py-5">
					<!--begin::Row-->
					<div class="flex-equal me-5">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<!--begin::Row-->
							<tbody><tr>
								<td class="text-gray-400 min-w-175px w-175px">File:</td>
								<td class="text-gray-800 min-w-200px">
									<input type="file" name="name" class="form-control" value="">
								</td>
							</tr>
							<!--end::Row-->
						</tbody></table>
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
		   <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Upload</button>
		</div>
	</form>	
</div>
@endsection