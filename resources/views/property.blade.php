@extends('layouts.main')
    @section('content')

   <!-- ======== @Region: #highlighted ======== -->

<!--END highlighted-->
<div class="pos-relative pos-zindex-10 bg-white" id="content">
    <!-- ======== @Region: Features ======== -->
    
  
   
    <!-- END Latest News-->
    <!-- ======== @Region: <Hr>
      ======== -->
    <hr class="w-lg-80 my-4" /> 
    <!-- END <Hr>
      -->
      @include('includes.listings')
    <!-- ======== @Region: Latest News ======== -->
    
    <!-- END Latest News-->
    <!-- ======== @Region: Footer upper ======== -->

    @include('includes.contact')

    <!-- END Footer upper -->
</div>
    @stop
