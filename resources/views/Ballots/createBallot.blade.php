@extends('layout')
		<link rel="stylesheet" href="{{asset('porto/vendor/select2/css/select2.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/pnotify/pnotify.custom.css')}}" />
@section('css')

		<link rel="stylesheet" href="{{asset('porto/vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/select2/css/select2.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/dropzone/basic.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/dropzone/dropzone.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/summernote/summernote-bs4.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/codemirror/lib/codemirror.css')}}" />
		<link rel="stylesheet" href="{{asset('porto/vendor/codemirror/theme/monokai.css')}}" />

@endsection

@section('content')

        <section role="main" class="content-body pb-0"> 
			<header class="page-header">
				<h2>Constituency</h2>
			
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
							<a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li class='mr-4'><span>constituency</span></li>
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
						
								<h2 class="card-title">Constituency</h2>
							</header>
							<div class="card-body">
								<form method="POST" action="/Constituency/insert" class="form-horizontal form-bordered form-bordered">
                      				@csrf
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Constituency Name</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="C_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Constituency Code</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="C_code">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Constituency Type</label>
                                        <div class="col-lg-7">
                                            <select type="text" class="form-control" name="C_type">
												@foreach($ctype as $c_type)
													<option value="{{$c_type->Ctype_id}}">{{$c_type->Ctype_name}}</option>
												@endforeach
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">State</label>
                                        <div class="col-lg-7">
                                            <select type="text" class="form-control" name="C_state">
												@foreach($states as $state)
													<option value="{{$state->State_id}}">{{$state->State_name}}</option>
												@endforeach
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group row">
										<label for="tags-input-multiple" class="col-lg-3 control-label text-lg-right pt-2">Poscode</label>
										<div class="col-lg-7">
											<select name="poscode[]" id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="badge badge-primary">
											</select>
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


@section('script')
		<script src="{{asset('porto/vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script src="{{asset('porto/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('porto/vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('porto/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
		<script src="{{asset('porto/vendor/fuelux/js/spinner.js')}}"></script>
		<script src="{{asset('porto/vendor/dropzone/dropzone.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-markdown/js/markdown.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-markdown/js/to-markdown.j')}}s"></script>
		<script src="{{asset('porto/vendor/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/lib/codemirror.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/addon/selection/active-line.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/addon/edit/matchbrackets.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/mode/javascript/javascript.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/mode/xml/xml.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
		<script src="{{asset('porto/vendor/codemirror/mode/css/css.js')}}"></script>
		<script src="{{asset('porto/vendor/summernote/summernote-bs4.js')}}"></script>
		<script src="{{asset('porto/vendor/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
		<script src="{{asset('porto/vendor/ios7-switch/ios7-switch.js')}}"></script>
@endsection

