@extends('layouts.WhiteFish.client.master')
@section('main-content')
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default card-view">
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<h3 class="text-center">Day wise Harvest Breakdown</h3>
					<hr>
					<div class="row">
						<div class="col-md-12">
							{{ Form::open(['method' => 'GET','route' => array('WhiteFish.client.harvestBreakdown'),'role'=>'form','data-toggle'=>'validator']) }}
								<div class="row">
									<div class="col-md-2">
										<div class="form-group QuickFilter-Item">
											<label for="block_id" class="control-label mb-10">Block</label>
											@if(isset($block))
												{!! Form::select('block_id', $block,(isset($block_id)?$block_id:null), ['placeholder' => 'Choose Block', 'class' => 'form-control','id' => 'block_id']) !!}
											@endif
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group QuickFilter-Item">
											<label for="pond_id" class="control-label mb-10">Pond</label>
											@if(isset($pond))
												{!! Form::select('pond_id', $pond,(isset($pond_id)?$pond_id:null), ['placeholder' => 'Choose Pond', 'class' => 'form-control','id' => 'pond_id']) !!}
											@endif
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group QuickFilter-Item">
											<label for="fish_id" class="control-label mb-10">Fish</label>
											@if(isset($fish))
												{!! Form::select('fish_id', $fish,(isset($fish_id)?$fish_id:null), ['placeholder' => 'Choose Fishes', 'class' => 'form-control','id' => 'fish_id']) !!}
											@endif
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="from" class="control-label mb-10">From </label>
											{{ Form::text('from',(isset($from)?$from:null),['class'=>'form-control datepicker','placeholder'=>'Choose Date','id'=>'from']) }}
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="to" class="control-label mb-10">To </label>
											{{ Form::text('to',(isset($to)?$to:null),['class'=>'form-control datepicker','placeholder'=>'Choose Date','id'=>'to']) }}
										</div>
									</div>
									<div class="col-md-2">
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
										<th>Fish Name</th>
										<!--<th>Harvest Type</th>-->
										<th>Grade (Pieces/KG)</th>
										<th>Unit Price</th>
										<th>Unit</th>
										<th>Total Quantity</th>
										<th>Total Price</th>
										<th>Comments</th>
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
											<td>{{ $value->fishName }}</td>
											<!--<td>{{ $value->harvest_type }}</td>-->
											<td>{{ $value->grade_type }}</td>
											<td>{{ $value->unit_price }}</td>
											<td>{{ $value->unit }}</td>
											<td>{{ $value->total_quantity }} </td>
											<td>{{ $value->total_price }}</td>
											<td>{{ $value->comments }}</td>
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
										<th>Fish Name</th>
										<!--<th>Harvest Type</th>-->
										<th>Grade (Pieces/KG)</th>
										<th>Unit Price</th>
										<th>Unit</th>
										<th>Total Quantity</th>
										<th>Total Price</th>
										<th>Comments</th>
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
	                .column( 9 )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	                
	            qtyTotal = api
	                .column( 8 )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Total over this page
	            pageTotal = api
	                .column( 9, { page: 'current'} )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Update footer
	            $( api.column( 9 ).footer() ).html(
	                // pageTotal +' ('+ total+')'
	                total + '(&#2547;)'
	            );
	            $( api.column( 8 ).footer() ).html(
	                // pageTotal +' ('+ total+')'
	                qtyTotal + '(KG)'
	            );
	        }
	    } );
	})
</script>
@endsection