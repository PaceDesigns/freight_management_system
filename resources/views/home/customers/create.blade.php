@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')
		
	<div class="row">
	    <div class="col-lg-8 col-xs-offset-2">
	        <section class="panel">
	            <header class="panel-heading text-center">
	                Customer Details
	            </header>
	            <div class="panel-body">
	                {!! Form::open(['action'=>'ClientsController@store']) !!}
	                    <div class="form-group">
	                        <label>Full Name</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Full Name">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Nationality</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="nationality" value="{{ old('nationality') }}" class="form-control" placeholder="Nationality">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Company Name</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control" placeholder="Campany Name">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Valid ID Number</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="national_id" value="{{ old('national_id') }}" class="form-control" placeholder="">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Phone Number</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Phone Number">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Occupation</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="occupation" value="{{ old('occupation') }}" class="form-control" placeholder="Occupation">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Residential Address</label>
	                        <div class="iconic-input right">
	                            <i class="fa fa-book"></i>
	                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Residential Address">
	                        </div>
	                    </div>
                        <button class="btn btn-success btn-block" type="submit"><i class="fa fa-arrow-circle-o-right"></i> Next</button>
                        {!! Form::close() !!}

	            </div>
	        </section>
	    </div>

	    @include('errors.error-display')
	

@endsection

@section('scripts')


@endsection