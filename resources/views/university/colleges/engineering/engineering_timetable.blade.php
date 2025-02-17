@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Time Table</span><span> 2024-25</span></h1>
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
                        <td>B.Tech. Time-Table of Course B.Tech I Year/Sem. II Session (2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/B.TECH.-FIRST-YEAR-EVEN-2024-25.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/B.TECH.-FIRST-YEAR-EVEN-2024-25.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>B.Tech (ME) II Year/ IV Sem, Session-(2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/BTech-Class-TT-2024-25.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/BTech-Class-TT-2024-25.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>B. Tech (EC) IInd Year/Sem. IV Session (2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/BTech-EC-TT.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/BTech-EC-TT.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>B.Tech (CE) II Year/ IV Sem, Session-(2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/Civil-B.Tech-Class-TT-2024-25-EVEN-SEM.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/Civil-B.Tech-Class-TT-2024-25-EVEN-SEM.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>B. Tech II, Year/Sem. IV Session (2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>B.Sc. (H) Math Year/Sem.: III/VI (2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/BSc-H)-Maths-Even-Sem-2024-25-TT.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/BSc-H)-Maths-Even-Sem-2024-25-TT.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>B.Sc. (Hons.) Physics VI Sem. (III YEAR) (2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/Bsc-VI-sem-Class-TT.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/Bsc-VI-sem-Class-TT.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>B.Sc. (Chemistry) Year/Sem. IIIrd/ VIth Session-(2024-25)</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/TT-Chemistry.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/TT-Chemistry.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="text-center">9</td>
                        <td>DEPARTMENT OF HUMANITIES</td>
                        <td class="text-center"><a data-tooltip data-placement="bottom"
                                href="{{asset('/assets/pdf/time_table/engineering/updated-2025-TT-Humanities-2024-25.pdf')}}"
                                download="{{asset('/assets/pdf/time_table/engineering/updated-2025-TT-Humanities-2024-25.pdf')}}"
                                data-original-title="Download"><i
                                    class="fa-solid fa-file-download"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
@endsection