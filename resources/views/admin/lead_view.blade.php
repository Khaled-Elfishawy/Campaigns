@extends('layouts.app')
@section('main')
<div class="card card-flush pt-3 mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bold">Lead Details</h2>
		</div>
		<!--begin::Card title-->
		<!--begin::Card toolbar-->
		<div class="card-toolbar">
			<a href="{{url('lead/edit/'.$lead->id)}}" class="btn btn-light-primary">Update Lead</a>
		</div>
		<!--end::Card toolbar-->
	</div>
	<!--end::Card header-->
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
								<a href="#" class="text-gray-800 text-hover-primary">{{$lead->name}}</a>
							</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Phone:</td>
							<td class="text-gray-800">{{$lead->phone}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Phone 2:</td>
							<td class="text-gray-800">{{$lead->phone2}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Date Of Bith:</td>
							<td class="text-gray-800">{{$lead->date_of_birth}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Email:</td>
							<td class="text-gray-800">{{$lead->email}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Campaign:</td>
							<td class="text-gray-800">{{App\Models\Campaign::find($lead->campaign)->name}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Register Date:</td>
							<td class="text-gray-800">{{$lead->created_at}}</td>
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
								<a href="#" class="text-gray-800 text-hover-primary">{{$lead->status}}</a>
							</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Country:</td>
							<td class="text-gray-800">{{$lead->country}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">City:</td>
							<td class="text-gray-800">{{$lead->city}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Sales:</td>
							<td class="text-gray-800">{{$lead->sales}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Source :</td>
							<td class="text-gray-800">{{$lead->source_campain}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Deposit :</td>
							<td class="text-gray-800">{{$lead->deposit}}</td>
						</tr>
						<!--end::Row-->
						<!--begin::Row-->
						<tr>
							<td class="text-gray-400">Last Update Date:</td>
							<td class="text-gray-800">{{$lead->updated_at}}</td>
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
		<!--begin::Section-->
		<div class="mb-0">
			<!--begin::Title-->
			<h5 class="mb-4">Leave Comments:</h5>
			<!--end::Title-->
			<!--begin::Product table-->
			<form action="{{url('lead/comment/'.$lead->id)}}" method="POST" >
				@csrf
				<textarea class="form-control mb-4" name="comment" placeholder="comment"></textarea>
				<button type="submit" class="btn btn-light-primary">Add New Comment</button>
			</form>
			<!--end::Product table-->
			<div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
					@foreach($comments as $comment)
						<!--begin::Time-->
						<div class="d-flex flex-stack position-relative mt-6">
							<!--begin::Bar-->
							<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
							<!--end::Bar-->
							<!--begin::Info-->
							<div class="fw-semibold ms-5">
								<!--begin::Time-->
								<div class="fs-7 mb-1">{{$comment->created_at}}
								<span class="fs-7 text-muted text-uppercase"></span></div>
								<!--end::Time-->
								<!--begin::Title-->
								<a href="#" class="fs-5 fw-bold text-dark text-hover-primary mb-2">{{$comment->comment}}</a>
								<!--end::Title-->
								<!--begin::User-->
								<div class="fs-7 text-muted">Comment By
								<a href="#">{{App\Models\User::find($comment->user)->name}}</a></div>
								<!--end::User-->
							</div>
							<!--end::Info-->
							<!--begin::Action-->
							<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">Delete</a>
							<!--end::Action-->
						</div>
						<!--end::Time-->
					@endforeach

			</div>			
		</div>
		<!--end::Section-->
	</div>
	<!--end::Card body-->
</div>
@endsection