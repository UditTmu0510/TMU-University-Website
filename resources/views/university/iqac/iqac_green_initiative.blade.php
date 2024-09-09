@extends('layouts.university.departments.institutional_values_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">

    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Green Campus </span> <span> Initiatives</span></h1>

      <div class="container mb-5 mt-3">
        <hr class="horizontal-line">

        <button class="careers-accordion"> Restricted Entry of Automobiles<span class="icon">+</span></button>
        <div class="panel active">
          <div class="row justify-content-center gutter-30 col-mb-5 mb-3 mt-0">
            <div class="col-sm-3 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/1.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Restricted Entry of Automobiles</h4><span class="fst-normal fs-12 mb-2 mb-2"><i class="fa-solid fa-location-dot"></i> TMU Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/automobile.jpg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-9 col-md-9">
              <p>The university restrict the entry of vehicles in the campus. The following two types of passes are issued for the entry purpose in the campus:</p>
              <ul class="m-ol-list ps-4 mb-0 mt-0">
                <li><b class="fs-14">Green Pass</b> – Only for the campus resident vehicles.</li>
                <li><b class="fs-14">Yellow Pass </b>– Other than the campus resident vehicles.</li>
              </ul>
              <p>The parking area is available for the visitors at the entry gate of the University and vehicles are not allowed after the restricted area.</p>
            </div>
          </div>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">

        <button class="careers-accordion"> Use of Bicycles / Battery-Powered Vehicles<span class="icon">+</span></button>
        <div class="panel">
          <p>The fleet of E-Rickshaw & Golf Carts facility is available to move within the campus for staff and students.</p>
          <div class="row mb-3">
            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/2.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Battery Operted Golf Cart</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> TMU Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/battery_power_vehicle1.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/3.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">E-Rickshaws</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> TMU Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/battery_power_vehicle2.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion"> Pedestrian-Friendly Pathways<span class="icon">+</span></button>
        <div class="panel">
          <p>The University have pedestrian / walkways to connect different buildings of the university constructed through eco-friendly interlocked bricks.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <th>S.No.</th>
              <th>From</th>
              <th>To</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Main Entry Gate</td>
                <td>E-Lobby</td>
              </tr>
              <tr>
                <td colspan="3" style="text-align:center;">Pedestrians - Pathways List</td>
              </tr>
              <tr>
                <td>2</td>
                <td>E-Lobby</td>
                <td>Guest House</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Guest House</td>
                <td>Vardhaman Bhawan</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Vardhaman Bhawan</td>
                <td>Engineering College</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Engineering College</td>
                <td>Indoor Stadium</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Indoor Stadium</td>
                <td>Faculty Blocks</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Faculty Blocks</td>
                <td>Helipad</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Helipad</td>
                <td>Vidya Bhawan</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Indoor Stadium</td>
                <td>Medical College</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Medical College</td>
                <td>Admin Block</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Vidya Bhawan</td>
                <td>Sanvrddhi House</td>
              </tr>
              <tr>
                <td>12</td>
                <td>Sanvrddhi House</td>
                <td>Jinalaya</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Jinalaya</td>
                <td>Gyan Bhawan</td>
              </tr>
              <tr>
                <td>14</td>
                <td>Gyan Bhawan</td>
                <td>Jinalaya</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Jinalaya</td>
                <td>Security Gate</td>
              </tr>
              <tr>
                <td>16</td>
                <td>Security Gate</td>
                <td>Hospital</td>
              </tr>
              <tr>
                <td>17</td>
                <td>Hospital</td>
                <td>Exit Gate</td>
              </tr>
            </tbody>
          </table>
          <div class="row gutter-30 col-mb-5 mb-3">
            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/4.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Pedestrian-Friendly Pathways</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/pedestrain1.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
              </p>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/5.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Pedestrian-Friendly Pathways</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/pedestrain2.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion">Ban on use of Plastic<span class="icon">+</span></button>
        <div class="panel">
          <p>The different colleges/ department of the university celebrates world environment day every year on 5th June. The volunteers of NSS Unit organizes the awareness program <a href="https://www.tmu.ac.in/news/swachhta-pakhwada-2019">(Swachhta Pakhwada (Click here to View))</a> to stop the use of plastic. The notification is issued from the Registrar office to stop the single use plastic.The students & staff of the university are actively involved in the Swacch Bharat Abhiyan.</p>
          <div class="row justify-content-center gutter-30 col-mb-5">
            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/6.jpg')}}" alt="first-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/7.1.5_BAN_ON_USE_OF_PLASTIC_TMIMT_1.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/7.jpg')}}" alt="second-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/7.1.5_BAN_ON_USE_OF_PLASTIC_TMIMT_2.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/10.jpg')}}" alt="third-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/MEDICAL_NO_USE_OF_PLASTIC_SIGNAGES.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/8.jpg')}}" alt="third-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/GUEST_HOUSE_NO_USE_OF_PLASTIC_SIGNAGES.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/9.jpg')}}" alt="third-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/CCSIT_NO_USE_OF_PLASTIC_SIGNAGES.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/11.jpg')}}" alt="third-img">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Ban on use of Plastic</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/7.1.5_BAN_ON_USE_OF_PLASTIC_TMIMT_3.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion"> Landscaping<span class="icon">+</span></button>
        <div class="panel">
          <p>The University has planned an attractive landscaping scheme through which lawns and grounds are maintained. In the last five years University has taken the initiation & large no of trees & plants are implanted in the grounds & road side area. Different constituent’s college/ departments celebrates the World Environment Day every year, on 5thjune.
            In 2019 the tree plantation campaign was inaugurated by Mohd. Shami, Member-Indian Cricket Team</p>

          <div class="row gutter-30 col-mb-5 mb-3">
            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/12.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Nursery</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping.jpeg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/13.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">landscaping</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping1.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/14.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">landscaping</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping2.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/15.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Landscaping Flowering</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping6.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/16.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Landscaping</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping7.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/17.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Landscaping</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping9.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/18.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Landscaping</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping8.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/20.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">Landscaping Green Grass</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping4.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/green_campus/19.jpg')}}" alt="" >
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="fs-14">plantation by Mohd. Shami, Memeber-Indian Cricekt Team</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                      <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/green_campus/download/landscapping3.jpg')}}"> Download Geo Tag Image</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">
      </div>
    </div>
  </div>
</div>
</div>



@endsection