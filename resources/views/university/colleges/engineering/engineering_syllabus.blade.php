@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading"><span> Syllabus </span><span> </span></h1>
        <div class="card">
            <div class="form-widget card-body" data-alert-type="inline">
                <div class="form-result"></div>
                <form id="form-cleaning" name="form-cleaning" class="row form-cleaning mt-2">
                    <div class="form-process">
                        <div class="form-cleaning-loader css3-spinner" style="position: absolute;">
                            <div class="css3-spinner-double-bounce1"></div>
                            <div class="css3-spinner-double-bounce2"></div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-group form-group">
                            <select class="required form-select" id="programme" name="programme">
                                <option value="">Select Programme</option>
                                @foreach($programmes as $programme)
                                <option value="{{$programme->prog_id}}">{{$programme->prog_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-group form-group">
                            <select class="required form-select" id="acadyear" name="acadyear">

                                <option value="" disabled="" selected="">Select Academic Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="container d-none d-sm-block">
                        <div style="text-align:center">
                            <iframe src="" frameborder="0" height="700px" width="100%"></iframe>
                        </div>
                    </div>
                    <div class="container d-block d-sm-none mb-3">
                        <div style="text-align:center" class="mt-sm-5">
                            <a href="" class="tmu-btn btn-4" download>Download PDF</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type='text/javascript'>
    $(document).ready(function () {
        $('#programme').change(function () {
            var progID = $(this).val();
            var dropDown = document.getElementById("acadyear");
            dropDown.selectedIndex = 0;
            $.ajax({
                url: '{!! route("getacademicyears") !!}',
                method: 'post',
                data: {  
                    _token: '{{ csrf_token() }}',
                    progID: progID 
                },
                dataType: 'json',
                success: function (response) {
                    console.log('AJAX Success Response:', response);
                    $('#acadyear').find('option').remove();
                    $('#acadyear').append('<option value=""> Academic Year</option>');
                    $.each(response, function (index, data) {
                        $('#acadyear').append('<option value="' + data['acad_year'] + '">' + data['acad_year'] + '</option>');
                    });
                },

                // Error handler
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                    console.log('XHR Object:', xhr);
                    console.log('Status:', status);
                }
            });
        });
    });
</script>



<script type="text/javascript">
 var appUrl = "{{ config('app.url') }}";
    $(document).ready(function () {
        $('#acadyear').change(function () {
            // Correctly get the values
            var progid = $("#programme").val();
            var acadyear = $("#acadyear").val();

            $.ajax({
                url: "{!! route('getsyllabuses') !!}",
                method: "post",
                data: {  
                    _token: '{{ csrf_token() }}',
                    progID: progid,  
                    Acadyear: acadyear
                },
                dataType: 'json',
                success: function (response) {
                    console.log('AJAX Success Response:', response); 
                    if (response.length > 0) {
                        var fileUrl = appUrl +response[0].file_path;
                        $("iframe").attr("src", fileUrl);
                        $("a.tmu-btn").attr("href", fileUrl);
                    } else {
                        console.error('No syllabus data found');
                    }
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 404) {
                        console.error('No syllabus found:', xhr.responseJSON.error);
                    } else {
                        console.error('Error fetching syllabus:', error);
                    }
                }
            });
            return false;
        });
    });
</script>


@endsection