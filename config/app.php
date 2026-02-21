<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is starteHowever, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),


     //Committees
    'committees' => [
        [
            'name' => 'Chief Patron',
            'members' => [
                'Er. Saroj Kumar Sahoo, Chairman, Srusti Academy of Management and Technology (Autonomous)',
            ],
        ],
        [
            'name' => 'Patron',
            'members' => [
                'Dr. Umakanta Dash, Principal & Professor, Srusti Academy of Management and Technology (Autonomous)',
            ],
        ],

        [
            'name' => 'Honorary Chair',
            'members' => [
                'Dr Suresh Chandra Satapathy, KIIT DU, India',
            ],
        ],

        [
            'name' => 'Organising Chair',
            'members' => [
                'Dr. Sisir Ranjan Dash, Associate Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Dr. Pragyan P. Sarangi, Professor, Srusti Academy of Management and Technology (Autonomous)',
            ],
        ],

        [
            'name' => 'Publication Chair',
            'members' => [
                'Dr. Arpan Mohapatra, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Dr Vikrant Bhateja, Veer Bahadur Singh Purvanchal University, India',
            ],
        ],

        [
            'name' => 'Advisory Committee',
            'members' => [
                'Dr. Jaki Samir Khan, Associate Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Dr. Bhabani Mallia, Associate Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Dr. Anuradha Mishra, Associate Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Dr. Susmita Parija, Associate Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Ms. Anugya Prava Manjari, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
            ],
        ],

        [
            'name' => 'Organising Committee',
            'members' => [
                'Mr. Nirmal Kumar Rautra, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Mr. Manas Ranjan Satpathy, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Mr. Amit Muduli, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Ms. Kalyani Senapati, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
                'Ms. Rosy Barik, Assistant Professor, Srusti Academy of Management and Technology (Autonomous)',
            ]
        ],

        [
            'name' => 'International Advisory Committee',
            'members' => [
                'Dr. Rangaraj M.Rangayyan, Professor Emeritus of Electrical and Computer Engg.,University of Calgary, Alberta, Canada.',
                'Dr. Ajay K Katangur, Professor & Head, Computer Science, Missouri State University ',
                'Dr. Junfeng Que, Professor,Clayton State University, Atlanta, USA ',
                'Dr. Anitesh Barua, Professor, UT, USA ',
                'Dr. Noel Crespi, ITM University, France ',
                'Dr. Margarita N. Favorskaya, Siberian State Aerospace university of Science and Technology, Russian federation ',
                'Dr. Joao Manuel R. S. Tavares, Professor, University of Porto – Portugal ',
                'Dr. Kun-lin Hsieh, NTU, Taiwan ',
                'Dr. Ahamad J. Rusumdar, KIT, Germany ',
                'Dr. Nitin Naik, Aston University Birmingham, UK ',
                'Dr. Bharti Motwani, University of meryaland, USA ',
                'Dr. V. R. Chirumamilla, EUT, Netherland ',
                'Dr. Rafath Samrin, King Khalid University, Saudi Arabia ',
                'Prof. Valentina. E. Balas, Senior Member IEEE, AurelVlaicu, University of Arad, Romania ',
                'Dr. Halis Altun, MU, Turkey ',
                'Dr. Andre Coy, The University of the West Indies Mona, Jamaica ',
                'Dr. P.N. Suganthan, NTU, Singapore ',
                'Dr. Mohammad Reza Daliri, Professor, IRAN ',
                'Dr. Pawan Jain, Virginia Commonwealth University, USA ',
                'Dr. Boka Kumsa, Wollega University, Ethiopia ',
                'Shikha Gupta, Senior Engineer, Amazon',
            ]
        ],

        [
            'name' => 'National Advisory Committee',
            'members' => [
                'Prof. A. Govardhan, Senior Professor and Vice-Chancellor I/c., RGUKT Basar ',
                'Dr. P Swetha, Prof., CSE, JNTUH Dr. ',
                'G Venkata Rami Reddy, Prof. and Director Admissions, JNTUH Professor ',
                'G R Sinha, Provost (Vice Chancellor), GSFC University ',
                'Dr. Bunil Kumar Balabantaray, Assistant Professor at NIT Meghalaya ',
                'Dr. N.V.S. Narasimha Sarma, Director, IIIT Trichy Dr. ',
                'Ganpat Joshi, Professor, Dept of CSE, Madhav Unviersity, Rajasthan ',
                'Dr. G F Ali Ahammed, CSE, VTU CPGS ',
                'Dr. P.Lakshmi Narayana, Director, NERTU, OU,Hyd. ',
                'Dr. T. Srinivasulu, Dean, faculty of Eng. and Technology, KU, Warangal ',
                'Dr. P. Malla Reddy, Principal, KUCET, KU,Warangal ',
                'Dr. E. Srinivasa Reddy, Principal, UCET, ANU, Guntur ',
                'Dr. M. Sydulu, Professor, Dept. of EEE, NITW ',
                'Dr. L. Anjaneyulu, Professor & Head, Dept. of ECE, NITW ',
                'Dr. R K Bhagel, Professor, Dept. of ECE, MANIT, Bhopal ',
                'Dr. G. Lakhmi Narayanan, Prof. & Head, ECE, NIT,Trichy ',
                'Dr. D. Sriram Kumar, Prof., Dept. of ECE, NIT,Trichy ',
                'Dr. P. Palany Swamy, Prof., Dept. of ECE, NIT, Trichy ',
                'Dr. P. Chandra Shekar, Professor, Dept.of ECE, UCE, OU.Hyd ',
                'Dr. L. Pratap Reddy, Professor, Dept. of ECE, JNTUH',
                'Dr. K. Reddy Madhavi, Mohanbabu University, Tirupathi',
                'Dr. M. Asharani, Professor, Dept. of ECE, JNTUH ',
                'Dr. Ch. Srinivasa Rao, Prof., Dept. of ECE, JNTUK ',
                'Dr. Dheeraj Sunhera, Professor, Dept. of ECE, JNTUH, Jagtiyal ',
                'Dr. G. Sashibhushan Rao, Professor, Dept. of ECE, AU, Vizag ',
                'Dr. P. Rajesh Kumar, Professor and Head, Dept. of ECE, AU, Vizag ',
                'Dr. B. Anuradha, Professor, Dept. of ECE, SV University, Tirupathi ',
                'Dr. D. Vakula, Associate Professor, Dept. of ECE., NITW ',
                'Dr. Lalita Gupta, Associate Professor, Dept. of ECE, MANITB ',
                'Dr. A. Subba Rao, Assistant Professor, Dept. of ECE, MANITB ',
                'Dr. K. Bikshalu, Asst. Prof., Dept. of ECE, KU, Kothagudem ',
                'Dr. Panyam Narahari Sastry, Professor, Dept. of ECE, CBIT, Hyd ',
                'Dr. T. Ranga Babu, Professor & Head, Dept. of ECE, RVRJC, Guntur ',
                'Dr. V.V.K.D.V.Prasad, Professor & Head, Dept.of ECE, GEC, AP ',
                'Dr. Ramesh Babu Vallabhaneni, Professor, Dept. of ECE, NRIIT',
                'Dr. V.Shankar, Professor. & Head, Dept. of CSE, KITSW ',
                'Dr. S. Anuradha, Assoc. Professor., Dept. of ECE, NITW',
                'Dr. T. Ramasri, Professor, Dept. of ECE, SV University, Tirupathi ',
                'Nikhil Gunda, CEO, Digital Connect',
            ]
        ],
    ],

];
