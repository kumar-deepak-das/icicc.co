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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Call for Special Session Proposal</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Call for Special Session Proposal</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->


        <!-- cfss -->
        <div class="w3l-about-2 pt-5 pb-0">
            <div class="container py-lg-51 1py-md-4 py-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-2">Call for Special Session Proposa</h5>
                    <h3 class="title-style">{!!env('CONF_NAME')!!}</h3>
                </div>
                <p>The editorial board expects floating ‘Special Sessions’ to supplement the regular program of ICICC in terms of emerging research topics of a specific domain of interest by eminent professors and researchers (based on their specialization and research accomplishments). The general requirements and guidelines for the ‘Special Session Proposal’ are provided below:</p>
            </div>

            <div class="container py-lg-5 py-md-4 py-2">            
                <div class="row mt-4">
                    <div class="col-lg-12">
                       
                        <table  class="table table-borderless">
                            <tr>
                                <th>1. </th>
                                <td>Each special session should provide an overview of the state-of-the-art and highlight important research directions in a field of special interest to conference participants. It should be a focused proposal rather than being defined broadly/generally.</td>
                            </tr>
                            <tr>
                                <th>2. </th>
                                <td>The following should be included in the proposal (not exceeding 02 pages):</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <p>(a) Title of the proposed special session along with a short abbreviation.</p>
                                    <p>(b) Names/affiliation of the Session Chair(s) (including brief bio and contact info) along with emails of all chairs).</p>
                                    <p>(c) Session abstract/theme (should clearly mention the significance of the topic and the rationale of the need for the proposed session).</p>
                                    <p>(d) Topics of Interest.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>3. </th>
                                <td>The final approval of the proposed session would be based on the novelty and the key area focused along with its multi-disciplinary essence.</td>
                            </tr>
                            <tr>
                                <th>4. </th>
                                <td>Please submit your Special Session Proposal by email to <span class="font-weight-bold text-theme">{!!env('CONF_EMAIL')!!}</span></td>
                            </tr>
                            <tr>
                                <th>5. </th>
                                <td>The decision of approval will be communicated through email with detailed procedural guidelines. Your approved ‘Call for Papers for Special Session’ will be then uploaded on this webpage</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <H6 class="font-weight-bold"><A class="text-theme" href="public/assets/documents/Call for Special Session.docx" target="_blank">Download Template</A> for preparation of Special Session Proposal</H6>
                    </div>

                    <!-- <div class="col-lg-12 mt-5 table-responsive d-none">
                        <H2 class="text-center mb-5">List of Special Session Co-Located With {!!env('APP_NAME')!!}</H2>
                        <table class="table table-bordered">
                            <tr class="bg-dark text-white">
                                <th>SL NO</th>
                                <th style="width:30%;" >Special Session Title</th>
                                <th>Special Session Chairs</th>
                            </tr>

                            <tr>
                                <td class="text-center"><H5>1</H5></td>
                                <td class="font-weight-bold">
                                    <A href="{{asset('public/assets/call-for-special-session/ss-1.pdf')}}" target="_blank">
                                        Innovating Healthcare: Building a Sustainable and Smart Society
                                    </A>
                                </td>
                                <td>
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Benazir Neha</b>
                                                <p class="text-left">Assistant Professor<br/>
                                                School of Computer Engineering<br/>
                                                Kalinga Institute of Industrial Technology, Deemed to be University</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Adyasha Dash</b>
                                                <p class="text-left">Assistant Professor<br/>
                                                Kalinga Institute of Industrial Technology, Deemed to be University</br>
                                                Bhubaneswar, Odisha, India</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>                        
                            
                            <tr>
                                <td class="text-center"><H5>2</H5></td>
                                <td class="font-weight-bold">
                                    <A href="{{asset('public/assets/call-for-special-session/ss-2.pdf')}}" target="_blank">
                                        AI-Driven Optimization for Renewable Energy Integration and Power Electronics (AI-REIPE)
                                    </A>
                                </td>
                                <td>
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Nazrin Salma S</b>
                                                <p class="text-left">Assistant Professor<br/>
                                                R.M.K. College of Engineering and Technology,<br/>
                                                Thiruvallur, Tamil Nadu, India.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Nageswari D</b>
                                                <p class="text-left">Associate Professor–I<br/>
                                                R.M.K. College of Engineering and Technology<br/>
                                                Thiruvallur, Tamil Nadu, India</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Bindu K V</b>
                                                <p class="text-left">Associate Professor–I<br/>
                                                R.M.K. College of Engineering and Technology<br/>
                                                Thiruvallur, Tamil Nadu, India</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b class="font-weight-bold">Dr. Hariharan N</b>
                                                <p class="text-left">Associate Professor–I<br/>
                                                R.M.K. College of Engineering and Technology<br/>
                                                Thiruvallur, Tamil Nadu, India</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div> -->
                </div>
            </div>
        </section>

        @include('inc.footer')

    </body>

</html>