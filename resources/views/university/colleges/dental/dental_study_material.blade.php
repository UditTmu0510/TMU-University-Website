@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')

<style>
    .study-material-container {
        max-width: 1000px;
        margin: auto;
        background: white;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Accordion Button */
    .study-material-header {
        background: #f1f1f1;
        color: rgb(255, 255, 255);
        padding: 12px;
        font-size: 14px;
        font-weight: bold;
        border: none;
        text-align: left;
        width: 100%;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
        transition: background 0.1s;
    }

    .head-strip-1 {
        background: #001055;
    }

    .head-strip-2 {
        background: #ff7900;
    }

    .head-strip-3 {
        background: #2c42a1;
    }

    /* Hidden Content */
    .study-material-content {
        display: none;
        padding: 10px;
        background: rgb(255, 255, 255);
        margin-top: 5px;
        border-radius: 5px;
    }

    .colr-1 {
        border-left: 3px solid #001055;
    }

    .colr-2 {
        border-left: 3px solid #ff7900;
    }

    .colr-3 {
        border-left: 3px solid #2c42a1;
    }

    .study-material-height {
        height: 100px;
    }

    /* Icon Styling */
    .study-material-icon {
        font-size: 18px;
        font-weight: bold;
    }

    /* Inner Accordion Styling */
    .nested-study-material {
        margin-top: 10px;
    }
</style>

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Study </span><span>Materials</span></h1>
        </div>
    </div>

    <!-- Dynamic Laravel Blade for Study Materials -->
    @foreach($prognamme as $row)
    @php $progId = $row->prog_id; @endphp

    <div class="study-material-container">
        <button class="study-material-header head-strip-1" onclick="toggleStudyMaterial('studyMaterial{{ $progId }}')">
            {{ $row->prog_name }}
            <span class="study-material-icon" id="icon-studyMaterial{{ $progId }}">+</span>
        </button>
        <div class="study-material-content colr-1" id="studyMaterial{{ $progId }}">

            @foreach ($sm_sy as $smsy)
            @if($row->cd_code == $smsy->college_code && $row->prog_code == $smsy->prog_code)
            @php $semId = $progId . '-' . $smsy->sem_year; @endphp

            <button class="study-material-header head-strip-2" onclick="toggleStudyMaterial('semester{{ $semId }}')" style="margin-bottom: 5px">
                {{ $smsy->sem_year }}
                <span class="study-material-icon" id="icon-semester{{ $semId }}">+</span>
            </button>
            <div class="study-material-content colr-2" id="semester{{ $semId }}">

                @foreach ($coursestructure as $courserow)
                @if($courserow->college_code == $smsy->college_code && $courserow->prog_code == $smsy->prog_code && $courserow->sem_year == $smsy->sem_year && $courserow->status == 1)
                @php $subjectId = $semId . '-' . $courserow->sub_code; @endphp

                <div class="nested-study-material">
                    <button class="study-material-header head-strip-3" onclick="toggleStudyMaterial('subject{{ $subjectId }}')">
                        {{ $courserow->sub_code }} ({{ $courserow->subject }})
                        <span class="study-material-icon" id="icon-subject{{ $subjectId }}">+</span>
                    </button>
                    <div class="study-material-content colr-3" id="subject{{ $subjectId }}">
                        <div class="p-4 bg-light border rounded text-center study-material-height">
                            <a href="{{ $courserow->video_url ?? '#' }}" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Video Lecture</a>
                            <a href="{{ $courserow->notes_url ?? '#' }}" target="blank" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4">Notes</a>
                        </div>
                    </div>
                </div>

                @endif
                @endforeach

            </div>
            @endif
            @endforeach

        </div>
    </div>

    @endforeach



</div>
</div>
<script>
    function toggleStudyMaterial(id) {
        var content = document.getElementById(id);
        var icon = document.getElementById("icon-" + id);

        if (!content || !icon) {
            console.error("Element with ID '" + id + "' not found.");
            return;
        }

        var parent = content.parentElement;
        var allContents = parent.getElementsByClassName("study-material-content");
        var allIcons = parent.getElementsByClassName("study-material-icon");

        for (var i = 0; i < allContents.length; i++) {
            if (allContents[i].id !== id) {
                allContents[i].style.display = "none";
            }
        }

        for (var i = 0; i < allIcons.length; i++) {
            if (allIcons[i].id !== "icon-" + id) {
                allIcons[i].textContent = "+";
            }
        }

        if (content.style.display === "block") {
            content.style.display = "none";
            icon.textContent = "+";
        } else {
            content.style.display = "block";
            icon.textContent = "-";
        }
    }
</script>


@endsection