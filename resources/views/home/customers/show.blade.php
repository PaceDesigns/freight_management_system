@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')

	<div class="row">
	    <div class="col-md-12">
	        <div class="panel">
	            <header class="panel-heading">
	            	<ul class="p-info">
	            	    <li>
	            	        <div class="title">Full Name</div>
	            	        <div class="desk">Male</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">Nationality</div>
	            	        <div class="desk">ABC Inc.</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">Company Name</div>
	            	        <div class="desk">BSC. in CSE</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">ID Number</div>
	            	        <div class="desk">50+</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">Phone Number</div>
	            	        <div class="desk">HTML, CSS, JavaScript.</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">Occupation</div>
	            	        <div class="desk">HTML, CSS, JavaScript.</div>
	            	    </li>
	            	    <li>
	            	        <div class="title">Residential Address</div>
	            	        <div class="desk">HTML, CSS, JavaScript.</div>
	            	    </li>
	            	</ul>
	            </header><!-- /header -->
	            <div class="panel-body">
	        		<section class="panel">
	                    <header class="panel-heading text-center">
	                        TRANSACTIONS
	                    </header>
	        	            <div class="panel-body">
	        	                <section id="no-more-tables">
	        	                    <table class="table table-bordered table-striped table-condensed cf">
	        	                        <thead class="cf">
	        		                        <tr>
	        		                            <th>Sr.</th>
	        		                            <th>Date</th>
	        		                            <th>Product</th>
	        		                            <th>From</th>
	        		                            <th>To</th>
	        		                            <th>Quantity</th>
	        		                        </tr>
	        	                        </thead>
	        	                        <tbody>
	        		                        <tr>
	        		                            <td data-title="Code">
	        			                            <a href="{{ route('freight') }}">
	        			                            	AAA
	        			                            </a>
	        		                            </td>
	        		                            <td data-title="Company">AUSTRAL</td>
	        		                            <td class="numeric" data-title="Price">$1.38</td>
	        		                            <td class="numeric" data-title="Change">-0.01</td>
	        		                            <td class="numeric" data-title="Change %">-0.36%</td>
	        		                            <td class="numeric" data-title="Open">$1.39</td>
	        		                        </tr>
	        	                        </tbody>
	        	                    </table>
	        	                </section>
	        	            </div>
	                </section>
	            </div>
	        </div>
	    </div>
	</div>

@endsection