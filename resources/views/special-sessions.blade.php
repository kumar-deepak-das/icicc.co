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
                <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Special Sessions</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Special Sessions</li>
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                    </div>
                    <h2 class="display-7 mb-4">Special Sessions</h2>
                </div>
            </div>
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                        <h3 class="display-7 mb-4">Call For Special Session Proposals</h3>
                        <p>The editorial board expects floating ‘Special Sessions’ to supplement the regular program of <b>{!!env('CONF_NAME')!!}</b> in terms of emerging research topics of a specific domain of interest by eminent professors and researchers (based on their specialization and research accomplishments). The general requirements and guidelines for the ‘Special Session Proposal’ are provided below:</p>
                    
                        <ol>
                            <li>Each special session should provide an overview of the state-of-the-art and highlight important research directions in a field of special interest to conference participants. It should be a focused proposal rather than being defined broadly/generally. We therefore expect that there are no overlaps with the regular tracks of {!!env('CONF_NAME')!!}.</li>

                            <li>The following should be included in the proposal (not exceeding 02 pages):</li>
                            <ol type="a">
                                <li>Title of the proposed special session along with short abbreviation.</li>
                                <li>Names/affiliation of the Session Chair(s) (including brief bio and contact info) along with email-id of all chairs).</li>
                                <li>Session abstract/theme (should clearly mention the significance of the topic and the rationale of the need for the proposed session).</li>
                                <li>Topics of Interest.</li>
                                <li>Submission Process (E-Mail submission only).</li>
                            </ol>
                            <li>The final approval of the proposed session would be based on the novelty and the key area focused along with its multi-disciplinary essence.</li>

                            <li>To ensure uniformity in the content, please use the attached template for preparation of the ‘Special Session Proposal’. The standard template would be used for uploading the call for your special session on conference website</li>

                            <li>Please submit your Special Session Proposal by email

                                <p class="ms-5 text-primary">
                                    To: <A class="ms-1 text-secondary" href="mailto:{!!env('APP_EMAIL')!!}">{!!env('APP_EMAIL')!!}</A>
                                </p>
                                <!-- <p class="ms-5 text-primary">
                                    Cc: <A class="ms-1 text-secondary" href="mailto:{!!env('CONF_EMAIL')!!}">{!!env('CONF_EMAIL')!!}</A>
                                </p> -->

                            </li>
                            <li>The decision of approval will be communicated within three days along with detailed procedural guidelines’. Your approved ‘Call for Papers-for Special Session’ would be then uploaded on this webpage.</li>                          </li>
                        </ol>
                    </div>

                    <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                        <!-- <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5> -->
                        <h5 class="display-7 mb-4">Template for preparation of Special Session Proposal</h5>
                        <p class="text-center my-5">
                            <A class="btn btn-primary" href="public/assets/doc/Call_for_Special_Session.zip" target="_blank">Download Template</A>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->
        
        @include('inc.footer')
        @include('inc.script')
    
    </body>

</html>