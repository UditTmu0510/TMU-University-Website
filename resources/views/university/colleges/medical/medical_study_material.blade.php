@extends('layouts.university.colleges.medical_with_sidebar')
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
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading mt-3 mb-3"><span>Study</span><span> Material </span></h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Sr No.</th>
                    <th>Subject</th>
                    <th>E-Content(URL)</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Anatomy-(MBS101)</td>
                    <td><a href="https://drive.google.com/drive/folders/1d4bKVXwJbaSr_N2A1teVj8LIKPTQqKMX?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Biochemistry-(MBS103)</td>
                    <td><a href="https://drive.google.com/drive/folders/1OnqhLISiQuan7GNl94Ygbw66I7c9zPWk?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Physiology-(MBS102)</td>
                    <td><a href="https://drive.google.com/drive/folders/1bCAaADw21wj1wKn7Ch5RDTu0kx3Az7Ca?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pathology-(MBS201)</td>
                    <td><a href="https://drive.google.com/drive/folders/1RcRg4C6_77hAV1jAVTloIi0IW2Axu0ew?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Microbiology-(MBS202)</td>
                    <td><a href="https://drive.google.com/drive/folders/1J4RSA4AEn6w1YFDWs2ohA4mS118HyGBT?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Pharmacology-(MBS203)</td>
                    <td><a href="https://drive.google.com/drive/folders/1BisCyJ6kPw-FTKsJIJ6pk60zsFaos615?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Community Medicine-(MBS301)</td>
                    <td><a href="https://drive.google.com/drive/folders/1KO40YjGlIzpxuPvXq6uTh4drDmdlHEvl?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Forensic Medicine & Toxicology-(MBS204)</td>
                    <td><a href="https://drive.google.com/drive/folders/1Yw8tnaZcS58rU6h80exQ3EmfTzxFYPyP?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Otorhinolaryngology-(MBS303)</td>
                    <td><a href="https://drive.google.com/drive/folders/1lN6dGTj0gxwOgXG-DhYnP8y2wk6aD6zq?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Ophthalmology -(MBS302)</td>
                    <td><a href="https://drive.google.com/drive/folders/1I7sTU_o5ZGqYuTjsGgarMq2p3_924BZR?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>General Medicine - (MBS401)</td>
                    <td><a href="https://drive.google.com/drive/folders/1jzHxjElKpA2I9QMBEnI9InGqEon04NFs?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Psychiatry</td>
                    <td><a href="https://drive.google.com/drive/folders/1SE9qQ2bCuhMP97FqVMB_8cugLxDXxK5X?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Dermatology</td>
                    <td><a href="https://drive.google.com/drive/folders/1bTtZ-SSIvts5-w9v7Z88q7r9A1Vt9wqr?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Respiratory Medicine</td>
                    <td><a href="https://drive.google.com/drive/folders/1m3hl9sWPKxmxW5ZXSkS5882Nl4emGS4b?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Radio-diagnosis</td>
                    <td><a href="https://drive.google.com/drive/folders/1KVM3QasopwT0f1nK0JuXki0jFTyyUsJ_?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Peadiatrics - (MBS402)</td>
                    <td><a href="https://drive.google.com/drive/folders/1mr24CV2KahEvQ2F2CVGgc3S0A0QXBCbV?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>General Surgery- (MBS404)</td>
                    <td><a href="https://drive.google.com/drive/folders/19tmglZecqKMv3NH4J3trsUrWdYCfQrna?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Orthopaedics</td>
                    <td><a href="https://drive.google.com/drive/folders/1jge-CYb-OwtH83_v66gcBU-2Oq54t8q7?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Anesthesia</td>
                    <td><a href="https://drive.google.com/drive/folders/1UnBv2cs99M-VEQ8-druxSCXEoNdLmkqz?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Obstetrics & Gynaecology - (MBS403)</td>
                    <td><a href="https://drive.google.com/drive/folders/1JmOIwlh8S6aQPcv-xF6IVuyLW9IHJDAP?usp=sharing" target="_blank">Click Here</a></td>
                </tr>
            </table>
        </div>
    </div>

</div>
</div>


@endsection