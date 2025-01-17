@extends('layouts.university.main')
@section('content')

<section id="content">
    <div class="content-wrap py-0">

        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">

                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to Teerthanker Mahaveer University Hostels<span style="font-weight:700!important;"> A Home For Students</span></h1>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <img src="{{asset('assets/img/banner/library/library.webp')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-justify mb-4">
                    <p class="mb-2 px-2 py-2 fs-14">We call our hostels home for students. The hostels at TMU are a
                        home away from
                        home. The onus of developing the student academically, strengthening their culture,
                        taking care of their
                        physical fitness, all lie on this vital micro structure of the University. Life in TMU
                        hostel is a
                        stepping stone to further independence, an essential right for many, enabling them to
                        reach out to their
                        destiny. The University houses five hostels in its campus- 2 for boys and 3 for girls
                        with a capacity to
                        accommodate 4600 students.</p>
                    <p class="mb-2 px-2 py-2 fs-14">The hostel rooms are spacious, clean, and well maintained with
                        attached bathrooms.
                        The rooms are available on single occupancy basis as well as on sharing basis. To help
                        the young minds
                        focus on their studies, each room is furnished with beds, wardrobes, study tables,
                        chairs and
                        air-cooler. Solar heaters have been installed in all the hostels to supply hot water
                        conserving
                        electricity.</p>
                    <p class="mb-2 px-2 py-2 fs-14">Water purifiers and water coolers are installed to provide potable
                        water. Round
                        the clock power back-up helps students to study without interruption. Air-conditioned
                        rooms are also
                        available to meet specific requirement of the students. Each hostel has a visitor's
                        room, a spacious
                        well lit common room with a large screen television and comfortable seating arrangement,
                        recreational
                        facilities, equipments for indoor games, newspapers and magazines, Wi-Fi connectivity
                        and a gymnasium.
                    </p>
                    <p class="mb-2 px-2 py-2 fs-14">Laundry facility is available in-house with commercial washing
                        machine and tumbler
                        drier. Spacious dining rooms and modern kitchens ensure that students are served with
                        nutritious food in
                        a good ambiance.</p>
                    <p class="mb-2 px-2 py-2 fs-14">A dedicated team of wardens and caretakers helps and resolve the
                        problems of the
                        boarders. Students are advised to comply with rules and regulations of the University
                        hostels.</p>
                    <p class="mb-2 px-2 py-2 fs-14">Yoga and meditation sessions are held regularly in morning and
                        evening hours for
                        the students residing in the hostels. The faculty counsellors are associated with every
                        hostel so as to
                        mentor the students whenever they need.</p>
                    <p class="mb-2 px-2 py-2 fs-14">The buildings are aesthetically planned with ample open space and
                        greenery thus
                        providing conducive environment to the students for realizing their optimum potential.
                    </p>
                    <div class="container" style="
                                padding: 20px;
                                border: 1px solid #092e62;
                                background-color: #f1f1f1;
                            ">
                        <h3 class="tmu-color-red mb-2">Hostel Helpline:</h3>
                        <p class="mb-2"><strong>Girl's Hostel :</strong><br><span class="highlight mb-2"><a
                                    href="tel:++91-9837763888">+91-9837763888 </a></span> <br /><span
                                class="highlight mb-2"><a href="tel:++91-9837763888">+91-9837763888</a></span></p>
                        <p class="mb-2"><strong>Boy's Hostel : </strong><br /><span class="highlight mb-2"><a
                                    href="tel:++91-9837763888">+91-9837763888</a></span> <br /><span
                                class="highlight mb-2"><a href="tel:++91-9837763888">+91-9837763888</a></span></p>
                        <h3 class="tmu-color-red mb-2">Please Feel Free to Contact Hostel Authorities if required:
                        </h3>
                        <p class="mb-3"><strong>Girls's Hostel:</strong> <br />Mr. Vipin Jain <br />(<span
                                class="highlight mb-2 ps-0 pe-0"><a href="mailto:dy.dir.hh@tmu.ac.in">
                                    dy.dir.hh@tmu.ac.in</a></span>)</p>
                        <p class="mb-3"><strong>Boys's Hostel:</strong> <br />Mr. Vipin Jain<br />(<span
                                class="highlight mb-2 ps-0 pe-0"><a href="mailto:dy.dir.hh@tmu.ac.in">
                                    dy.dir.hh@tmu.ac.in</a></span>)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="tmu-text-primary mb-2 "><span>Hostel Fee (Including Mess) Per Year </span><span>
                            (Girls/Boys)
                            Except Medical </span></h3>
                    <div class="table-responsive pb-sm-4">
                        <table class="table table-bordered table-striped mb-0" id="loan-table">
                            <thead>
                                <tr>
                                    <th class="text-center">CATEGORY</th>
                                    <th class="text-center" colspan="3">FOR NON JAIN STUDENTS</th>
                                    <th class="text-center" colspan="3">FOR JAIN STUDENTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th class="align-middle text-center">Lodging</th>
                                    <th class="align-middle text-center">Mess</th>
                                    <th class="align-middle text-center">TOTAL FEE</th>
                                    <th class="align-middle text-center">Lodging</th>
                                    <th class="align-middle text-center">Mess</th>
                                    <th class="align-middle text-center">TOTAL FEE</th>
                                </tr>
                                <tr>
                                    <td>2 Seater (Attach Bath) With Cooler</td>
                                    <td class="align-middle text-center">1,02,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">1,30,000/-</td>
                                    <td class="align-middle text-center">86,700/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">1,14,700/-</td>
                                </tr>
                                <tr>
                                    <td>2 Seater (Common Bath) With Cooler</td>
                                    <td class="align-middle text-center">62,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">90,000/-</td>
                                    <td class="align-middle text-center">43,400/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">71,400/-</td>
                                </tr>
                                <tr>
                                    <td>3 Seater (Attach Bath) With Cooler</td>
                                    <td class="align-middle text-center">62,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">90,000/-</td>
                                    <td class="align-middle text-center">52,700/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">80,700/-</td>
                                </tr>
                                <tr>
                                    <td>3 Seater (Common Bath) With Cooler</td>
                                    <td class="align-middle text-center">47,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">75,000/-</td>
                                    <td class="align-middle text-center">32,900/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">60,900/-</td>
                                </tr>
                                <tr>
                                    <td>4 Seater (Attach Bath) With Cooler </td>
                                    <td class="align-middle text-center">42,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">70,000/-</td>
                                    <td class="align-middle text-center">35,700/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">63,700/-</td>
                                </tr>
                                <tr>
                                    <td>4 Seater (Common Bath) With Cooler</td>
                                    <td class="align-middle text-center">32,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">60,000/-</td>
                                    <td class="align-middle text-center">22,400/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">50,400/-</td>
                                </tr>
                                <tr>
                                    <td>3 Seater Basement (Common Bath)</td>
                                    <td class="align-middle text-center">22,000/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">50,000/-</td>
                                    <td class="align-middle text-center">15,400/-</td>
                                    <td class="align-middle text-center">28,000/-</td>
                                    <td class="align-middle text-center">43,400/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mb-3 pb-sm-3"><span class="highlight fs-16">Note:- </span>For Jain students, there is an exemption of 50% in hostel fees (lodging only) for the common bathroom category and an exemption of 25% for the attached bathroom category.</p>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row g-5 justify-content-center">
                <div class="col-md-10 mb-1">
                    <h3 class="tmu-text-primary mb-3 pt-lg-4"><span>Regulations to be followed </span><span> at the student
                            quarters:</span></h3>
                    <p><strong>Hostel & Wardens</strong></p>
                    <p class="text-justify mb-2">Every hostel has a resident warden, staying inside/ adjacent to the hostel. In addition, hostels may have non-resident wardens also depending upon the specific need. Each pair of wardens takes the role of local guardians of the students of that hostel. They have to be approached primarily for various issues like permissions for outstation leave, permission to go out of campus. In case of sickness, warden should be informed and he/she will facilitate speedy consultation with the doctor in the university hospital. The wardens will coordinate activities of the hostel viz cultural, sports, beautification, addition of facilities etc. The wardens can also be approached for any general guidance a student may need on academic/career or personal problems.</p>
                </div>

                <div class="row">
                    <h3 class="tmu-text-primary mb-2 text-center"><span>Hostel</span><span> Rules</span></h3>
                </div>
                <div class="col-md-5 text-justify mt-2">
                    <ul class="m-ol-list ps-4 fs-12">
                        <li>The hostel provides a hard bed, a study table, a chair, a cupboard for each student, and a desert cooler for each room. Additionally, every hostel has a common electric/solar heated water facility, water cooler, common TV room, common reading room, etc.</li>
                        <li>There is provision for air-conditioned hostel rooms with extra charges.</li>
                        <li>Hostellers are required to stay only in their allotted rooms. Any exchange or sharing of rooms without written permission of the Warden is strictly forbidden. However, students can pair up with a student of their choice within the first few days with the prior permission of the Hostel Warden.</li>
                        <li>Students are expected to keep themselves, their rooms, and the hostel premises neat and clean, and prevent any damage or destruction to university properties in the hostels.</li>
                        <li>Any damage or breakage to hostel property will be charged to the occupants of the room/block with a fine. Disciplinary action will also be initiated.</li>
                        <li>All students are advised not to keep large amounts of cash or valuables in the room. The student is responsible for the safety of their belongings inside the room. They are strictly advised to keep their valuables under lock and key.</li>
                        <li>Nails, posters, drawings, etc., must not be put on the walls or doors. The cost of any damage to the room and hostel furniture will be charged to the student.</li>
                        <li>Students are advised to ensure that the furniture, fixtures, and electrical items handed over to them are in perfect condition. Any subsequent damage must be repaired or replaced by the occupants at their own cost.</li>
                        <li>Radios, stereos, and other musical equipment should be used in a manner that does not cause disturbance to fellow students and neighboring hostel mates.</li>
                        <li>There shall be no sports activity likely to cause damage within the hostel premises at any time.</li>
                        <li>Cooking in hostel rooms is not permitted. Moreover, students are served pure vegetarian food, and non-vegetarian food is strictly prohibited on campus.</li>
                        <li>All students going out of campus or entering it must make appropriate entries in the register kept at the security gate. All male students must be back on campus by 6:00 PM and within their respective hostels by 10:30 PM, and for female students, it shall be 4:00 PM and 7:00 PM, respectively. Students are advised to be in their respective rooms by 11:00 PM. Anybody failing to return to the campus/room in time will face disciplinary action. No student should stay away from their room during the night except with prior permission of the Warden.</li>
                    </ul>
                </div>
                <div class="col-md-5 text-justify mt-2">
                    <ul class="m-ol-list ps-4 fs-12">
                        <li><b class="fs-14">Procedure for going out of station on short leave: Collect a leave application form from your hostel warden.</b>
                            <ol class="ps-3">
                                <li>Attach consent letter from your parents (fax or letter).</li>
                                <li>Seek permission from the concerned warden and collect the gate pass.</li>
                                <li>Deposit the gate pass at the security gate and make a register entry at the time of leaving the campus.</li>
                                <li>Make sure that you carry your ID card with you.</li>
                                <li>Students who go out of the campus do so at their own risk and responsibility. It is presumed that they have suitably informed their parents/guardians regarding their whereabouts at all times.</li>
                            </ol>
                        </li>
                        <li>Students are advised to avoid singing aloud, shouting, or making any noises likely to distract those studying in their rooms.</li>
                        <li>The Chief Warden/Warden reserves the right to break open rooms in case of any violation of hostel rules, suspected unlawful activities, or perceived security risks.</li>
                        <li>Once a student vacates the hostel, they will not be reallocated hostel accommodation for a minimum period of six months.</li>
                        <li>All visitors, including parents/guardians, must be entertained only in the visitors' lounge.</li>
                        <li>Very limited on-campus accommodation in the guest house is available for outstation visitors. Students' guests, including parents, can stay for a short duration of one or two nights on a payment basis, subject to availability. Students must seek prior permission from their warden for their parents to stay with them. Permission may not be granted for visits from persons other than parents.</li>
                        <li>Only female visitors are permitted inside Girls' Hostels.</li>
                        <li>Monthly electrical consumption for a specified number of units (presently 100 units) is included in the hostel fee. Consumption beyond this limit will be charged at Rs. 6/- per unit. These charges will be collected monthly against the bill raised by the hostel warden.</li>
                        <li>Any complaints regarding hostel and room issues like electrical, carpentry, or plumbing should be registered in the Complaint Register kept in the warden's office. Room keys should be handed over to the Hostel Assistant for attending to complaints.</li>
                        <li>Smoking, chewing pan, pan-masala, gutka, gambling, consumption of alcoholic drinks, use of hallucinogenic drugs, and other illegal substances, or possession of such substances, are strictly forbidden anywhere on the University campus.</li>
                        <li>Carrying any explosives, firearms, and/or weapons inside the campus is strictly prohibited.</li>

                    </ul>
                </div>

            </div>
            <div class="row">
                <h3 class="tmu-text-primary mb-2 text-center"><span>Mess</span><span> Rules</span></h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="m-ol-list ps-4 fs-12 text-justify">
                        <li>Students should stand in queue at the counter to serve themselves. They must avoid wastage of food by serving smaller portions and then going back to the counter for more if and when needed.</li>
                        <li>Students are required to pick up their plates and glasses after their meals and place them in the appropriate bins after emptying their contents in the trash drum provided. Ensure that spoons are not thrown in the trash.</li>
                        <li>Students are prohibited from carrying either food or utensils outside the mess premises except under special permission from the Warden/Hostel Superintendent. In such cases, they will be responsible for returning the utensils to the Dining Hall.</li>
                    </ul>
                </div>
            </div>

            <div class="row gutter-30 col-mb-5 justify-content-center mb-5">
            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h1.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h1.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h2.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h2.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h3.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h3.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h4.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h4.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h5.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h5.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/quick_links/hostel/h6.jpg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/quick_links/hostel/geotagged/h6.jpg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
</section>
@endsection