@extends('layouts.university.main')
@section('content')

<style>
    .mou-img{
        width: 180px;
        aspect-ratio: 3/2;
        object-fit: contain;
        vertical-align: middle;
        margin:auto;
        display: block;
    }
    .v-mid{
        vertical-align: middle;
    }
</style>

<section id="content">
    <div class="content-wrap py-0">

            <div class="container mt-4">
                    <div class="row mx-0">
                    <h1 class="tmu-text-primary tmu-page-heading mt-3"><span> MOUs / Agreement </span><span> signed by the University (National)</span></h1>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr><th>S. No.</th>
                                    <th>Logo</th>
                                    <th>Description</th>
                                    <th>Download</th>
                                </tr></thead>
                                <tbody>

                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/SRMS.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Molecular Laboratory of Shri Ram Murti Smarak Institute of Medical Sciences, Bhojipura Bareilly (UP) and Teerthanker Mahaveer Medical College & Hospital Research Centre Delhi Road, NH-24 Bagadpur, Uttar Pradesh has undergone a service agreement for Inter Lab Comparison (ILC) of blood</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/SRMS-IMS_Bareilly.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">2.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/JNMC.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>VIRAL RESEARCH AND DIAGNOSTIC LABORATORY (VRDL), DEPARTMENT OF MICROBIOLOGY, JAWAHARLAL NEHRU MEDICAL COLLEGE (JNMCH), ALIGARH MUSLIM UNIVERSITY (AMU), ALIGARH, & MOLECULAR LABORATORY, TEERTHANKER MAHAVEER MEDICAL COLLEGE & RESEARCH CENTRE, MORADABAD</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/VRDL.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    
                                    
                                
                                    <tr>
                                        <td class="text-center">3.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/TMU.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Teerthanker Mahaveer University Moradabad, the First Party represented herein by its Prof (Dr.) Raghuvir Singh Vice Chancellor TMU (hereinafter referred as First Party'</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/ISTD-Gurgaon.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">4.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/TMU.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>This Memorandum of Understanding ("MOU") is made and executed on the 01/12/2023 in Moradabad and shall be valid till 31/10/2024 by and between; Teerthanker Mahaveer University also known as TMU is a private university in Moradabad,</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/Pratham_education_MoU_up.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">5.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/TMU.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>is Memorandum of Understanding is made on this 2nd day of May 2015 between Teertharn Mahaveer University, having their eampus at Moradabad, NH-24 Delhi Road, Bagadpur Cpresented by its Dean (Academics), Prof. K. K. Pande as the First Party</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/i_nurture.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">6.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/TMU.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Teerthanker Mahaveer University (TMU), Moradabad is located on National Highway-24, 144 Km from New Delhi. The University stands committed to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge, and Right Conduct.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/AKTU_Lucknow.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                    
                                
                                    <tr>
                                        <td class="text-center">7.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/mous_logo/whizack_logo.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Between Whizhack Technologies Private Limited having its office in Unit No. 901/901A, The Palm Springs Plaza, Sector-54, Gurugram 122011 and Teerthanker Mahaveer University (TMU) having its campus in Delhi Road, NH-24, Bagadpur, Uttar Pradesh - 244001.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/Whizhack_Technologies_Private_Limited_Gurugram.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">8.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/mous_logo/23.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Teerthankar Mahaveer University and BSNL have teamed up to bridge the digital divide. This partnership combines TMU's educational resources with BSNL's telecom expertise to enhance connectivity, expand internet access, and provide educational opportunities to underserved communities, fostering digital inclusion and economic growth.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/23.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">9.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/mous_logo/22.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Teerthankar Mahaveer University and Blue Planet Skills have partnered to empower students with cutting-edge skills and knowledge. This collaboration merges TMU's academic excellence with Blue Planet Skills' industry-specific expertise, offering innovative educational programs to equip students for successful careers in sectors such as technology, healthcare, and vocational skills.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/22.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">10.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/mous_logo/21.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Teerthankar Mahaveer University and UltraTech Cement have joined forces to foster academic and industrial synergy. This collaboration leverages TMU's educational expertise and UltraTech's industry leadership to promote research, innovation, and skill development in the fields of construction, engineering, and sustainability, benefiting students and the construction sector.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/mous/21.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">11.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/Westford_Education.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Westford Education Group and Teerthanker Mahaveer University have agreed to the areas of collaboration on academic and research related activities as mentioned in this MoU.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/Westford_Education.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">12.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/Westford_Education.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The purpose of this agreement is to collaborate programs for students at Teerthanker Mahaveer University to simultaneously pursue courses leading to the award of dual MBA degrees by both TMU and UCAM University (Universidad Católica de Murcia), Spain, a partner university of Westford.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/Westford_Education_2.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">13.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/gtt.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The objective of this MOU is to enable students of TMU access to resources that would enhance their employability.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/TMU_Physiotherapy_MOU_0001.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">14.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/whitecanvas.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td><ol style="list-style-type:decimal;text-align:justify;"> <li>To implement the Young CEO program with students to foster Entrepreneurship Culture and enable TMU students to start their venture</li> <li>To  develop, execute Entrepreneurship/Start UP drives and competitions in schools and colleges to attract students for TMU</li> <li>Facilitate and set Up Incubation Centers</li> <li>Execute Government scheme at the Grass Root level on behalf of TMU</li> <li>Provide Mentoring and Training support</li> <li>Develop relation between Corporates and Investors for students of TMU 7- Develop a Mentor and Investor Network for TMU students</li> </ol></td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/white_canvas.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">15.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/icmr.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Laboratory Director of Viral Research and Diagnostic Laboratory, Department Of Microbiology, Jawaharlal Nehru Medical College, Aligarh Muslim University (AMU), Aligarh And Laboratory Director of Molecular Laboratory, Teerthanker Mahaveer Medical College & Research Centre, Moradabad, have agreed for use of Molecular Laboratory, Teerthanker Mahaveer Medical College & Research Centre, Moradabad as a backup laboratory for VRDI, Department of Microbiology, JNMCH, AMU, Aligarh .</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/viral_research_and_diagnostic_laboratory.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">16.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/ostra_jain.jpeg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The main objective of this MOU for the Parties to establish an "Endowment Chair", as a part of vision of Punjab Kesari Jain acharya Vijay Vallabh Surishwarji Maharaj Saheb and on the occasion of 100th Birth Year Celebrations of Parmar Kshatriyaoddharak Jaincharya Shrimad Vijay Indradinn Surishwar Ji Maharaj Saheb, under the name of 'Guru Shree Atam Vallabh Samudra Suri Jain Vidhya Chair with the blessings of Vartman Gacchadhapatiof Vallabh Suri Samuday Shrutbhaskar, Saraswati Upasak and Shrut Gyan Mandir Saraksh Acharya Shrimad Vijay Dharamdhurandar Suri Ji Mahraj Saheb.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/shree_ostra_parshvanath_jain_shwetamber_murtipujak_trust.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">17.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/heartfullnesseducationtrust.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>For Improving the Employability Of General Stream Students And Forming Robust Industry - Academia Linkage Through Apprenticeship / Internship Embedded Degree Programmes.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/heartfullness_education_trust.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">18.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/SRMS.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Samples will refer to Molecular Laboratory of Shri Ram Murti Smarak
                                 Institute of Medical Sciences, Bhojipura Bareilly (UP) for ILC. This Agreement also stands in case of any break down of services (Instrument Break Down etc) for testing of HCV RNA Quantitative or SARS CoV-2 RNA Qualitative for timely release of result.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/molecular_laboratory_srms_barielly.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">19.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/6.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The parties are exploring the possibility of working together in areas of mutual interest and wish to enter into this Memorandum of Understanding ("MOU") to set out the areas of co-operation to take advantage of the strengths of both the organizations. Thus "TMU" and "Jupiter Lifeline Hospitals Limited" have agreed for the collaboration for mutual benefits with focus on the nursing students, faculties and professionals.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/jupiter_lifeline_hospital.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">20.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/7.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>By entering in this MOU, School of Nursing and Allied Health under Jamia Hamdard deemed to be University agrees to set up a frame work to encourage and develop collaboration between Jamia Hamdard Deemed to be University, and TMU in the areas of in the broad areas of Education, Research and other mutual interest in the field of Nursing and Allied Health Sciences.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/jamia_hamdard_deemed_to_be_university.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">21.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/hawk_eye.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>1. Arranging industrial training for students and identify student project work, summer training, final year dissertation etc.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/hawk_eye_forensic_noida.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">22.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/10.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>DNA Labs-A Centre for Applied Sciences (DLCAS), is with two labs situated in Dehradun involved in Diagnostics (Cellular, Molecular, Pathology, Biochemistry, Microbiology, Serology, Immunology etc.), Teaching and Training and in Research oriented Dehradun, Uttarakhand.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/dba_labs_a_center_for_applied_sciences2.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">23.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/aktu_lucknow.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To pool resources of 2 parties for common benefit of the students,faculty,alumni etc. <br> Capacity building of respective faternities as stated in paras related to delievarables here-in-under.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/aktu_lucknow.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">24.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/apple.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To deliver Training Classes and / or Testing Services, as authorised under this Agreement. Training Centre will determine its own prices for delivery of a Training Class and / or an Apple Exam.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/apple_mou.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">25.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/rit.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The purpose of this General Agreement is to develop academic and research cooperation, establish a collaboration program between the two educational institutions, and co-operate in their mutual interest for a range of technical education and research activities.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/rit_mou.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">26.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/urservices.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Will provide trainers to the University for the purpose of imparting lectures and training to BBA and MBA Students.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/ur_services.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">27.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/inurture.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Imparting career ready formal higher education through University-Industry Partnership model.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/i_nurture.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">28.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/GlobalHealth.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To setup training site imparting AHA Certified courses.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/global_health.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">29.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/cadd.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To provide employable skills to the students and make the students aware of the latest tools and techniques in order to keep them industry ready.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/cadd.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">30.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/BSE.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Development of education programmes including the potential for offering joint programs.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/bse.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">31.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/ILFS.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Establishing, managing and operating facilities/skill schools for capacity building and skill development of unskilled and semi-skilled youth in various trades / sector of industry including textile, construction, leather and leather products, automotive and auto components and logistics, general engineering and service sector etc.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/il&fs.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">32.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/apollo.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Apollo Hospitals Education and Research Foundation, Chennai: AHERF and TMU agreed to cooperate in Clinical Research and Collaborative education and support research programs.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/apollo.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">33.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/TMU.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>TOSS and TMU: Thrill Sports Management Pvt. Ltd, Lucknow, UP and TMU agreed to develop a cricket academy cum players development program.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/TOSS.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">34.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/npc.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Promoting Entrepreneurial activities, setting up “Centre of Excellence –Industry 4.0”i.eTMU-NPC-CoE-I4.0 at University to impart the information pertaining to Industry 4.0 , Marketing 4.0, Finance 4.0 ,Enterprise 4.0 ,Starting up own business, counseling& guidance and Entrepreneurship Development Training Programs, to start their new startup/ventures/businesses/industry, etc. Since, ultimately the students today will be either an employer or an employee who may play a vital role in the growth of Indian Economy.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/npc.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">35.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/EPCH logo.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Collaborative Programme in Management (MBA in Export Management).</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/epch.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">36.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/AIC_Logo1_2OBQN4D.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Training and development for Faculty and students.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/atal_incubation_centre.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">37.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/codequotient.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Enhanced the quality of the educational experience of students of the Partner by offering online training and internship.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/codequotient.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">38.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/yids.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Youth Integrated Development Society (YIDS) help in operation and managing the Business Incubation Centre</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/yids.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">39.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/imperial.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Imperial Society of Innovative Engineering and Board of Apprenticeship Training, Kanpur are helping to improve employability of general tream studenta and forming robust industry - academia linkage through Apprenticeship/Internship Embedded Degree Programme.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/imperial.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">40.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/nvidia.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>NVIDIA is helping TMU to establish a 'Centre of Excellence' with ;NVINDIA Jetson AI/DL Embedded Lab' for AI to help engineers,researchers and data scientists, educators to gear up careers in AI and robotics</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/NVIDIA.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">41.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/babasaheb_Ambedkar_Marathawada_University.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Dr. Babasaheb Ambedkar Marathwada University developed the startup and innovation environment among students</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/bamu.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">42.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/tata_Consultancy_Services.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Tata Consultancy Services Pvt Ltd is setting out a general framework of cooperation and networking between the Partners through which, a climate of mutual trust, wellbeing and understanding is established</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/tata_Consultancy_Services.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">43.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/tcsion.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Tata Consultancy Services Pvt Ltd is seting out a general framework of cooperation and networking between the Partners through which, a climate of mutual trust, wellbeing and understanding is established</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/tcsion.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">44.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/fateen_molecules.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Fatten Molecules Pvt. Ltd. is setting out a general framework of cooperation and networking between the Partners through which, a climate of mutual trust, wellbeing and understanding is established</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/fateen_molecules.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">45.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/EDU_Brain_Overseas.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>EDU Brain Overseas Project MGMT. Services is helping TMU to  promote international internship, Abroad Placement and Industrial training programs across the world.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/EDU_Brain_Overseas.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">46.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/innoserv.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>InnoServ will deliver 40 hours program on Digital marketing . The batch size of the Management students will be 50 participants.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/innoserv.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">47.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/Lenskart_logo.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Lenskart provides exposure on Retail Optometry, Customer service and Eyewear products which will help to improve the Dispensing standardards of Indian optometry</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/lenskart.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">48.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/aspiring_mind.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Aspiring Minds Assessment Pvt. Ltd. is working order for availing the pre-employment skills assessment program from Aspiring Minds Assessment pvt. Ltd and TMU.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/aspiring_mind.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">49.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/Bosch.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>BOSCH is helping for Establishment of Industry-Academia Collaboration Center</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/bosch.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">50.</td>
                                        <td class="v-mid">
                                            <img src="-" alt="" class="mou-img">
                                        </td>
                                        <td>VRRSP Technologies Pvt. Ltd. is helping in Placement Generation among students</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/vrrsp.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">51.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/kle.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>KLE College of Pharmacy, Belagavi, Karnataka involved in Student training of Pharmacy. They also participate in collaborative research works.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/kle.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">52.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/health_care.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To set out areas of co-operation to take advantage of the strengths of both organizations.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/health_care.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">53.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/jeevan_jyoti.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Jeevan Jyoti Hospital is associated in Nursing Student training</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/jeevan_jyoti.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">54.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/smur_agro.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Sumur Agro ventures Pvt Ltd has developed Awareness in Agriculture sector among students</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/smur_agro.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">55.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/future_sharp.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Future Sharp Skill Limited provided guidance and consultation to TMU for the introduction of BBA Retail Management, arrange for FSSL faculty/Trainers/Experts from industry to facilitate classroom sessions</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/future.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">56.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/voltrans.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Voltrans Energy Pvt. Ltd. has established channel of communication and cooperation that will promote and advance their respective operations within the institution and its related wings.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/voltrans.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">57.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/lsssdc.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To develop training standards and assessment systems to facilitate the increase of skilled workers in pharmacy sector.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">58.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/skillclout.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Skill Clout, Lajpat Nagar, New Delhi involved in student internships and educational training programs.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/skillclout.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">59.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/ibm.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Imparting career ready formal higher education through University-Industry Partnership model.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/ibm.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">60.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/chetan.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Chetna Vikas Swaraj Trust is involved in Agriculture student training.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/chetan.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">61.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/petronas.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The MoU with PETRONAS is related to academic activities which basically consist of students and faculty exchange programs.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/petronas.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">62.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/monash.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Monash University Australia is providing licensees of the MYDispense online pharmacy simulation tool (Product) developed by Monash to which the term and conditions relate</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/monash.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">63.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/eca.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To embeda study support centre within TMU's campus to deliver London Met Online PG courses with face-to-face support on campus. Students will enrol fully online and receive a London Metropolitan University, UK postgraduate degree (Masters)/ diploma/ certificate upon course completion.</td>
                                        <td class="v-mid">
                                            <a href="https://www.tmu.ac.in/pdf/mous/eca.pdf" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">64.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/IIC.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To undertake, organise and facilitate study courses, conferences, seminars, lectures and research in matters relating to different cultural patterns of the world.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">65.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/istd.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Promote a better and more effective utilization of human resources through education, training and development in all spheres of Govt., agriculture, industry, commerce, education infrastructure, services & such other sectors.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">66.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/iete.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The Institution of Electronics and Telecommunication Engineers (IETE) is India's leading recognised professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT. The IETE is the National Apex Professional body of Electronics and Telecommunication, Computer Science and IT Professionals. The Institution provides leadership in Scientific and Technical areas of direct importance to the national development and economy. Government of India has recognised IETE as a Scientific and Industrial Research Organization (SIRO) and also notified as an educational Institution of national eminence. The objectives of IETE focus on advancing electro-technology. The IETE conducts and sponsors technical meetings, conferences, symposia, and exhibitions all over India, publishes technical journals and provides continuing education as well as career advancement opportunities to its members.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">67.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/ici.jpg')}}" alt="" class="mou-img">
                                        </td>
                                        <td>To promote growth of concrete construction and its sub-specializations.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">68.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/csi.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>The Computer Society of India is a non-profit professional meet to exchange views and information learn and share ideas. The wide spectrum of members is committed to the advancement of theory and practice of Computer Engineering and Technology Systems, Science and Engineering, Information Processing and related Arts and Sciences.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                
                                    <tr>
                                        <td class="text-center">69.</td>
                                        <td class="v-mid">
                                            <img src="{{asset('assets/img/logo/iste.png')}}" alt="" class="mou-img">
                                        </td>
                                        <td>Reputed source for Information Dissemination through publications, seminars, workshops in Technical Education.</td>
                                        <td class="v-mid">
                                            <a href="nan" class="tmu-btn btn-1 px-2 py-1 fs-12">Download</a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <!-- Write content for right side here  -->
                        </div>
                    </div>
                </div>
    </div>
</section>


@endsection