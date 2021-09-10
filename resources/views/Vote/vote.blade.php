
@extends('layout')

@section('css')

@endsection

@section('content')
        <section role="main" class="content-body pb-0" > 
			<header class="page-header">
				<h2>Vote</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>Vote</span></li>
					</ol>
				</div>
			</header>

			<section class="card">
				<header class="card-header">
					<div class="card-actions">
					</div>
			
					<h2 class="card-title text-center">Vote your favourite candidate</h2>
				</header>
				<div class="card-body">
                    <form method="POST" action="/vote/OtbExAGHdB3dfvki3m3XReje7u5kVap0/{{ $ballot->Ballot_id }}/castvote">
                        @csrf
                        <div class="row" style="margin:0 15% 0 15%">
                            @foreach($candidate_info as $info)
                                <div class="col-lg-4">
                                    <section class="card">
                                        <header class="card-header bg-tertiary">
                                            <div class="card-header-profile-picture">
                                                <img src="img/!logged-user.jpg">
                                            </div>
                                        </header>
                                        <div class="card-body">
                                            <h3 class="font-weight-bold mt-3 center">{{ $info->candidate_party }}</h3>
                                            <h4 class="font-weight-semibold mt-3 center">{{ $info->candidate_name }}</h4>
                                            <!-- <p>{{ $info -> candidate_background }}</p> -->
                                            <hr class="solid short">
                                            <div class="text-center row">    
                                                <input name="choice" type="radio" class="form-control" value="{{ $info->Bc_id }}">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            @endforeach
                            <div class="form-group row">
                                <input type="submit" class="btn btn-success" value="Vote">
                            </div>
                        </div>
                    </form>
				</div>
			</section>
			

			

		</section>


        
@endsection

@push('script')

@endpush