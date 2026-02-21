
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="public/assets/images/logo/fav-icon.png">
    <title>{!!env('CONF_NAME')!!}</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="public/assets/css/style-starter.css?v=1.2">

    <style>
        /* Enable dropdown on hover for desktop */
        @media (min-width: 992px) {
            .navbar .dropdown:hover > .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu {
                opacity: 0;
                visibility: hidden;
                transition: all 0.25s ease;
                display: block;
            }

            .dropdown:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
            }
        }

        p { text-align: justify; }

        a { color: var(--primary-color); }

        .bg-theme { background-color: var(--primary-color); }

        .text-theme { color: var(--primary-color); }

        .fa-check-square { color: #ff0000; }


    </style>