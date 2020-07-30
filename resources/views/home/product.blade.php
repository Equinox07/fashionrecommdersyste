@extends('home.index')


@section('main')
<style>
    .index-page .page-header .category-absolute {
            margin-top: -104px;
    }
</style>
<div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('home/pics/bg2.jpg')}});">
    </div>
    <div class="container">
    <div class="content-center brand">
        <div class="row">
            <div class="col-lg-6">
                    <div class="" id="carousel">
                            <div class="container">
                                <div class="row justify-content-center">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="{{asset('home/pics/slide1.jpg')}}" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Natur and Beauty</h5>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="{{asset('home/pics/slide2.jpg')}}" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Somewhere Beyond Beauty</h5>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="{{asset('home/pics/slide3.jpg')}}" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>And the best ones</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="col-lg-6">
                    <p>Fill in to continue..</p>
                    <form class="form" method="POST" action="{{route('fabric.recommend')}}">
                        @csrf
                                    <div class="card-body">
                                        <div class="input-group form-group-no-border">
                                            <span class="input-group-addon">
                                                <i class="now-ui-icons text_caps-small"></i>
                                            </span>
                                            <input style="color:#fff;" type="file" placeholder="Upload Image" class="form-control" />
                                        </div>
                                        <div class="input-group form-group-no-border">
                                            <textarea style="color:#fff;" class="form-control" name="description" id="" cols="10" rows="5" placeholder="Description..." >
                                            </textarea>
                                        </div>
                                        <button  class="btn btn-neutral btn-round btn-lg" type="submit">Submit</button>
                                        {{-- <a href="{{route('fabric.recommend')}}" class="btn btn-neutral btn-round btn-lg">Submit</a> --}}
                                       
                            </div>
                    </form>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="main">


    

    
</div>
<!-- Sart Modal -->
<!--  End Modal -->
<!-- Mini Modal -->

<!--  End Modal -->
@endsection()