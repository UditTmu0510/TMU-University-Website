@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')

<style>
    hr {
        width: 40%;
        /* Sets the width to 30% of the parent container */
        margin: 20px auto;
        /* Centers the <hr> horizontally */
        border: 1px solid #000000b5;
        /* Optional: defines the thickness and color */
    }
</style>

<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Authors </span><span>Guidelines</span></h1>
    <section class="about-section bg-light mt-4 p-3">
        <div class="container">
            <!-- <div class="image-content text-center p-4" id="about">
                <img src="{{asset('/assets/img/112.jpg')}}" alt="Learning and Teaching">
            </div> -->
            <h3 class="mb-2 pb-0 pt-4 tmu-text-primary fw-bold h3size"><span>Article</span><span> Type</span></h3>
            <ul class="m-ol-list ps-5 mb-4">
                <li>Research Article, Review Article, Case Report, Short communication.</li>
                <li>Manuscript should be typewritten in “MS Word”, 10-font size, 1.5 lines spacing, with
                    margins of at least one inch on all sides. Pages should be numbered consecutively.</li>
            </ul>

            <hr>
            <h3 class="mb-2 pb-0 pt-3 tmu-text-primary fw-bold h3size"><span>Communication to</span><span> the Journal</span></h3>
            <p class="about-p pb-4 text-justify">
                All the articles must be communicated through journal email-……………….
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Structure of</span><span> the Manuscript</span></h3>
            <ul class="m-ol-list ps-5 mb-4">
                <li>TITLE</li>
                <li>ABSTRACT (not exceeding 250 words)</li>
                <li>KEYWORDS (Up to 4-6 keywords)</li>
                <li>INTRODUCTION</li>
                <li>MATERIALS &amp; METHODS</li>
                <li>RESULTS</li>
                <li>DISCUSSION</li>
                <li>CONCLUSION</li>
                <li>CONFLICT OF INTEREST</li>
                <li>ACKNOWLEDGMENTS</li>
                <li>FUNDING SOURCE</li>
                <li>REFERENCES</li>
            </ul>
            <p class="about-p pb-4 text-justify">
                <b>Note:</b> Divide your article into clearly defined sections. Heading should be typed in
                upper case, bold. Sub-headings should be typed in sentence case, italics. Each heading
                should appear on its own separate line.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Title</span></h3>
            <p class="about-p pb-4 text-justify">
                Title page contains title of the manuscript in bold face, Title case (font size 14, Arial Black,
                in Bold), names of the authors in title case (font size 12, Times New Roman, Bold) followed
                by the affiliation of authors in title case (font size 10, Times New Roman). Names of the
                authors should appear as first name followed by surnames. Please provide the complete postal
                address or addresses with pin code number of the place(s), where the research work has been
                carried out.
            </p>
            <p class="about-p pb-4 text-justify">
                If the publication originates from several institutes, the affiliation of each author should be
                clearly stated by using superscript Arabic numbers after the name and before the institute.
                The author of correspondence must be indicated with an asterisk. At the bottom left corner of
                the title page, please mention address for correspondence and provide a functional e-mail
                address.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Abstract</span></h3>
            <p class="about-p pb-4 text-justify">
                A structured abstract up to 250 words, should be written including objective, methods, results
                and conclusion.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Keywords</span></h3>
            <p class="about-p pb-4 text-justify">
                Up to 4-6 keywords must be provided in alphabetical order.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Introduction</span></h3>
            <p class="about-p pb-4 text-justify">
                The introduction should start on a new page after the abstract and key-words. The
                introduction should provide a clear statement of the problem, the relevant recent literature on
                the subject, objectives of the study, and the proposed approach or relevant findings.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Materials &</span> <span> Methods</span></h3>
            <p class="about-p pb-4 text-justify">
                Documentation of methodology used should be sufficient to permit replication of the
                research. State the source of specialized materials, diets, chemicals, and instruments and other
                equipment, with model or catalog numbers, where appropriate. Specify kits, analyzers, and
                commercial laboratories used. Cite references for methods whenever possible and briefly
                explain any modifications made.
            </p>
            <p class="about-p pb-4 text-justify">
                Describe all statistical tests utilized and indicate the probability level (P) in which differences
                were considered significant. If data are presented in the text, state what they represent (e.g.
                means ± SEM). Indicate whether the data were transformed before analysis. Specify any
                statistical computer programs used.
            </p>


            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Results</span></h3>
            <p class="about-p pb-4 text-justify">
                The important results of the work should be clearly stated and illustrated where necessary by
                tables and figures. The statistical treatment of data and the significance level of the factors
                should be stated wherever necessary.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Discussion</span></h3>
            <p class="about-p pb-4 text-justify">
                This should explore the significance of the results of the work, not repeat them. A combined
                result and discussion section is often appropriate. Avoid extensive citations and discussion of
                published literature.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Conclusions</span></h3>
            <p class="about-p pb-4 text-justify">
                A brief paragraph summarizing the significant findings of the work is required.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Conflict of</span> <span> Interest</span></h3>
            <p class="about-p pb-4 text-justify">
                Authors should clearly state about any conflict in the manuscript.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Acknowledgments</span></h3>
            <p class="about-p pb-4 text-justify">
                List here those individuals who provided help during the research(ex- providing language
                help, writing assistance or proof reading the article, etc).
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Funding</span> <span>Source </span> </h3>
            <p class="about-p pb-4 text-justify">
                Please list the source(s) of funding for the study, for each author, and for the manuscript
                preparation.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>References</span></h3>
            <p class="about-p pb-4 text-justify">
                Citations of literature within the text must be presented in numerical order and should be set
                in square brackets, thus [1, 2]. The cited literatures are also collected in numerical order at the
                end of the manuscript under the heading “References”. Please give the DOI (Digital Object
                Identifier) if the paper is not yet in print.
            </p>
            <ul class="m-ol-list ps-5 mb-4">
                <li>Journals</li>
                <ul class="ps-5">
                    <li>
                        Reynald DJ. Oxidative stress and vascular disease. Journal of Pharmacy and Bioallied Sciences 2015; 20:189-195.
                    </li>
                    <li>
                        Dogen KI, Philips R, Kevin C, Kallis G, Aldero P. Biomarkers of nerve damage in human disease. Clinical Chemistry 2010; 41(1):101-123.
                    </li>
                </ul>
                <li>Chapter in a Book</li>
                <ul class="ps-5">
                    <li>
                        Reddy PJ. Pathophysiology of pain. In: Wolff&#39;s headache and other head pain. Silberstein SD, Lipton RB, Dalessio DJ (eds). 4th ed. Oxford, England, Oxford University Press, 2010, pp 57-72.
                    </li>
                </ul>
                <li>Website Reference</li>
                <ul class="ps-5">
                    <li>
                        FDA Approves Beleodaq (belinostat) for Type of T-cell Lymphoma, 2014 <span class="text-break">
                            (http://www.cancer.org/cancer/news/news/fda-approves-beleodaq-belinostat-for-type-of-t-cell-lymphoma
                            ).</span> [Last Accessed August 12, 2014].
                    </li>
                </ul>
            </ul>


            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size"><span>Figures</span></h3>
            <ul class="m-ol-list ps-5 mb-0">
                <li>Figures should be numbered consecutively with Arabic numerals (i.e. Figure 1, 2, 3, etc.).</li>
                <li>Provide a brief legend for each figure.</li>
                <li>Figures should be inserted in the text where they were first described.</li>
                <li>File formats accepted are:</li>
            </ul>
            <ul class="ps-6 mb-0 fs-14" style="list-style-type:lower-roman;">
                <li>Microsoft Word (figures must be a single page)</li>
                <li>PowerPoint (figures must be a single page)</li>
                <li>PNG</li>
                <li>JPEG</li>
                <li>TIFF</li>
                <li>BMP</li>
                <li>CDX (ChemDraw)</li>
                <li>TGF (ISIS/Draw)</li>
            </ul>
            <ul class="m-ol-list ps-5 mb-4">
                <li>Permission has been obtained for use of copyrighted material from other sources (including the web).</li>
            </ul>



            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size"><span>Tables</span></h3>
            <p class="about-p pb-2 text-justify">
                Tables should be editable text and numbered consecutively. Each table must have a title, with notes below the body. Avoid vertical lines; use minimal horizontal lines.
            </p>
            <ul class="m-ol-list ps-4 mb-2">
                <li>Tables should be submitted as editable text and not as images.</li>
                <li>Tables should be numbered consecutively with Arabic numerals (e.g., Table 1, Table 2, etc.).</li>
                <li>Each table should be inserted in the text where they are first described.</li>
                <li>Each table must have a title, and any table notes should be placed below the table body.</li>
                <li>Tables should be created using Microsoft Word's table formatting tools.</li>
                <li>Vertical rules (lines) should not be used in tables.</li>
                <li>The use of horizontal lines in tables should be kept to a minimum.</li>
            </ul>
            <div class="table-responsive p-2">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Heading</th>
                            <th>Heading 1</th>
                            <th>Heading 2</th>
                            <th>Heading 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>



            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Review</span><span> Article</span></h3>
            <p class="about-p pb-4 text-justify">
                Review articles should contain up-to-date information providing comprehensive coverage of
                relevant literature. Review articles should preferably be written by scientists who have in-
                depth knowledge of the topic. All format requirements are similar to those applicable to
                Research papers. Review Articles need not be divided into sections such as Materials and
                methods, and Results and discussion, but should definitely have an abstract and introduction
                and other relevant heading to the topic. <b>There is no page limit for Review Article.</b>
            </p>


            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Short</span><span> Communications</span></h3>
            <p class="about-p pb-4 text-justify">
                The research and technical communications section of this journal (maximum 2,000 words) is
                open to interesting results worthy of publication without requiring extensive introduction and
                discussion. This section should be organized as follows: Abstract, Introduction, Materials and
                methods, Results and discussion (combined). Not more than 10 references should be
                provided. Tables, figures and references are to be arranged in the same way as for research
                papers.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Case</span><span> Reports</span></h3>
            <p class="about-p pb-4 text-justify">
                Interesting clinical cases may be considered for publication. Those with photographs stand a
                better chance. The case reports should have an unstructured abstract, introduction, case
                history and a brief discussion.</b>
            </p>


            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Copyright</span><span> Transfer Agreement</span></h3>
            <p class="about-p pb-4 text-justify">
                Authors will be asked to sign a transfer of copyright form when the papers are accepted for
                publication and be typeset. All authors must read and agree to the conditions of copyright
                form and return the signed Copyright Transfer Agreement within 10 days. The Copyright
                Transfer Agreement can be downloaded from the <b>DOWNLOADS</b> section in the home page.
            </p>


        </div>
    </section>

</div>
</div>
@endsection