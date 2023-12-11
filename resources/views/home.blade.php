@extends('layouts.main')
    @section('content')


<!-- ======== @Region: #highlighted ======== -->
<div id="highlighted" class="bg-black pos-relative pos-zindex-9">
    <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height add the attributes: data-toggle="full-height" data-offset="#header" -->
    <div class="overlay overlay-op-6" data-animate="fadeIn" data-toggle="backstretch" data-backstretch-target="self" data-backstretch-overlay=false data-backstretch-imgs="assets/img/banner-1.jpg,https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&s=29580c56708408d716cb322480d204f7&auto=format&fit=crop&w=1650&q=80">
        <div data-toggle="full-height" class="pl-2 pr-2 pt-5 py-lg-2 pt-lg-9 text-center text-white d-flex justify-content-center flex-column">
            <div data-toggle="sticky" data-settings='{"persist":true}'>

                <div class="container">

                    <img width="165"
                         height="117" src="assets/img/REVERSELOGO2.png" alt="">



                </div>

                <button type="button" class="mb-3 d-block mx-auto btn btn-xlg btn-green-bright text-uppercase btn-rounded-none">Real Estate & More</button>
                <h2 class="display-3 font-weight-bold mb-2" data-animate="fadeInDown" data-animate-delay="0.6">
                    Affordable Houses in Mauritius
                </h2>
                <h4 class="font-weight-bold display-4 font-weight-light mb-5 mb-0 mb-b-sm-0">
                    Buy, Rent or Sell
                </h4>
                <h5 class="check-details">
                    <a href="#features" data-toggle="scroll-link">More Details <i class="la la-long-arrow-down d-block"></i></a>
                </h5>
            </div>
        </div>
    </div>
</div>
<!--END highlighted-->
<div class="pos-relative pos-zindex-10 bg-white" id="content">
    <!-- ======== @Region: Features ======== -->
    @include('includes.features')
    <!-- END Features -->
    <!-- ======== @Region: Standout ======== -->
    @include('includes.standout')
    <!--END Standout-->
    <hr class="w-lg-80 my-4" />
    <!-- ======== @Region: Photo Tour ======== -->
    @include('includes.listings')
    <!-- END Latest News-->
    <!-- ======== @Region: <Hr>
      ======== -->
    <hr class="w-lg-80 my-4" />
    <!-- END <Hr>
      -->
    <!-- ======== @Region: Latest News ======== -->
    @include('includes.blog')
    <!-- END Latest News-->
    <!-- ======== @Region: Footer upper ======== -->

    @include('includes.contact')

    <!-- END Footer upper -->
</div>
 @stop
