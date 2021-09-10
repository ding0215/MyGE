@extends('homepagelayout')

@section('content')
<div class="container mt-5">
    
    <div class="row">
        <!-- Carousel wrapper -->
        <div
        id="carouselBasicExample"
        class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
        >
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
            ></button>
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
            ></button>
            <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
            ></button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            <!-- Single item -->
            <div class="carousel-item">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            <!-- Single item -->
            <div class="carousel-item">
            <img
                src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                class="d-block w-100"
                alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>
        </div>
        <!-- Inner -->
        <!-- Controls -->
        <button
            class="carousel-control-prev"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- Carousel wrapper -->
    </div>
    
    <div class="row mt-5">
        <div class="col text-center">
            <a class="btn btn-outline-dark" href="/vote">Vote</a>
        </div>
        <div class="col text-center">
            <a class="btn btn-outline-dark" href="/register">Register</a>
        </div>
        <div class="col text-center">
            <a class="btn btn-outline-dark" href="">Check Result</a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col">
            <div class="card h-100">
            <img
                src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img
                src="https://mdbootstrap.com/img/new/standard/city/043.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                This card has supporting text below as a natural lead-in to additional
                content.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img
                src="https://mdbootstrap.com/img/new/standard/city/042.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to
                additional content. This card has even longer content than the first to show
                that equal height action.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection