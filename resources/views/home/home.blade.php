@extends('home.index')


@section('main')
<style>
    .index-page .page-header .category-absolute {
            margin-top: -104px;
    }
</style>
<div class="page-header clear-filter" filter-color="black">
    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('home/img/page-bg1.jpg')}});">
    </div>
    <div class="container">
        <div class="content-center brand">
            <img class="n-logo" src="./assets/img/now-logo.png" alt="">
            <h1 class="h1-seo">FRS.</h1>
            <h3>An easy way to make elegant dresses <br />It's easy.</h3>
        <a class="btn btn-info btn-round btn-lg" href="{{route('fabric.product')}}">
                <i class="now-ui-icons ui-2_favourite-286"></i> CONTINUE
            </a>
        </div>
        <h6 class="category category-absolute">
            <p>We are pretty social</p>
                            <i style="color:#fff;" class="fa fa-twitter fa-2x m-2"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                
                            <i style="color:#fff;" class="fa fa-facebook-square fa-2x m-2"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        
                    
                            <i style="color:#fff;" class="fa fa-instagram fa-2x m-2"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        
            {{-- <a href="http://invisionapp.com/" target="_blank">
                <img src="./assets/img/invision-white-slim.png" class="invision-logo" />
            </a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">
                <img src="./assets/img/creative-tim-white-slim2.png" class="creative-tim-logo" />
            </a>.</h6> --}}
    </div>
</div>
<div class="main">


    

    
</div>
<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Nice Button</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->
<!-- Mini Modal -->
<div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons users_circle-08"></i>
                </div>
            </div>
            <div class="modal-body">
                <p>Always have an access to your profile</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-neutral">Back</button>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->
@endsection()