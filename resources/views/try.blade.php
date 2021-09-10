
@extends('layout')

@section('css')

@endsection

@section('content')
        <section role="main" class="content-body pb-0" > 
			<header class="page-header">
				<h2>Test</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>test</span></li>
					</ol>
				</div>
			</header>

			<section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
			
					<h2 class="card-title">test</h2>
				</header>
				<div class="card-body">
					<form method="POST" action="/testing2">
					@csrf
					<div class="col-lg-12 row ">
						<div id="addAll" class="col-lg-12 text-right">
							<a href="javascript:void(0)" class="mb-3 btn btn-success addAll" type="submit" >Add all</a>
						</div>
					</div>
					<table class="table table-responsive-md table-hover mb-0" id="table">
						<thead>
							<tr>
								<th width="30%">Title</th>
								<th width="60%">Constituency</th>
								<th width="10%"><a href="javascript:void(0)" class="btn btn-success addRow">+</a></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="name[]" class="form-control"></td>
								<td>
									<select name="Constituency[]" class="form-control">
										@foreach($Constituency as $c)
											<option value="{{$c->Constituency_id}}">{{ $c->Constituency_name }}</option>
										@endforeach
									</select>
								</td>
								<td><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></td>
							</tr>
						</tbody>
					</table>
					<div class="col-lg-12 row ">
						<div class="col-lg-12 text-right">
							<input class="btn btn-success" type="submit" value="submit">
						</div>
					</div>
					</form>
				</div>
			</section>
			

			

		</section>


        
@endsection

@push('script')

<script>
	$('thead').on('click', '.addRow', function(){
		var tr = '<tr>'+
					'<td><input type="text" name="name[]" class="form-control"></td>'+
					'<td>'+
						'<select name="Constituency[]" class="form-control">'+
							'@foreach($Constituency as $c)'+
								'<option value="{{$c->Constituency_id}}">{{ $c->Constituency_name }}</option>'+
							'@endforeach'+
						'</select>'+
					'</td>'+
					'<td><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></td>'+
				'</tr>'
				
		$('tbody').append(tr);
	});

	$('tbody').on('click', '.deleteRow', function(){
		$(this).parent().parent().remove();
	})

	$('#addAll').on('click', '.addAll', function(){
		var tr2 ='@foreach($FederalConsti as $f)'+
					'<tr>'+
						'<td><input type="text" name="name[]" class="form-control"></td>'+
						'<td>'+
							'<select name="Constituency[]" class="form-control">'+
								'@foreach($Constituency as $c)'+
									'@if($f->Constituency_id == $c->Constituency_id)'+
										'<option value="{{$c->Constituency_id}}" selected>{{ $c->Constituency_name }}</option>'+
									'@else'+
										'<option value="{{$c->Constituency_id}}">{{ $c->Constituency_name }}</option>'+
									'@endif'+
								'@endforeach'+
							'</select>'+
						'</td>'+
						'<td><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></td>'+
					'</tr>'+
				'@endforeach'

		$('tbody').append(tr2);
	});
	
</script>

@endpush