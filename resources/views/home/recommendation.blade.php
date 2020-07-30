@extends('home.index')


@section('main')
<style>
    .index-page .page-header .category-absolute {
            margin-top: -104px;
    }
</style>
<div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" data-parallax="true" style="background-image: url({{asset('home/pics/bg3.jpg')}});">
    </div>
    <div class="container">
    <div class="content-center brand">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="section col-7">
                        <div class="row">
                            <div class="card-body">
									<h5 class="category text-danger">
										<i class="now-ui-icons media-2_sound-wave"></i> Best recommendation
									</h5>
									
                                    <h6 style="color:black" >Best fit fabric</h6>
                                    <p style="color:black">{{$category[0]->name}}</p>
                                    <h6 style="color:black" >Fabric Properties</h6>
									<p style="color:black; padding:1.5em" class="card-description">
                                            {{$category[0]->description}}
									</p>
									<div class="card-footer">
                                            <h6 style="color:black" >Kindly rate this</h6>
									   <div style="color:gold; font-size:25px;" class="stats stats-right">
											<div class="rating-stars rating-just-view" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                <meta itemprop="worstRating" content="1">
                                                <meta itemprop="bestRating" content="5">
                                                <meta itemprop="ratingValue" content="5">
                                                <div  class="rating-input"><span class="fa fa-star fa-full" data-value="1"></span><span class="fa fa-star fa-full" data-value="2"></span><span class="fa fa-star fa-full" data-value="3"></span><span class="fa fa-star fa-full" data-value="4"></span><span class="fa fa-star fa-full" data-value="5"></span><input type="hidden" name="" value="4" id=""></div>
                                            </div>
										</div>
									</div>
                                </div>
                        </div>
                           
                    </div>
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