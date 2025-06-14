@extends('layouts.university.colleges.law_with_sidebar')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
<style>
:root {
    --card-bg: linear-gradient(145deg, #ffffff, #f8f9fa);
    --text-color: #2d3436;
    --subtext-color: #636e72;
    --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}
</style>

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container py-5">
        <div class="row justify-content-center">
        <h1 class="tmu-text-primary tmu-page-heading "><span> From the Desk </span><span> of Dean</span></h1>
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                    
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/principal/law/6.png')}}"
                                        alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Prof. (Dr.) Harbansh Dixit</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Dean
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                            Every day, we see lawyers making a significant difference in people's lives. Our community looks up to legal professionals to solve complex issues they face. In the College of Law and Legal Studies, we prepare practice-ready advocates to take on the responsibilities that their prospective clients entrust them.
                                <br>
                                <br>
                                Since the inception of the CLLS, we have continually sought new ways to teach legal education and research. The country has a booming legal market with a lot of potential for future lawyers, as 20% of the world's lawyers are Indian. The breadth of opportunities for future lawyers has never been greater. So, law colleges are facing a sea change in their educational responsibilities. legal education has never been more critical, and CLLS is innovating to address the changes that have evolved over the years.
                                <br>
                                <br>
                                I welcome you to the College of Law and Legal Studies and invite you to explore all aspects of our intellectual life.
                                <br>
                                <br>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="principal-card23 my-5 col-lg-10">
                <div class="section-box p-3">
                    <h2 class="tmu-text-primary mb-2 text-center"><span>Profile</span></h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Name</td>
                                    <td>:</td>
                                    <td>Prof. (Dr.) Harbansh Dixit</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Designation</td>
                                    <td>:</td>
                                    <td>Dean</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Office Address</td>
                                    <td>:</td>
                                    <td>College of Law and Legal Studies, Teerthanker Mahaveer University, Delhi Road, Moradabad – 244001 (U.P.)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Date of Birth</td>
                                    <td>:</td>
                                    <td>01-05-1957</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Academic Qualification</td>
                                    <td>:</td>
                                    <td>Ph.D. in Law</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="tmu-text-primary mb-2 mt-2"><span>Details of the previous </span><span> appointments / teaching experience:</span></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th>Institution</th>
                                    <th>Designation</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Total Exp.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>U.P. Higher Education Services Commission, Allahabad</td>
                                    <td>Member</td>
                                    <td>2018</td>
                                    <td>2022</td>
                                    <td>4 Yrs.</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>K.G.K.Post Graduate College</td>
                                    <td>Principal</td>
                                    <td>2016</td>
                                    <td>2018</td>
                                    <td>2 Yrs.</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>M.H.Post Graduate College</td>
                                    <td>Principal</td>
                                    <td>2009</td>
                                    <td>2016</td>
                                    <td>7 yrs.</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>K.G.K. Post Graduate College</td>
                                    <td>Head of Law Department including Assistant Professor and Associate Professor</td>
                                    <td>1994</td>
                                    <td>2008</td>
                                    <td>14 Yrs.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="section-box p-3 mt-2">
                    <h3 class="tmu-text-primary mb-1"><span>Achievements</span><span></span></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>Honorary Advisor to Governor's Secretariate, Guwahati, Assam</li>
                                <li>Worked as Judicial Magistrate First Class (Member, Juvenile Justice Board, Moradabad) for over 5 years, i.e. from Feb.2005 &ndash;October 2010.</li>
                                <li>More than 450 articles published in National News Papers with a readership of over one crore or more people on different matters related with Constitution and other laws.</li>
                            </ul>
                            <span class="highlight">More than 550 lectures were delivered as Guest Faculty Member in</span>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li> Banaras Hindu University .</li>
                                <li> Dr. Ram Manohar Lohia National Law University, Lucknow .</li>
                                <li> Dr. Bhimrao Ambedkar Police Academy, Moradabad.</li>
                                <li> Police Training College, Moradabad.</li>
                                <li> Bareilly, College, Bareilly .</li>
                                <li> B.S.A.College, Mathura</li>
                                <li> Meerut College, Meerut</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <span class="highlight ps-3">Books</span>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li> Press Vidhi Evam Abhivyakti Swatantrya (Hindi ), ISBN: 81-8143-507-9</li>
                                <li> Dispute Resolution System in India and Public Confidence&rdquo; ISBN:978-93-80753-37-9</li>
                                <li> Implementation of Civil Rights Act 1955, ISBN:978-93-80753-38-6</li>
                                <li> Written/edited reading material for LL.M. students on Constitutional Law for Madhya Pradesh &nbsp;&nbsp; Bhoj Open University, Bhopal.</li>
                                <li>Myth and Reality of Basic Features of Indian Constitution (Publication under consideration).</li>
                            </ul>      
                        </div>
                    </div>
                </div>
                <div class="section-box p-3 mt-2">
                <div class="row">
                        <div class="col-md-6">
                            <span class="highlight">Research Projects</span>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>Implementation of Protection of Civil Rights Act 1955 and Scheduled Caste & Scheduled Tribes (Prevention of Atrocities) Act 1989 (in 8 specified districts of Uttar Pradesh) - Minor Project funded by U.G.C.</li>
                                <li>“Press Vidhi Tatha Abhivyakti Swatantrata” (Hindi) - Funded by Makhanlal Chaturvedi Patrakarita Evam Jansanchar Vishwavidyalaya, completed in 2006.</li>
                                <li>Implementation of Civil Rights Act 1955 and Scheduled Caste & Scheduled Tribes (Prevention of Atrocities) Act 1989 in 8 specified districts of Uttar Pradesh and Uttaranchal - Funded by the Ministry of Social Justice and Empowerment, Government of India.</li>
                                <li>“Dispute Resolution System in India and Public Confidence” - Funded by U.G.C., completed in 2003.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        <span class="highlight ps-3">Extension Programmes</span> 
                        <p class="text-center"><b>Literacy Programmes</b></p>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>Active participation in the Total Literacy Campaign as Founding Executive Member of Zila Saksharata Samiti Service (1992).</li>
                                <li>Organized 11 seminars, 20 debates, and three cycle rallies to create awareness about the protection of the environment during 1992-93 as Coordinator of District Environment Awareness and Implementation Committee.</li>
                            </ul>
                            <p class="text-center"><b>Legal Awareness</b></p>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>39 lectures at N.S.S. Camps from 1986-till date.</li>
                                <li>Worked as member of District Legal Committee (From 1998-2003)</li>
                                <li>Member of Peace Committee, Moradabad Administration.</li>
                                <li>Member, Juvenile Monitoring Cell, Moradabad.</li>
                                <li>29 Radio talks creating awareness about Laws relating to common people.</li>
                            </ul>      
                        </div>
                        <div class="col-md-6">
                            <span class="highlight">Contribution as an Expert of Selection Bodies</span>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>Uttar Pradesh</li>
                                <li>Madhya Pradesh</li>
                                <li>Chhattisgarh</li>
                                <li>Bihar and Uttarakhand</li>
                            </ul>       
                        </div>
                        <div class="col-md-6">
                            <span class="highlight">Assisted Selection Committees of universities like</span>
                            <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                <li>Ch. Charan Singh University, Meerut.</li>
                                <li>Dr. Bhim Rao Ambedkar University Agra</li>
                                <li>Lucknow University Lucknow</li>
                                <li>I.F.T.M.University Moradabad</li>
                                <li>Teerthanker Mahaveer University, Moradabad</li>
                            </ul> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection