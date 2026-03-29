<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
    <style>
        strike{ color: #ff0000; }
    </style>
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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Important Dates</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Important Dates</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid pb-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Important Dates</h2>
            </div>
        </div>
        <div class="container">
            <div class="row g-5" style="min-height: 400px;">
                <div class="col-md-2"></div>
                <div class="col-md-8 wow fadeInRight " data-wow-delay="0.3s">
                    <div class="table-responsive">
                        <table class="table event-table align-middle">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="upcoming">
                                    <td>Submission Deadline:</td>
                                    <td>15 June 2026</td>
                                </tr>
                                <tr class="upcoming">
                                    <td>Paper Acceptance:</td>
                                    <td>15 July 2026</td>
                                </tr>
                                <tr>
                                    <td>Agenda & Conference Program Release</td>
                                    <td>20 October 2026</td>
                                </tr>
                                <tr>
                                    <td>Conference Event</td>
                                    <td>{!!env('CONF_DATE')!!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <style>
                        /* SCI Table Theme */
                        .event-table {
                            border-radius: 10px;
                            overflow: hidden;
                            border: none;
                            box-shadow: 0 6px 18px rgba(0,0,0,.08);
                            font-size: 15px;
                        }

                        /* Header */
                        .event-table thead {
                            background: linear-gradient(90deg,#c62828,#003A66);
                            color: #fff;
                        }

                        .event-table th {
                            padding: 14px 18px;
                            font-weight: 600;
                            letter-spacing: .3px;
                            border: none;
                        }

                        /* Body cells */
                        .event-table td {
                            padding: 14px 18px;
                            border-top: 1px solid #eee;
                        }

                        /* Hover effect (theme color) */
                        .event-table tbody tr:hover {
                            background: rgba(198,40,40,0.08);
                            transition: 0.25s;
                        }

                        /* Past date */
                        .event-table .past td {
                            color: #c62828;
                            text-decoration: line-through;
                        }

                        /* Upcoming highlight */
                        .event-table .upcoming {
                            color: #003A66;
                            font-weight: 600;
                        }

                        /* Responsive spacing */
                        @media (max-width:576px){
                            .event-table th,
                            .event-table td{
                                padding: 12px;
                                font-size:14px;
                            }
                        }

                    </style>
                    
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>