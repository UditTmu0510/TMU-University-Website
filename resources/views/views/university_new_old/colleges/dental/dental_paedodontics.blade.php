@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span> Paedodontics & </span><span>
                            Preventive Dentistry </span></h1>
                    <p class="about-p mb-4">The department of Paedodontics and Preventive Dentistry at Teerthanker
                        Mahaveer University is a place where total dental care is provided to children from birth
                        through adolescence including those children with special health care needs. </p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/college_departments/dental/ppd/37.jpg')}}" alt="">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4">Undergraduates are trained to develop necessary clinical skills for
                        providing basic dental care to children with emphasis on preventive dentistry. Postgraduates
                        are trained in all aspects of advanced paediatric dentistry including care of very young
                        children and special children.</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row mt-lg-5 mb-md-3">
                <div class="col-md-6 mb-3 mt-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Key </span><span> Features</span></h3>
                        <ul class="m-ol-list ps-5 ">
                            <li>A child friendly reception area which is a ‘visual treat for children’.</li>
                            <li>State of the art equipment’s including RVG, hydrosolder, apex locators & intra oral
                                camera and paediatric dental chairs.</li>
                            <li>Facility for provision of dental care under general anaesthesia for very young,
                                extremely uncooperative and disabled children.</li>
                            <li>Strong Emphasis on prevention of oro-dental diseases in children by providing
                                preventive procedures and appropriate parent and child counseling.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Research & </span><span>Academic Activities</span></h3>
                        <p class="mb-2">The Department of Paedodontics & Preventive Dentistry offers MDS course which has an intake capacity of five students per year.
                            Various in-vivo, in-vitro studies and surveys dealing with the various treatment modalities and advances in the specialization are conducted in our department.
                            Interesting researches and original studies undertaken by the post graduate students and staff members are regularly been published in the leading national and international journals.
                            Post graduate students attend national and state conferences, convention and various CDE programs held every year.
                            Seminars, journal clubs, pedagogy, case presentations and tests are conducted for the post graduate students on regular basis.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12  mb-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Core </span><span> Competencies</span></h3>
                        <div class="row">
                            <ul class="m-ol-list ps-5">
                                <li>Endodontic treatment of primary, young permanent and permanent teeth </li>
                                <li>Management of harmful oral habits and malocclusions in children</li>
                                <li>Full mouth rehabilitation under general anaesthesia</li>
                                <li>Dental care for Children with Special Health Care needs</li>
                                <li>Esthetic paediatric dentistry</li>
                                <li>Preventive dentistry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
            <h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
            <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/ppd/32.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/ppd/32.jpg')}}" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/ppd/33.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/ppd/33.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/ppd/34.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/ppd/34.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/ppd/35.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/ppd/35.jpg')}}" alt="Gallery Thumb 5"></a>
            </div>
            <h3 class="tmu-text-primary mt-4"><span>Labs </span><span> Equipments</span></h3>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Name of Equipments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Dental Chairs as per specification (Pedo chair preferred with micro head hand
                                    pieces)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Autoclaves having wet and dry cycle, which can achieve 135&deg;C with minimum
                                    capacity of 20 liters.</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Ultrasonic cleaner with minimum capacity 13 liters with mesh bucket with digital
                                    timer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Needle Burner with syringe cutter</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>Amalgamator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Pulp Tester-Digital</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>Rubber dam kit for pedo</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Apex locator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Endo motor with torque control HPs</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="10">10</td>
                                <td>Injectable gutta percha with condensation</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>Digital intra X-ray system with pedo sensor and software</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Intra Oral Camera with high resolution</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Scaling instruments</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="14">14</td>
                                <td>Restorative instruments</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="15">15</td>
                                <td>Extraction forceps with Pedo Forceps complete sets</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="16">16</td>
                                <td>Intra-oral X-ray</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="17">17</td>
                                <td>RCT Instruments Kits</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="18">18</td>
                                <td>Diagnostic Kits (Mouth mirror, dental probe, college tweezers)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="19">19</td>
                                <td>Automatic Developer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="20">20</td>
                                <td>Plaster dispenser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="21">21</td>
                                <td>Model Trimmer with diamond disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="22">22</td>
                                <td>Model Trimmer with Carborandum disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="23">23</td>
                                <td>Welder with soldering attachments</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="24">24</td>
                                <td>Vibrator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="25">25</td>
                                <td>Heavy duty Lab micro motor with Hps</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="26">26</td>
                                <td>Dental Lathe</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="27">27</td>
                                <td>Steam cleaner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="28">28</td>
                                <td>Pressure moulding machine</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="29">29</td>
                                <td>Electrically operated Dental Chairs with shadowless lamp, spittoon, 3 way
                                    syringe, and motorised suction,
                                    micromotor attachment with contra angle miniature handpiece,airotor attachment
                                    with miniature handpiece, dental
                                    operater stool (40% dental chairs shall be pedo chairs)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="30">30</td>
                                <td>Pedo extraction forceps sets</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="31">31</td>
                                <td>Autoclaves for bulk instrument sterilization vacuum (Front loading)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="32">32</td>
                                <td>RVG with intra oral x-ray unit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Name of Equipments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" sdval="33">33</td>
                                <td>Automatic developer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="34">34</td>
                                <td>Pulp tester</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="35">35</td>
                                <td>Apex locator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="36">36</td>
                                <td>Rubber dam kit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="37">37</td>
                                <td>Injectable GP condenser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="38">38</td>
                                <td>Endodontic pressure syringe</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="39">39</td>
                                <td>Glass bead sterilizer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="40">40</td>
                                <td>Spot welder</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="41">41</td>
                                <td>Ultrasonic scalers</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="42">42</td>
                                <td>Needle destroyer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="43">43</td>
                                <td>Formalin chamber</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="44">44</td>
                                <td>Ultrasonic cleaner capacity 3.5 lts</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="45">45</td>
                                <td>X-ray viewer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="46">46</td>
                                <td>Amalgamator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="47">47</td>
                                <td>Plaster dispenser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="48">48</td>
                                <td>Dental lathe</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="49">49</td>
                                <td>Vibrator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="50">50</td>
                                <td>Typodonts</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="51">51</td>
                                <td>Soldering unit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="52">52</td>
                                <td>Band pinching beak pliers</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="53">53</td>
                                <td>Proximal contouring pliers</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="54">54</td>
                                <td>Crown crimping pliers</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="55">55</td>
                                <td>Double beak pliers anterior and posterior</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="56">56</td>
                                <td>Lab micro motor</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="57">57</td>
                                <td>Acryliser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="58">58</td>
                                <td>Magnifying loupes</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="59">59</td>
                                <td>Conscious sedation unit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="60">60</td>
                                <td>Pulse oxymeter</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="61">61</td>
                                <td>Phantom head table with attached Light, Airotor and micro motor</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="62">62</td>
                                <td>Computer with internet connection with attached printer and scanner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="63">63</td>
                                <td>LCD projector</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="64">64</td>
                                <td>Refrigerator</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection