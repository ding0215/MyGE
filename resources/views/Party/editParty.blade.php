@extends('layout')

@section('css')

@endsection

@section('content')

        <section role="main" class="content-body pb-0"> 
			<header class="page-header">
				<h2>Political parties</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>Political parties</span></li>
					</ol>
				</div>
			</header>

		</section>

        <section class="card">
			<header class="card-header">
				<div class="card-actions">
					<!-- <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
					<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a> -->
				</div>
		
				<h2 class="card-title">Political parties</h2>
			</header>
			<div class="card-body">
				<form method="POST" action="/party/update/{{ $parties->Party_id }}" class="form-horizontal form-bordered form-bordered">
        			@csrf
					@method('PUT')
                    <div class="form-group row">
                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Party Name</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="party_name" value="{{ $parties->Party_name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Party background</label>
                        <div class="col-lg-7">
                            <textarea  class="form-control" name="party_background">{{ $parties->Party_background }}</textarea>
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Abbreviation</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" name="abbreviation" value="{{ $parties->Abbreviation }}">
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
		  

@endsection


@push('script')

@endpush

