@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')




<div class="main-content">
    <div class="container">
    <div class="banner text-white text-center p-4 rounded d-flex justify-content-center" style="height: 16vh; background-color: #001055;">
    <div class="d-flex align-items-center">
        <h2 class="text-white m-0">Campus Map & Location</h2>
    </div>
</div>
  


        <div class="container mt-4 mb-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!4v1728280284941!6m8!1m7!1sCAoSLEFGMVFpcE9OaUNxSF90d3A5NFVqYUZ4U0hGN3l1VjFCVUtON0RpNGtmSDJP!2m2!1d28.82191151660245!2d78.65864449796779!3f8.14063105991709!4f-10.75504028982374!5f0.7820865974627469"
                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <a href="https://www.google.com/maps?ll=28.822358,78.658538&z=6&t=m&hl=en&gl=IN&mapclient=embed&cid=17271531304407475714" target="blank"><img src="{{asset('assets/img/aboutus/map/university_map_new.jpg')}}" alt="Morning Dew"></a>
        </div>


        <div class="container mt-4 mb-4">
            <h2 class="mb-2 tmu-text-primary tmu-page-heading mt-md-5"><span>How to </span><span
                    class="d-block d-sm-inline">Reach Us ?</span></h2>
            <p style="text-align:justify;color:black;">Gone are the days when parents or students were just looking at a
                few
                aspects before choosing a university. Accessibility is one major thing that is taken into consideration
                while picking a campus.</p>
            <p style="text-align:justify;color:black;">TMU is easily accessible irrespective of your choice of mode of
                transport. Be it by air, rail or road, you can reach us quite easily and comfortably.</p>
            <p style="text-align:justify;color:black;" class="mt-3 mb-2"><span class="mt-3" style="font-weight:bold;color:black;">By Air</span>
                <br />
            </p>
            <p style="text-align:justify;color:black;" class="mb-2">
                Take a flight and reach Delhi airport.<br />
                Distance from Delhi airport to TMU campus - 165 km</p>
            <p style="text-align:justify;color:black;" class="mb-2">
                Take a flight and reach Dehradun airport.<br />
                Distance from Dehradun airport to TMU campus - 198 km</p>
            <p style="text-align:justify;color:black;" class="mb-2">Take a flight and reach Pantnagar airport.<br />
                Distance from Pantnagar airport to TMU campus - 100 km</p>
            <p class="mt-3" style="font-weight:bold;color:black;color:black;">Major cities distance from Moradabad (in kms)</p>
           



            <div class="table-responsive mb-3 mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center">S. No.</th>
                            <th class="text-center">Cities</th>
                            <th class="text-center">KM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <td>1</td>
                            <td>Bareilly</td>
                            <td>- 81</td>
                        </tr>
                        
                        <tr>
                            <td>2</td>
                            <td>Meerut</td>
                            <td>- 132</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aligarh</td>
                            <td>- 125</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Noida</td>
                            <td>- 160</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rishikesh</td>
                            <td>- 172</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Gurgaon</td>
                            <td>- 196</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Agra</td>
                            <td>- 198</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Chandigarh</td>
                            <td>- 395</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Gwalior</td>
                            <td>- 343</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Kanpur</td>
                            <td>- 382</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Lucknow</td>
                            <td>- 346</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>





    </div>
</div>
</div>


@endsection