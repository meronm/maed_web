@extends('layouts.master')

@section('content')
	@include('includes.message-block')
	<div class="headline">
		<h1>{{$hotel->hotel_name}}</h1>
	</div>

	<div class="row">
		@if($activation==1)
		<div class="col-md-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">About Us</h3>
				</div>
				<div class="box-body">
					{{$hotel->about}}
				</div>

				<div class="box-header with-border">
					<h3 class="box-title">Phone Number</h3>
				</div>
				<div class="box-body">
					{{$hotel->phone_number}}
				</div>

				<div class="box-header with-border">
					<h3 class="box-title">Address</h3>
				</div>
				<div class="box-body">
					{{$hotel->address}}
				</div>
				<div class="box-header with-border">
					<h3 class="box-title">Manager</h3>
				</div>
				<div class="box-body">
					{{$hotel->user->first_name.' '.$hotel->user->middle_name}}
				</div>

				<!-- /.box-body -->
			</div>

		</div>
		@else
			<h1 class="bg-danger text-center text-capitalize text-danger">Please Contact Admin To Activate Your Account</h1>
		@endif
	</div>

<script>
	
	var token = '{{ Session::token()}}';
</script>
@endsection
