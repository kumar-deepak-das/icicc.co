<!doctype html>
<html lang="en">

    <head>
        @include('inc.head')
    </head>

    <body>
        
        @include('inc.nav-bar')

        <!-- inner banner -->
        <section class="inner-banner py-5">
            <div class="w3l-breadcrumb py-lg-5">
                <div class="container pt-5 pb-sm-4">
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">CRC Guidelines</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>CRC Guidelines</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        

        <!-- Committees -->
        <div class="w3l-about-2 pt-5 pb-0">
            <div class="container py-lg-51 1py-md-4 py-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:800px;">
                    <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="title-style">Guidelines for Camera Ready Copy (CRC)</h3>
                </div>
            </div>
        </div>
        
        <section class="content-section pb-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                <table class="table table-borderless table-hovered">
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> You are advised to address the comments of the reviewers in your final paper suitably which are intended to help you to improve your paper for final publication.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> The corresponding author should be clearly indicated. Put a star mark on the mail ID of the corresponding author positively.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> Authors should not mention designation etc. in the name and affiliation part below the paper title. You are requested to mention only the name, college/organization name and email IDs of all the authors compulsorily. However, they may mention acknowledgement if necessary (at the end of the paper, prior to references). Kindly mention the full name of your institution and city name.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> Authors should not give any photo and biography at the end of the paper.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> Cite all figures and tables used in the body of the text. Check English sentences, grammar and spelling carefully. You are advised to get support from some expert on this if necessary.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> It is mandatory that the submitted manuscript is solely from the authors’ work and not from the work of others (unless explicit permission for the same has been granted). This includes text, figures and tables. Information from published articles must always be cited explicitly. Proper citation is to give credit to the work that is originally published (not to follow-up work or reviews).</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> Citations should be given close to the information within the sentences or at the end of the sentence, not after several sentences or near the end of the paragraph. Even when citations are given, exact copying of a whole sentence or paragraphs should be indicated by quotation marks. Furthermore, the reuse of part of a published figure or table requires copyright permission from the publishers that hold the rights. All re-published figures and tables should explicitly indicate the original source.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> All references which are cited must be complete in terms of details like Year of publication, Vol No, Issue No, pages, name of conference/journal etc. wherever required. All references listed at the end (under the reference section of your paper ) must be cited in the body of the text.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td style="text-align: justify;"> Please note that Springer will make a quality check of each final paper before sending it for production. If any issue of plagiarism is detected which is not within the Springer policy then the paper may be rejected even though authors might have registered. Neither the Editorial Board nor the Organizing Committee will be responsible in this case. Hence, we advise authors to prepare their final manuscript carefully. The plagiarism policy for Springer is available on the <A target="_blank" href="https://link.springer.com/">SpringerLink</A> website.</td></tr>
                </table>
            </div>
        </section>

        @include('inc.footer')

    </body>

</html>