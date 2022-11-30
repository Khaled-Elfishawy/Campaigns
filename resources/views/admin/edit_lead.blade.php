@extends('layouts.app')
@section('main')
<div class="card card-flush pt-3 mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bold">Edit Lead Details</h2>
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
				<h5 class="mb-4">Base Details:</h5>
				<!--end::Title-->
				<!--begin::Details-->
				<div class="d-flex flex-wrap py-5">
					<!--begin::Row-->
					<div class="flex-equal me-5">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<!--begin::Row-->
							<tbody><tr>
								<td class="text-gray-400 min-w-175px w-175px">Name:</td>
								<td class="text-gray-800 min-w-200px">
									<input type="text" name="name" class="form-control" value="{{$lead->name}}">
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Phone:</td>
								<td class="text-gray-800"><input type="text" name="phone" class="form-control" value="{{$lead->phone}}"></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Phone 2:</td>
								<td class="text-gray-800"><input type="text" name="phone2" class="form-control" value="{{$lead->phone2}}"></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Email:</td>
								<td class="text-gray-800">
									<input type="text" name="email" class="form-control" value="{{$lead->email}}">
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Campaign:</td>
								<td class="text-gray-800">
									<input type="text" disabled name="campaign_name" class="form-control" value="{{App\Models\Campaign::find($lead->campaign)->name}}">
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Deposit:</td>
								<td class="text-gray-800">
									<input type="text" name="deposit" class="form-control" value="{{$lead->deposit}}">
								</td>
							</tr>
							<!--end::Row-->						
						</tbody></table>
						<!--end::Details-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="flex-equal">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<!--begin::Row-->
							<tbody><tr>
								<td class="text-gray-400 min-w-175px w-175px">Status:</td>
								<td class="text-gray-800 min-w-200px">
									<select class="form-select" name="status">
										<option @if($lead->status == "new") selected @endif value="new">new</option>
										<option @if($lead->status == "noanswer") selected @endif value="noanswer">No Answer</option>
										<option @if($lead->status == "noanswer2") selected @endif value="noanswer2">No AnswerX2</option>
										<option @if($lead->status == "inprogress") selected @endif value="inprogress">in progress</option>
										<option @if($lead->status == "high") selected @endif value="high">high Potential</option>
										<option @if($lead->status == "low") selected @endif value="low">low Potential</option>
										<option @if($lead->status == "nomoney") selected @endif value="nomoney">no money</option>
										<option @if($lead->status == "FTD") selected @endif value="FTD">FTD</option>
										<option @if($lead->status == "rejected") selected @endif value="rejected">Rejected</option>
									</select>
									<a href="#" class="text-gray-800 text-hover-primary"></a>
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Date Of Birth:</td>
								<td class="text-gray-800"><input type="date" name="date_birth" class="form-control" value="{{$lead->date_of_birth}}"></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Date Of Register:</td>
								<td class="text-gray-800"><input type="text" name="date_register" class="form-control" value="{{$lead->created_at}}" disabled></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Last Update:</td>
								<td class="text-gray-800"><input type="text" name="date_update" class="form-control" value="{{$lead->updated_at}}" disabled></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Country:</td>
								<td class="text-gray-800"><input type="text" name="country" class="form-control" value="{{$lead->country}}"></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">City:</td>
								<td class="text-gray-800"><input type="text" name="city" class="form-control" value="{{$lead->city}}"></td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Sales:</td>
								<td class="text-gray-800">
									<select class="form-select" name="sales">
										<option disabled selected value="">empty</option>
										@foreach(\App\Models\User::where('type','sales')->get() as $sales)
											<option @if($sales->id == $lead->sales) selected @endif value="{{$sales->id}}">{{$sales->name}}</option>
										@endforeach
									</select>
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
		   <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
		   <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
		</div>
	</form>	
</div>
@endsection