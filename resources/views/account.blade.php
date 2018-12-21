@extends('layouts.master')

@section('title')
	Account
@endsection

@section('content')
	@if($activation==1)
		<div class="col-md-10">

			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Your Hotel</h3>
				</div>
			<form class="form-horizontal" action="{{ route('account.save')}} " method="POST" enctype="multipart/form-data">
				<div class="box-body">
				<div class="form-group">
					<label for="hotel_name" class="col-sm-2 control-label">Hotel Name</label>
					<div class="col-sm-10">
					<input type="text" name="hotel_name" class="form-control" value="{{ $hotel->hotel_name}}" id="first_name">
					</div>
				</div>
				<div class="form-group">
					<label for="address" class="col-sm-2 control-label">Address</label>
					<div class="col-sm-10">
					<input type="text" name="address" class="form-control" value="{{ $hotel->address}}" id="first_name">
					</div>
				</div>
				<div class="form-group">
					<label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
					<div class="col-sm-10">
					<input type="text" name="phone_number" class="form-control" value="{{ $hotel->phone_number}}" id="first_name">
				</div>
				</div>
				<div class="form-group">

					<label for="phone_number" class="col-sm-2 control-label">About Us</label>
					<div class="col-sm-10">
					<textarea rows="12" type="text" name="about" class="form-control" id="first_name">{{ $hotel->about}}</textarea>
				</div>
				</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn bg-aqua pull-right">Save Account</button>
						<input type="hidden" value="{{Session::token()}}" name="_token">
				</div>
			</form>

		</div>
	</div>

	@else
		<h1 class="bg-danger text-center text-capitalize text-danger">Please Contact Admin To Activate Your Account</h1>
	@endif
@endsection
