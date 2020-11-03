@extends('Layout.app')
@section('title','Home')
@section('content')


<div class="container">
	<div class="row">

		<div class="col-md-3 p-2">
			<div class="card">
				<div class="card-body">
					<h3 class="count-card-title">{{$TotalVisitor}}</h3>
					<h3 class="count-card-text">Total Visitor</h3>
				</div>
			</div>
		</div>

	<div class="col-md-3 p-2">
			<div class="card">
				<div class="card-body">
					<h3 class="count-card-title">{{$TotalBooking}}</h3>
					<h3 class="count-card-text">Total Booking</h3>
				</div>
			</div>
		</div>
		<div class="col-md-3 p-2">
			<div class="card">
				<div class="card-body">
					<h3 class="count-card-title">{{$TotalReview}}</h3>
					<h3 class="count-card-text">Total Reviews</h3>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
