<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>

    @include('inc.spinner')

    @include('inc.nav-bar-top')

    @include('inc.nav-bar-sm')

    @include('inc.content-top')

    @include('inc.nav-bar-lg')

    @include('inc.marquee')

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Refund Policy</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Refund Policy</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">

            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Editorial Policy</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p>As a part of our editorial policy, authors are advised to strictly incorporate the following points in the final paper:</p>

                    <div class="ms-3">
                        <ol class="nested-counter">
                            <li>
                                <H5 class="mt-4 mb-2">CRC Template, Length and Submission Files</H5>
                                <ol>
                                    <li>Paper should be at least 10 pages in length on the Springer template. Short-papers less than 10 pages will not be considered. Over Lengthy, articles beyond 12 pages, extra page charges apply.</li>
                                    <li>Use uniform style for headings and subheading as per Springer template. Do not use IEEE Template (or double-column format) for preparation of CRC.</li>
                                    <li>There should not be any hidden text or unwanted special characters in the source file (CRC).</li>
                                    <li>All authors name, affiliation and mail ids must be specified; do not mention designation, etc.  The affiliation should clearly mention the name of the institute/organization/university, with city (state if applicable) and country. The corresponding author name and email id should be marked with '*'. </li>
                                    <li>No biography or photos of authors should be there at the end of the paper.</li>
                                    <li>There must be no deviation in title, sequence of authors, authors name and affiliation, email ids etc. in PDF and DOC version/latex source files of the CRC.</li>
                                    <li>The latex template (if used) then the latex source folder submitted in .zip format should comprise all files of figures, tables, etc. along with a text file.</li>
                                    <li>The version of this final CRC will be used for preparation of the conference schedule, certificate, souvenir and will be sent in the proceedings book to Springer for publication. Kindly do not upload this final CRC version on the conference paper submission portal .</li>
                                </ol>
                            <li>
                                <H5 class="mt-4 mb-2">Ethical Issues: Similarity and Machine Generated Content</H5>
                                <ol>
                                    <li>The work must be original (not machine generated)and should not have been submitted or published in any other conference proceedings, book chapter or journal.</li>
                                    <li>The submitted work is solely from the authors’ own work and not from the work of others (unless explicit permission for the same has been granted). This includes text, figures and tables. Furthermore, reuse of part of a published figure or table requires a copyright permission from the publishers that hold the rights. All re-published figures and tables should explicitly indicate the original source.</li>
                                    <li>If authors are using any non-benchmark images/data and are not able to cite the source of these. Authors are strictly and strongly advised to mention the following as DECLARATION before the Reference section  "We have taken permission from competent authorities to use the images/data as given in the paper. In case of any dispute in the future, we shall be wholly responsible."</li>
                                    <li>The content similarity matching must be within 20%. Single source matching not to exceed 4%. </li>
                                </ol>
                            <li>
                                <H5 class="mt-4 mb-2">English language Usage and Overall Readability</H5>
                                <ol>
                                    <li>The paper must be checked carefully for the English language usage, grammar and spellings.</li>
                                    <li>Sentence structures should be proper; poor readability or mis-connected sentences or paragraphs as an outcome of machine generated content can also become cause of drop of paper from proceedings at the time of production.</li>
                                </ol>
                            <li>
                                <H5 class="mt-4 mb-2">Title, Abstract and Keywords</H5>
                                <ol>
                                    <li>Run a quick google check of the title and or abstract of the paper to verify if the paper has been already published by the same title/ author(s) or different authors' elsewhere.</li>
                                    <li>Title of the paper should not be too short resembling that of the name of a UG or PG project/dissertation work.</li>
                                    <li>Abstract should not contain irrelevant and non-connected words and phrases. There are no sub-headings in the abstract.</li>
                                    <li>Three to Five Keywords should be listed after abstract.</li>
                                </ol>
                            <li>
                                <H5 class="mt-4 mb-2">Figures, Tables and Equations</H5>
                                <ol>
                                    <li>The figures given in the papers should be 800dpi so that the picture clarity can be maintained. Text (if any) is included in the figure--should be clearly visible and readable.</li>
                                    <li>Tables given should be editable and not in picture format.</li>
                                    <li> Mathematical Equations used should be prepared as a MathType editable equation. Equations given as text, picture/image or inserted as a table tool will not be accepted at the production stage of the paper.</li>
                                    <li>All figures, equations and tables must be numbered properly and should be duly cited within the body of the paper (text).</li>
                                    <li>All Figures and Tables should be given proper and self-explanatory captions.</li>
                                </ol>
                            <li>
                                <H5 class="mt-4 mb-2">References and their Appropriate Citations</h5>
                                <ol>
                                    <li>All listed references (Under References Section) must be complete in terms of details like: Year of publication, Vol No, Issue No, pages, name of conference/journal/book, etc. wherever required.</li>
                                    <li>All listed References (Under References Section) should be genuinely existing sources, online available and not machine generated/fake or irrelevant with respect to the main theme of the paper.</li>
                                    <li>Avoid usage of self citations or non-genuine multiple citations of a particular author or publisher in the references section.</li>
                                    <li>All  listed references (Under References Section)  must be duly cited in the body of the text. </li>
                                    <li>Citations should be given close to the information within the sentences or at the end of the sentence, not after several sentences or near the end of the paragraph. Even when citations are given, exact copying of a whole sentence (if any) should be indicated by quotation marks.</li>
                                    <li>Information from published articles must always be cited explicitly. Proper citation is to give the credit to the work that is originally published</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-secondary"><b>Disclaimer:</b></p>
                    <p class="text-secondary px-5">At any point of time, after the conference at the stage of production if it is being traced by the editor/publisher that the paper/content is AI-generated/contained similarity/readability issues/Violation of standard guidelines/Any sort of unethical issues then the paper will be dropped from the final proceedings book.  Neither the Editorial board nor the Conference Organizing Committee will be responsible for such case(s). In such circumstances, authors' cannot make claims regarding refund of registration fee.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>