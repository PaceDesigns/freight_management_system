@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')
		
		<div class="wrapper">
		    
		    <div class="row">
		        <div class="col-md-12">
		            <h4 class="fw-title text-center">FREIGHT INFORMATION</h4>
		            <div class="box-widget">
		                <div class="widget-head clearfix">
		                    <div id="top_tabby" class="block-tabby pull-left">
		                    </div>
		                </div>
		                <div class="widget-container">
		                    <div class="widget-block">
		                        <div class="widget-content box-padding">
		                            <form id="stepy_form" class=" form-horizontal left-align form-well">
		                                <fieldset title="CUSTOMER INFORMATION">
		                                    <legend></legend>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Full Name</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Full Name" class="form-control" required>
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Email Address</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input required type="text" placeholder="Email Address" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Occupation</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input required type="text" placeholder="Username" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Residential Address</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input required type="text" placeholder="Username" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Valid National ID</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input required type="text" placeholder="Username" class="form-control">
		                                        </div>
		                                    </div>
		                                </fieldset>
		                                <fieldset title="PRODUCT INFORMATION 1">
		                                    <legend></legend>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Consignee</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Phone" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">HAWB #</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Product Type</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Product Description</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Quantity</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                </fieldset>
		                                <fieldset title="FREIGHT PROCESSING 2">
		                                    <legend></legend>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Gross Weight</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Destination</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Destination Address</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="form-group">
		                                        <label class="col-md-2 col-sm-2 control-label">Courier</label>
		                                        <div class="col-md-6 col-sm-6">
		                                            <input type="text" placeholder="Mobile" class="form-control">
		                                        </div>
		                                    </div>
		                                </fieldset>
		                                <button type="submit" class="finish btn btn-info btn-extend"> Finish!</button>
		                            </form>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	

@endsection

@section('scripts')

	<script>
	    /*=====STEPY WIZARD====*/
	    $(function() {
	        $('#default').stepy({
	            backLabel: 'Previous',
	            block: true,
	            nextLabel: 'Next',
	            titleClick: true,
	            titleTarget: '.stepy-tab'
	        });
	    });
	    /*=====STEPY WIZARD WITH VALIDATION====*/
	    $(function() {
	        $('#stepy_form').stepy({
	            backLabel: 'Back',
	            nextLabel: 'Next',
	            errorImage: true,
	            block: true,
	            description: true,
	            legend: false,
	            titleClick: true,
	            titleTarget: '#top_tabby',
	            validate: true
	        });
	        $('#stepy_form').validate({
	            errorPlacement: function(error, element) {
	                $('#stepy_form div.stepy-error').append(error);
	            },
	            rules: {
	                'name': 'required',
	                'email': 'required'
	            },
	            messages: {
	                'name': {
	                    required: 'Name field is required!'
	                },
	                'email': {
	                    required: 'Email field is requerid!'
	                }
	            }
	        });
	    });
	</script>

@endsection