@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<style>
    .hh1{
        margin-top: 20px!important;
    }
</style>

<div class="main-content">
    <div class="container">
        <div class="container">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-4"><span>AEBAS Attendance </span><span> Dashboard
                </span></h1>
            <div class="container hh1">
                <div class="row mt-0">
                    <div class="col-md-12">
                        <div class="card-body">

                        <hr class="horizontal-line">
                            <button class="careers-accordion">December 2024<span class="icon">+</span></button>
                            <div class="panel active">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">02.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/2nd-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                             <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">03.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/3rd-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                           <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">04.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/4th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">05.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/5th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                           <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">06.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/6th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">07.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/7th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                             <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">09.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/9th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">10.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/10th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">11.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/11th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">12.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/12th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">13.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/13th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                           <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">16.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/16th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">17.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/17th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">18.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/18th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">19.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/19th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">20.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/20th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                           <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">21.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/21st-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <!--<tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">30.12.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/december/30th-December-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                        <hr class="horizontal-line">
                            <button class="careers-accordion">November 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">04.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/4th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">05.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/5th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">08.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/8th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">11.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/11th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">12.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/12th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">13.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/13th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">14.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/14th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">16.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/16th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">19.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/19th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">21.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/21st-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">22.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/22nd-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">23.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/23rd-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">25.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/25th-Novemebr-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">26.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/26th-Novemebr-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">27.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/27th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">28.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/28th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">29.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/29th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">30.11.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/november/30th-November-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">October 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">01.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/1st-October-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">03.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/3rd-October-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">04.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/4th-October-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">05.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/5th-October-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">07.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/7th-October-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">08.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/8th-October-2024-min.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">09.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/9th-october-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">14.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/14th-october-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">15.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/15.09.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">16.19.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/Attendance-16.10.24.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">17.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/Attendance-17.10.2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">18.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/18th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">19.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/19th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">21.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/21st-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">22.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/22nd-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">23.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/23rd-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">24.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/24th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">25.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/25th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19.</td>
                                                <td class="text-center">26.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/26.10.2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20.</td>
                                                <td class="text-center">28.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/28th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21.</td>
                                                <td class="text-center">29.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/29th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22.</td>
                                                <td class="text-center">30.10.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/october/30th-October-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">September 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">02.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/02-sept-24.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">03.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/03.09.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">04.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/04.09.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">05.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/5-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">06.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/6th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">07.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/7th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">09.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/9th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">10.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/10th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">11.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/11th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">12.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/12th-September-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">13.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/13.09.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">16.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/16.09.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">16.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/16.09.2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">17.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/17th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">18.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/18th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">19.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/19th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">20.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/20th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">21.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/21st-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19.</td>
                                                <td class="text-center">23.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/23rd-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20.</td>
                                                <td class="text-center">24.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/24th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21.</td>
                                                <td class="text-center">25.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/25th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22.</td>
                                                <td class="text-center">26.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/26th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23.</td>
                                                <td class="text-center">27.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/27th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24.</td>
                                                <td class="text-center">28.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/28th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">25.</td>
                                                <td class="text-center">30.09.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/september/30th-September-2024.pdf')}}" target="_blank"><i class="fa fa-file" aria-hidden="true" ></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">August 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">01.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/1.08.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">03.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/3-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">06.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/06.08.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">07.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/07.08.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">08.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/8-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">09.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/9-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">13.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/13-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">14.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/14-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">16.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/16-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">17.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/17-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">20.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/20-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">21.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/21-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">22.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/22-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">23.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/23-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">24.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/24-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">27.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/27-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">28.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/28-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">29.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/29-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19.</td>
                                                <td class="text-center">30.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/30-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20.</td>
                                                <td class="text-center">31.08.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/August/31-August-2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">July 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">01.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/01.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">02.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/02.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">03.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/03.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">04.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/04.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">05.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/05.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">06.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/06.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">08.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/08.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">09.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/09.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">10.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/10.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">11.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/11.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">12.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/12.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">13.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/13.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">15.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/15.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">16.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/16.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">17.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/17.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">18.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/18.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">19.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/19.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">20.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/20.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19.</td>
                                                <td class="text-center">22.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/22.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20.</td>
                                                <td class="text-center">23.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/23.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21.</td>
                                                <td class="text-center">24.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/24.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22.</td>
                                                <td class="text-center">25.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/25.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23.</td>
                                                <td class="text-center">26.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/26.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24.</td>
                                                <td class="text-center">27.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/27.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">25.</td>
                                                <td class="text-center">29.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/29.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">26.</td>
                                                <td class="text-center">30.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/30.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">27.</td>
                                                <td class="text-center">31.07.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/July/31.07.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">June 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1.</td>
                                                <td class="text-center">01.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/01.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td class="text-center">03.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/03.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="text-center">04.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/04.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td class="text-center">05.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/05.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td class="text-center">06.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/06.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td class="text-center">07.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/07.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td class="text-center">08.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/08.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td class="text-center">10.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/10.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td class="text-center">11.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/11.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td class="text-center">12.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/12.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td class="text-center">13.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/13.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td class="text-center">14.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/14.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td class="text-center">15.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/15.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td class="text-center">18.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/18.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td class="text-center">19.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/19.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16.</td>
                                                <td class="text-center">20.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/20.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17.</td>
                                                <td class="text-center">21.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/21.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18.</td>
                                                <td class="text-center">22.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/22.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19.</td>
                                                <td class="text-center">24.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/24.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20.</td>
                                                <td class="text-center">25.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/25.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21.</td>
                                                <td class="text-center">26.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/26.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22.</td>
                                                <td class="text-center">27.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/27.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23.</td>
                                                <td class="text-center">28.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/28.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24.</td>
                                                <td class="text-center">29.06.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/june/29.06.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr class="horizontal-line">

                            <button class="careers-accordion">May 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">01.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/01.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">02.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/02.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">03.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/03.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">04.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/04.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">06.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/06.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td class="text-center">07.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/07.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td class="text-center">08.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/08.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td class="text-center">09.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/09.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td class="text-center">10.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/10.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td class="text-center">11.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/11.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td class="text-center">13.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/13.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td class="text-center">14.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/14.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td class="text-center">15.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/15.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td class="text-center">16.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/16.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td class="text-center">17.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/17.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16</td>
                                                <td class="text-center">18.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/18.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td class="text-center">20.05.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/20.05.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18</td>
                                                <td class="text-center">23.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/23.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19</td>
                                                <td class="text-center">24.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/24.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20</td>
                                                <td class="text-center">27.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/27.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21</td>
                                                <td class="text-center">28.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/28.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22</td>
                                                <td class="text-center">29.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/29.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23</td>
                                                <td class="text-center">30.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/30.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24</td>
                                                <td class="text-center">31.05.2024</td>
                                                <td class="text-center"><a href="{{asset('/assets/pdf/aebas-attendance/31.05.2024.pdf')}}"><i class="fa fa-file" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Add the horizontal line here -->
                            <hr class="horizontal-line">

                            <button class="careers-accordion">April 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">01.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/01.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">02.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/02.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">03.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/03.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">04.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/04.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">06.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/06.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td class="text-center">07.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/07.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td class="text-center">08.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/08.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td class="text-center">09.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/09.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td class="text-center">10.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/10.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td class="text-center">11.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/11.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td class="text-center">13.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/13.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td class="text-center">14.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/14.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td class="text-center">15.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/15.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td class="text-center">16.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/16.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td class="text-center">17.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/17.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16</td>
                                                <td class="text-center">18.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/18.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td class="text-center">20.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/20.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18</td>
                                                <td class="text-center">21.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/21.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19</td>
                                                <td class="text-center">22.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/22.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20</td>
                                                <td class="text-center">23.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/23.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21</td>
                                                <td class="text-center">26.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/26.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">23</td>
                                                <td class="text-center">27.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/27.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24</td>
                                                <td class="text-center">28.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/28.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">25</td>
                                                <td class="text-center">29.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/29.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">26</td>
                                                <td class="text-center">30.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/30.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">27</td>
                                                <td class="text-center">31.04.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/31.04.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Add the horizontal line here -->
                            <hr class="horizontal-line">
                            <button class="careers-accordion">March 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">01.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/01.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">02.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/02.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">03.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/03.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">04.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/04.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">06.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/06.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td class="text-center">07.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/07.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td class="text-center">08.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/08.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td class="text-center">09.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/09.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">10</td>
                                                <td class="text-center">11.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/11.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td class="text-center">13.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/13.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td class="text-center">14.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/14.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td class="text-center">15.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/15.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td class="text-center">16.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/16.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">16</td>
                                                <td class="text-center">18.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/18.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td class="text-center">20.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/20.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18</td>
                                                <td class="text-center">21.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/21.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19</td>
                                                <td class="text-center">22.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/22.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20</td>
                                                <td class="text-center">23.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/23.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21</td>
                                                <td class="text-center">26.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/26.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">23</td>
                                                <td class="text-center">27.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/27.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24</td>
                                                <td class="text-center">28.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/28.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">25</td>
                                                <td class="text-center">29.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/29.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">26</td>
                                                <td class="text-center">30.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/30.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">27</td>
                                                <td class="text-center">31.03.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/31.03.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Add the horizontal line here -->
                            <hr class="horizontal-line">
                            <button class="careers-accordion">February 2024<span class="icon">+</span></button>
                            <div class="panel">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">01.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/01.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">02.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/02.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">03.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/03.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">05.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/05.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">06.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/06.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td class="text-center">07.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/07.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td class="text-center">08.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/08.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td class="text-center">09.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/09.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td class="text-center">10.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/10.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td class="text-center">12.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/12.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td class="text-center">13.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/13.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td class="text-center">14.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/14.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td class="text-center">15.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/15.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td class="text-center">16.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/16.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td class="text-center">17.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/17.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">16</td>
                                                <td class="text-center">19.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/19.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">17</td>
                                                <td class="text-center">20.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/20.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">18</td>
                                                <td class="text-center">21.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/21.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">19</td>
                                                <td class="text-center">22.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/22.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">20</td>
                                                <td class="text-center">23.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/23.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">21</td>
                                                <td class="text-center">24.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/24.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">22</td>
                                                <td class="text-center">26.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/26.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">23</td>
                                                <td class="text-center">27.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/27.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">24</td>
                                                <td class="text-center">28.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/28.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">25</td>
                                                <td class="text-center">29.02.2024</td>
                                                <td class="text-center"><a
                                                        href="{{asset('/assets/pdf/aebas-attendance/29.02.2024.pdf')}}"><i
                                                            class="fa fa-file" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Add the horizontal line here -->
                            <hr class="horizontal-line">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection