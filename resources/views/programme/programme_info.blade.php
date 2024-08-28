@extends('layouts.programme')
@section('content')

<style>
    /* carrer accordian */
    .careers-accordion {
        background-color: white;
        color: #000;
        cursor: pointer;
        padding: 5px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: background-color 0.3s ease;
        font-size: 16px;
        font-weight: 500;=
        display: flex;
        /* Added */
        align-items: center;
        /* Added */
        justify-content: space-between;
        /* Added */
    }
    
    .careers-accordion:hover {
        background-color: #001055;
        color: #fff;
    }
    
    .panel {
        padding: 0 18px;
        margin-bottom: 10px;
        display: none;
        overflow: hidden;
        border-top: 1px solid #ddd;
    }
    
    .panel p {
        margin-top: 5px;
        margin-bottom: 10px;
    }
    
    .panel>*:first-child{
        margin-top: 1rem;
    }
    
    .panel.active {
        display: block;
    }
    
    .icon {
        font-size: 35px;
        font-weight: 400;
        margin-left: 5px;
    }
    
    /* Add style for the horizontal line */
    .horizontal-line {
        border-top: 1px solid #4f4f4f;
        margin: 0;
    }
    
    /* Added class for clicked state */
    .clicked {
        background-color: #001055;
        color: #fff;
    }
    
    .text-color {
        color: #212529;
        line-height: 18px;
        font-size: 12px;
        font-weight: 400;
        text-align: justify;
    }
    
    .hh1 {
    
        margin-top: 50px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-image: url('background.png');
        background-size: cover;
        border-radius: 10px;
    }
    
    #box {
        display: none;
        background-color: #f0f0f0;
        padding: 20px;
        margin-top: 20px;
    }
    
    .hidden {
        display: none;
    }
    

.fee_details_fetch{
            width:25vw;
        }

.banner{
  display: flex;
  height: 380px;
  width: 100%;
  background-color: #dcebca;
 }

 .ban-text{
  /* padding: 30px;
  font-size: 20px;
  line-height: 8px; */
  margin-top: 0px;
  padding: 10px;
  padding-top: 120px;
 }
 .ban-img{
    align: right;
    z-index: 2;
 }
    </style>

<style>
        /* Button styles */
        .my-button {
            display: inline-block;
            padding: 8px 15px;
            background-color: #ff7a00;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Hover effect */
        .my-button:hover {
            background-color: #fff;
            color: #000;
        }

        /* Click effect */
        .my-button:active {
            transform: scale(0.95);
        }

        .my-button-blk {
            display: inline-block;
            padding: 8px 15px;
            background-color: #ffffff;
            color: #000;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Hover effect */
        .my-button-blk:hover {
            background-color: #ff7a00;
            color: #fff;
        }

        /* Click effect */
        .my-button-blk:active {
            transform: scale(0.95);
        }

        /* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #ffffff;
  font-size: 20px;
  margin-bottom: 100px;
  margin-left: 50px;
  margin-top: 20px;
  padding: 20px;
  position: absolute;
  bottom: 8px;
  width: 40%;
  text-align: Left;
}
.text H1{
    color: #ffffff;
    margin-left: 30px;
    font-size: 50px;
    font-weight: bold;
    line-height: 60px;
    text-decoration: none;
    text-align: left;
}
.text p{
    color: #ffffff;
    margin-left: 30px;
    font-size: 20px;
    line-height: 30px;
    text-decoration: none;
    text-align: left;
}
/* Caption text */
.img-right {
  position: absolute;
  bottom: 0px;
  height: 100;
  width: 100%;
  text-align: Right;
}
.img-right img {
            width: 50%;
            height: 50%;
        }

@media screen and (max-width: 1250px){
    .text H1{
    color: #ffffff;
    margin-left: 30px;
    font-size: 40px;
    font-weight: 700;
    line-height: 50px;
    text-decoration: none;
    text-align: left;
}
    .text p{
    color: #ffffff;
    margin-left: 30px;
    font-size: 18px;
    line-height: 26px;
    text-decoration: none;
    text-align: left;
}
}

@media screen and (max-width: 1105px){
    .text H1{
    color: #ffffff;
    margin-left: 25px;
    font-size: 35px;
    font-weight: 600;
    line-height: 40px;
    text-decoration: none;
    text-align: left;
}
    .text p{
    color: #ffffff;
    margin-left: 25px;
    font-size: 16px;
    line-height: 20px;
    text-decoration: none;
    text-align: left;
}
}

@media screen and (max-width: 975px){
    .text H1{
    color: #ffffff;
    margin-left: 25px;
    font-size: 30px;
    font-weight: 500;
    line-height: 40px;
    text-decoration: none;
    text-align: left;
}
    .text p{
    color: #ffffff;
    margin-left: 25px;
    font-size: 14px;
    line-height: 20px;
    text-decoration: none;
    text-align: left;
}
.text {
  color: #ffffff;
  font-size: 20px;
  margin-bottom: 20px;
  margin-left: 50px;
  margin-top: 20px;
  padding: 20px;
  position: absolute;
  bottom: 8px;
  width: 50%;
  text-align: Left;
}
}

    </style>



        <div class="container">
            <div class="sidebar-contact">
                <div class="toggle-side"><p class="vericaltext">Enquire now</p></div>
                <h2>Contact Us</h2>
                <div class="scroll">
                    <form>
                        <input type="text" name="" placeholder="Name">
                        <input type="email" name="" placeholder="Email">
                        <input type="rel" name="" placeholder="Phone Number">
                        <textarea placeholder="Message here.."></textarea>
                        <input type="submit" name="" value="send">
                    </form>
                </div>
            </div>
        </div>

        <!-- Slider
		============================================= -->
     
        <!-- <div id="slider" class="slider-element min-vh-80 " style="width: 1523px; max-height: 85.1vh; background-image: url('demos/saas-2/images/hero4.jpg');">
            <div class="container d-none d-sm-block">
                <div class="row justify-content-between align-items-center align-items-xl-end">
                    <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                        <h1 class="display-4 fw-bolder ls-n-1" style="color: #ffffff;">Build Powerful Websites in a flash.</h1>
                        <p class="lead fw-normal mb-5">Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p>
                        <a href="#" class="button button px-lg-3 py-lg-2 rounded-pill m-0 mb-4">Download Brocher</a>
                        <a href="#" class="button button px-lg-3 py-lg-2 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply Now</a>
                    </div>
                    <div class="col-lg-6 col-xxl-7">
                        <img src="demos/saas-2/images/hero6.png" alt="..">
                    </div>
                </div>
            </div>
        </div> -->

        <div id="slider" class="slideshow-container" >
  <img class="d-none d-sm-block" src="{{asset('demos/saas-2/images/hero4.jpg')}}" style="width:100%">
  <div class="text d-none d-sm-block" style="color: #000000;">
  <h1>{{$programme->prog_name}}</h1>
  <p >Build Your Future with {{$programme->prog_name}}</p>
                        <a href="#" class="button button px-lg-3 py-lg-2 rounded-pill m-0 mb-4">Download Brocher</a>
                        <a href="#" class="button button px-lg-3 py-lg-2 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4">Apply Now</a>
</div>
<div class=" img-right img d-none d-sm-block">
                        <img src="{{asset('demos/saas-2/images/hero6.png')}}" alt="..">
                    </div>
</div>
        <div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url('http://127.0.0.1:8000/demos/saas-2/images/hero7.jpg');">
        <div class="ban-text">
        <div class="col-xs-6 ban-text" >
                <h1 class="display-4 fw-bolder ls-n-1" style="font-size: 20px; color: #ffffff;">Build Your Future with {{$programme->prog_name}}</h1>
                <!-- <p>Transforming Your Ideas into Stunning Websites with Intuitive Tools and Limitless Possibilities.</p> -->
                <a class="my-button">Download Brochure</a>
                <a class="my-button-blk">Apply Now</a>
            </div>
                    <!-- <div class="col-mxs-6 ban-img" >
                        <img src="demos/saas-2/images/hero5.png" alt=".." >
                    </div> -->
        </div>
    </div>
{{-- 
      <!-----Upper card start-->
      <section id="content" class="d-none d-sm-block">
        <div class="content-wrap pb-0 pt-3" style="margin-top: 22px;">
            <div class="row justify-content-center g-3 me-5 ms-5">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fa fa-id-card fa-5x"
                                            style="padding-right:10px; padding-top:7px;"></i></div>
                                    <div class="mb-4">
                                        <strong class="card-strong-text">400+</strong>
                                        <div class="card-text" >Visited Companies</div>
                                    </div>
                                    <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-danger">Apply Online</a>
                                    </h2>
                                </div>

                            </div> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card l-bg-blue-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fa fa-search fa-5x"
                                            style="padding-right:10px; padding-top:10px;"></i></div>
                                    <div class="mb-4">
                                        <strong class="card-strong-text">82%</strong>
                                        <div class="card-text" >Placement in 2022-23
                                        </div>
                                    </div>
                                    <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-danger">Find Program</a>
                                    </h2>
                                </div>

                            </div> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card l-bg-green-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fa fa-building fa-5x"
                                            style="padding-right:10px; padding-top:10px;"></i></div>
                                    <div class="mb-4">
                                        <strong class="card-strong-text">62 LPA</strong>
                                        <div class="card-text" >Highest Placement</div>
                                    </div>
                                    <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-success">Colleges</a>
                                    </h2>
                                </div>

                            </div> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6">
                            <div class="card l-bg-orange-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fa fa-graduation-cap fa-5x"
                                            style="padding-right:10px; padding-top:7px;"></i>
                                    </div>
                                    <div class="mb-4">
                                        <strong class="card-strong-text">25000+</strong>
                                        <div class="card-text" >World Wide Alumni</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-----Upper card End--> --}}


<!-----Upper card start mobile-->
{{-- 
<section id="content" class="d-block d-sm-none" style="margin-top: 30px; margin-bottom: -20px;">
            <div class="row justify-content-center ">
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="owl-carousel" id="owl-carousel1">
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x"
                                                style="padding-right:10px; padding-top:7px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #424242;">400+</strong>
                                            <div class="card-text" style="font-size: 14px;">Visited Companies
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-search fa-7x"
                                                style="padding-right:10px; padding-top:10px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #424242;">82%</strong>
                                            <div class="card-text" style="font-size: 14px;">Placement in 2022-23
                                            </div>
                                        </div>
                                        <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-danger">Find Program</a>
                                    </h2>
                                </div>

                            </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-green-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-building fa-7x"
                                                style="padding-right:10px; padding-top:10px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #424242;">60 LPA</strong>
                                            <div class="card-text" style="font-size: 14px;">Highest Placement
                                            </div>
                                        </div>
                                        <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-success">Colleges</a>
                                    </h2>
                                </div>

                            </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-orange-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i
                                                class="fa fa-graduation-cap fa-7x"
                                                style="padding-right:10px; padding-top:7px;"></i>
                                        </div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #424242;">25K+</strong>
                                            <div class="card-text" style="font-size: 14px;">World Wide Alumni
                                            </div>
                                        </div>
                                        <!-- <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <a href="#" class="btn btn-success">Scholership</a>
                                    </h2>
                                </div>

                            </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section> --}}
<!-----Upper card mobile End-->

<!-----Upper card start-->
{{-- <section id="content" class="d-block d-sm-none" >
        <div class="content-wrap pb-0 pt-3">
            <div class="row justify-content-center g-3 mb-3 me-5 ms-5">
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="owl-carousel">
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-id-card fa-7x"
                                                style="padding-right:10px; padding-top:7px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #001055;">400+</strong>
                                            <div class="card-text">Visited Companies</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-search fa-7x"
                                                style="padding-right:10px; padding-top:10px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #001055;">82%</strong>
                                            <div class="card-text">Placement in 2022-23</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-green-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fa fa-building fa-7x"
                                                style="padding-right:10px; padding-top:10px;"></i></div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #001055;">62 LPA</strong>
                                            <div class="card-text">Highest Placement</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <div class="card l-bg-orange-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i
                                                class="fa fa-graduation-cap fa-7x"
                                                style="padding-right:10px; padding-top:7px;"></i>
                                        </div>
                                        <div class="mb-4">
                                            <strong style="font-size: 40px; color: #001055;">25000+</strong>
                                            <div class="card-text">World Wide Alumni</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> --}}
<!-----Upper card End-->


        
		<!------VIDEO TESTIMONIALS START------->
		{{-- <section id="content">
			<div class="content-wrap py-0" style="margin-top: 10px; margin-bottom: 37px;">

                <div class="col-xl-12 col-lg-10 text-center d-none d-sm-block">
					<h3 class="h1 fw-bold uline" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#000000; margin-bottom: 22px;">SUCCESS STORIES</h3>
				</div>
				<div class="col-xl-12 col-lg-10 text-center d-block d-sm-none">
					<h3 class="h1 fw-bold uline" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 18px;">SUCCESS STORIES</h3>
				</div>

				<div class="owl-carousel" id="owl-carousel4">
					<div class="item">
						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
							<a href="#block-modal-ticket1" data-lightbox="inline"><img src="{{asset('video-testimonial/1.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow"  style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
															<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
															<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
															<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
															<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
														</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket1">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																				<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																			<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
							<a href="#block-modal-ticket2" data-lightbox="inline"><img src="{{asset('video-testimonial/2.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
															<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
															<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
															<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
															<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
														</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket2">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																				<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																			<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
							<a href="#block-modal-ticket3" data-lightbox="inline"><img src="{{asset('video-testimonial/3.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
															<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
															<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
															<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
															<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
														</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket3">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																			<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																		<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
							<a href="#block-modal-ticket4" data-lightbox="inline"><img src="{{asset('video-testimonial/4.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
															<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
															<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
															<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
															<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
														</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket4">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																				<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																			<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
														<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div> -->
							<a href="#block-modal-ticket5" data-lightbox="inline"><img src="{{asset('video-testimonial/5.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
															<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
															<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
															<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
															<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
														</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket5">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																			<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																		<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>





					</div>

					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
													<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div> -->
							<a href="#block-modal-ticket5" data-lightbox="inline"><img src="{{asset('video-testimonial/5.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65">
								</p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
														<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
														<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
														<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
														<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
													</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket5">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																		<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																	<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>





					</div>

					<div class="item">

						<div class="card shadow-sm ">
							<!-- <div class="card-img-top ratio-16x9" >
												<iframe width="1424" height="652" src="https://www.youtube.com/embed/tEkfa3bIY5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div> -->
							<a href="#block-modal-ticket5" data-lightbox="inline"><img src="{{asset('video-testimonial/5.svg')}}"
									class="card-img-top" alt="..."></a>
							<div class="card-body">
								<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>
								<h4 style="text-align:center;" class="mb-2">Btech Computer Science (Data Science)</h4>
								<center><img src="https://d1vwxdpzbgdqj.cloudfront.net/alumni/triple-arrow.svg" alt=""
										class="img-fluid career-tran__arrow" style="width:10%;"></center>
								<p class="career-tran__prev-role">Senior Technical Account Manager</p>
								<p class="career-tran__prev-comp">Amazon Web Services (AWS)</p>
								<p class="mb-4 op-07" style="line-height: 1.65"></p>
								<!-- <small class="ls-2 fw-bold text-uppercase op-05 mb-2 d-block">Features</small> -->
								<!-- <div class="row g-0 mb-2 car-features">
													<div class="col-6 mb-2"><i class="icon-car-meter"></i>20000KMs</div>
													<div class="col-6 mb-2"><i class="icon-car-door"></i>5 Seater</div>
													<div class="col-6"><i class="icon-car-cogs2"></i>Black</div>
													<div class="col-6"><i class="icon-car-pump"></i>20kmpl</div>
												</div> -->
							</div>

						</div>

						<div class="modal1 mfp-hide" id="block-modal-ticket5">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-white rounded">

									<div class="row m-0 g-0">
										<div class="col-12">
											<div class="fancy-title title-double-border title-center my-2 p-4">
												<h3 class="">Alumni Testimonial</h3>
											</div>
										</div>
										<div class="col-12 bg-light">
											<iframe width="560" height="315"
												src="https://www.youtube.com/embed/tEkfa3bIY5o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; controls:0; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen></iframe>
										</div>
										<div class="col-12">
											<div class="row justify-content-between align-items-center p-5 col-mb-30">
												<div class="col-lg-2">
													<div class="d-flex flex-column align-items-lg-center entry-date">
														<!-- <h3 class="mb-0 h1">10</h3>
																	<h4 class="mb-0">Apr</h4> -->
													</div>
												</div>
												<div class="col">
													<!-- <h4 class="mb-2">Heading</h4>
																<p class="mb-0 op-07">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, assumenda molestias.</p> -->
												</div>
												<div class="col-lg-3">
													<a href="#" class="btn btn-lg btn-danger w-100">Enquire Now</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>





					</div>



				</div>

				<!-- Code for the Desktop view Ends -->


				<!-- Code for the Mobile View Starts Here -->




				<!-- Code for the Mobile View Ends Here -->

			</div>
		</section><!-- #content end --> --}}



        {{-- <div class="marquee" style="margin-bottom: 20px;">
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066"
                            alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066"
                            alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066"
                            alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066"
                            alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
            </section>
            <section class="marquee-content">
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Forbes.svg?v=1593719066"
                            alt="Forbes"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Inc.svg?v=1593719066" alt="Inc"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Nat_Geo.svg?v=1593719066"
                            alt="Nat Geo"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Red_Cross.svg?v=1593719066"
                            alt="Red Cross"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/REI.svg?v=1593719066" alt="REI"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Fortune.svg?v=1593719066"
                            alt="Fortune"></a>
                </div>
                <div class="marquee-block">
                    <a class="marquee-logo" href="#"><img
                            src="https://cdn.shopify.com/s/files/1/0789/1333/files/Discovery_Channel.svg?v=1593719066"
                            alt="Discovery Channel"></a>
                </div>
            </section>
        </div> --}}



@if(($programme->fee_structure_section_flag == 'Y') && (!(empty($fee_details))))

        <div class="container">

            <div class="row justify-content-center ">
						<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
							<h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 22px;">Fee Structure for <span style="color: #000000;">{{$programme->prog_name}}</h2>

						</div>
						<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
							<h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 50px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">Fee Structure for <span style="color: #000000;">{{$programme->prog_name}}</h2>

						</div>
			</div>

            <div class="table-wrapper ">
                <center>
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
            </center>
            </div>
        </div>

@endif







@if(($programme->scholarship_section_flag == 'Y') && !(empty($programme->scholarship_scheme)))
        <div class="container">
                <div class="row justify-content-center ">
						<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
							<h2 class="h1 fw-bold" style="font-size: 48px; font-weight: 600; line-height: 64px; color:#FF7A00; margin-bottom: 17px;">{{$programme->prog_name}}<span style="color: #000000;"> Scholarships 2024</h2>

						</div>
						<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
							<h2 class="h1 fw-bold" style="font-size: 30px; font-weight: 600; line-height: 50px; color:#FF7A00; margin-bottom: 9px; margin-top: -12px;">{{$programme->prog_name}}<span style="color: #000000;"> Scholarships 2024</h2>

						</div>
			    </div>
@php
              echo $programme->scholarship_scheme;

@endphp
      
            


        </div>

        @endif



        <!-- Content
		============================================= -->

        @if(($programme->eligibility_section_flag == 'Y') && !empty($programme->eligibility) && !empty($programme->criteria_merit))
        <section id="content">
                <div class="container" style="margin-top: 12px; margin-bottom: 8px;">
                        <div class="row align-items-lg-center min-vh-lg-100">
                            <div class="col-lg-6">
                                <img src="{{asset('eligiblity.jpg')}}" alt="Girl in a jacket">
                            </div>

                            <div class="col-lg-6 align-self-center">
                                        <h2 class="h1 fw-bold" style="font-size: 24px; font-weight: 500; line-height: 30px; color:#FF7A00; margin-Bottom: 15px;margin-top: 20px;">B.Tech CSE<span style="color: #000000;"> Eligibility Criteria & Selection Process</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-plain fbox-sm flex-column">
                                            <div class="fbox-content">
                                                <h3 class="text-transform-none ls-0">Eligiblity</h3>
                                                <p>
                                                    @php
                                                        echo $programme->eligibility;
                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-plain fbox-sm flex-column">
                                            <div class="fbox-content">
                                                <h3 class="text-transform-none ls-0">Selection</h3>
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
        </section><!-- #content end -->

        @endif




        <div class="container mb-5 mt-5">
            <div class="col-xl-12 col-lg-10 text-center">
                <h1 class="h1 fw-bold tmu-text-primary text-uppercase" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
                    <span>Programmes</span> <span>Offered for the Academic Session 2024-25</span>
                </h1>
            </div>
@foreach ($faqs as $faq)
    
<button class="careers-accordion"><span> <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$faq->faq_question}}</span> <span class="icon">+</span></button>
<div class="panel"> @php echo $faq->faq_answer @endphp</div>  
 <hr class="horizontal-line">

 @endforeach
</div>
        <br>

        <script>
            var acc = document.getElementsByClassName("careers-accordion");
            var i;
        
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                        this.querySelector(".icon").innerHTML = "+";
                        this.classList.remove("clicked"); // Remove clicked class when closing
                    } else {
                        // Close all other panels
                        var allPanels = document.querySelectorAll('.panel');
                        for (var j = 0; j < allPanels.length; j++) {
                            allPanels[j].style.display = 'none';
                            var accordion = allPanels[j].previousElementSibling;
                            accordion.querySelector(".icon").innerHTML = "+";
                            accordion.classList.remove("clicked"); // Remove clicked class from other accordions
                        }
                        panel.style.display = "block";
                        this.querySelector(".icon").innerHTML = "-";
                        this.classList.add("clicked"); // Add clicked class when opening
                    }
                });
            }
        </script>
@endsection