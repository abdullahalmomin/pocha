@extends('layouts.WhiteFish.client.master')
@section('main-content')
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<h3 class="text-center">Day wise Breakdown</h3>
					<hr>
					<div class="row">
						<div class="col-md-12">
							{{ Form::open(['method' => 'GET','route' => array('WhiteFish.client.investBreakdown'),'role'=>'form','data-toggle'=>'validator']) }}
								<div class="row">
									<div class="col-md-3">
										<div class="form-group QuickFilter-Item">
											<label for="block_id" class="control-label mb-10">Block</label>
											@if(isset($block))
												{!! Form::select('block_id', $block,(isset($block_id)?$block_id:null), ['placeholder' => 'Choose Block', 'class' => 'form-control','id' => 'block_id']) !!}
											@endif
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group QuickFilter-Item">
											<label for="pond_id" class="control-label mb-10">Pond</label>
											@if(isset($pond))
												{!! Form::select('pond_id', $pond,(isset($pond_id)?$pond_id:null), ['placeholder' => 'Choose Pond', 'class' => 'form-control','id' => 'pond_id']) !!}
											@endif
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="from" class="control-label mb-10">From </label>
											{{ Form::text('from',(isset($from)?$from:null),['class'=>'form-control datepicker','placeholder'=>'Choose Date','id'=>'from']) }}
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="to" class="control-label mb-10">To </label>
											{{ Form::text('to',(isset($to)?$to:null),['class'=>'form-control datepicker','placeholder'=>'Choose Date','id'=>'to']) }}
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group mb-0" style="margin-top: 30px;">
											<button type="submit" class="btn btn-primary btn-anim"><i class="icon-rocket"></i><span class="btn-text">Search</span></button>
										</div>
									</div>
								</div>
							{{ Form::close() }}
						</div>
					</div>
					<hr>
					<div class="table-wrap">
						<div class="table-responsive">
							<table id="datatableWithFooterCount" class="table table-hover display  pb-30" >
								<thead>
									<tr>
										<th>Sl</th>
										<th>Block</th>
										<th>Pond Name</th>
										<th>Pond Number</th>
										<th>Inventory Name</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Total Price</th>
										<th>Timing</th>
										<th>Created At</th>
									</tr>
								</thead>
								
								<tbody>
									<?php $sl = 1; ?>
									@foreach($getData as $value)
										<tr>
											<td>{{ $sl++ }}</td>
											<td>{{ $value->blockName }}</td>
											<td>{{ $value->pondName }}</td>
											<td>{{ $value->pondNumber }}</td>
											<td>{{ $value->inventoryName }}</td>
											<td>{{ $value->quantity }}</td>
											<td>{{ $value->price }}</td>
											<td>{{ $value->total_price }}</td>
											<td>
												@if($value->timing == 0)
													AM
												@elseif($value->timing == 1)
													PM
												@else
													{{ $value->timing }}
												@endif
											</td>
											<td>
												@if($value->created_at <>'')
													{{ $value->created_at }}
												@endif
											</td>
										</tr>
									@endforeach
								</tbody>
							
								<tfoot>
									<tr>
										<th>Sl</th>
										<th>Block</th>
										<th>Pond Name</th>
										<th>Pond Number</th>
										<th>Inventory Name</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Total Price</th>
										<th>Timing</th>
										<th>Created At</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#datatableWithFooterCount').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			],
	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	            // Remove the formatting to get integer data for summation
	            var intVal = function ( i ) {
	                return typeof i === 'string' ?
	                    i.replace(/[\$,]/g, '')*1 :
	                    typeof i === 'number' ?
	                        i : 0;
	            };
	 
	            // Total over all pages
	            total = api
	                .column( 7 )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Total over this page
	            pageTotal = api
	                .column( 7, { page: 'current'} )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Update footer
	            $( api.column( 7 ).footer() ).html(
	                // pageTotal +' ('+ total+')'
	                total
	            );
	        }
	    } );
	})
</script>
@endsection