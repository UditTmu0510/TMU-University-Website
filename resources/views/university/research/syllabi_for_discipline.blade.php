@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5 mb-3"><span> Syllabus for </span><span> Discipline Specific Courses Applicable</span></h1>
            <div class="mt-0 mb-3">
                <center><b>[w.e.f. July 2024 Batch]</b></center>
            </div>

            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Medicine<span class="icon">+</span></button>
            <div class="panel active">

                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Basic and Clinical Microbiology </b><br><b>Course Code: (PDS240146)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICINE/BASICS_AND_CLINICAL_MICROBIOLOGY_COURSE_CODE_(PDS240146).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Basics in Human Anatomy</b><br><b>Course Code: (PDS240141)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICINE/BASICS_IN_HUMAN_ANATOMY_COURSE_CODE_(PDS240141).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Basics in Medical Pharmacology</b><br><b>Course Code: (PDS240147)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICINE/BASICS_IN_MEDICAL_PHARMACOLOGY_COURSE_CODE_(PDS240147).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Basics of Medical Phyisology</b><br><b>Course Code: (PDS240148)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICINE/BASICS_OF_MEDICAL_PHYSIOLOGY_COURSE_CODE_(PDS240148).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Clinical Biochemistry and Molecular Biology</b><br><b>Course Code: (PDS240179) </b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICINE/CLINICAL_BIOCHEMISTRY_AND_MOLECULAR_BIOLOGY_COURSE_CODE_(PDS240179).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Dentistry <span class="icon">+</span> </button>
            <div class="panel">

                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Conservative Dentistry and Endodontics </b><br><b>Course Code: (PDS240117)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_CONSERVATIVE_DENTISTRY_AND_ENDODONTICS_COURSE_CODE_(PDS240117).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Oral & Maxillofacial Pathology and Oral Microbiology</b><br><b>Course Code: (PDS240120)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_ORAL_&_MAXILLOFACIAL_PATHOLOGY_AND_ORAL_MICROBIOLOGY__COURSE_CODE_(PDS240120).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Oral & Maxillofacial Surgery</b><br><b>Course Code: (PDS240118)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_ORAL_&_MAXILLOFACIAL_SURGERY_COURSE_CODE_(PDS240118).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Oral Medicine & Radiology</b><br><b>Course Code: (PDS240119)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_ORAL_MEDICINE_AND_RADIOLOGY_COURSE_CODE_(PDS240119).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Orthodontics & Dentofacial Orthopedics</b><br><b>Course Code: (PDS240121)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_ORTHODONTICS_&_DENTOFACIAL_ORTHOPEDICS_COURSE_CODE_(PDS240121).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Pediatric and Preventive Dentistry</b><br><b>Course Code: (PDS140122)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_PEDIATRIC_AND_PREVENTIVE_DENTISTRY_COURSE_CODE_(PDS140122).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Periodontology</b><br><b>Course Code: (PDS240123)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_PERIODONTOLOGY_COURSE_CODE_(PDS240123).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Prosthodontics and Crown & Bridge </b><br><b>Course Code: (PDS240124)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_PROSTHODONTICS_AND_CROWN_&_BRIDGE_COURSE_CODE_(PDS240124).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Public Health Dentistry</b><br><b>Course Code: (PDS240125)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/DENTISTRY/COURSE_NAME_PUBLIC_HEALTH_DENTISTRY_COURSE_CODE_(PDS240125).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Pharmacy <span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Pharmacuetical Sciences</b><br><b>Course Code - (PDS240103)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/PHARMACY/ADVANCES_IN_PHARMACEUTICAL_SCIENCES_(PDS240103).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Faculty of Nursing <span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Nursing Science Theory & Developement Including Nursing Leadership</b><br><b>Course Code - (PDS240108)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/NURSING/NURSING_SCIENCE_THEORY_DEVELOPMENT_INCLUDING_NURSING_LEADERSHIP_(PDS240108).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Fcaulty of Medical Allied Sciences <span class="icon">+</span> </button>
            <div class="panel">
                <h3 class="tmu-text-primary mt-3 mb-2"><span>1. Teerthanker Mahaveer University </span><span> College of Paramedical Sciences</span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Bimolecular Sciences</b><br><b>Course Code - (PDS240109)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PARAMEDICAL/BIMOLECULAR_SCIENCE_(PDS240109).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Fundamentals of Forensics Sciences</b><br><b>Course Code - (PDS240110)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PARAMEDICAL/FUNDAMENTALS_OF_FORENSIC_SCIENCE_(PDS240110).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Modern Radiological Imaging Principles, Techniques & Applications</b><br><b>Course Code - (PDS240112)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PARAMEDICAL/MODERN_RADIOLOGICAL_IMAGING_PRINCIPLES_TECHNIQUES_APPLICATIONS_(PDS240112).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Vision Science The Core Principles</b><br><b>Course Code - (PDS240111)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PARAMEDICAL/VISION_SCIENCE_THE_CORE_PRINCIPLES_(PDS240111).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
                <h3 class="tmu-text-primary mt-3 mb-2"><span> 2. Department of </span><span> Phyisotherapy</span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Cardiopulmonary Rehabiliation & Advances</b><br><b>Course Code: (PDS240113)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PHYSIOTHERAPY/CARDIOPULMONARY_REHABILITATION_&_ADVANCES_COURSE_CODE_(PDS240113).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Msuculoskeletal Rehabiliation & Advances</b><br><b>Course Code: (PDS240114)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PHYSIOTHERAPY/MUSCULOSKELETAL_REHABILITATION_&_ADVANCES_COURSE_CODE_(PDS240114).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Nuerosciences Rehabiliation & Advances</b><br><b>Course Code: (PDS240115)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PHYSIOTHERAPY/NEUROSCIENCES_REHABILITATION_&_ADVANCES_COURSE_CODE_(PDS240115).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Sports Rehabiliation & Advances</b><br><b>Course Code: (PDS240116)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/MEDICAL_ALLIED_SCIENCES/PHYSIOTHERAPY/SPORTS_REHABILITATION_&_ADVANCES_COURSE_CODE_(PDS240116).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Faculty of Law <span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Recent Trends in Law & Social Transformation India</b><br><b>Course Code - (PDS240105)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/LAW/RECENT_TRENDS_IN_LAW_AND_SOCIAL_TRANSFORMATION_INDIA_(PDS240105).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Faculty of Commerce & Management<span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Management Phiolosophy and Practices</b><br><b>Course Code - (PDS240104)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/COMMERCE_&_MANAGEMENT/MANAGEMENT_PHILOSOPHY_AND_PRACTICES_COURSE_CODE_(PDS240104).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Faculty of Engineering <span class="icon">+</span> </button>
            <div class="panel">
                <h3 class="tmu-text-primary mb-2 mt-3"><span>1. College of </span><span> Computing Sciences & IT</span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advanced Research Trends Computer Applications</b><br><b>Course Code: (PDS240178)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/CCSIT/ADVANCED_RESEARCH_TRENDS_COMPUTER_APPLICATIONS_(PDS240178).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
                <h3 class="tmu-text-primary mb-2 mt-3"><span>2. Teerthanker Mahaveer University  </span><span> College of Engineering </span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Chemistry</b><br><b>Course Code - (PDS240127)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/ADVANCES_IN_CHEMISTRY_COURSE_CODE_(PDS240127).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Civil Engneering</b><br><b>Course Code: (PDS240129)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/ADVANCES_IN_CIVIL_ENGINEERING_(PDS240129).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Electrical Engineering</b><br><b>Course Code: (PDS240130)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/ADVANCES_IN_ELECTRICAL_ENGINEERING__COURSE_CODE_(PDS240130).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Electronics & Communication Engineering</b><br><b>Course Code:  (PDS240131)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/ADVANCES_IN_ELECTRONICS_&_COMMUNICATION_ENGINEERING_COURSE_CODE_(PDS240131).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Adavances in Mathematics</b><br><b>Course Code: (PDS240128)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/COURSE_ADVANCES_IN_MATHEMATICS_COURSE_CODE_(PDS240128).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Mechanical Engineering</b><br><b>Course Code: (PDS240132)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/COURSE_ADVANCES_IN_MECHANICAL_ENGINEERING_COURSE_CODE_(PDS240132).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Advances in Physics</b><br><b>Course Code: (PDS240126)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/COURSE_ADVANCES_IN_PHYSICS_COURSE_CODE_(PDS240126).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Recent Advances in Computer Science & Engineering</b><br><b>Course Code: (PDS240177)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/ENGINEERING/ENGINEERING/COURSE_RECENT_ADVANCES_IN_COMPUTER_SCIENCE_&_ENGINEERING_COURSE_CODE_(PDS240177).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Education <span class="icon">+</span> </button>
            <div class="panel">
            <h3 class="tmu-text-primary mb-2 mt-3"><span>1. Department of </span><span> Education </span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Principles, Practices and Perspective Education</b><br><b>Course Code: (PDS240101)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/EDUCATION/EDUCATION/PRINCIPLES_PRACTICES_PERSPECTIVES_EDUCATION_(PDS240101).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
                <h3 class="tmu-text-primary mb-2 mt-3"><span>2. Department of </span><span> Phyiscal Education </span></h3>
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Essentials of Physical Education</b><br><b>Course Code: (PDS240102)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/EDUCATION/PHYSICAL_EDUCATION/ESSENTIALS_OF_PHYSICAL_EDUCATION_PDS240102.pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Fine Arts<span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Art History & Advertisement</b><br><b>Course Code: (PDS240106)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/FINE_ARTS/ART_HISTORY_ADVERTISING_(PDS240106).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Faculty of Agriculture Sciences<span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Agronomy</b><br><b>Course Code: (PDS240149_158)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/AGRICULTURE/AGRONOMY_COURSE_CODE_(PDS240149_158).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Plant Pathology</b><br><b>Course Code: (PDS240159_167)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/AGRICULTURE/PLANT_PATHOLOGY_COURSE_CODE_(PDS240159_167).pdf')}}" download>Download PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Soil Sciences</b><br><b>Course Code: (PDS240168_176)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/AGRICULTURE/SOIL_SCIENCES_(PDS240168_176).pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion"> Faculty of Humanities and Social Sciences <span class="icon">+</span> </button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description"><b>Course Name: Jainlogy</b><br><b>Course Code: (PDS240107)</b></p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('/assets/pdf/research/SDSC_fresh/HUMANITIES_&_SOCIAL_SCIENCES/JAINOLOGY_PDS240107.pdf')}}" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">

        </div>
    </div>
</div>
</div>

@endsection