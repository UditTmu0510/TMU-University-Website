@extends('layouts.university.departments.institutional_values_with_sidebar')
@section('content')

<style>
  @media screen and (min-width: 1000px) {
    .container {
      max-width: 75vw !important;
    }
  }
</style>


<div class="main-content">
  <div class="container">
    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Waste Management</span> <span>Initiatives</span></h1>
      <div class="container mb-3 mt-3" style="width:1200px!important;">
        <hr class="horizontal-line">

        <button class="careers-accordion"> Solid Waste Management<span class="icon">+</span></button>
        <div class="panel active">
          <p class="text-justify">The biodegradable waste like food waste from mess & canteen are procured by the near-by piggery
            farms on the daily basis. Besides, the University has also signed MoU with Nagar Panchayat, Pakwara
            for the disposal of Non- biodegradable waste like plastic, tins, glass bottles etc. and ensures that the
            University is having efficient mechanism for the disposal of solid waste.</p>

          <div class="row  gutter-30 mb-4">

            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/soild-waste.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Food Waste <br> Record</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> TMU
                      Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/solid_waste.jpeg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/certificate-2.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Certificate for disposal of food waste 2021-22</h4><span class="fst-normal fs-12 mb-2 "><i class="fa-solid fa-location-dot"></i> Nagar Panchayat, Pakwara </span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/certificate2.jpeg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/certificate-1.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Certificate for disposal of Food Waste (2020-21)</h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot mb-1"></i> Nagar Panchayat, Pakwara
                    </span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/certificate1.jpeg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row  gutter-30 mb-4">
            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/swc-2.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Certificate for disposal of food waste 2022-23 (Second Page)</h4>
                    <span class="fst-normal fs-12 mb-1"><i class="fa-solid fa-location-dot"></i> Nagar Panchayat,
                      Pakwara</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/solid_waste_certificate_2022_second_page.png')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/swc-1.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Certificate for disposal of food waste 2022-23 (First Page)</h4>
                    <span class="fst-normal fs-12 mb-1"><i class="fa-solid fa-location-dot mb-1"></i> Nagar Panchayat,
                      Pakwara</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/solid_waste_certificate_2022_first_page.png')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">

        <button class="careers-accordion">Liquid Waste Management<span class="icon">+</span></button>
        <div class="panel">
          <p class="text-justify">In order to avoid any untoward effects and impacts of the liquid effluents, the University
            has established its own Sewage Treatment Plant (STP) which has the capacity of 1.5 MLD for the
            disposal of liquid effluent. After the STP process the treated water is used for the irrigation of agriculture field,
            grounds,parks etc in the University campus.</p>
          <div class="row  gutter-30 mb-3">
            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/STP.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Sewage Treatment Plant (STP) </h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU
                      Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/10.jpg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/STW.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Sewage Treatment Plant (STP) </h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU
                      Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/5.jpg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion"> Biomedical Waste Management<span class="icon">+</span></button>
        <div class="panel">
          <p>The University has signed MoU with <a href="{{asset('assets/pdf/mou_sp%20green.pdf')}}">SP
              Green Light Environment Waste Management LLP</a>, 1st Floor, Tiwari Market, Opp Ram Janki Mandir,
            Bareilly – 243001 for the collection & disposal of biomedical waste.</p>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion"> E-Waste Management<span class="icon">+</span></button>
        <div class="panel py-3">
          <p class="text-justify">The University has signed the <span class="highlight"><a href="{{asset('assets/pdf/mous/mou_ewaste_management.pdf')}}">MoU </a></span> with Govt. authorized
            vendor namely Exigo Recycling Private Limited, 2nd floor, S-16, Greater Kailash- 1, New Delhi 110046
            for the disposal Electronic Waste. The company ensures use of best available technology for the
            management of electronic waste disposal and also abides with the laws as being issued by the government from
            time to time. The University ensures that the service provider for E-waste management abides with all
            applicable laws, rules, regulations, govt. orders & applicable code of practice under the MoU with the company. The MoU with the
            company is renewed every five years since 2016.</p>
        </div>
        <hr class="horizontal-line">

        <button class="careers-accordion">Waste Recycling System<span class="icon">+</span></button>
        <div class="panel">
          <p class="text-justify">In order to minimize landfill waste, the University has adopted an effective recycling system where in the biodegradable solid waste like tree leaf, grass etc are collected from the campus and dumped in the compost unit of College of Agriculture Sciences to produce organic fertilizers. The fertilizer thus produce is used by the University for gardening, nursery preparation & floriculture.Besides the University also educate concern in the campus about the significance of waste recycling system. The University has well managed mechanism for the recycling of biodegradable waste.</p>
          <div class="row  gutter-30 mb-3">
            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/WCT.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Waste Compost Unit </h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/waste compost unit.jpeg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">


        <button class="careers-accordion">Hazardous Chemicals & Radioactive Waste Management<span class="icon">+</span></button>
        <div class="panel">
          <p class="text-justify">The University follows the UGC guidelines for procurement, storage, usage & disposal of hazardous chemicals & radioactive waste. In view of the same the University has established its own Effluent Treatment Plant (ETP) with the capacity of 200 KLD for the disposal of hazardous chemicals. In accordance with the UGC guidelines the University has designated Dr. Vijay Pratap Singh as the Radiation Safety Officer (RSO) who is responsible for procurement, storage, usage & disposal of radioisotopes use in the campus as per the regulation laid down by Atomic Energy Regulatory Board (AERB). The RSO also ensures the radiation safety guidelines and requirements are followed in all concerned laboratories. The University has well defined SOPs for hazardous chemicals & radioactive waste management system which are displayed in respective laboratories.</p>
          <div class="row  gutter-30 mb-3">
            <div class="col-sm-6 col-md-3">
              <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                <div class="team-image">
                  <img src="{{asset('/assets/img/department/iqac/waste_mgmt/ETP.jpg')}}" alt="">
                </div>
                <div class="team-desc p-2">
                  <div class="team-title pt-0">
                    <h4 class="tmu-text-primary fs-14">Effluent Treatment Plant </h4><span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i>
                      TMU
                      Campus</span>
                    <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/waste_mgmt/download/10.jpg')}}"> Download Geo Tag Image</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="horizontal-line">
        <button class="careers-accordion"> Atomic Energy Regulatory Board (AERB): Registration Certificate <span class="icon">+</span></button>
        <div class="panel">
          <div class="iqac-container">
            <div class="iqac-card">
              <div class="card-pdf">
                <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                <p class="description">(AERB): Registration Certificate</p>
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/publications/AERB_Registration_Certificate.pdf')}}">View PDF</a>
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