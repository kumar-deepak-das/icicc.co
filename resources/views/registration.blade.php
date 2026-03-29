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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Registration</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Registration</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid pb-5 service overflow-hidden">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Registration Details</h2>
            </div>
        </div>

        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Registration Fee</h3>
                
                    <div class="">

                        <table class="table event-table align-middle text-center table-condensed">
                            <thead>
                                <tr>
                                    <th>Registration Category</th>
                                    <th>Conference Mode</th>
                                    <th>Indian Author</th>
                                    <th>Foreign Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start">Authors (Academic)</td>
                                    <td>Physical / Virtual</td>
                                    <td>₹12,000</td>
                                    <td>$200</td>
                                </tr>

                                <tr>
                                    <td class="text-start">Authors (Industry)</td>
                                    <td>Physical / Virtual</td>
                                    <td>₹17,000</td>
                                    <td>$250</td>
                                </tr>

                                <tr>
                                    <td class="text-start">Co-author / Listener / Guest</td>
                                    <td>Physical / Virtual</td>
                                    <td>₹8,000</td>
                                    <td>$100</td>
                                </tr>

                                <tr>
                                    <td class="text-start">Extra Page Charges</td>
                                    <td>Per page beyond 12 pages</td>
                                    <td>₹1,000</td>
                                    <td>$30</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <style>
                            /* SCI Table Theme */
                            .event-table {
                                border-radius: 12px;
                                overflow: hidden;
                                border: none;
                                box-shadow: 0 8px 22px rgba(0,0,0,.08);
                                font-size: 15px;
                                background: #fff;
                            }

                            /* Header */
                            .event-table thead {
                                background: linear-gradient(90deg,#c62828,#003A66);
                                /*background: linear-gradient(90deg,#003A66,#005fa3);*/
                                color: #fff;
                            }

                            .event-table th {
                                padding: 15px 18px;
                                font-weight: 600;
                                letter-spacing: .3px;
                                border: none;
                            }

                            /* Body */
                            .event-table td {
                                padding: 15px 18px;
                                border-top: 1px solid #eee;
                            }

                            /* Hover */
                            .event-table tbody tr:hover {
                                background: rgba(0,58,102,0.06);
                                transition: .25s;
                            }

                            /* Left align first column */
                            .event-table td:first-child,
                            .event-table th:first-child {
                                text-align: left;
                            }

                            /* Responsive */
                            @media (max-width: 768px) {
                                .event-table {
                                    font-size: 12px;
                                }
                                .event-table th,
                                .event-table td {
                                    padding: 10px;
                                }
                            }

                        </style>
                    </div>
                </div>
            </div>

            <div class="row my-5 g-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Online Registration & Payment Policy</h3>
                </div>
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="display-7 mb-4">Instructions for Author(s) Registration & Payment of Registration Fee</h5>
                    <ol>
                        <li>Each paper must be at least registered by one author for presentation in the conference getting it published in Springer.</li>
                        
                        <li>Registration fee for each category has been defined in the above table. Registration fee can be paid by online payment transfer through the payment gateway link provided in your acceptance email. The conference registration process is handled by Newgen Research Consultancy. For registration, sharing card details will not be accepted via email.</li>

                        <li>Co-author registration applies as mentioned in table above.</li>

                        <li>Extra page length charges would be applicable beyond 12 pages strictly. You have to make a combined fund transfer in such a case (i.e. Normal Registration + Extra Page Charges).</li>
                        
                        <li>Paper has to be presented in the conference virtually (online) or physically (offline) based on the selected mode by the presenter and paying the applicable registration fee.</li>
                        <li>In case of any additional or error payments made by the candidate, refunds could be processed in not less than ten working days.</li>
                        <li>Kindly take a snapshot of the payment confirmation page while making the payment.</li>
                        <li>Cancellation of registration without any valid reason is not permissible.</li>
                        <li>Registration must be paid and confirmed before the deadline. We may revise our terms and conditions as per the government norms, for example to reflect changes in relevant laws or regulatory requirements or improvements.</li>
                        <li>Authors are advised to share their grievance at <A class="text-secondary" href="mailto:{!!env('APP_EMAIL')!!}">{!!env('APP_EMAIL')!!}</A> and cc to <A class="text-secondary" href="mailto:newgenresearchconsultancy@gmail.com">newgenresearchconsultancy@gmail.com</A> along with the snapshot of the payment confirmation page (obtained while making the payment).</li>
                    </ol>

                    <h5 class="display-7 mt-5">Registration Fee (<span class="text-secondary">Physical Mode</span>):</h5>
                    <p>This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions, Networking, Conference Lunch and Refreshment, Conference Kit, Participation/Presentation Certificate. The conference is non-residential and delegates are kindly requested to make their own arrangement for accommodation. In case of any queries, feel free to e-mail the organizing team.</p>

                    <h5 class="display-7 mt-5">Registration Fee (<span class="text-secondary">Online Mode</span>):</h5>
                    <p>This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions in online mode, Participation/Presentation Certificate (through e-mail after the completion of conference).</p>

                    <!-- <P class="mt-3">Registration must be paid and confirmed before the deadline. We may revise our terms and conditions as per the government norms, for example to reflect changes in relevant laws or regulatory requirements or improvements.</P> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>