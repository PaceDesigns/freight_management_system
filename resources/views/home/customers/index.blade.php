@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')

	<div class="row">
	    <section class="col-md-12">
	        <a href="{{ action('ClientsController@create') }}">
	            <button class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Add New Client</button>
	        </a>
	    </section>
		<div class="col-sm-12">
			<section class="panel">
	            <header class="panel-heading">
	                Customers
	            </header>
		            <div class="panel-body">
		                <section id="no-more-tables">
		                    <table class="table table-bordered table-striped table-condensed cf">
		                        <thead class="cf">
			                        <tr>
			                            <th>Name</th>
			                            <th>Nationality</th>
			                            <th>Valid ID Number</th>
			                            <th>Email</th>
			                            <th>Phone Number</th>
			                            <th>Occupation</th>
			                            <th>Residential Address</th>
			                        </tr>
		                        </thead>
		                        <tbody>
			                        <tr>
			                            <td data-title="Code">
				                            <a href="">
				                            	THOMAS DOLA KOMLAN
				                            </a>
			                            </td>
			                            <td data-title="Company">AUSTRAL</td>
			                            <td class="numeric" data-title="Price">$1.38</td>
			                            <td class="numeric" data-title="Change">-0.01</td>
			                            <td class="numeric" data-title="Change %">-0.36%</td>
			                            <td class="numeric" data-title="Open">$1.39</td>
			                            <td class="numeric" data-title="Open">$1.39</td>
			                        </tr>
		                        </tbody>
		                    </table>
		                </section>
		            </div>
	        </section>
		</div>
	</div>

@endsection