@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="container mt-5">
            <div class="card p-4 mb-4" style="background-color:D3D3D3;">
                <h1 class="mb-4 tmu-text-primary tmu-page-heading "><span>Study</span><span> Material</span></h1>

                <div class="row">
                    <div class="col-md-6">
                        <label for="program" class="form-label">Program</label>
                        <select id="program" class="form-select" onchange="updateSpecialization()">
                            <option value="BTech">Bachelor of Technology</option>
                            <option value="BE">Bachelor of Engineering</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="specialization" class="form-label">Specialization</label>
                        <select id="specialization" class="form-select">
                            <option value="Civil">Civil Engineering</option>
                            <option value="CSE">Computer Science Engineering</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-danger mt-3" onclick="showMaterials()">View</button>
            </div>

            <div id="study-materials" class="mb-5"></div>

        </div>

        <script>
            const materials = {
                BE: {
                    Civil: {
                        "Semester - 1 & 2": [{
                                code: "3110003",
                                name: "Programming for Problem Solving",
                                pdfCount: 12
                            },
                            {
                                code: "3110006",
                                name: "Basic Mechanical Engineering",
                                pdfCount: 1,
                                docCount: 1
                            },
                            {
                                code: "3110007",
                                name: "Environmental Science",
                                pdfCount: 9
                            },
                            {
                                code: "3110011",
                                name: "Physics Group - I",
                                pdfCount: 1
                            },
                            {
                                code: "3110014",
                                name: "Mathematics-I",
                                pdfCount: 18
                            },
                            {
                                code: "3110005",
                                name: "Basic Electrical Engineering",
                                pdfCount: 5
                            },
                            {
                                code: "3110013",
                                name: "Engineering Graphics & Design",
                                pdfCount: 1,
                                docCount: 1
                            },
                            {
                                code: "3110015",
                                name: "Mathematics-II",
                                pdfCount: 1
                            },
                        ],
                        "Semester - 3": [{
                                code: "3130004",
                                name: "Effective Technical Communication",
                                pdfCount: 1,
                                docCount: 13
                            },
                            {
                                code: "3130007",
                                name: "Indian Constitution",
                                pdfCount: 15,
                                docCount: 8
                            },
                            {
                                code: "3130606",
                                name: "Geotechnical Engineering",
                                pdfCount: 2,
                                docCount: 1
                            },
                            {
                                code: "3130607",
                                name: "Building Construction Technology",
                                pdfCount: 7,
                                docCount: 1
                            },
                            {
                                code: "3130608",
                                name: "Mechanics Of Solids",
                                pdfCount: 9
                            },
                            {
                                code: "3130609",
                                name: "Building and Town Planning",
                                pdfCount: 10,
                                docCount: 1
                            },
                        ],
                        "Semester - 4": [{
                            code: "3140601",
                            name: "Surveying",
                            pdfCount: 1
                        }, ]
                    }
                }
            };

            function updateSpecialization() {
                // Reset the displayed materials when changing program/specialization
                document.getElementById("study-materials").innerHTML = "";
            }

            function showMaterials() {
                const program = document.getElementById("program").value;
                const specialization = document.getElementById("specialization").value;
                const semesterDiv = document.getElementById("study-materials");

                // Reset previous materials before showing new data
                semesterDiv.innerHTML = "";

                if (materials[program] && materials[program][specialization]) {
                    const semesters = materials[program][specialization];

                    for (const semester in semesters) {
                        let semesterContent = `<h5>${semester}</h5><div class="table-responsive"><table class="table table-bordered table-striped"><thead><tr><th>Sr.</th><th>Subject Code - Name</th><th>Content</th></tr></thead><tbody>`;

                        semesters[semester].forEach((material, index) => {
                            semesterContent += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${material.code} - ${material.name}</td>
                                <td>
                                    <a href="#" class="pdf-link">PDF (${material.pdfCount})</a>
                                    ${material.docCount ? `| <a href="#" class="pdf-link">DOC (${material.docCount})</a>` : ''}
                                </td>
                            </tr>`;
                        });

                        semesterContent += `</tbody></table></div>`;
                        semesterDiv.innerHTML += semesterContent;
                    }
                } else {
                    semesterDiv.innerHTML = "<p>No materials available for the selected program and specialization.</p>";
                }
            }
        </script>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection