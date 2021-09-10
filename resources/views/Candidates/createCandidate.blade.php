@extends('layout')
		
@section('css')


@endsection

@section('content')

        <section role="main" class="content-body pb-0"> 
			<header class="page-header">
				<h2>Candidates</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>Candidates</span></li>
					</ol>
				</div>
			</header>

		</section>

        <section class="section">
			<div class="container container-with-sidebar">
                <div class="row mb-5">
					<div class="col">
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<!-- <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a> -->
								</div>
						
								<h2 class="card-title">Add new Candidate</h2>
							</header>
							<div class="card-body">
								<form method="POST" action="/candidates/insert" class="form-horizontal form-bordered form-bordered">
                      				@csrf
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Candidate Name</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="candidate_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Constituency</label>
                                        <div class="col-lg-7">
                                            <select name="constituency_id" class="form-control">
												@foreach($constituencies as $constituency)
													<option value="{{ $constituency->Constituency_id }}">{{ $constituency->Constituency_name }}</option>
												@endforeach
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Polictical Party</label>
                                        <div class="col-lg-7">
                                            <select type="text" class="form-control" name="party_id">
												@foreach($parties as $party)
													<option value="{{ $party->Party_id }}">{{ $party->Party_name }}</option>
												@endforeach
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Candidate background</label>
                                        <div class="col-lg-7">
                                            <textarea  class="form-control" name="candidate_background"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-7">
                                            <input class="btn btn-success" type="submit" value="submit">
                                        </div>
                                    </div>
								</form>
							</div>
						</section>
					</div>
			    </div>
            </div>
          </section>

		  

@endsection


@push('script')
		
@endpush

