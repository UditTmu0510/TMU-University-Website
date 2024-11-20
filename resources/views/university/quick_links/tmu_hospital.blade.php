@extends('layouts.university.main')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">


<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mt-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">TMU Hospital:  <span
                            style="font-weight:700!important;"> Comprehensive Healthcare Services</span></h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none"
                        style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">
                        TMU Hospital: <span> Comprehensive Healthcare Services</span></h1>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">

                            <img src="{{asset('/assets/img/banner/hospital/tmu_hospital.png')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <h2 class="college-main-heading d-none d-md-block">Teerthanker Mahaveer Hospital: Leading Multispecialty Care and Trusted Healthcare Excellence in India. </h2>
                <h3 class="tmu-text-primary d-block d-md-none"><span>Teerthanker Mahaveer Hospital:</span><span> Leading Multispecialty Care and Trusted Healthcare Excellence in India.</span></h3>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">TMU Hospital is a leading healthcare facility offering super-speciality care and advanced clinical services with a bed strength of 900+. It features modern diagnostic facilities, modular operation theatres, and specialised departments, including cardiology, neurology, gastroenterology, and orthopaedics. Equipped with cutting-edge technology like MRI, CT, and dialysis units, the hospital provides 24/7 emergency and trauma care, serving Moradabad and surrounding districts. </p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">The hospital also boasts a modern infertility centre, a well-equipped blood bank, and a dedicated coronary care unit, ensuring comprehensive medical support on campus across various specialities. With its commitment to excellence in patient care and medical education, TMU Hospital is a beacon of healthcare in the region. It also offers hands-on practical training for medical, nursing, and allied health students, allowing them to gain real-world experience in a professional environment.</p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2"
                            title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row g-4 mb-2">
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="900">0</div>
                        <p>Bed Capacity</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="45">0</div>
                        <p>Bed Capacity</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="75">0</div>
                        <p>ICUs Beds</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="11">0</div>
                        <p>Modular Operation Theaters</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="16">0</div>
                        <p>Ventilators</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="1200">0</div>
                        <p>Employees including Doctors</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="20">0</div>
                        <p>Specialities</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <div class="hospital-counter-card">
                        <div class="hospital-counter" data-target="20">0</div>
                        <p>Daily Average Surgeries</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 text-justify">
            <p>
                Teerthanker Mahaveer Medical College Hospital has widely expanded various clinical departments with a
                provision of super specialty care with growing spectrum of disease and increasing demand of such
                facilities. The Hospital is the apex health institution and provides tertiary care to the entire
                population of Moradabad and adjoining districts besides imparting clinical training to the students.</p>

            <p>The Medical college Hospital has a bed strength of 900 beds. It houses the various clinical and
                para-clinical departments like Medicine, Psychiatry, Dermatology, Pulmonary Medicine, Paediatrics,
                General Surgery, Eye, ENT, Orthopedics, Gynae & Obs, Radiology and Anaesthesia. It also has a
                well-developed Blood Bank and a Central lab for Pathology, Microbiology and Bio-Chemistry. The
                diagnostic facilities like MRI, Spiral CT and Color Doppler are also available in the hospital.
            </p>
            <p>Over the period, Teerthanker Mahaveer Medical college Hospital has established a coronary care unit with
                Echocardiography, Holter, TMT, Image Intensifier and facilities for regular Angiography, Angioplasty,
                By-pass surgery & implantation of temporary and permanent pacemakers.</p>
            <p>The emergency wing is well equipped with modern facilities to provide the emergency and trauma care
                services round the clock on all the days. There are 5 beds in Triage area and 35 beds in emergency ward.
                One emergency OT and one minor OT is located in emergency wing. The services include accident, trauma,
                medical and surgical emergencies, paediatrics and Gynaecological emergencies.</p>
            <p>The hospital has 12 well equipped modular operation theaters for General Surgery, Orthopedics, ENT,
                Ophthalmology, Obs, and Gynae and for Super specialties like Plastic Surgery, Neurosurgery, and
                Paediatric surgery besides one for emergency services in the casualty section. Beside this there are
                three minor OTs. There is one licensed Blood Bank in Teerthanker Mahaveer Medical College Hospital. The
                Blood Bank is well equipped and has facilities to prepare the blood components. It caters to the need of
                all the medical and surgical specialties and superspecialties of the medical college Hospital.</p>
            <p>There is one licensed Blood Bank in Teerthanker Mahaveer Medical College Hospital. The Blood Bank is well
                equipped and has facilities to prepare the blood components. It caters to the need of all the medical
                and surgical specialties and super specialties of the medical college Hospital.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contcainer pt-3 mt-4">
                        <div class="facility-section">
                            <h5 class="fw-bold">Medical Facility to the Students:</h5>
                            <p>All the bonafide students of various programs at the university are provided with the
                                below
                                complimentary medical facilities at TMU hospital as per the policy:</p>
                            <ul style="margin-left: 20px;">
                                <li><strong>Outdoor Patient Department (OPD) facilities:</strong> Free registration and
                                    free
                                    tests
                                    (blood, stool, urine, ECG, ultrasound etc). All super specialty checkups and tests
                                    including MRI
                                    & CT scan are available on 20% discount.</li>
                                <li><strong>Inpatient Department (IPD) facilities:</strong> Students can avail the
                                    treatment
                                    facility of maximum up to Rs 50,000/- at TMU hospital during the entire period of
                                    the
                                    program
                                    that they are enrolled in at the university. All the bonafide students will also
                                    have
                                    the
                                    coverage of Rs 1 lac in case of accidental death while they are studying at the
                                    university.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="conctainer pt-3 mt-4">
                        <div class="facility-section">
                            <h5 class="fw-bold">In addition, following facilities are available:</h5>
                            <ul style="margin-left: 20px;">
                                <li>A Dialysis unit with latest Haemodialysis machines</li>
                                <li>A well developed Neurology Lab with facilities of EEG, NCV, EMG and BERA</li>
                                <li>An air conditioned Ward for critically burnt patients</li>
                                <li>A Neurosurgery unit with back up for spiral CT Scan and ICU for Head Injury cases
                                </li>
                                <li>A Urodynamic Lab</li>
                                <li>A Urodynamic Lab</li>
                                <li>An Endoscopy section with facilities for upper and lower G.I. Endoscopy for the
                                    Gastroenterology Department</li>
                                <li>An Endocrinological Lab for Hormonal study</li>
                                <li>ND/ Yag Laser facilities for Ophthalmology Department</li>
                                <li>State-of-the-art infertility centre with facilities of IVF, ICSI, Laser hatching,
                                    TESE &
                                    PESA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container my-5">
            <h2 class="text-center mb-4 tmu-text-primary"><span>Our </span><span> Departments</span> </h2>
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="department-card bg-light-blue">
                        <div class="icon">👨‍⚕️</div>
                        <h6>Expert Doctor</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-orange">
                        <div class="icon">📝</div>
                        <h6>Diagnosis</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-blue">
                        <div class="icon">📋</div>
                        <h6>Pathology</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-orange">
                        <div class="icon">🦷</div>
                        <h6>Dental Care</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-orange">
                        <div class="icon">❤️</div>
                        <h6>Cardiology</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-blue">
                        <div class="icon">💊</div>
                        <h6>Medicine</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-orange">
                        <div class="icon">🧬</div>
                        <h6>Neurology</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="department-card bg-light-blue">
                        <div class="icon">🚑</div>
                        <h6>Ambulance</h6>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <h2 class="tmu-text-primary tmu-page-heading mb-2 mt-2"><span>College </span><span> Gallery</span></h2>
            <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/1.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/1.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/5.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/5.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/6.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/6.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/7.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/7.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/8.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/8.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/2.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/2.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/3.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/3.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6  ">
                    <div class="position-relative">
                        <img class="d-block w-100" src="{{asset('/assets/img/gallery/hospital/4.jpg')}}"
                            alt="Gallery Thumb 2">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark justify-content-end align-items-end"
                                data-hover-animate="fadeIn">
                                <a href="{{asset('/assets/img/gallery/hospital/4.jpg')}}"
                                    class="overlay-trigger-icon size-sm bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<script>
    // HOSPITAL COUNTER JS START
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.hospital-counter');
        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    });

    // HOSPITAL COUNTER JS END
</script>


@endsection