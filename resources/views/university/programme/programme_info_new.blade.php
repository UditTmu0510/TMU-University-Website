@extends('layouts.programme')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/course.css')}}">
<style>
    .t2{
    font-size: 0px;
    font-weight: 0;
    line-height: 0px;
    text-align:center;
 visibility: hidden;
}
@media screen and (max-width: 770px) {
    .t2 {
    font-size: 26px;
    font-weight: 600;
    line-height: 35px;
     visibility: hidden;
    }
}

.programme-heading{
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 2rem;
    margin: 20px 0 20px 0;
}


.t3{
    font-size: 24px;
    font-weight: 500;
    line-height: 35px;
    color: #ff8c00;
    margin-bottom: 5px;
}
@media screen and (max-width: 770px) {
    .t3 {
    font-size: 18px;
    font-weight: 400;
    line-height: 30px;
    }
}

strong {
    font-weight: bolder;
    font-size: 1rem;
}
</style>
<div class="container">
    <div class="sidebar-contact">
        <div class="toggle-side">
            <p class="vericaltext fs-16">Enquire now</p>
        </div>
        <h2 class="fs-24 tmu-text-primary mb-1"><span>Contact </span><span> Us</span></h2>
        <div class="scroll">
            <form>
                <input type="text" name="" placeholder="Name">
                <input type="email" name="" placeholder="Email">
                <input type="rel" name="" placeholder="Phone Number">
                <textarea placeholder="Message here.."></textarea>
                <input type="submit" name="" value="Send" class="tmu-btn btn-1 pt-1">
            </form>
        </div>
    </div>
</div>

<!-- Slider
		============================================= -->
@php
$programme_banner_path = $programme->programme_banner_path;
@endphp
@if(!(empty($programme_banner_path)))
<div id="slider" class="slideshow-container">
    <img class="d-none d-sm-block" src="{{asset($programme->programme_banner_path)}}" style="width:100%">
    <div class="text d-none d-sm-block" style="color: #000000;">
        <h1>{{$programme->prog_name}}</h1>
        <p class="mb-3" >Build Your Future with {{$programme->prog_name}}</p>
        <!-- <a href="#" class="tmu-btn btn-4 px-3 py-2 ms-5">Download Brocher</a> -->
        <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-4 px-5 py-2 ms-5">Apply Now</a>
    </div>
    <!-- <div class="img-right img d-none d-sm-block w-fit-content border border-primary">
        <img src="./assets/img/pharmacy/pharmacy.jpeg" alt=".." class="border border-success">
    </div> -->
</div>
@endif
<div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url('{{asset('assets/img/agriculture/Agriculture-N.webp')}}');">
    <div class="ban-text">
        <div class="col-xs-6 ban-text">
            <h1 class="display-4 fw-bolder ls-n-1 text-light fs-5 mb-3 mt-3 text-center">Build Your Future with {{$programme->prog_name}}e</h1>
            
            <a class="my-button-blk tmu-btn btn-1 px-5 py-2 d-block mx-auto w-fit-content" href="https://admissions.tmu.ac.in/">Apply Now</a>
        </div>
    </div>
</div>

@if(($programme->usp_section_flag == 'Y') && !(empty($programme->about_prog)))
<!-- Scholarship code start -->
<div class="container mt-2">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary programme-heading"><span>About</span> <span>{{$programme->prog_name}}</span></h2>
        </div>

    </div>

<p style="text-align:justify;">
    @php echo $programme->about_prog @endphp
    </p>
    
</div>
@endif

@if(($programme->fee_structure_section_flag == 'Y') && (!(empty($fee_details))))
<!-- Fee Structure code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary programme-heading"><span>Fee Structure for </span><span>{{$programme->prog_name}}</span></h2>

        </div>
    </div>
    <center>
    <div class="table-wrapper ">
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Fee Details</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
               
                @php
                $i = 1;
          @endphp
          @foreach ($fee_details as $fee_detail)
          @php
        
              $fee_description = $fee_detail->fee_description;
              $fee_amount = $fee_detail->fee_amount;
              $fee_payment_schedule = $fee_detail->fee_payment_schedule;
          @endphp
          <tr>
              <td>{{$i}}</td>
              <td class="fee_details_fetch">
                  <span>
                      <span class="fi fi-af"></span>
                  </span>
                  <span>{{$fee_description}}</span>
              </td>
              <td class="fee_details_fetch">Rs {{$fee_amount}} /- (
                  @if($fee_payment_schedule == 'Semester')
                      per Semester
                  @elseif ($fee_payment_schedule == 'Year')
                      per Year
                  @elseif ($fee_payment_schedule == 'One Time')
                      One Time
                  @else
                      Unknown Payment Schedule
                  @endif
                  )</td>
          </tr>
          @php
              $i++;
          @endphp
      @endforeach
      
            </tbody>
        </table>
    </div>
</center>
</div>

<!-- Fee Structure code end -->
@endif




@if(($programme->scholarship_section_flag == 'Y') && !(empty($programme->scholarship_scheme)))
<!-- Scholarship code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary programme-heading"><span>{{$programme->prog_name}}</span> <span> Scholarships 2024 </span></h2>
        </div>

    </div>
@php
echo $programme->scholarship_scheme;
@endphp
    
</div>
@endif



<!-- Scholarship code end -->



<!-- Eligiblity code start
		============================================= -->
        @if(($programme->eligibility_section_flag == 'Y') && !empty($programme->eligibility) && !empty($programme->criteria_merit))
<section>

    <div class="container" style="margin-top: 12px; margin-bottom: 8px;">


        <div class="row align-items-lg-center min-vh-lg-100">
            <div class="col-lg-6">
                <img src="{{asset('eligiblity.jpg')}}" alt="Girl in a jacket" class="mx-auto d-block">
            </div>

            <div class="col-lg-6 align-self-center">
                <h2 class="tmu-text-primary mb-3 fs-24 lh-sm mt-4"> <span>{{$programme->prog_name}}</span><span> Eligibility Criteria & Selection Process </span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0 fw-bold">Eligiblity</h3>
                                @php
                                echo $programme->eligibility;
                            @endphp
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0 fw-bold">Selection</h3>
                                @php
                                echo $programme->criteria_merit;
                            @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section><!-- Eligiblity code end -->
@endif

<!-- Section for recruiters begin  -->
<section>
    <div class="container-fluid mt-5 ">
        <h2 class="tmu-text-primary text-center">
            <span>Recruiters</span>
        </h2>
        <div class="marquee my-5">
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
                </div>
            </section>
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066" alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066" alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066" alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066" alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066" alt="Discovery Channel"></a>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Section for recruiter end -->



<section class="my-5">
    <div class="container">
        <h2 class="tmu-text-primary text-center"><span> Frequently </span><span> Asked Questions</span></h2>


        <div class="row mx-0">
            @foreach ($faqs as $faq)
            <button class="careers-accordion"><span> <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$faq->faq_question}}</span> <span class="icon">+</span></button>
            <div class="panel"> @php echo $faq->faq_answer @endphp</div>  
             <hr class="horizontal-line">
             @endforeach
        </div>
    </div>
</section>
<!-- Section for FAQ end -->
@endsection

