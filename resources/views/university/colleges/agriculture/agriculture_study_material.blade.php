@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<style>
    .study-material-container {
      max-width: 1000px;
      margin: auto;
      background: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Accordion Button */
    .study-material-header {
      background:#f1f1f1;
      color:rgb(255, 255, 255);
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
/* 
    .study-material-header:hover {
      background: #c0c0c0;
      color: #000000;
    } */

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
      background:rgb(255, 255, 255);
      margin-top: 5px;
      border-radius: 5px;
    }

    .colr-1{
        border-left: 3px solid #001055;
    }

    .colr-2{
        border-left: 3px solid #ff7900;
    }

    .colr-3{
        border-left: 3px solid #2c42a1;
    }

    .study-material-height{
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


    
    <div class="study-material-container">
    
    <!-- Level 1 Accordion -->
    <button class="study-material-header head-strip-1" onclick="toggleStudyMaterial('studyMaterial1', 'level1')">
    B.Sc. (Honors) Agriculture (ICAR Accredited)
      <span class="study-material-icon" id="icon-studyMaterial1">+</span>
    </button>
    <div class="study-material-content colr-1" id="studyMaterial1">
      
      <!-- Nested Accordion 1 (Second Level) -->
      <div class="nested-study-material">
        <button class="study-material-header head-strip-2" onclick="toggleStudyMaterial('nestedStudyMaterial1', 'level2')">
        I Semester
          <span class="study-material-icon" id="icon-nestedStudyMaterial1">+</span>
        </button>
        <div class="study-material-content colr-2" id="nestedStudyMaterial1">

          <!-- Nested Accordion 2 (Third Level) -->
          <div class="nested-study-material">
            <button class="study-material-header head-strip-3" onclick="toggleStudyMaterial('nestedStudyMaterial2', 'level3')">
              Study Material 1 (Third Level)
              <span class="study-material-icon" id="icon-nestedStudyMaterial2">+</span>
            </button>
            <div class="study-material-content colr-3" id="nestedStudyMaterial2">
            <div class="p-4 bg-light border rounded text-center study-material-height">
                
            <a href="#" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Video Lecture</a>
            <a href="#" target="blank" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4">Notes</a>
            </div>
            </div>
          </div>

          <!-- Nested Accordion 3 (Third Level) -->
          <div class="nested-study-material">
            <button class="study-material-header head-strip-3" onclick="toggleStudyMaterial('nestedStudyMaterial3', 'level3')">
              Study Material 2 (Third Level)
              <span class="study-material-icon" id="icon-nestedStudyMaterial3">+</span>
            </button>
            <div class="study-material-content colr-3" id="nestedStudyMaterial3">
              <p>Details on research publications and conferences.</p>
            </div>
          </div>

          <!-- Nested Accordion 4 (Third Level) -->
          <div class="nested-study-material">
            <button class="study-material-header head-strip-3" onclick="toggleStudyMaterial('nestedStudyMaterial4', 'level3')">
              Study Material 3 (Third Level)
              <span class="study-material-icon" id="icon-nestedStudyMaterial4">+</span>
            </button>
            <div class="study-material-content colr-3" id="nestedStudyMaterial4">
              <p>Information on faculty workshops and seminars.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>
</div>
<!-- Bootstrap JS and dependencies -->

<script>
    function toggleStudyMaterial(id) {
      var content = document.getElementById(id);
      var icon = document.getElementById("icon-" + id);

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