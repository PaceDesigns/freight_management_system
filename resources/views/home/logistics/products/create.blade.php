@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')

		<div class="row">
		    <div class="col-lg-8 col-xs-offset-2">
		        <section class="panel">
		            <header class="panel-heading text-center">
		                Product Information
		            </header>
		            <div class="panel-body">
		                {!! Form::open() !!}
		                    <div class="form-group">
		                        <label>Consignee</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" class="form-control" name="consignee" value="{{ old('consignee') }}" placeholder="Consignee">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Product Type</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" value="{{ old('product_type') }}" class="form-control" name="product_type" placeholder="Product Type">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Product Description</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" value="{{ old('product_description') }}" name="product_description" class="form-control" placeholder="Product Description">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Quantity</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control" placeholder="Quantity">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Gross Weight</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input value="{{ old('gross_weight') }}" name="gross_weight" type="text" class="form-control" placeholder="Gross Weight">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Destination</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" name="destination" value="{{ old('destination') }}" class="form-control" placeholder="Destination">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Destination Address</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" value="{{ old('destination_address') }}" name="destination_address" class="form-control" placeholder="Destination Address">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>Courier</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" name="courier_id" value="{{ old('courier_id') }}" class="form-control" placeholder="Courier">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label>HAWB</label>
		                        <div class="iconic-input right">
		                            <i class="fa fa-book"></i>
		                            <input type="text" name="HAWB" value="{{ old('HAWB') }}" class="form-control" placeholder="HAWB">
		                        </div>
		                    </div>
	                        <button class="btn btn-success btn-block" type="submit"><i class="fa fa-save"></i> Save</button>
		                {!! Form::close() !!}
		            </div>
		        </section>
		    </div>

		    @include('errors.error-display')	

@endsection