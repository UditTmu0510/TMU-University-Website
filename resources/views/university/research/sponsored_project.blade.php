@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')



<div class="main-content">
	<div class="container">
		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Sponsored </span><span> Projects</span></h1>
			<div class="container mb-5 mt-2">
				<hr class="horizontal-line">
				<button class="careers-accordion">Government Funded Projects<span
						class="icon">+</span></button>
				<div class="panel active">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">Sl. No.</th>
								<th>Name of the Project / Clinical Trial / Endowment / Chairs</th>
								<th>Name of the Principal Investigator / Co-Investigator</th>
								<th>Name of the Funding Agency</th>
								<th>Year of Award</th>
								<th>Amount Sanctioned (INR in Lakhs)</th>
								<th>View PDF</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>DST/TDT/DDP/2021/138</td>
								<td>Dr. Diptonil Banerjee (Co-PI with PI from IIT-Delhi)</td>
								<td class="text-center">DST</td>
								<td class="text-center">2021</td>
								<td class="text-center">19.61</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>ICMR - MD/MS/DM/MCh funds</td>
								<td>Dr. Jyoti Khatri</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.50</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>ICMR - MD/MS/DM/MCh funds</td>
								<td>Dr. Aijaz Ahmad Ganai, Dr. N Huda</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.50</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>4</td>
								<td>ICMR-Short Term Studentship 2020</td>
								<td>Neelesh, Dr. S K Gupta, Dr. Prithpal S Matreja</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.20</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/4.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>5</td>
								<td>ICMR - MD/MS/DM/MCh funds</td>
								<td>Dr. HusnaShamim, Dr. AlokSinghal</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2018</td>
								<td class="text-center">0.50</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/5.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>6</td>
								<td>ICMR - MD/MS/DM/MCh funds</td>
								<td>Dr. SanchitPeriwal. Dr, G Ramakrishnan, Dr. Ashutosh Kumar</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2018</td>
								<td class="text-center">0.50</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/6.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>7</td>
								<td>SBSS/794/16-17</td>
								<td>Prof. Dr R.K. Dwivedi</td>
								<td class="text-center">SERB</td>
								<td class="text-center">2017</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/7.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>8</td>
								<td>ICMR-Short Term Studentship 2017</td>
								<td>Shailee Shail, Dr. Mazher Maqusood, Dr. Prithpal Singh Matreja</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2017</td>
								<td class="text-center">0.20</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/8.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>9</td>
								<td>ICMR-Short Term Studentship 2017</td>
								<td>Ruchir Taneja, Dr. Ashutosh Kumar, Dr. Debranjan Datta</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2017</td>
								<td class="text-center">0.20</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/9.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td>10</td>
								<td>ICMR-Short Term Studentship 2017</td>
								<td>Shubhangini Soni, Dr. Utkarsh Sharma, Dr. Priyanka Kumawat</td>
								<td class="text-center">ICMR</td>
								<td class="text-center">2017</td>
								<td class="text-center">0.20</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/gov_project/10.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Add the horizontal line here -->
				<hr class="horizontal-line">

				<button class="careers-accordion">Non Government Funded Project<span class="icon">+</span></button>
				<div class="panel">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width:2%;text-align:center">#</th>
								<th>Name of the Project / Clinical Trial / Endowment / Chairs</th>
								<th>Name of the Principal Investigator / Co-Investigator</th>
								<th>Name of the Funding Agency</th>
								<th>Year of Award</th>
								<th>Amount Sanctioned (INR in Lakhs)</th>
								<th>View PDF</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center" sdval="1">1</td>
								<td>A comparative study to analyse the changes in central mascular thickness
									in diabetes with different stages of Diabetic Retinopathy</td>
								<td>Dr. Ashish Chander, Dr. Aishwarya Tyagi</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="2">2</td>
								<td>A comparative study of the impact of client centred structured
									contraceptive counselling versus conventional counselling techniques
									among postpartum and postabortal females</td>
								<td>Dr. Rehana Najam, Dr. Jyoti Khatri</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="3">3</td>
								<td>Evaluation of posterior pharyngeal airway spaces in skeletal class I,
									class II, class III facial profile.</td>
								<td>Dr. Arun K. V. and Syeed Vikharuddin</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="4">4</td>
								<td>Comparison between the efficacy of the physics forceps VS the
									conventional forceps in dental extraction- a prospective study.</td>
								<td>Dr. Arun K. V. and Snigdha Singh</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="5">5</td>
								<td>To evaulate the efficacy of submucosal VS intravenous dexamethasone
									injection in the management of post-op sequele after impacted mandibular
									third molar extraction.</td>
								<td>Dr. D. S. Gupta and Sooraj S Pillai</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="6">6</td>
								<td>Evaluation of efficacy of ketoprofen VS diclofenac transdermal patch in
									patients undergoing therapeutic orthodontic extraction- a randomised
									prospective split mouth study.</td>
								<td>Dr. D. S. Gupta and Flora Kalita</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="7">7</td>
								<td>To evaulate the efficacy of conventional arch bar versus hybrid arch bar
									in facial fractures.</td>
								<td>Dr. Nimish Agarwal and Subhajit Mitra</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="8">8</td>
								<td>Regional influence on facial profile esthetics &ndash; a comparative
									study</td>
								<td>Dr. Manish Goyal and Haripriya Nongthonbam</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="9">9</td>
								<td>Impact of labial and nasal properties on facial attractiveness;
									perception of lay person</td>
								<td>Dr. Manish Goyal and ParulPriya</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="10">10</td>
								<td>Evaluation of serum Zinc and copper micronutrients levels in chronic
									periodontitis patients before and after Phase I therapy.</td>
								<td>Dr. Gauri Bhatia and Keerti Rawat</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="11">11</td>
								<td>The effect of heat and sonic vibration on the retention of flowable
									composite resin as pit and fissure sealant - A split mouth randomised
									clinical trial.</td>
								<td>Dr. Ramakrishna Yeluri and Sweety Singh</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="12">12</td>
								<td>Comparartive evaluation of effectiveness of probiotics, sesame oil and
									green teaherbal mouthwashes with chlorhexidine mouthwash on plaque and
									salivary pH in child patients.</td>
								<td>Dr. Anshu Sharma, Dr. Rachana Bahuguna and Ayushi Agarwal</td>
								<td>Shree Jee Biotech</td>
								<td class="text-center">2021</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-3.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="13">13</td>
								<td>Assesment of Platelet Indices as a biomarker for diagnosing Neonatal
									Sepsis</td>
								<td>Dr. Baljeet Maini, Dr. Brij Bhushan</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="14">14</td>
								<td>A study of various clinical presentation and outcomes in patients of
									chest injury attending TMMCRC</td>
								<td>Dr. Vipin Kumar, Dr. Shah Ojas Mahesh</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="15">15</td>
								<td>Study on the drug utilization and pharmacoeconomic analysis of common
									ailments in medicine indoor wards of a tertiary care teaching hospital
									in western Uttar Pradesh.</td>
								<td>P. Gopika, M. Sreelakshmi, Mrs. Sartia Jangra Bhyan, Dr. V.K. Singh</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="16">16</td>
								<td>Assessment of patients knowledge, Attitude and practise regarding
									TUBERCULOSIS in a tertiary care hospital</td>
								<td>Rashi Chauhan, Mukul Vishnoi, Dr. Sanjay Sharma, Dr. Mazher Maqusood
								</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="17">17</td>
								<td>Evaluation and Assessment of healthcare Professionals' Pharmacovigilance
									skills at various AMCs Vs. NON- AMCs</td>
								<td>Richa Chaudhary, Aditya Narayan Gupta, Dr. Sanjay Sharma, Dr. Prithpal
									S. Matreja</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="18">18</td>
								<td>An observational study on etiological and epidemiological profile of
									chronic liver disease in tertiary care hospital teerthankerMahaveer
									Hospital Moradabad (U.P)</td>
								<td>Mohd Amir Suhail, Mustafa Ali, Mr. Ashish Kumar Verma, Dr. Amit Mishra
								</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="19">19</td>
								<td>Assessment of qualtiy of life (QoL) of type-2 diabetes mellitus patients
									in north indian tertiary Care teaching hospital</td>
								<td>Arun Kumar, Sheetal Singh Tomer, Dharmendra Singh Yadav, Haider Imran,
									Dr. Aditya Parashar, Dr. V.K. Singh</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="20">20</td>
								<td>The effects of NEFOPAM HYDROCHLORIDE and TARAMADOL HYDROCHLORIDE on
									Postoperative Pain in patients undergoing long bone fracture fixations
								</td>
								<td>Dr. Ravi Dholaria, Dr. Ajay Pant, Dr. Najmul Huda</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="21">21</td>
								<td>Assesment of Platelet Indices as a biomarker for diagnosing Neonatal
									Sepsis</td>
								<td>Dr. Baljeet Maini, Dr. Brij Bhushan</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="22">22</td>
								<td>A study of various clinical presentation and outcomes in patients of
									chest injury attending TMMCRC</td>
								<td>Dr. Vipin Kumar, Dr. Shah Ojas Mahesh</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="23">23</td>
								<td>Study on the drug utilization and pharmacoeconomic analysis of common
									ailments in medicine indoor wards of a tertiary care teaching hospital
									in western Uttar Pradesh.</td>
								<td>P. Gopika, M. Sreelakshmi, Mrs. Sartia Jangra Bhyan, Dr. V.K. Singh</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="24">24</td>
								<td>Assessment of patients knowledge, Attitude and practise regarding
									TUBERCULOSIS in a tertiary care hospital</td>
								<td>Rashi Chauhan, Mukul Vishnoi, Dr. Sanjay Sharma, Dr. Mazher Maqusood
								</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="25">25</td>
								<td>Evaluation and Assessment of healthcare Professionals' Pharmacovigilance
									skills at various AMCs Vs. NON- AMCs</td>
								<td>Richa Chaudhary, Aditya Narayan Gupta, Dr. Sanjay Sharma, Dr. Prithpal
									S. Matreja</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="26">26</td>
								<td>An observational study on etiological and epidemiological profile of
									chronic liver disease in tertiary care hospital teerthankerMahaveer
									Hospital Moradabad (U.P)</td>
								<td>Mohd Amir Suhail, Mustafa Ali, Mr. Ashish Kumar Verma, Dr. Amit Mishra
								</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="27">27</td>
								<td>Assessment of qualtiy of life (QoL) of type-2 diabetes mellitus patients
									in north indian tertiary Care teaching hospital</td>
								<td>Arun Kumar, Sheetal Singh Tomer, Dharmendra Singh Yadav, Haider Imran,
									Dr. Aditya Parashar, Dr. V.K. Singh</td>
								<td>Goodman Gilman's Life Sciences Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.5</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-1.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="28">28</td>
								<td>The effects of NEFOPAM HYDROCHLORIDE and TARAMADOL HYDROCHLORIDE on
									Postoperative Pain in patients undergoing long bone fracture fixations
								</td>
								<td>Dr. Ravi Dholaria, Dr. Ajay Pant, Dr. Najmul Huda</td>
								<td>Vircare Pharma Pvt. Ltd.</td>
								<td class="text-center">2020</td>
								<td class="text-center">0.75</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/MEDICAL_0001-2.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="29">29</td>
								<td>Short Term Research Project</td>
								<td>Dr. Mazher Maqusood, Dr. Rohin Garg, Dr. Prithpal Singh Matreja</td>
								<td>TB Association of India</td>
								<td class="text-center">2019</td>
								<td class="text-center" sdval="0.25">0.25</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/8.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="30">30</td>
								<td>Short Term Research Project</td>
								<td>Dr. Rohin Garg, Dr. Prithpal Singh Matreja, Dr. Mazher Maqusood</td>
								<td>TB Association of India</td>
								<td class="text-center">2019</td>
								<td class="text-center">0.3</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/9.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
							<tr>
								<td class="text-center" sdval="31">31</td>
								<td>Short Term Research Project</td>
								<td>Dr. Prithpal S Matreja, Dr. Mazher Maqusood, Dr. Rohin Garg</td>
								<td>TB Association of India</td>
								<td class="text-center">2019</td>
								<td class="text-center">0.4</td>
								<td><a href="{{asset('/assets/pdf/sponsored_project/non_gov_project/10.pdf')}}"
										target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr class="horizontal-line">
			</div>
		</div>
	</div>
</div>
</div>


@endsection