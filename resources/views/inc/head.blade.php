
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{!!env('CONF_NAME')!!}</title>
        <meta name="title" content="{!!env('CONF_NAME')!!}">
        <meta name="description" content="Join us for the International Conference on Intelligent Computing and Communication">
        <meta content="{!!env('CONF_NAME')!!}" name="keywords">
        <link rel="icon" type="image/x-icon" href="public/assets/img/logo/fav-icon.ico">
        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{!!env('APP_URL')!!}">
        <meta property="og:title" content="{!!env('CONF_NAME')!!}">
        <meta property="og:description" content="Join us for the International Conference on Intelligent Computing and Communication">
        <meta property="og:image" content="{!!env('APP_URL')!!}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{!!env('APP_URL')!!}">
        <meta property="twitter:title" content="{!!env('CONF_NAME')!!}">
        <meta property="twitter:description" content="Join us for the International Conference on Intelligent Computing and Communication">
        <meta property="twitter:image" content="public/assets/img/logo/logo-icicc.png">



        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="public/assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/assets/css/style.css?v=1.3" rel="stylesheet">

        <style>
            a{ color: #c62828; }
            p{
                text-align: justify;
                line-height: 1.75;
                margin-bottom: 5px;
            }

            ul{
                list-style-position: outside; 
                list-style-type: none;
            }

            li{
                text-align: justify;
                line-height: 1.5;
                margin-bottom: 5px;
            }

            .text-conf-green { color: #39FF14; }   /* green */

            .text-conf-primary { color:#c62828; }   /* red */
            .text-conf-accent  { color:#f9a825; }   /* yellow */
            .text-conf-info    { color:#1565c0; }   /* blue */
            .text-partner      { color:#ffffff; line-height:1; font-size: 11px; }   /* blue */

    
            
            .nested-counter {
                counter-reset: section;
                list-style: none;
                padding-left: 0;
            }

            /* Common style */
            .nested-counter li {
                counter-increment: section;
                position: relative;
                padding-left: 50px;
                margin-bottom: 6px;
            }

            /* First level */
            .nested-counter > li::before {
                content: counter(section) ") ";
                position: absolute;
                left: 0;
                width: 40px;
                text-align: right;
                font-weight: bold;
            }

            /* Nested levels */
            .nested-counter li li::before {
                content: counters(section, ".") " ";
                position: absolute;
                left: 0;
                width: 40px;
                text-align: right;
                font-weight: bold;
            }

            .nested-counter ol {
                counter-reset: section;
                list-style: none;
                padding-left: 0;
            }
        </style>