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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Contact Us</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->
    
    <!-- Services Start -->
    <div class="container-fluid service pb-5 overflow-hidden">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Contact Us</h2>
            </div>
        </div>
        <div class="container pb-5">
        <div class="row g-4 justify-content-center">

          <!-- Contact Card -->
          <div class="col-lg-5 col-md-6">

            <div class="contact-card h-100 p-4 text-center">

              <div class="icon-circle mb-3">
                <i class="fas fa-envelope"></i>
              </div>

              <h4 class="fw-bold mb-3">Conference Email</h4>
              <h6 class="my-3 text-center text-secondary">For any queries related to the conference please contact the organizing team.</h6>
              <p class="mb-2">
                To: <a href="mailto:{!!env('APP_EMAIL')!!}" class="contact-link">
                  {!!env('APP_EMAIL')!!}
                </a>
              </p>

              <p>
                Cc: <a href="mailto:{!!env('CONF_EMAIL')!!}" class="contact-link">
                  {!!env('CONF_EMAIL')!!}
                </a>
              </p>

            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- About End -->
    
    <style>
        .contact-section {
          background: #f8f9fb;
        }

        .contact-card {
          background: #ffffff;
          border-radius: 14px;
          box-shadow: 0 8px 25px rgba(0,0,0,0.06);
          transition: 0.3s;
        }

        .contact-card:hover {
          transform: translateY(-6px);
          box-shadow: 0 12px 35px rgba(0,0,0,0.12);
        }

        .icon-circle {
          width: 60px;
          height: 60px;
          margin: auto;
          border-radius: 50%;
          background: linear-gradient(135deg,#c62828,#f9a825);
          color: white;
          font-size: 22px;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .contact-link {
          color: #1565c0;
          font-weight: 600;
          text-decoration: none;
        }

        .contact-link:hover {
          color: #c62828;
        }

        .btn-conf-primary {
          background: #c62828;
          color: #fff;
          border-radius: 30px;
          padding: 8px 22px;
          font-weight: 600;
        }

        .btn-conf-primary:hover {
          background: #a61b1b;
          color: #fff;
        }

    </style>

    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>