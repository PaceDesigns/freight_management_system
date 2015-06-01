@extends('home')

@section('title')

    <h3 class="well text-center"></h3>

@endsection


@section('content')

	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
	            <header class="panel-heading">
	                FREIGHTS
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

@endsection