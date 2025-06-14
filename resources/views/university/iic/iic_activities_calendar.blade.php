@extends('layouts.university.departments.iic_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/custom-accordian.css')}}">


<div class="main-content">
    <div class="container">
        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> IIC Activities </span>
                <span>Calendar</span>
            </h1>
            <div class="container">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">IIC Calendar Activities for Academic Year 2022-23</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('assets/pdf/iic_calendars/iic_activity_calendar_2022-23.pdf')}}">View PDF</a>
                        </div>
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">IIC Calendar Activities for Academic Year 2021-22</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                href="{{asset('assets/pdf/iic_calendars/iic_activity_calendar_2021-22.pdf')}}">View PDF</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <section id="info-utile" class="bg-white py-4">
                        <div class="container">
                            <hr class="horizontal-line">
                            <button class="careers-accordion ps-2"> 2020 <span class="icon">+</span></button>
                            <div class="panel active">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th>Date</th>
                                                <th>Name of Event</th>
                                                <th>Resource Person</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>December 28-30, 2020</td>
                                                <td>3 Days EAC</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Mr. Mahendra Kumar Gupta</li>
                                                        <li>Mr. Vikash Yadav</li>
                                                        <li>Mr Ajay Sethhi</li>
                                                        <li>Mr. Nitin Sagar</li>
                                                        <li>Ms Neha Anand</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>December 26, 2020</td>
                                                <td>My Story - Motivational Session by Successful Innovators
                                                </td>
                                                <td>Mr. Vaibhav Sharma, Head of Operations, Energy
                                                    Intelligence</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>December 23, 2020</td>
                                                <td>Entrepreneurial Development into the field of IoT and
                                                    Cloud Computing</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Mr. Manjeet Rawat</li>
                                                        <li>Dileep Tiwari</li>
                                                        <li>Naveen Toshniwal</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>December 31, 2020</td>
                                                <td>Call for paper writing and Research Report on Innovation
                                                </td>
                                                <td>Dr. Diptonil Banerjee, Assistant Professor, Department
                                                    of Physics, TMU</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>December 22, 2020</td>
                                                <td>Orientation Session on National Innovation and Startup
                                                    Policy (NISP)</td>
                                                <td>Dr. Pankaj Goswami</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>December 02, 2020</td>
                                                <td>Workshop on "Entrepreneurship and Innovation as Career
                                                    Opportunity"</td>
                                                <td>Dr. Vaishali Dhingra </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>September 11, 2020</td>
                                                <td>Purposes, Challenges &amp; Implications of NEP 2020: One
                                                    Week SYMPOSIUM (Webinar Series)</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Prof. R. S. Grewal, Former Vice Chancellor,
                                                            Chitkara University</li>
                                                        <li>Dr. Sanjeev Pandey, Regional Director, IGNOU New
                                                            Delhi</li>
                                                        <li>Prof. N.K. Dhooper, Prof. Emeritus &amp;
                                                            Advisor, IMT-Centre for Distance Learning,
                                                            Ghaziabad</li>
                                                        <li>Prof. S. K. Yadav, Teacher Education Expert,
                                                            Former Head- Department of Teacher Education,
                                                            NCERT, New Delhi</li>
                                                        <li>Prof. S. S. Bhakar, Director, Prestige Institute
                                                            of Management &amp; Research, Gwalior</li>
                                                        <li>Prof. Ram Chandra, Former Vice Chancellor, Monad
                                                            University</li>
                                                        <li>Prof. Nasrin, Chair Person, Department of
                                                            Education, Aligarh Muslim University</li>
                                                        <li>Prof. Supriya Agarwal, Dean, Social Sciences
                                                            &amp; Languages, Central University of Rajasthan
                                                        </li>
                                                        <li>Prof. Harsh Dwivedi, Director, Poddar Institute
                                                            of Management, University of Rajasthan</li>
                                                        <li>Prof. Vinod Kumar Jain, Dean FoE &amp; Dean
                                                            Academics, Mody University, Lakshmangarh</li>
                                                        <li>Dr. Ramesh R. Lakhe, Director, Shreyas Quality
                                                            Management System Nagpur, QCI, Govt. of India
                                                            Approved Sr. Consultant</li>
                                                        <li>Prof. Karunesh Saxena, Former Director, FMS, MLS
                                                            University, Udaipur</li>
                                                        <li>Prof. Shakti Kumar, Director, PIET Panipat,
                                                            Former Vice Chancellor, Baddi University</li>
                                                        <li>Prof. Manohar Lal, Former Professor and
                                                            Director, SOCIS, IGNOU, New Delhi</li>
                                                        <li>Prof. (Dr.) Manoj Kumar, Dean, Faculty of
                                                            Management Studies, Maharshi Dayanand Saraswati
                                                            University, Ajmer, Rajasthan</li>
                                                        <li>Prof. (Dr) Vandana Suhag, Dean Education
                                                            Quality, Munjal University, Haryana</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>October 06, 2020</td>
                                                <td>Boot Camp 1.0 </td>
                                                <td>Dr. Rashmi Jain</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>October 15-23, 2020</td>
                                                <td>KAPILA: Kalam Program for IP Literacy and Awareness</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Shri Ramesh Pokhriyal 'Nishank', Hon'ble
                                                            Education, Minister, MoE</li>
                                                        <li>Dr. Abhay Jere, Chief Innovation, Officer, MIC
                                                        </li>
                                                        <li>Dr. Mohit Gambhir, Director, MIC</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>November 03, 2020</td>
                                                <td>IKS Orientation Session</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Prof. Anil Sahasrabudhe, Chairman, AICTE</li>
                                                        <li>Shri A B Shukla COO, IKS, AICTE</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td>July 11, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Shri Shashi Shekhar , CEO Prasar Bharati</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td>June 20, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Mr. Shridhar Venkat, CEO</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td>June 13. 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Shri R. Subrahmanyam, Secretary</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td>June 08-09, 2020</td>
                                                <td>Two days Webinar on "Industrial Attributes &amp; Role of
                                                    IoT during COVID 19"</td>
                                                <td>Soft Pro India Computer Tech. Pvt. Ltd.</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td>June 06, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Ashwini Deshpande Founder Elephant Design</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16</td>
                                                <td>June 06, 2020</td>
                                                <td>Webinar</td>
                                                <td>Smart Energy Solutions to Boost Power Sector Economy
                                                    during Pandemic</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td>May 30, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Dr. Nilesh N Oak, Expert, Indian Civilization &amp;
                                                    History</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18</td>
                                                <td>May 23, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Shri Mahesh Babu, CEO, Mahindra Electric Mobility Ltd
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">19</td>
                                                <td>May 22, 2020</td>
                                                <td>Session 17: Interaction with Student Innovators and
                                                    Entrepreneurs Emerged from Smart India Hackathon (SIH)
                                                </td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Pulkit Jain, Team Vidyut</li>
                                                        <li>Lokesh Goswami, Team Slick</li>
                                                        <li>Arpit Nandi, Team Quarks &amp; Leptons</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20</td>
                                                <td>May 21, 2020</td>
                                                <td>Session 16: Frugal Innovations and Social
                                                    Entrepreneurship</td>
                                                <td>Dr. Raman Gujaral, EDII, Ahmedabad</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21</td>
                                                <td>May 20, 2020</td>
                                                <td>Session 15: Use of Market Data and Application of
                                                    Marketing Research Tools and Methodology - Increasing
                                                    Chances of Survivality of Innovation and Venture -
                                                    Advance Level</td>
                                                <td>Dr. Preet Deep Singh, AVP Invest India</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22</td>
                                                <td>May 19, 2020</td>
                                                <td>Session 14: Idea, Entrepreneurship Opportunities,
                                                    Business Model and Business Plan</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Dr. S. R. Acharya, EDII, Ahmedabad</li>
                                                        <li>Dr. Amit Dewedi, EDII, Ahmedabad</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23</td>
                                                <td>May 15, 2020</td>
                                                <td>Session 13: Innovation Risk DiagnosticsProduct
                                                    Innovation Rubric(PIR)</td>
                                                <td>Dr. Lakshami Meera Program Director, Forge Incubator
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24</td>
                                                <td>May 14, 2020</td>
                                                <td>Session 12: Understanding Role and Application of
                                                    Marketing Research at Idea to Start up Stage -
                                                    Foundation Level</td>
                                                <td>Dr. Preet Deep Singh, AVP Invest India</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">25</td>
                                                <td>May 13, 2020</td>
                                                <td>Session 11: Innovating Self- Screen and Identify right
                                                    opportunities</td>
                                                <td>Prof. Sanjay Inamdar, Chairman, AICTE Startup Policy
                                                    Implementation Committee</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">26</td>
                                                <td>May 12, 2020</td>
                                                <td>Session 10: Legal and Ethical Steps - Productive
                                                    Entrepreneurship and Startup</td>
                                                <td>Mr. Harit Mohan, Founder &amp; CEO, Signicent LLP
                                                    (India) &amp; Signicent LLP (USA)</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">27</td>
                                                <td>May 09, 2020</td>
                                                <td>Leadership Talk Examination &amp; Academics in Current
                                                    Covid 19 Crisis</td>
                                                <td>Prof. D. P. Singh, Chairman@ugc_india</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">28</td>
                                                <td>May 08, 2020</td>
                                                <td>Session 9: Understanding Angel and Venture Capital
                                                    Funding - What is there for Early Stage innovator &amp;
                                                    Entrepreneurs</td>
                                                <td>Mr. Sushanto Mitra, CEO, Lead Angels Pvt. Ltd</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">29</td>
                                                <td>May 07, 2020</td>
                                                <td>Session 8: Intellectual Property (IP) Management at
                                                    Early Stage of Innovation and Start-ups</td>
                                                <td>Dr Sanjeeva Kumar Majumdar, Manager-IPR, Start-Up &amp;
                                                    Incubation, National Research Development Corporation,
                                                    New Delhi</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">30</td>
                                                <td>May 06, 2020</td>
                                                <td>Session 7: How to Ideintify Right Problem and Solution
                                                    using the Double Diamond Approach in Design</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Prajakta Kulkarni, Founder &amp; Director, Nodes
                                                            Pvt. Ltd, Pune</li>
                                                        <li>Sanket Inamdar, Co-founder &amp; CEO</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">31</td>
                                                <td>May 05, 2020</td>
                                                <td>Session 6: Entrepreneurship, Business Idea and Business
                                                    Model Canavas</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Dr. Sunil Shukla, Director general, EDII,
                                                            Ahmedabad</li>
                                                        <li>Dr. Amit Dwivedi, Associate senior faculty
                                                            EDII,Ahmedabad</li>
                                                        <li>Mr. Mayank Patel, CEO, Cradle, Incubator, EDII,
                                                            Ahmedabad</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">32</td>
                                                <td>May 04, 2020</td>
                                                <td>Session 5: Hangout with Successful Startup Founder</td>
                                                <td>Dr. Pankaj Parashar, CEO/Founder, Cutting Edge Medical
                                                    Devices Pvt. Ltd., Indore</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">33</td>
                                                <td>May 02, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Dr. Madhuri Kanitkar, Lieutenant General</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">34</td>
                                                <td>May 01, 2020</td>
                                                <td>Session 4: Role of Network Enablers in driving I&amp;E
                                                    in HEIs - A Case of TiE, India</td>
                                                <td>Ms. Geetika Dayal, Executive Director TiE, Delhi-NCR
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">35</td>
                                                <td>April 30, 2020</td>
                                                <td>Session 3: Hangout with Emerging Innovator &amp;
                                                    Entrepreneurs Supported through MIC &amp; AICTE</td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Ms. Vandana Thakur, Female Innovator cum
                                                            Entrepreneur, Canada India Acceleration Program
                                                            2020, L M College of Pharmacy, Ahmedabad</li>
                                                        <li>Mr. Amit Sanjay Lokhende Innovator Cum
                                                            Entrepeneur, India-South Korea Startup Exchange
                                                            Program 2020 Institute of Chemical Technology,
                                                            Mumbai</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">36</td>
                                                <td>April 28, 2020</td>
                                                <td>Session 1: National Innovation and Startup Policy for
                                                    Students and Faculty 2019 - A Guiding Framework for HEIs
                                                    for Implementation</td>
                                                <td>Dipan Sahu, Asst. Innovation Director at the Ministry of
                                                    Education's Innovation Cell, &amp; AICTE</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">37</td>
                                                <td>April 28, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Ms. Anu Acharya, Serial Entrepreneur and winner of Young
                                                    Entrepreneur Award by World Economic Forum</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">38</td>
                                                <td>April 27, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Dr. BVR Mohan Reddy, Chairman Cyient, Chairman
                                                    IIT-Hyderabad &amp; Ex-Chairman NASSCOM</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">39</td>
                                                <td>April 23, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Mr. Gautam Bambawale, Ex-India's Ambassador to China
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">40</td>
                                                <td>April 22, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Padma Shri Vaidya Rajesh Kotecha, Secretary Ministry of
                                                    Ayush</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">41</td>
                                                <td>April 22, 2020</td>
                                                <td>Session 2: Role and Importance of Pre-Incubators,
                                                    Incubators and Accelerators in HEIs - Harnesing
                                                    Innovation and Entrepreneurial Potential of Students and
                                                    Faculties at Early Stage</td>
                                                <td>Mr. Muthu Singaram, CEO, IIT Madras HTIC Incubator,
                                                    Founder, VibaZone</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">42</td>
                                                <td>April 21, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Dr. Gururaj 'Desh' Deshpande, Founder, Deshpande
                                                    Foundation</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">43</td>
                                                <td>April 20, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Yashraj Bhradwaj, Youngest Researcher / Entrepreneur
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">44</td>
                                                <td>April 18, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Prof. K. K. Aggarwal, Chairman, National Board of
                                                    Accreditation</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">45</td>
                                                <td>April 17, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Mr. Ronnie Screwvala</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">46</td>
                                                <td>April 16, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Dr. Vinay Sahasrabudhe, President, ICCR</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">47</td>
                                                <td>April 15, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Sharma Shradha, Founder &amp; CEO, YourStoryCo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">48</td>
                                                <td>April 14, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Anand Deshpande, Chairman Persistent Systems</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">49</td>
                                                <td>April 13, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Padma Bhushan Dr. VK Saraswat, Member NITI Aayog &amp;
                                                    Ex-Chief Scientific Adviser, Defense Ministry</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">50</td>
                                                <td>April 11, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Mr. Abhishek Singh CEO MyGov</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">51</td>
                                                <td>April 10, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Hon’ble Vice Chairman of AICTE, Prof. M.P. Poonia</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">52</td>
                                                <td>April 10, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Prof. Partha Chakraborty, Chairman, National Digital
                                                    Library</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">53</td>
                                                <td>April 09, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Prof. Anil D. Sahasrabudhe, Chairman, AICTE</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">54</td>
                                                <td>April 08, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Prof. K Vijay Raghavan, Principal Scientific Adviser,
                                                    Government of India</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">55</td>
                                                <td>April 07, 2020</td>
                                                <td>Leadership Talk</td>
                                                <td>Mr. Abhishek Suryavanshi, Director Wikipedia.....</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">56</td>
                                                <td>February 28, 2020</td>
                                                <td>National Science Day-2020</td>
                                                <td>Director, Faculty and Students</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">57</td>
                                                <td>January 30, 2020</td>
                                                <td>Internal Hack A Thon</td>
                                                <td>Director, Heads, CoDs faculties</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr class="horizontal-line">
                            <button class="careers-accordion ps-2">2019 <span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th style="text-align:center;width:20%">Date</th>
                                                <th style="text-align:center;">Name of Event</th>
                                                <th style="text-align:center;width:40%">Resource Person</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>December 02-03, 2019</td>
                                                <td>Two Days workshop on Design &amp; Installation of Solar
                                                    Photovoltaic System </td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Mr. Ashutosh Sharma, Project Head, AMPERES ENERY
                                                            SOLUTION Gr. Noida</li>
                                                        <li>Ms. Akanksha Morya, Manager Procurement, AMPERES
                                                            ENERY SOLUTION Gr. Noida</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>October 25, 2019</td>
                                                <td>IIC Rating</td>
                                                <td>MIC official</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>October 23, 2019</td>
                                                <td>Guest Lecture on "Big Bang and the Expanding Universe".</td>
                                                <td>Dr. Punit Kumar, Associate Prof., University of Lucknow</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>November 19, 2019</td>
                                                <td>Session on automobile engineering and IC engine</td>
                                                <td>Director, Heads, CoDs faculties.</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>October 19, 2019</td>
                                                <td>one-days’ Workshop on Intellectual Property Rights (IPR)
                                                </td>
                                                <td>
                                                    <ul class="ps-4 m-ol-list">
                                                        <li>Ms. Pooja Kumar Director &amp; CEO of Innove
                                                            Intellects / Patent Agent</li>
                                                        <li>Dr. Sakshi Gupta, Academics Training Head &amp;
                                                            Registered Patent Agent</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>October 15, 2019</td>
                                                <td>Poster &amp; Slogan Making Competition</td>
                                                <td>Director, Heads, CoDs faculties.</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>August 22, 2019</td>
                                                <td>Innovation for resurgent India First Leadership Talk Series
                                                    (IFLTS), MHRD Innovation Cell</td>
                                                <td>Dr. Ramesh Pokhrial, Hon'ble Minister of HRD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection