@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading"><span> Project</span><span> Templates</span></h1>

        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-3">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Description</th>
                                <th class="text-center">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Sample SRS (for reference purpose only)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/sample-srs-for-reference-purpose-only.pdf')}}"
                                        download="sample-srs-for-reference-purpose-only.pdf"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Project Synopsis Template (IT)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T001A-TMU-Project-Synopsis-Template-(IT)-v5.0.docx')}}"
                                        download="T001A-TMU-Project-Synopsis-Template-(IT)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Project Synopsis Template (IT-Animation)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T001B-TMU-Project-Synopsis-Template-(IT-Animation)-v5.0.docx')}}"
                                        download="T001B-TMU-Project-Synopsis-Template-(IT-Animation)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Project Requirements Template (IT)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T002A-TMU-Project-Requirements-Template-(IT)-v5.0.docx')}}"
                                        download="T002A-TMU-Project-Requirements-Template-(IT)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Project Report Template (IT Internal Projects)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T003A-TMU-Project-Report-Template-(IT-Internal-Projects)-v5.0.docx')}}"
                                        download="T003A-TMU-Project-Report-Template-(IT-Internal-Projects)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Project Report Template (IT Industrial Project)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T004A-TMU-Project-Report-Template-(IT-Industrial-Project)-v5.0.docx')}}"
                                        download="T004A-TMU-Project-Report-Template-(IT-Industrial-Project)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Project Synopsis Presentation Template (IT)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T011A-TMU-Project-Synopsis-Presentation-Template-(IT)-v5.0.pptx')}}"
                                        download="T011A-TMU-Project-Synopsis-Presentation-Template-(IT)-v5.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td>Project Synopsis Presentation Template(IT-Animation)</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T011B-TMU-Project-Synopsis-Presentation-Template(IT-Animation)-v5.0.pptx')}}"
                                        download="Project-Progress-Presentation-Template-for-Animation-v1.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">9</td>
                                <td>Project Progress Presentation Template</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T012A-TMU-Project-Progress-Presentation-Template-v5.0.pptx')}}"
                                        download="T012A-TMU-Project-Progress-Presentation-Template-v5.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">10</td>
                                <td>Project Progress Presentation Template for Animation</td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T012B-TMU-Project-Progress-Presentation-Template-for-Animation-v5.0.pptx')}}"
                                        download="T012B-TMU-Project-Progress-Presentation-Template-for-Animation-v5.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">11</td>
                                <td>Project Progress Presentation Phase 1&2 </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T012C-TMU-Project-Progress-Presentation-Phase-1&2-Template-v5.0.pptx')}}"
                                        download="T012C-TMU-Project-Progress-Presentation-Phase-1&2-Template-v5.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td>Project Evaluation Form (IT Internal for Best Project) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T021A-Project-Evaluation-Form-(IT-Internal-for-Best-Project)-v5.0.docx')}}"
                                        download="T021A-Project-Evaluation-Form-(IT-Internal-for-Best-Project)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">13</td>
                                <td>Project Evaluation Form (IT Animation Internal for Best Project) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T021B-Project-Evaluation-Form(IT-Animation-Internal-for-Best-Project)-v5.0.docx')}}"
                                        download="T021B-Project-Evaluation-Form(IT-Animation-Internal-for-Best-Project)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td>Project Evaluation Form (IT Internal for Students) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T022A-Project-Evaluation-Form(IT-Internal-for-Students)-v5.0.docx')}}"
                                        download="T022A-Project-Evaluation-Form(IT-Internal-for-Students)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">15</td>
                                <td>Project Evaluation Form (IT Animation Internal for Students) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T022B-Project-Evaluation-Form(IT-Animation-Internal-for-Students)-v5.0.docx')}}"
                                        download="T022B-Project-Evaluation-Form(IT-Animation-Internal-for-Students)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="text-center">16</td>
                                <td>Project Evaluation Form (IT Industrial Training) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T023A-Project-Evaluation-Form-(IT-Industrial-Training)-v5.0.docx')}}"
                                        download="Project-Progress-Presentation-Template-for-Animation-v1.0.pptx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center">17</td>
                                <td>Project Sore Card (IT & Animation) </td>
                                <td class="text-center"><a data-tooltip data-placement="bottom"
                                        href="{{asset('/assets/pdf/ccsit/new/T024A-Project-Sore-Card(ITAnimation)-v5.0.docx')}}"
                                        download="T024A-Project-Sore-Card(ITAnimation)-v5.0.docx"
                                        data-original-title="Download"><i
                                            class="fa-solid fa-file-download"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection