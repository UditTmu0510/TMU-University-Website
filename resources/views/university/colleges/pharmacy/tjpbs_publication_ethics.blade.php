@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')
<style>
    hr {
        width: 40%;
        /* Sets the width to 30% of the parent container */
        margin: 0 auto;
        /* Centers the <hr> horizontally */
        border: 1px solid black;
        /* Optional: defines the thickness and color */
    }
</style>
<div class="main-content">
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Publication </span><span>Ethics</span></h1>
    <section class="about-section bg-light mt-4 p-3">
        <div class="container">
            <!-- <div class="image-content text-center p-4" id="about">
                <img src="{{asset('/assets/img/112.jpg')}}" alt="Learning and Teaching">
            </div> -->
            <h3 class="mb-2 pb-0 pt-4 tmu-text-primary fw-bold h3size"><span>Ethical guidelines</span> <span>for the editors</span></h3>
            <p class="about-p pb-4 text-justify">
                The editorial decisions on the submitted manuscript shall be based upon the intellectual and
                technical merit. Editor’s decision shall not be influenced by any prejudice or bias and editor
                must maintain the confidentiality of the manuscript in order to follow the standards of double
                blind peer view. The editor’s must uphold the high ethical values in publication of all the
                types of manuscript. The editor’s shall disclose conflict of interest if any and refrain from any
                kind of editorial malpractice.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Ethical guidelines</span> <span>for the reviewers</span></h3>
            <p class="about-p pb-4 text-justify">
                The reviewers shall follow guidelines laid down by the journal in order to maintain the
                scientific integrity and selection of high-quality articles. The reviewers are expected to read
                the journal’s guidelines and policies related to the publication. The reviewers are expected to
                maintain the confidentiality and objectivity of the double-blind peer review. The reviewers
                must disclose the conflict of interest at the earliest, if any.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Ethical guidelines</span> <span>for the authors</span></h3>
            <p class="about-p pb-4 text-justify">
                Authors are required to follow the author guidelines of the journal before submitting the
                manuscript. Authors are recommended to adhere to the ethical guidelines by ICMJE
                (International Committee of Medical Journal Editors) for scholarly publishing. The authors
                must follow ICMR (Indian Council of Medical Research) National Ethical Guidelines for the
                manuscript involving the human subject’s research in India.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Ethical guidelines</span> <span>for the publisher</span></h3>
            <p class="about-p pb-4 text-justify">
                The publisher is supposed to protect the intellectual property and copyright of the contents
                submitted by the authors. We respect privacy and personal data, especially for authors and
                peer reviewers. We work in close cooperation with the editors and peer reviewers to maintain
                editorial independence and to guarantee transparency and integrity in the peer-review
                process.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Acknowledgment and</span> <span>funding sources</span></h3>
            <p class="about-p pb-4 text-justify">
                Only the funding related to the submitted work should be mentioned and authors are NOT
                required to provide the complete list of every single grant that supports them. Authors are
                required to acknowledge the contribution of the people who are not in the authors list,
                however contributed in the submitted work. Authors should cite publications that have been
                influential in determining the nature of the reported work.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Publishing</span> <span>ethics issues</span></h3>
            <ul class="m-ol-list ps-5 mb-4">
                <li>
                    <b>Monitoring:</b> The committee must ensure to establish the mechanism for monitoring and
                    safeguarding publishing ethics. All the complaints received from the reviewers or the authors
                    or anybody else should be taken into proper consideration and appropriate action should be
                    taken promptly for such complaints.
                </li>
                <li>
                    <b>Article withdrawal:</b> Authors are expected to adhere to best practices in publication ethics
                    and maintain high standards in the quality of their articles. To prevent the withdrawal of
                    articles, we request that the corresponding author address issues concerning authorship,
                    publication ethics, and the accuracy of data and results at the time of manuscript submission.<br />
                    Authors may withdraw their article(s) at any point during the peer-review and publication
                    process, prior to the publication of the article lacking complete volume, issue, or page
                    information, by logging into their author homepage and selecting the 'withdraw article'
                    option. The authors must recognize that withdrawing the manuscript removes it from the peer
                    review and publication process, returning it to the author's dashboard under the withdrawn
                    manuscripts list. The manuscript numbers of withdrawn articles are ineligible for system use
                    and resubmission.
                </li>
                <li>
                    <b>Retraction and corrections:</b> Published articles will be retracted if there is unequivocal proof
                    of erroneous findings. The retraction may stem from scientific malfeasance or an inadvertent
                    mistake. To preserve the integrity of the scientific record, the retracted paper will remain on
                    the journal's website; yet, a notice of retraction will be published and made accessible to all
                    readers. Retractions may be issued by the authors, the editor, or the publisher. In exceptional
                    instances of legal violation, the Publisher may retract an article. Bibliographic details of the
                    article will be preserved to maintain the integrity of the scientific record. Occasionally, it is
                    essential to issue corrections or errata in a published article in the Journal to uphold the
                    integrity of the academic record. A suitable notification concerning the correction will be sent
                    and made readily accessible to the readers. We are consistently prepared to issue corrections,
                    clarifications, retractions, and apologies as necessary. Action is performed as necessary
                    following an investigation.
                </li>
            </ul>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Redundant or duplicate</span> <span>submission/publication</span></h3>
            <p class="about-p pb-4 text-justify">
                The same manuscript (or the same data) submitted simultaneously to multiple journals is
                known as a duplicate or redundant submission. Readers must be able to be sure that what they
                are reading is original in order to comply with international copyright rules, ethical standards,
                and economical resource usage.
            </p>
            <p class="about-p pb-4 text-justify">
                A notification of the duplicate submission and the ethical violation will be made if the editor
                was unaware of the violation and the article has already been published.
            </p>

            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Preclude business needs from</span> <span>compromising intellectual and ethical standards</span></h3>
            <p class="about-p pb-4 text-justify">
                The author's findings and decision-making should not be influenced by the funding agencies
                and sponsors. The editor must ensure the academic record's integrity, prevent business requirements from compromising intellectual and ethical standards, and be prepared to
                publish corrections, clarifications, retractions, and apologies as necessary.
            </p>
            <hr>
            <h3 class="mb-2 pb-0 tmu-text-primary fw-bold h3size pt-3"><span>Misconduct</span> <span>and sanctions</span></h3>
            <p class="about-p pb-4 text-justify">
                Alleged violations of our publication ethics policies, whether prior to or subsequent to
                publication, along with issues pertaining to research ethics, must be communicated to the
                journal. Claimants shall remain anonymous upon request. Upon receiving details regarding
                the misconduct, our editors will initiate a comprehensive inquiry. The authors may be
                required to submit the foundational data, photographs, and further supplemental materials.
                The journal will confer with editors and reach out to universities or employers to request an
                inquiry. Articles that contravene the journal's ethical publishing criteria, including duplicate
                submission, fake data, plagiarism, citation manipulation, and false claims of authorship, will
                be rejected by the journal. If the article is accepted, the journal will remove it from the
                website and post a suitable notice regarding its withdrawal. Failure of the authors to respond
                to journal correspondence following review and preliminary acceptance is regarded as a
                withdrawal of the paper. Furthermore, we may implement the other measures contingent
                upon the degree of the wrongdoing;
            </p>
            <ul class="m-ol-list ps-5 mb-4">
                <li>Not allowing submission for 1–3 years.</li>
                <li>A prohibition from acting as an editor or reviewer.</li>
                <li>Reporting the misconduct to the author's institutions, employers, and, their funding
                    agencies.</li>
            </ul>
            <p class="about-p pb-4 text-justify">
                However, the minor or unintentional errors by the authors may be corrected by a corrigendum
                and errors by the publisher by an erratum.
            </p>

        </div>
    </section>

</div>
</div>
@endsection