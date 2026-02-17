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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Refund Policies</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Refund Policies</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        

        <!-- Committees -->
        <div class="w3l-about-2 pt-5 pb-0">
            <div class="container py-lg-51 1py-md-4 py-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="title-style">Refund Policies</h3>
                </div>
            </div>
        </div>
        
        <section class="content-section pb-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                <table class="table table-borderless">
                    <tr><td><i class="far fa-check-square"></i></td><td>In case of any additional or error payments made by the candidate, refunds could be processed in not less than ten working days.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td>Kindly take a snapshot of the payment confirmation page while making the payment.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td>Cancellation of registration without any valid reason is not permissible.</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td>Authors are advised to share their grievance at editor.icdect@gmail.com along with the snapshot of the payment confirmation page (obtained while making the payment).</td></tr>
                    <tr><td><i class="far fa-check-square"></i></td><td>Change of mode from physical (offline) to virtual (online) is permissible with prior intimation with proper reason by the registered delegate/author. However, refund is not permissible.</td></tr>
                </table>
            </div>
        </section>

        @include('inc.footer')
    </body>

</html>