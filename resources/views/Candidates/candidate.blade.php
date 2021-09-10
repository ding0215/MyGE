
@extends('layout')

@section('css')

@endsection

@section('content')
        <section role="main" class="content-body pb-0" > 
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

			<section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
			
					<h2 class="card-title">Candidates</h2>
				</header>
				<div class="card-body">
					<div class="mb-3 col-lg-12 text-right"><a href="/candidates/add" class="btn btn-success">Add</a></div>
					<table class="table table-responsive-md table-hover mb-0">
						<thead>
							<tr>
								<th width="20%">Candidate_id</th>
								<th width="20%">Candidate_name</th>
								<th width="20%">Constituency</th>
								<th width="20%">Political Party</th>
								<th width="20%" colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse($candidates as $candidate )
								<tr>
									<td width="20%">{{$candidate->Candidate_id}}</td>
									<td width="20%">{{$candidate->Candidate_name}}</td>
									<td width="20%">{{$candidate->Constituency_name}}</td>
									<td width="20%">{{$candidate->Party_name}}</td>
									<td width="10%" ><a class="btn btn-primary" href="/candidates/edit/{{ $candidate->Candidate_id }}">Edit</a></th>
									<td width="10%"><a class="btn btn-danger" data-toggle="modal" data-target="#modalBootstrap{{ $candidate->Candidate_id }}" href="#">Delete</a></td>
								</tr>

								<!-- Modal -->
								<div class="modal" id="modalBootstrap{{ $candidate->Candidate_id }}" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Are you sure?</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Are you sure that you want to delete this data?</p>
											</div>
											<div class="modal-footer">
												<form method="POST" action="/candidates/delete/{{ $candidate->Candidate_id }}">@csrf @method('DELETE')<input class="btn btn-danger" type="submit" value="Comfirm"></form>
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->

							@empty
								<tr>
									<td colspan="6" class="text-center">No data available</td>
								</tr>
							@endforelse
						</tbody>
					</table>
					
				</div>
			</section>
			

			

		</section>


        
@endsection

@push('script')
		<script src="{{asset('porto/vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('porto/vendor/pnotify/pnotify.custom.js')}}"></script>
@endpush