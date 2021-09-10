@extends('homepagelayout')

@section('css')
@endsection

@section('content')
<div class="container mt-5 w-50">
    <div class="row text-start mb-4 fs-4">
        <a>Registration</a>    
    </div>
    <form method="POST" action="/voters/register">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input name="Ic" type="text" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">Idenfication Card Number</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input name="Name" type="text" id="form6Example2" class="form-control" />
            <label class="form-label" for="form6Example2">Name</label>
        </div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <input name="Address" type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Address</label>
    </div>

    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input name="City" type="text" id="form6Example2" class="form-control" />
            <label class="form-label" for="form6Example2">City</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input name="Zip_code" type="text" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">Zip Code</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input name="State" type="text" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">State</label>
        </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input name="Birthday" type="date" id="form6Example1" class="form-control" />
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input name="Country" type="text" id="form6Example2" class="form-control" value="Malaysia" />
            <label class="form-label" for="form6Example2">Country</label>
        </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
        <div class="form-outline mb-4">
            <input name="Email" type="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Email</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline mb-4">
            <input name="Phone_no" type="tel" id="typePhone" class="form-control" />
            <label class="form-label" for="form6Example6">Phone</label>
        </div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <input type="hidden" name="image" class="image-tag">
        <figure class="figure">
            <div id="results">
            </div>
            <figcaption class="figure-caption">Your captured image will appear here...</figcaption>
        </figure>
    </div>

    <div class="form-outline mb-4">
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModalCenter">
            Take Picture
        </button>
    </div>
    
    

    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
        <input
        class="form-check-input me-2"
        type="checkbox"
        value="1"
        id="form6Example8"
        checked
        />
        <label class="form-check-label" for="form6Example8"> Create an account? </label>
    </div>
    

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="my_camera" style="display: block; margin-left: auto; margin-right: auto;"></div>
                </div>

                <div class="col-md-12 text-center mt-3">
                    <input class="btn btn-default" type=button value="Take Snapshot" onClick="take_snapshot()">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

<script language="JavaScript">

    Webcam.set({

        width: 360,
        
		height: 280,

        image_format: 'jpeg',

        jpeg_quality: 100,

    });


    Webcam.attach( '#my_camera' );


    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'" width="240px" height="140px" class="figure-img img-fluid rounded shadow-3 mb-3" />';

        } );

    }

</script>
@endpush