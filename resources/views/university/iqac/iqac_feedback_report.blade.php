@extends('layouts.university.departments.feedback_report_with_sidebar')
@section('content')

<style>
	html {
    scroll-behavior: smooth!important;
}
</style>

<div class="main-content">
	<div class="container">

		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading tmu-page-heading-left mb-2 pt-md-5" id="FA-ATR"><span>Feedback Analysis & </span><span>
					Action Taken Report</span></h1>

			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2022-23</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/atr_reports/TMU_2022_23_signed.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2021-22</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/atr_reports/Structured_Feedback_Analysis_compressed.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2020-21</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/atr_reports/faatr_2020-21.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2019-20</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/atr_reports/faatr_2019-20.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2018-19</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/atr_reports/faatr_2018-19.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2017-18</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/atr_reports/faatr_2017-18.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Annual Report 2016-17</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/atr_reports/faatr_2016-17.pdf')}}" target="_blank">View
							PDF</a>
					</div>
				</div>
			</div>

			<h2 class="tmu-text-primary mb-2 pt-md-5" id="FAR"><span> Feedback Analysis </span><span> Report 2022-23</span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Student's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/22-23/SFAR22-23.pdf')}}" target="_blank">View PDF</a>
					</div>
					<!-- <div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Teacher's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/22-23/SFAR_2021_22.pdf')}}" target="_blank">View
							PDF</a>
					</div> -->
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Alumni's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/22-23/AFAR22-23.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Employer's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/22-23/Faculty.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Professional's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/22-23/PFAR22-23.pdf')}}" target="_blank">View PDF</a>
					</div>
				</div>
			</div>
			<h2 class="tmu-text-primary mb-2 pt-md-5" ><span> Feedback Analysis </span><span> Report 2022-21</span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Student's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/21-22/SFAR_2021_22.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Teacher's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/21-22/TFAR_2021_22.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Alumni's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/21-22/AFAR.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Employer's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/21-22/EFAR.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Professional's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/21-22/PFAR.pdf')}}" target="_blank">View PDF</a>
					</div>
				</div>
			</div>
			<h2 class="tmu-text-primary mb-2 pt-md-5" ><span> Feedback Analysis </span><span> Report 2020-21</span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Student's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/20-21/sfar.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Teacher's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/20-21/tfar.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Alumni's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/20-21/afar.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Employer's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/20-21/efar.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Professional's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/20-21/pfar.pdf')}}" target="_blank">View PDF</a>
					</div>
				</div>
			</div>
			<h2 class="tmu-text-primary mb-2 pt-md-5" ><span> Feedback Analysis </span><span> Report 2019-20</span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Student's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/19-20/SFAR_2019_20.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Teacher's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/19-20/TFAR_AY_2019_20.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Alumni's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/19-20/AFAR_AY_2019_20.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Employer's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/19-20/EFAR_AY_2019_20.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Professional's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/19-20/PFAR_AY_2019_20.pdf')}}" target="_blank">View PDF</a>
					</div>
				</div>
			</div>
			<h2 class="tmu-text-primary mb-2 pt-md-5" ><span> Feedback Analysis </span><span> Report 2018-19</span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Student's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/18-19/SFAR_2018_19.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Teacher's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/18-19/TFAR_AY_2018_19.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Alumni's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/feedback_report/analysis_report/18-19/AFAR_AY_2018_19.pdf')}}" target="_blank">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Employer's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/18-19/EFAR_AY_2018_19.pdf')}}" target="_blank">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Professional's Feedback Analysis Report</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/pdf/feedback_report/analysis_report/18-19/PFAR_AY_2018_19.pdf')}}" target="_blank">View PDF</a>
					</div>
				</div>
			</div>
			<h2 class="tmu-text-primary mb-2 pt-md-5" id="communication"><span> Communication </span><span> Letters </span></h2>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Communication letter 2022-23</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/data/naac-data/iqac_feedback/communication/communication_letter_2022_23.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Communication letter 2021-22</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/data/naac-data/iqac_feedback/communication/communication_letter_2021_22.pdf')}}">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Communication letter 2020-21</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/data/naac-data/iqac_feedback/communication/Communication_letter_2020_21.pdf')}}">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Communication letter 2019-20</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/data/naac-data/iqac_feedback/communication/communication_letter_2019_20.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Communication letter 2018-19</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('/assets/data/naac-data/iqac_feedback/communication/communication_letter_2018_19.pdf')}}">View PDF</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all sidebar links
        const sidebarLinks = document.querySelectorAll(".custom-menu-item a");

        sidebarLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                // Prevent default behavior
                e.preventDefault();

                // Get the target element's ID from href
                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    // Smoothly scroll to the target element
                    targetElement.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
    });
</script> -->





@endsection