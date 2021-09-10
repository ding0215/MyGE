@extends('layout')

@section('css')

@endsection

@section('content')

        <section role="main" class="content-body pb-0" > 
			<header class="page-header">
				<h2>Add Election</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>Add Election</span></li>
					</ol>
				</div>
			</header>
            <section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
			
					<h2 class="card-title">Add Election</h2>
				</header>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#popular" data-toggle="tab"></i> Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ballot" data-toggle="tab">Ballot</a>
                                </li>
                            </ul>
                            <form method="POST" action="/election/insert" class="form-horizontal form-bordered form-bordered">
                                @csrf 
                                <div class="tab-content">
                                    <div id="popular" class="tab-pane active">
                                        
                                        <div class="form-group row">
                                            <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Title</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Election Description</label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Voting Period</label>
                                            <div class="col-lg-6">
												<div class="input-daterange input-group" >
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-calendar-alt"></i>
														</span>
													</span>
													<input data-plugin-datepicker type="text" class="form-control" name="start_date">
                                                    
													<span class="input-group-text border-left-0 border-right-0 rounded-0">
														<i class="fa fa-chevron-right"></i>
													</span>
													<input data-plugin-datepicker type="text" class="form-control" name="end_date">
                                            
												</div>
											</div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Hash</label>
                                            <div class="col-lg-6">
                                                <input type="text" readonly class="form-control" name="hash" value="{{ $Hash }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Election url</label>
                                            <div class="col-lg-6">
                                                <input type="text" readonly class="form-control" name="url" value="{{ url('/') }}/vote/{{ $Hash }}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ballot" class="tab-pane">
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
                                                    <th width="10%"><a href="javascript:void(0)" class="btn btn-success addRow "><i class="fa fa-plus " aria-hidden="true"></i></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12 row mt-3">
                                    <div class="col-lg-12 text-right" >
                                        <input class="btn btn-success" type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                    </div>
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
					'<td><a href="javascript:void(0)" class="btn btn-danger deleteRow"><i class="fa fa-minus" aria-hidden="true"></i></a></td>'+
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
						'<td><a href="javascript:void(0)" class="btn btn-danger deleteRow"><i class="fa fa-minus" aria-hidden="true"></i></a></td>'+
					'</tr>'+
				'@endforeach'

		$('tbody').append(tr2);
	});
	
</script>

@endpush