@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')


<div class="main-content">
        <div class="container">

            <h1 class="tmu-text-primary tmu-page-heading"><span> Student </span><span> Details </span></h1>

            <div class="col-md-12">
                <hr class="horizontal-line">
                <button class="careers-accordion">Details of Students Admitted in UG Programme<span
                        class="icon">+</span></button>
                <div class="panel active">
                    <div class="table-responsive mb-0">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <th class="text-center">Sl. No.</th>
                                <th>Programme Name</th>
                                <th>Academic Year</th>
                                <th class="text-center">Read</th>
                                <th class="text-center">Download</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>MBBS</td>
                                    <td>2023-24</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG_MBBS_2023_24_batch.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG_MBBS_2023_24_batch.pdf')}}"
                                            download="UG_MBBS_2023_24_batch.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>MBBS</td>
                                    <td>2022-23</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2022_23.pdf')}}" target="_blank"
                                            data-original-title="View"><i class="fa fa-file-text-o icon-lg"></i></a>
                                    </td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2022_23.pdf')}}"
                                            download="MBBS_2022_23.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>MBBS</td>
                                    <td>2021-22</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2021_22.pdf')}}" target="_blank"
                                            data-original-title="View"><i class="fa fa-file-text-o icon-lg"></i></a>
                                    </td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2021_22.pdf')}}"
                                            download="MBBS_2021_22.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>MBBS</td>
                                    <td>2020-21</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2020_21.pdf')}}" target="_blank"
                                            data-original-title="View"><i class="fa fa-file-text-o icon-lg"></i></a>
                                    </td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2020_21.pdf')}}"
                                            download="MBBS_2020_21.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td>MBBS</td>
                                    <td>2019-20</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG Students 2019-20.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG Students 2019-20.pdf')}}"
                                            download="UG Students 2019-20.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">6</td>
                                    <td>MBBS</td>
                                    <td>2018-19</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/2a-List-of-UG-Students-2018-19.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/2a-List-of-UG-Students-2018-19.pdf')}}"
                                            download="2a-List-of-UG-Students-2018-19.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>MBBS</td>
                                    <td>2017-18</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG-Students-2017-18.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG-Students-2017-18.pdf')}}"
                                            download="UG-Students-2017-18.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">8</td>
                                    <td>MBBS</td>
                                    <td>2016-17</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/Students-admitted-merit-wise-in-session-2016-17.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/Students-admitted-merit-wise-in-session-2016-17.pdf')}}"
                                            download="Students-admitted-merit-wise-in-session-2016-17.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td>MBBS</td>
                                    <td>2015-16</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG-Students-2015.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/UG-Students-2015.pdf')}}"
                                            download="UG-Students-2015.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="horizontal-line">
                <button class="careers-accordion">Details of Students Admitted in PG Programme <span
                        class="icon">+</span></button>
                <div class="panel">
                    <div class="table-responsive mb-0">
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <th class="text-center">Sl. No.</th>
                                <th>Programme Name</th>
                                <th>Academic Year</th>
                                <th class="text-center">Read</th>
                                <th class="text-center">Download</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>MD/MS</td>
                                    <td>2023-24</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/pg/PG_Students_2023_24_batch.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/pg/PG_Students_2023_24_batch.pdf')}}"
                                            download="PG_Students_2023_24_batch.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>MD/MS</td>
                                    <td>2022-23</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2022_23.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2022_23.pdf')}}"
                                            download="MD_MS_2022_23.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>MD/MS</td>
                                    <td>2021-22</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2021_22.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2021_22.pdf')}}"
                                            download="MD_MS_2021_22.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>MD/MS</td>
                                    <td>2020-21</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2020_21.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/MD_MS_2020_21.pdf')}}"
                                            download="MD_MS_2020_21.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td>MD/MS</td>
                                    <td>2019-20</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/PG Students 2019-20.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/PG Students 2019-20.pdf')}}"
                                            download="PG Students 2019-20.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">6</td>
                                    <td>MD/MS</td>
                                    <td>2018-19</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/2c-List-of-PG-Students-2018-19.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/2c-List-of-PG-Students-2018-19.pdf')}}"
                                            download="2c-List-of-PG-Students-2018-19.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>MD/MS</td>
                                    <td>2017-18</td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/PG-students-2017-18.pdf')}}"
                                            target="_blank" data-original-title="View"><i
                                                class="fa fa-file-text-o icon-lg"></i></a></td>
                                    <td class="text-center"><a data-tooltip="" data-placement="bottom"
                                            href="{{asset('/assets/pdf/medical/ug/PG-students-2017-18.pdf')}}"
                                            download="PG-students-2017-18.pdf"
                                            data-original-title="Download"><i class="fa fa-download icon-lg"></i></a>
                                    </td>
                                    </td>
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

@endsection