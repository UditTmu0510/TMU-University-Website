@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')





<div class="main-content">
    <div class="container">
        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Seed Money provided by the</span><span>
                    Institution to its Faculty</span></h1>
            <div class="row ps-4">

                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">View Approval Letter</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/seed_money.pdf')}}">View PDF</a>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-1"
            href="{{asset('/assets/pdf/policy/TMU_SeedMoney_Second_Amendment.pdf')}}" target="_blank">View
            Amendement PDF</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Project Name</th>
                                    <th>Project Duration</th>
                                    <th>Teacher (s) Name</th>
                                    <th>Amount (INR in Lakhs)</th>
                                    <th>Year of Receiving</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Evaluation of bio-agents and biofertilizers for enhancing crop
                                        productivity under organic/integrated farming</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Ashutosh Awasthi/<br />Dr. Devendra Pal Singh</td>
                                    <td>1.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Study of DNA Recognition, using
                                        Oligonucleotide-Benzimidazole/Benzothiazole Conjugate and Its
                                        Biological aspects</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Souvik Sur</td>
                                    <td>2.7</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Plant Growth and Disease Combat Promoting Potential of Endophytes
                                        Isolated from Aquatic/Wetland Medicinal Plants</td>
                                    <td>2 Year&nbsp;</td>
                                    <td>Dr. Harveer Singh Cheema/<br />Dr. Ashutosh Awasthi/<br />Dr. M.P.
                                        Singh</td>
                                    <td>2.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Health Monitoring and Disease Identification System for Pulses</td>
                                    <td>&nbsp;2 Year&nbsp;</td>
                                    <td>Dr. Rakesh Kumar Dwivedi/<br />Mr. Ashish Bishnoi/<br />Mr. Rajendra
                                        Prasad Pandey/<br />Mrs. Neeraj Kumari</td>
                                    <td>2.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Navigation Aid for Visually Challenged</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Vinay Kumar Mishra</td>
                                    <td>0.8</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Method for Using Municipal Solid Waste in Construction</td>
                                    <td>1Year&nbsp;</td>
                                    <td>Dr. Shambhoo Bhardwaj/<br />Mr. Pradeep Kumar Gupta</td>
                                    <td>1.8</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Smart Assistive Head-Band for Closed Environment Navigation for
                                        Visually Impaired</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Arpit Jain</td>
                                    <td>1.6</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Navigation System inside an Organization (Hospitals, Universities)
                                    </td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Ashendra Saxena/<br />Ms. Maryam Tahira/<br />Mr. Ajay
                                        Chakravarty/<br />Mr. Vineet Saxena</td>
                                    <td>1.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Formulation and Evaluation of Rifampicin Loaded Mannosylated Lipid
                                        Polymer Hybrid Nanoparticles for Targeting Alveolar Macrophage</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Subash Chandra Dhinda/<br />Dr. Bibhash Chandra Mohanta</td>
                                    <td>2.5</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Design, Synthesis, Characterization and Preliminary Antihypertensive
                                        Screening of some novel 1, 4-Dihydropyridine Derivatives</td>
                                    <td>2 Year&nbsp;</td>
                                    <td>Dr. Omprakash Goshain</td>
                                    <td>0.6</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Development of a Hair Care Formulation to prevent Hair Loss and
                                        Premature Greying of Hairs</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Anurag Verma/<br />Mr. Aditya Vikram Jain</td>
                                    <td>2.7</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>COVID-19 Vaccine Induced Thrombosis &amp; Thrombocytopenia in
                                        Females during Peri-menopause</td>
                                    <td>10 Months&nbsp;&nbsp;</td>
                                    <td>Dr. Ruchi Kant/<br />Mr. Manoj Dhadwal</td>
                                    <td>0.6</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Oral squamous cell carcinoma diagnosis by means of levels of
                                        salivary biomarkers, NUS1 and RCN1- A longitudinal study</td>
                                    <td>1 Year 3 Months&nbsp;</td>
                                    <td>Dr. Arun Kumar K.V./<br />Dr. Snigdha Singh</td>
                                    <td>1.3</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Tongue cancer and the role of transmembrane glycoprotein FAM171A1
                                        &ndash; An observational study</td>
                                    <td>1 Year 3 Months&nbsp;</td>
                                    <td>Dr. Arun Kumar K.V./<br />Dr. Flora Kalita</td>
                                    <td>2.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Antibacterial Efficacy of Manuka Honey, Ocimum Sanctum, Curcuma
                                        Longa and 0.2% Chlorhexidine Mouthwash on the Level of Streptococcus
                                        Mutans and Lactobacillus Acidophilus: A Randomized Clinical Trial
                                    </td>
                                    <td>5 Months&nbsp;</td>
                                    <td>Dr. Ankita Jain/<br />Dr. Vikas Singh/<br />Dr. Rangoli Srivastava
                                    </td>
                                    <td>0.7</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Bovine Colostrum and Nigella Sativa in the Management of OSME: A
                                        Comprative Clinical Prospective Study</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Upender Malik/<br />Dr. Aiman Mahfooz/<br />Dr. Surangama Lehri
                                    </td>
                                    <td>1.3</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Effects of various Intracanal Calcium Hydroxide dressing Material on
                                        pH changes simulated external Root Restoration defects</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Ramakrishna Yeluri/<br />Dr. Ritu Kumari&nbsp;</td>
                                    <td>0.9</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Bio-Synthesis of Bio-Fertilizers from Biodegradable Solid Wastes by
                                        Spraying Liquid Culture of Specific Micro-organisms</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Asim Ahmad</td>
                                    <td>2.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Kinetics and Mechanism of Acid catalysed hydrolysis of Ethyl
                                        Nicotinate in different aqueous solvents system</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Anil Kumar Singh</td>
                                    <td>1.0</td>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Porous Amorphous Carbon Nanostructures and Related Composites for
                                        the Removal of Textile Dyes and Heavy Metals from Water</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr Diptonil Banerjee</td>
                                    <td>2.3</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Development of Biopolymer Electrolyte for Photo-Electrochemical
                                        Devices</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr S.P. Pandey</td>
                                    <td>3.85</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Pharmacological and Molecular Role of Various Neuroprotective
                                        Modulators in Pain &amp; Neurological Disorders</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. K. K. Sharma</td>
                                    <td>2.68</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Development of Structured Mechanism of E-waste Management in
                                        Moradabad</td>
                                    <td>1 Year&nbsp;</td>
                                    <td>Dr. Vipin Jain</td>
                                    <td>1</td>
                                    <td>2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection