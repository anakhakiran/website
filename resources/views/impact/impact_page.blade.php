@extends('layouts.main')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/impact.css') }}">
@endpush
@section('title')
DDL Glossary
@endsection
@section('description')
DDL Glossary
@endsection
@section('page_image')
{{ asset('storage/files/logo-dd.png') }}
@endsection
@section('content')
<section class="general-content">
    <div class="map">
        <svg xmlns="http://www.w3.org/2000/svg" width="625" height="482">
            <path id="af" fill="none" stroke="#000000" stroke-width="3" d="m 42.27189,145.20764 0,5.30699 -4.34208,8.44293 0.48245,4.10085 -4.82453,0.24123 0.24123,7.47802 0.48245,3.37718 -4.10085,15.19728 -4.34208,3.6184 -0.48246,3.6184 -2.17104,0.72368 -2.41226,3.85962 -7.2368,0 8.44293,12.54379 -11.57888,-0.24123 -6.27189,7.47803 0.72368,19.53936 -2.6535,2.89472 0.24123,5.30698 6.51312,4.58331 9.64907,0.24123 2.41226,2.89472 -5.06576,0.9649 0.48246,2.89472 -13.26747,13.26747 -0.48245,7.47803 10.37274,41.73221 -2.89472,8.68416 0.48246,19.0569 -2.17104,2.41227 1.68858,8.92538 40.52608,8.44294 3.85963,20.02181 -3.85963,1.44736 0.48245,7.71925 -46.07429,48.48656 73.33291,27.49984 51.86373,-3.37717 20.50426,5.06576 3.37718,3.37717 6.99557,-7.71925 26.77616,-2.41227 8.68416,2.41227 56.92949,-15.19728 5.30698,-6.51312 -6.75434,-5.30699 4.82453,-8.20171 1.92981,-11.8201 -4.5833,-5.54822 6.51312,-20.26303 6.27189,-0.72368 7.96048,-7.47803 0.24123,-5.30699 4.5833,-0.48245 5.54822,-5.30699 6.27189,-0.9649 -0.48245,4.34208 23.88143,0 5.78944,-4.10086 c 0,0 4.82454,0.96491 4.82454,0 0,-0.9649 0,-3.85962 0,-3.85962 l -7.71926,-0.48246 -4.10085,-5.78944 9.40784,-0.24122 5.30699,-6.03067 5.54821,-0.48245 6.75435,-9.8903 2.65349,0.24123 2.89472,3.6184 6.99557,0 2.89472,-3.37717 9.8903,1.92981 0.72368,4.10085 2.89472,2.6535 c 0,0 -0.96491,2.89472 0.48245,2.89472 1.44736,0 5.30699,0 5.30699,0 0,0 0,-2.6535 0.9649,-2.6535 0.96491,0 5.30699,0 5.30699,0 l 11.8201,-16.16218 -2.89472,-21.46917 -1.44736,-3.85963 2.6535,-6.27189 3.37717,0 4.34208,-6.75435 -4.10085,-4.58331 c 0,0 6.03066,-4.82453 5.78944,-5.78944 -0.24123,-0.9649 -0.96491,-8.92538 -0.96491,-8.92538 l 2.41227,-3.13595 6.75434,0 3.37718,-3.13594 3.6184,3.6184 3.13594,0 0.48246,-2.6535 4.10085,-0.24122 0.48245,-3.85963 3.6184,0 8.92539,-7.2368 -7.96048,-8.68416 1.44736,-6.99557 -3.13595,-0.48246 -0.24122,-3.85962 -5.78944,-0.96491 -6.75435,-9.64907 1.92981,-4.82453 22.91654,3.85963 20.50426,-1.44736 1.92981,-2.17104 6.75435,-3.6184 2.17104,-3.37718 -1.44736,-6.51312 1.44736,-6.03066 -3.6184,-2.17104 -3.13595,-4.34208 -0.24122,-2.89472 4.34208,-0.24123 -0.72368,-7.47802 c 0,0 2.41226,-0.24123 3.6184,-0.96491 1.20613,-0.72368 4.82453,-5.06576 4.82453,-5.06576 l 1.20613,-3.85963 4.10086,-2.89472 4.82453,-2.41226 0.72368,-6.03067 4.82453,-5.30699 -1.20613,-1.44736 -4.58331,-5.06576 4.34208,-7.2368 -1.92981,-6.99557 -4.10085,-2.65349 0.9649,-5.06576 -1.92981,-1.20613 -0.96491,-3.6184 -5.06576,-6.75435 -8.44293,-4.58331 5.30699,-6.51312 5.30698,-2.41226 5.06576,-7.71926 3.37718,-5.78944 7.2368,2.6535 0.72368,-1.20614 -1.92982,-3.6184 7.2368,-1.20613 1.44736,-2.65349 2.89472,-1.44736 1.20614,-3.37718 4.10085,-0.24122 -0.48245,-4.58331 11.09642,-1.68859 4.34208,-4.34207 14.95605,-0.48246 1.92982,-2.17104 6.03066,-0.48245 8.20171,-1.68859 24.60512,-1.20613 5.30698,2.65349 3.85963,0.48246 2.41227,-1.20614 c 0,0 -2.89472,-3.6184 0,-3.6184 2.89472,0 4.82453,0 4.82453,0 l 6.99557,-5.54821 5.30699,-1.44736 0,-2.41227 -7.96048,-3.6184 -0.24123,-1.68858 c 0,0 5.06576,0.9649 5.30699,0 0.24123,-0.96491 -0.24123,-4.34208 -0.24123,-4.34208 l 6.75435,0.24122 4.10085,-3.37717 3.13595,3.37717 2.89472,0 -1.20613,-3.37717 -6.75435,-5.06576 -13.99115,0.241227 -2.89472,-2.412267 -0.48245,2.653493 -3.6184,0 -0.96491,3.135947 -16.40341,7.71925 -3.13594,0 -4.34208,-0.9649 -0.48246,-3.13595 6.51312,-0.964907 -0.48245,-5.78944 -8.92539,0.482454 -4.82453,-1.44736 -3.6184,1.44736 -4.58331,1.44736 -6.51312,3.377173 -0.24122,2.65349 -12.78502,5.30699 -5.30698,10.37275 -13.5087,1.68858 -21.22794,19.29813 -6.51312,0 c 0,0 -8.44293,-12.06133 -9.16661,-13.02623 -0.72368,-0.96491 -1.44736,-7.2368 -1.44736,-7.2368 l 0.72368,-9.16662 1.92981,-14.714823 0.48245,-13.508693 2.17104,-2.89472 0.24123,-7.719253 -5.54821,0 -3.85963,3.859627 -4.58331,-0.482454 0,-6.754346 3.85963,-2.89472 0,-8.442933 -15.92096,-9.407839 -8.68416,-0.241227 -7.47802,8.201706 -5.54822,10.613973 -8.2017,8.442933 -4.10086,1.688587 -0.24122,3.859626 4.34208,2.653493 0.9649,8.442933 -4.82453,5.78944 -5.54821,0 -4.58331,-3.6184 -3.85963,1.206133 -4.10085,-0.72368 -3.37717,2.412267 -2.17104,-2.17104 -4.10086,0.482453 -5.30698,6.51312 0.48245,7.478027 2.89472,4.82453 -6.27189,7.2368 -3.6184,-0.24122 -8.44293,-10.13152 -4.58331,1.92981 -3.6184,-0.96491 -7.2368,1.68859 -3.85963,4.58331 -6.03066,1.68858 -2.41227,2.41227 -3.13595,0 0.24123,4.34208 -5.54821,0.48245 -5.54822,4.82453 -6.51312,-7.23679 c 0,0 1.44736,-1.92982 -0.24122,-1.92982 -1.68859,0 -3.6184,0 -3.6184,0 l 0.9649,-6.75434 -3.37717,-1.20614 -5.78944,-0.9649 -1.20613,0.9649 -2.89472,-2.65349 -4.34208,3.85963 -2.17104,2.89472 -4.10085,-1.68859 -1.68859,-3.6184 -3.13595,-2.65349 -3.13594,-3.85963 -6.03067,-1.44736 -7.71925,0.72368 -1.20614,2.65349 -4.10085,-1.44736 -4.34208,0.48246 -0.48245,3.13594 -1.68859,-0.72368 -2.89472,-2.65349 -4.10085,2.17104 -2.17104,-2.41227 -6.75435,-4.5833 -4.34208,-0.723684 c 0,0 -3.85962,-2.171039 -5.06576,-2.894719 -1.20613,-0.72368 -6.03066,-0.72368 -6.03066,-0.72368 l -2.41227,3.377173 0.24123,6.51312 c 0,0 -3.6184,5.30699 -4.58331,5.30699 -0.96491,0 -20.50427,0 -20.50427,0 l -12.06133,6.51312 0.72368,10.37274 -7.47803,12.78501 0.24123,6.2719 -7.96048,15.67973 c 0,0 -5.78944,-0.96491 -6.27189,0.24123 -0.48245,1.20613 -0.72368,3.6184 -1.68859,3.6184 -0.9649,0 -6.27189,-0.48246 -6.27189,-0.48246 l -4.10085,3.85963 0.24122,3.85963 -6.75434,-0.48246 -5.54822,2.6535 -6.99557,-0.24123 -3.13595,2.65349 -19.0569,1.44736 5.06576,9.16662 -5.78944,3.13594 -0.48246,10.61397 -5.30698,0.24123 -13.99115,10.13152 -4.34208,-0.24123 -3.13594,-3.6184 -8.44294,7.71926 -2.89472,-4.34208 5.06576,-4.34208 -4.34208,-1.68859 -4.10085,0 -7.2368,-7.96048 -7.2368,2.89472 -9.40784,-2.65349 -8.68416,-10.13152 -5.30698,-0.24123 1.20613,-0.48245 z" />
            <g id="provinces" fill="none" stroke="#000000" stroke-width="1">
                <path id="Kandahar" d="m 225.219,315.78125 c 0,0 0.7017,8.23698 -11.6875,11 -2.2182,0.4947 -5.4062,4.15625 -5.4062,4.15625 l 0,1.03125 -3.0625,2.71875 -1.0313,7.15625 -5.4687,6.84375 -6.8125,5.4375 -3.4063,9.21875 -18.0937,99.96875 0.375,8.625 17.3437,-1.5625 8.6875,2.40625 56.9375,-15.1875 5.3125,-6.5 -6.7812,-5.3125 4.8437,-8.21875 1.9375,-11.8125 -4.5937,-5.53125 6.5,-20.28125 6.2812,-0.71875 7.9688,-7.46875 0.2187,-5.3125 4.5938,-0.5 5.5625,-5.28125 6.25,-0.96875 -0.4688,4.34375 23.875,0 5.7813,-4.125 c 0,0 4.8437,0.96491 4.8437,0 l 0,-3.84375 -7.7187,-0.46875 -4.0938,-5.8125 1.0938,-0.0312 -11.3438,-3 -0.6875,-9.21875 -4.0937,-1.6875 -5.125,2.71875 -8.5313,-0.6875 -6.125,-5.4375 -8.875,1.34375 -7.5,6.15625 -5.4687,0.34375 -6.125,-2.0625 1,-8.1875 7.1875,-4.09375 0,-12.28125 4.4375,-7.15625 -5.7188,-5.4375 -0.7812,-0.71875 -4.4375,0 -4,-0.3125 -4.0313,-2.75 -4,2.0625 -8.375,-0.3125 -0.5,-3.0625 -6.6875,-0.1875 z" />
                <path id="Faryab" d="m 207.7503,68.25 -12.0625,6.53125 0.7187,10.375 -7.4687,12.78125 0.25,6.25 -7.9688,15.6875 c 0,0 -5.7988,-0.95614 -6.2812,0.25 -0.4825,1.20613 -0.7226,3.625 -1.6875,3.625 -0.9649,0 -6.25,-0.5 -6.25,-0.5 l -4.125,3.875 0.25,3.84375 -6.1563,-0.4375 0,11.75 -1.7187,3.40625 5.4687,4.78125 0,7.15625 9.875,1.03125 2.75,4.09375 6.4688,-1.03125 -0.6875,10.59375 10.875,2.46875 4.8125,-1.8125 13.6562,-0.3125 9.5625,3.0625 6.125,-3.0625 -4.7812,-4.78125 -1,-4.78125 3.0625,-2.0625 0.3437,-3.0625 1.6875,-3.0625 6.1563,-5.8125 1.375,-5.78125 6.4687,2.03125 2.7188,-3.0625 -3.75,-5.8125 -2.7188,-1 -5.125,1 -6.125,2.0625 -14.6875,-4.09375 3.75,-5.8125 1.0313,-9.1875 2.375,-5.46875 10.25,0.34375 -0.6875,-5.8125 -1.0313,-6.125 -1.3437,-4.09375 1.6875,-4.4375 -3.75,-4.4375 -0.3473,-9.59651 L 226.594,68.25 z" />
                <path id="Sar-e-Pol" d="m 272.1878,105.78125 -7.7813,1.6875 -14.3125,0 -3.4062,1.03125 -1.7188,6.15625 -7.1562,1.34375 -7.1563,1.03125 -4.7812,3.75 -1.0313,9.21875 -0.6875,3.0625 8.3125,2.65625 1.25,-0.25 2.7188,1 3.75,5.8125 -2.7188,3.0625 -6.4687,-2.03125 -1.375,5.78125 -6.1563,5.8125 -1.6875,3.0625 -0.3437,3.0625 -3.0625,2.0625 1,4.78125 4.7812,4.78125 -0.031,0.0312 5.8438,0.28125 8.875,7.53125 11.5937,1.34375 2.375,9.5625 6.5,0 c 1.7057,0 3.0729,-2.05989 4.4375,-1.71875 0.1122,0.0281 0.2625,0.12894 0.4375,0.25 l 4.6563,-4.6875 0.6875,-8.1875 7.5,-3.40625 4.0937,-6.46875 5.125,-2.0625 0.6875,-4.09375 3.4063,-1.34375 3.4062,-2.40625 2.4063,-5.09375 -1.0313,-3.78125 0.3438,-5.78125 -5.8125,0.6875 -1.0313,4.09375 -2.375,1 -4.0937,2.75 -4.4375,0 -5.7813,3.75 -7.875,-0.6875 4.4375,-3.40625 3.0938,-3.40625 1.6875,-4.4375 1.0312,-5.8125 -1.375,-10.5625 -5.4375,-6.5 2.7188,-3.75 0,-4 1.9687,-6.5625 z" />
                <path id="Samangan" d="m 340.9378,102.09375 -1.4688,2.3125 -13.3125,-2.03125 -3.4062,5.09375 -1.0313,10.25 -4.0937,3.0625 -9.1875,-5.4375 -3.0938,1.34375 -1.3437,7.84375 c 0,0 -3.0756,0.34375 -4.7813,0.34375 -1.7057,0 -7.5,5.8125 -7.5,5.8125 l 5.0938,7.15625 -1.75,4.8125 0.4062,-0.0312 -0.3437,5.78125 1.0312,3.78125 -2.4062,5.09375 -3.4063,2.40625 -3.4062,1.34375 -0.6875,4.09375 6.8125,1.71875 c 0,0 5.4843,-2.03646 7.5312,-2.71875 1.5352,-0.51172 4.5938,-0.6875 4.5938,-0.6875 l 1.3125,1.59375 4.6562,-4.65625 10.5625,2.71875 4.7813,-2.0625 6.8437,2.0625 8.1875,-6.15625 0.6563,-2.71875 -3.0625,-2.71875 3.0625,-4.78125 1.375,-2.40625 1.7187,-7.84375 5.0938,-6.125 3.75,-1.375 1.7187,-5.4375 -7.5,-3.78125 -4.0937,-6.46875 -1.7188,-3.0625 c 0,0 3.4271,-5.47396 2.0625,-6.15625 -1.2118,-0.60588 -3.2192,-1.72032 -3.6562,-1.96875 z" />
                <path id="Nurestan" d="m 468.469,128.875 -1.75,5.5625 -3.75,9.5625 -0.3437,5.09375 -4.4375,2.40625 -0.3438,7.5 -8.1875,-1.71875 -2.375,3.40625 -4.7812,0.6875 1.6875,-5.09375 -2.375,-5.8125 c 0,0 -4.1068,-2.38021 -5.8125,-3.0625 -1.7058,-0.68229 -2.7188,1.34375 -2.7188,1.34375 l -3.0625,2.0625 0.031,-0.25 -0.094,0.0312 -2.3437,7.375 -5.7813,4.09375 -6.1562,3.40625 3.75,4.09375 -0.3125,6.15625 3.0625,5.4375 5.125,0 8.8437,8.1875 7.5313,-0.3125 2.375,-3.4375 2.0312,-3.75 10.9375,-1 7.8438,-0.6875 4.0937,-6.84375 0,-6.125 10.5625,-2.0625 0.6875,-3.75 7.4375,-3.71875 -1.3125,-4.71875 -4.0937,-2.65625 0.9687,-5.0625 -1.9375,-1.2187 -0.9687,-3.625 -5.0625,-6.75 -8.4375,-4.59375 0.125,-0.15625 -0.6563,0 z" />
                <path id="Kunar" d="m 489.844,157.65625 -7.4375,3.71875 -0.6875,3.75 -10.5625,2.0625 0,6.125 -4.0937,6.84375 -7.8438,0.6875 -10.9375,1 -2.0312,3.75 -1.1563,1.65625 3.875,9.96875 1.7188,9.1875 c 0,0 5.4479,2.40625 6.8125,2.40625 1.1787,0 5.5182,-0.24316 6.7187,-0.3125 l -0.031,-0.5625 4.3438,-0.25 -0.75,-7.46875 c 0,0 2.4188,-0.24507 3.625,-0.96875 1.2061,-0.72368 4.8437,-5.0625 4.8437,-5.0625 l 1.1875,-3.875 4.0938,-2.875 4.8437,-2.4375 0.7188,-6.03125 4.8125,-5.28125 -1.1875,-1.46875 -4.5938,-5.0625 4.3438,-7.21875 -0.625,-2.28125 z" />
                <path id="Panjshir" d="m 430.969,138.46875 -3.8125,0.0625 -4.7812,3.75 -2.625,0.0312 -5.5625,3.71875 -3.75,4.09375 -0.6875,5.46875 c 0,0 -0.7006,1.00781 -2.4063,2.03125 -1.7057,1.02344 -5.7812,3.75 -5.7812,3.75 l -5.4688,0.34375 -1.0312,2.40625 -7.0313,0.59375 -2.2187,7.71875 23.4687,1.15625 1.4688,8 2.625,-1.78125 3.875,-3.0625 2,-2.875 0.1562,0.125 0.2188,-4.4375 -3.75,-4.09375 6.1562,-3.40625 5.7813,-4.09375 2.3437,-7.375 0.062,-0.0312 0.031,0 z" />
                <path id="Baghlan" d="m 344.844,104.40625 c 0.4653,1.36643 -2.3125,5.8125 -2.3125,5.8125 l 1.7188,3.0625 4.0937,6.46875 7.5,3.78125 -1.7187,5.4375 -3.75,1.375 -5.0938,6.125 -1.7187,7.84375 -1.375,2.40625 -3.0625,4.78125 3.0625,2.71875 -0.6563,2.71875 -8.1875,6.15625 -0.25,-0.0625 3.75,4.78125 -3.5937,6.84375 4.5625,8.3125 18.0312,-0.0937 12.2813,-9.5625 9.5625,-0.34375 3.4062,-6.125 6.125,-2.0625 7.8438,-0.65625 1.0312,-2.40625 5.4688,-0.34375 c 0,0 4.0755,-2.72656 5.7812,-3.75 1.7057,-1.02344 2.4063,-2.03125 2.4063,-2.03125 l 0.6875,-5.46875 3.75,-4.09375 6.125,-4.09375 -2.375,-4.09375 -5.4688,-4.4375 -3.75,-4.78125 0.3438,-7.5 -4.0938,-1.03125 -1.7187,-5.4375 -6.125,3.75 -6.8125,3.40625 -5.625,-5.03125 0.1562,0.59375 -6.1562,-3.40625 -8.5,-1.03125 -4.0938,-5.78125 -8.1875,-2.40625 z" />
                <path id="Herat" d="m 42.2815,145.21875 -1.2187,0.46875 1.2187,0.0625 0,-0.53125 z m 0,0.53125 0,4.75 -4.3437,8.46875 0.4687,4.09375 -4.8125,0.25 0.25,7.46875 0.4688,3.375 -4.0938,15.1875 -4.3437,3.625 -0.5,3.625 -2.1563,0.71875 -2.4062,3.875 -7.25,0 8.4375,12.53125 -11.5625,-0.25 -6.2813,7.46875 0.7188,19.5625 -2.6563,2.875 0.25,5.3125 6.5,4.59375 9.6563,0.25 2.2187,2.65625 2.125,0.40625 9.4688,3.375 10.9062,0 4.4375,-3.0625 6.5,1.03125 2.7188,18.40625 0.6875,16.03125 5.125,5.8125 13.9687,-3.40625 7.5,-2.40625 1.0313,-7.5 c 0,0 11.6093,-2.71875 13.6562,-2.71875 2.0469,0 9.875,-0.6875 9.875,-0.6875 l 9.2188,-9.21875 -3.4063,-10.5625 7.5,-6.15625 13.3125,-1.34375 c 0,0 0.3385,-5.13802 -0.3437,-6.84375 -0.6823,-1.70573 -3.0625,-6.8125 -3.0625,-6.8125 l 0.3437,-5.46875 -1.7187,-3.0625 5.8125,-6.8125 0,-3.09375 7.8437,-0.65625 4.7813,2.71875 17.7187,0 -0.6875,-4.78125 0.6875,-8.1875 12.2813,0 0,-6.46875 -11.5938,0 -4.7812,-1.03125 -6.4688,5.125 -12.9687,0.34375 -5.8125,-1.71875 -4.4375,-5.125 -12.2813,-1 c 0,0 -5.1042,-4.78646 -6.4687,-5.46875 -1.3646,-0.68229 -6.4688,-1.03125 -6.4688,-1.03125 l -4.4375,-4.09375 -2.0625,-0.34375 -1.6875,-8.875 1,-6.46875 6.8438,-4.09375 1.2187,-6.15625 -7.5937,5.5 -4.3438,-0.21875 -3.125,-3.625 -8.4375,7.71875 -2.9062,-4.34375 5.0625,-4.34375 -4.3438,-1.6875 -4.0937,0 -7.25,-7.96875 -7.2188,2.90625 -9.4062,-2.65625 -8.6875,-10.125 -4.0938,-0.1875 z" />
                <path id="Farah" d="m 20.844,256.1875 0.1875,0.21875 -5.0625,0.96875 0.5,2.90625 -13.2812,13.25 -0.4688,7.5 10.375,41.71875 -2.9062,8.6875 0.4687,19.0625 -2.1562,2.40625 1.6875,8.9375 35.0937,7.3125 1.1563,-6.84375 3.4062,-3.40625 -1.0312,-2.375 c 0,0 4.7864,-0.35677 5.4687,-2.0625 0.6823,-1.70573 6.8125,-19.09375 6.8125,-19.09375 l 27.9688,1.6875 5.125,-1.6875 15.6875,3.40625 7.5,-9.5625 9.2187,0.6875 4.4375,2.40625 27.2813,-14.34375 9.9062,-8.53125 -1.375,-4.09375 5.8125,-7.5 7.1563,-1.71875 1.7187,-8.53125 7.1563,-3.75 -1.7188,-8.53125 -4.4375,0.34375 -2.375,-2.71875 -2.0625,0 -3.0625,7.84375 c 0,0 -5.7969,0.67709 -7.8437,-0.6875 -2.0469,-1.36458 -5.7813,-3.75 -5.7813,-3.75 l 1,-4.78125 -7.1562,-9.53125 c 0,0 -5.112,5.77865 -7.5,5.4375 -2.3881,-0.34114 -8.5313,0.34375 -8.5313,0.34375 l -5.125,5.125 -16.375,-0.34375 -8.875,8.875 c 0,0 -7.8281,0.6875 -9.875,0.6875 -2.0469,0 -13.6562,2.71875 -13.6562,2.71875 l -1.0313,7.5 -7.5,2.40625 -13.9687,3.40625 -5.125,-5.8125 -0.6875,-16.03125 -2.7188,-18.40625 -6.5,-1.03125 -4.4375,3.0625 -10.9062,0 -9.4688,-3.375 -2.125,-0.40625 z" />
                <path id="Nimruz" d="m 117.3753,329.21875 -7.5,9.5625 -15.6875,-3.40625 -5.125,1.6875 -27.9688,-1.6875 c 0,0 -6.1302,17.38802 -6.8125,19.09375 -0.6823,1.70573 -5.4687,2.0625 -5.4687,2.0625 l 1.0312,2.375 -3.4062,3.40625 -1.1563,6.84375 5.4375,1.125 3.8438,20 -3.8438,1.46875 0.4688,7.71875 -46.0625,48.46875 73.3437,27.5 9.9063,-0.65625 -0.6563,-26.5 21.4688,-37.53125 4.7812,-11.9375 0,-8.1875 6.1563,-11.25 1.3437,-21.5 10.25,-25.9375 -0.6875,0.375 -4.4375,-2.40625 -9.2187,-0.6875 z" />
                <path id="Badghis" d="m 156.3753,130.5 -5.5625,2.65625 -6.9688,-0.25 -3.1562,2.65625 -19.0625,1.4375 5.0625,9.1875 -5.7813,3.125 -0.4687,10.625 -5.3125,0.21875 -6.4063,4.625 -1.2187,6.15625 -6.8438,4.09375 -1,6.46875 1.6875,8.875 2.0625,0.34375 4.4375,4.09375 c 0,0 5.1042,0.34896 6.4688,1.03125 1.3645,0.68229 6.4687,5.46875 6.4687,5.46875 l 12.2813,1 4.4375,5.125 5.8125,1.71875 12.9687,-0.34375 6.4688,-5.125 4.7812,1.03125 11.2813,0 3.375,-4.09375 9.2187,0 15.0313,-3.75 -1.7188,-8.875 -5.8125,-8.53125 -7.8437,-4.4375 -11.9375,-2.71875 0.6875,-10.59375 -6.4688,1.03125 -2.75,-4.09375 -9.875,-1.03125 0,-7.15625 -5.4687,-4.78125 1.7187,-3.40625 0,-11.75 -0.5937,-0.0312 z" />
                <path id="Jowzjan" d="m 235.0003,53.0625 -2.4063,3.375 0.25,6.5 c 0,0 -3.6288,5.3125 -4.5937,5.3125 l -1.6563,0 -6.875,11.5625 0.3438,9.59375 3.75,4.4375 -1.6875,4.4375 1.3437,4.09375 1.0313,6.125 0.6875,5.8125 -10.25,-0.34375 -2.375,5.46875 -1.0313,9.1875 -3.75,5.8125 14.6875,4.09375 6.125,-2.0625 3.875,-0.75 -8.3125,-2.65625 0.6875,-3.0625 1.0313,-9.21875 4.7812,-3.75 7.1563,-1.03125 7.1562,-1.34375 1.7188,-6.15625 3.4062,-1.03125 14.3125,0 7.8438,-1.6875 -4.75,-6.8125 3.4062,-5.46875 -4.7812,-9.21875 2.7187,-7.15625 -0.375,-14.28125 -0.4062,2.75 -1.6875,-0.71875 -2.9063,-2.65625 -4.0937,2.1875 L 257.219,62 250.4378,57.40625 246.094,56.6875 c 0,0 -3.8564,-2.18257 -5.0625,-2.90625 -1.2061,-0.72368 -6.0312,-0.71875 -6.0312,-0.71875 z" />
                <path id="Helmand" d="m 205.4065,271.5625 -2.0625,3.75 -6.4687,1.375 -9.7813,-0.6875 1.5938,7.84375 -7.1563,3.75 -1.7187,8.53125 -7.1563,1.71875 -5.8125,7.5 1.375,4.09375 -9.9062,8.53125 -26.5938,13.96875 0,0.0312 -10.25,25.90625 -1.3437,21.5 -6.1563,11.25 0,8.1875 -4.7812,11.9375 -21.4688,37.53125 0.6563,26.5 -8.7188,0.5625 0,0.0312 50.6563,-3.3125 20.5,5.0625 3.375,3.375 7,-7.71875 9.4375,-0.84375 -0.375,-8.625 18.0937,-99.96875 3.4063,-9.21875 6.8125,-5.4375 5.4687,-6.84375 1.0313,-7.15625 3.0625,-2.71875 0,-6.5 3.75,-5.125 -4.4375,-22.5 2.4062,-4.09375 7.1563,-13.3125 -5.4688,-8.875 -6.125,0 z" />
                <path id="Zabul" d="m 286.2503,286.25 -3.0625,5.125 1.0312,5.09375 -4.7812,4.4375 -7.5,8.875 0.6562,-5.8125 -2.375,-1 -4.7812,4.4375 -4.4375,3.40625 -1.3438,5.125 -1.625,5.125 5.7188,5.4375 -4.4375,7.15625 0,12.28125 -7.1875,4.09375 -1,8.1875 6.125,2.0625 5.4687,-0.34375 7.5,-6.15625 8.875,-1.34375 6.125,5.4375 8.5313,0.6875 5.125,-2.71875 4.0937,1.6875 0.6875,9.21875 11.3438,3 8.3125,-0.1875 5.2812,-6.03125 5.5625,-0.5 4.5625,-6.65625 -3.6875,-2.9375 3.4063,-7.84375 -1.3438,-5.4375 -6.5,0 -4.0937,-3.09375 -9.2188,1.375 -6.4687,2.71875 -7.5,-3.75 2.0312,-3.75 14.6875,-19.78125 0,-2.03125 -9.9062,-1.375 -0.3438,-5.8125 -1.3437,-2.71875 1.3437,-9.21875 c 0,0 -4.4219,-2.03125 -6.4687,-2.03125 -2.0469,0 -2.7188,-1.71875 -2.7188,-1.71875 l -8.875,-0.34375 -5.4687,-2.375 z m 27.6562,83.53125 1.9688,2.8125 0.031,0 -2,-2.8125 z" />
                <path id="Daykundi" d="m 263.7503,217 -8.5313,1.6875 -6.5,1.03125 -5.125,3.40625 -6.4687,-3.0625 c 0,0 -11.6042,0.6875 -12.9688,0.6875 -1.3646,0 -2.0312,7.15625 -2.0312,7.15625 l 1,6.46875 2.0625,6.84375 c 0,0 -4.7917,1.35156 -6.1563,2.375 -1.3646,1.02344 -0.6562,4.09375 -0.6562,4.09375 l 3.0625,1.71875 c 0,0 2.0286,8.86198 1.6875,11.25 -0.3412,2.38802 -5.7813,7.84375 -5.7813,7.84375 l -5.8125,3.0625 5.4688,8.875 -2.7188,5.0625 5.9688,0.5 4.625,-2.625 8.5,3.75 9.25,-6.875 5.625,2 -1.125,4.125 8.125,-1.875 -0.5,-4.875 9.75,-4.25 6.5,4.875 7.375,-2.75 -0.6563,-3.875 9.9063,-7.15625 -1.375,-2.40625 1.0312,-3.75 5.125,-0.34375 5.0938,-5.4375 5.8125,0 5.7812,-6.15625 -10.2187,-9.90625 -4.7813,-0.3125 -3.75,2.71875 -16.7187,-0.34375 1.375,-4.4375 -3.75,-6.46875 0,-10.25 -7.5,-2.375 z m -38.5313,98.78125 c 0,0 0.065,0.80964 -0.2187,2 0.2842,-1.19385 0.2187,-2 0.2187,-2 z m -0.2187,2 c -0.1136,0.47614 -0.278,1.02088 -0.5313,1.59375 0.2534,-0.57448 0.4175,-1.11621 0.5313,-1.59375 z M 219.219,324.75 c -1.4934,0.81257 -3.3645,1.51318 -5.6875,2.03125 2.323,-0.51807 4.1939,-1.21719 5.6875,-2.03125 z m -6.125,2.15625 c -0.726,0.26996 -1.5122,0.8095 -2.25,1.40625 0.7309,-0.58844 1.5302,-1.13394 2.25,-1.40625 z m -2.25,1.40625 c -0.9026,0.73005 -1.6895,1.5368 -2.1875,2.0625 0.5014,-0.52478 1.3008,-1.34855 2.1875,-2.0625 z" />
                <path id="Wardak" d="m 343.3753,197.96875 -4.9375,2.65625 -2.375,6.125 -4.7813,0 -9.2187,-2.71875 -4.0938,6.46875 -8.5312,4.4375 -6.125,2.75 4.4375,5.78125 7.1562,-0.34375 1.5625,4.6875 c 0.4936,-0.14081 0.9604,-0.27109 1.375,-0.28125 0.1666,-0.004 0.3195,0.0101 0.4688,0.0312 2.388,0.34115 8.1875,4.09375 8.1875,4.09375 l 8.5312,-3.0625 6.8125,6.46875 -3.0625,4.78125 c 0,0 5.138,6.15104 6.8438,5.46875 1.7057,-0.68229 7.8437,-4.4375 7.8437,-4.4375 l 3.75,4.09375 -2.75,8.53125 c 0,0 1.0417,4.43229 2.4063,3.75 1.1082,-0.55411 5.1138,-2.34521 6.8437,-3.125 l 0,-0.0312 2.0313,-6.40625 1,-5.4375 4.7812,-3.4375 -4.4375,-6.125 3.75,-5.46875 4.7813,-5.875 -0.4688,-2.4375 c 0,0 -2.2593,-3.17624 -4.7812,-3.59375 -0.011,-0.001 -0.021,0.001 -0.031,0 -0.169,-0.0265 -0.3295,-0.0312 -0.5,-0.0312 -0.3412,0 -0.5814,-0.11987 -0.75,-0.34375 -0.084,-0.11194 -0.1394,-0.25034 -0.1875,-0.40625 -0.6258,-2.02689 1.5937,-7.4375 1.5937,-7.4375 0,0 -0.2757,-0.1482 -0.6562,-0.34375 -0.8746,-0.44942 -2.4962,-1.24707 -3.9688,-1.8125 -0.1673,-0.0642 -0.3117,-0.12859 -0.4687,-0.1875 -0.5042,-0.17722 -0.9925,-0.31124 -1.375,-0.375 -2.0469,-0.34115 -6.4688,-2.40625 -6.4688,-2.40625 l -9.9062,2.75 -4.2813,-6.75 z" />
                <path id="Logar" d="m 388.4378,220.5 -5.9688,4.15625 c -0.3368,-0.25383 -0.6634,-0.475 -0.9687,-0.6875 -0.055,-0.0382 -0.1009,-0.0882 -0.1563,-0.125 -0.1248,-0.0839 -0.2316,-0.15317 -0.3437,-0.21875 -0.1739,-0.0987 -0.3485,-0.18248 -0.5313,-0.25 -0.1227,-0.0307 -0.5569,-0.18893 -0.8125,-0.28125 -0.3299,-0.12212 -0.7302,-0.26801 -1.1562,-0.4375 -0.029,-0.0115 -0.064,-0.0196 -0.094,-0.0312 -0.3439,-0.13724 -0.6975,-0.28814 -1.0625,-0.4375 -0.5767,-0.23511 -1.1632,-0.46946 -1.6875,-0.6875 -0.04,-0.0168 -0.086,-0.046 -0.125,-0.0625 l -4.6875,5.78125 -3.75,5.46875 4.4375,6.125 -4.7813,3.4375 -1,5.4375 -2.0312,6.40625 c 0.3939,-0.17762 1.3437,-0.5938 1.3437,-0.5938 l 3.0625,3.75 -0.5313,2.375 11.7813,1.03125 1.375,-3.75 3.0625,-6.15625 5.8125,-2.71875 6.4687,-6.46875 2.0313,-2.6875 16.8437,2.59375 1.9375,-4.84375 2.2188,0.375 -7.6875,-11.46875 -11.5625,3.1875 -0.2813,-0.3125 -3.1875,-0.25 -7.9687,-7.65625 z" />
                <path id="Khost" d="m 422.8753,251.28125 -9.0313,7.65625 -8.875,1.71875 -2.375,3.75 0,3.0625 -2.0625,2.75 3.0625,5.78125 -1.8437,2.0625 -4.625,6.46875 -2.375,3.40625 5.8125,1.71875 c -0.024,-0.28779 -0.062,-0.90625 -0.062,-0.90625 l 2.4062,-3.15625 6.75,0 3.375,-3.125 3.625,3.625 3.125,0 0.5,-2.65625 4.0938,-0.25 0.4687,-3.84375 3.625,0 8.9375,-7.25 -7.9687,-8.6875 1.4375,-7 -3.125,-0.46875 -0.25,-3.875 -4.625,-0.78125 z" />
                <path id="Paktia" d="m 398.1253,238.875 -2.0313,2.6875 -6.4687,6.46875 -5.8125,2.71875 -3.0625,6.15625 -1.375,3.75 -11.9375,-1.03125 -1.0313,6.84375 2,3.625 c 0.1684,-0.12424 0.75,-0.5625 0.75,-0.5625 l 7.5,2.375 0.3438,12.28125 6.8125,-3.75 4.0937,-2.71875 5.125,0 3.75,-1.71875 5.4688,1.375 -0.4688,0.65625 1.8125,-2.03125 -3.0625,-5.78125 2.0625,-2.75 0,-3.0625 2.375,-3.75 8.875,-1.71875 9.0313,-7.65625 -1.1563,-0.1875 -6.75,-9.625 z m 2.375,49.875 c 0,0 0.039,0.61846 0.062,0.90625 l 0.031,0 c -0.013,-0.13761 -0.094,-0.90625 -0.094,-0.90625 z" />
                <path id="Ghor" d="m 208.469,172.65625 -13.6562,0.3125 -4.8125,1.8125 1.0625,0.25 7.8437,4.4375 5.8125,8.53125 1.7188,8.875 -15.0313,3.75 -9.2187,0 -3.375,4.09375 0.3125,0 0,6.46875 -12.2813,0 -0.6875,8.1875 0.6875,4.78125 -17.7187,0 -4.7813,-2.71875 -7.8437,0.65625 0,3.09375 -5.8125,6.8125 1.7187,3.0625 -0.3437,5.46875 c 0,0 2.3802,5.10677 3.0625,6.8125 0.6822,1.70573 0.3437,6.84375 0.3437,6.84375 l -13.3125,1.34375 -7.5,6.15625 3.4063,10.5625 -0.3438,0.34375 16.375,0.34375 5.125,-5.125 c 0,0 6.1432,-0.68489 8.5313,-0.34375 2.388,0.34115 7.5,-5.4375 7.5,-5.4375 l 7.1562,9.53125 -1,4.78125 c 0,0 3.7344,2.38542 5.7813,3.75 2.0468,1.36459 7.8437,0.6875 7.8437,0.6875 l 3.0625,-7.84375 2.0625,0 2.375,2.71875 4.4375,-0.34375 0.125,0.6875 9.7813,0.6875 6.4687,-1.375 2.0625,-3.75 6.125,0 5.8125,-3.0625 c 0,0 5.4401,-5.45573 5.7813,-7.84375 0.3411,-2.38802 -1.6875,-11.25 -1.6875,-11.25 l -3.0625,-1.71875 c 0,0 -0.7084,-3.07031 0.6562,-4.09375 1.3646,-1.02344 6.1563,-2.375 6.1563,-2.375 l -2.0625,-6.84375 -1,-6.46875 c 0,0 0.6666,-7.15625 2.0312,-7.15625 1.3646,0 12.9688,-0.6875 12.9688,-0.6875 l 6.4687,3.0625 5.125,-3.40625 6.5,-1.03125 8.5313,-1.6875 3.3437,1.0625 8.9375,-1.0625 3.0625,-4.4375 -0.6875,-2.40625 1.375,-5.4375 c 0,0 -5.4792,-3.09375 -6.8437,-3.09375 -1.3646,0 -1.3438,-3.75 -1.3438,-3.75 0,0 -6.4792,-7.84635 -7.8437,-8.1875 -1.3646,-0.34114 -2.7318,1.71875 -4.4375,1.71875 l -6.5,0 -2.375,-9.5625 -11.5938,-1.34375 -8.875,-7.53125 -5.8437,-0.28125 -6.0938,3.03125 -9.5625,-3.0625 z" />
                <path id="Balkh" d="m 285.9065,60.0625 -7.7187,0.71875 -1.1875,2.65625 -4.125,-1.4375 -4.3438,0.46875 -0.062,0.375 0,0.03125 0.375,14.25 -2.7187,7.15625 4.7812,9.21875 -3.4062,5.46875 4.75,6.8125 -0.062,0 -1.9688,6.5625 0,4 -2.7187,3.75 5.4375,6.5 1.375,10.5625 -1.0313,5.8125 -1.6875,4.4375 -3.0937,3.40625 -4.4375,3.40625 7.875,0.6875 5.7812,-3.75 4.4375,0 4.0938,-2.75 2.375,-1 1.0312,-4.09375 5.4063,-0.65625 1.75,-4.8125 -5.0938,-7.15625 c 0,0 5.7943,-5.8125 7.5,-5.8125 1.7057,0 4.7813,-0.34375 4.7813,-0.34375 l 1.3437,-7.84375 3.0938,-1.34375 9.1875,5.4375 4.0937,-3.0625 1.0313,-10.25 3.4062,-5.09375 13.3125,2.03125 1.7188,-2.71875 -8.125,-15.46875 -6.375,-7.09375 c 0,0 1.4385,-1.9375 -0.25,-1.9375 l -3.625,0 0.9687,-6.75 -3.375,-1.21875 -5.7812,-0.96875 -1.2188,0.96875 -2.875,-2.65625 -4.3437,3.875 -2.1875,2.875 L 299.9075,71.625 298.22,68 l -3.1562,-2.625 -3.125,-3.875 -6.0313,-1.4375 z" />
                <path id="Ghazni" d="m 317.844,227.53125 c -2.4986,0.0612 -6.8071,2.84571 -8.4062,4.125 -1.5342,1.22734 -8.8071,5.93756 -10.4063,6.96875 l 10.0625,9.75 -5.7812,6.15625 -5.8125,0 -5.0938,5.4375 -5.125,0.34375 -1.0312,3.75 1.375,2.40625 -9.9063,7.15625 0.6875,4.09375 15,-1.71875 0,5.125 -5.7812,2.375 -0.75,3.03125 4.8437,2.09375 8.875,0.34375 c 0,0 0.6719,1.71875 2.7188,1.71875 2.0468,0 6.4687,2.03125 6.4687,2.03125 l -1.3437,9.21875 1.3437,2.71875 0.3438,5.8125 9.9062,1.375 0,2.03125 -14.6875,19.78125 -2.0312,3.75 7.5,3.75 6.4687,-2.71875 9.2188,-1.375 4.0937,3.09375 6.2188,0 1.2812,-5.125 0,-9.5625 -2.0312,-8.875 -8.875,-8.1875 3.4062,-4.75 8.5313,4.09375 6.1562,-5.8125 9.875,-9.5625 c 0,0 -1.3646,-6.81771 0,-7.5 1.3646,-0.68229 7.1563,-5.78125 7.1563,-5.78125 0,0 -1.0209,-3.07292 0.3437,-4.4375 1.1785,-1.17851 4.6835,-3.77565 5.75,-4.5625 l -2,-3.625 1.0313,-6.84375 0.1562,0 0.5313,-2.375 -3.0625,-3.75 c 0,0 -6.823,3.06771 -8.1875,3.75 -1.3646,0.68229 -2.4063,-3.75 -2.4063,-3.75 l 2.75,-8.53125 -3.75,-4.09375 c 0,0 -6.138,3.75521 -7.8437,4.4375 -1.7058,0.68229 -6.8438,-5.46875 -6.8438,-5.46875 l 3.0625,-4.78125 -6.8125,-6.46875 -8.5312,3.0625 c 0,0 -5.7995,-3.7526 -8.1875,-4.09375 -0.1493,-0.0213 -0.3022,-0.0353 -0.4688,-0.0312 z" />
                <path id="Nangarhar" d="m 448.0003,194.6875 -4.0938,2.375 -4.8125,6.53125 0.25,3.375 0.2188,6.25 -3.8438,0.5 c 0,0 -8.4403,2.39639 -11.0937,3.84375 -2.6535,1.44736 -8.4452,-0.24123 -10.375,0 -0.8653,0.10815 -2.0561,0.18389 -3.125,0.21875 -0.1232,0.004 -0.2563,-0.003 -0.375,0 -1.0442,0.0233 -2.0625,0.0312 -2.0625,0.0312 l -9.1563,7.71875 0.094,2.875 -0.031,0 0.2813,0.3125 11.5625,-3.1875 7.6875,11.46875 20.6875,3.5 20.5,-1.46875 1.9375,-2.15625 6.75,-3.625 2.1875,-3.375 -1.4688,-6.5 1.4688,-6.03125 -3.625,-2.1875 -3.1563,-4.34375 -0.1875,-2.3125 c -1.2005,0.0693 -5.54,0.3125 -6.7187,0.3125 -1.3646,0 -6.8125,-2.40625 -6.8125,-2.40625 l -1.7188,-9.1875 z" />
                <path id="Paktika" d="m 369.1565,269.53125 c 0,0 -5.1354,3.76041 -6.5,5.125 -1.3646,1.36458 -0.3437,4.4375 -0.3437,4.4375 0,0 -5.7917,5.09896 -7.1563,5.78125 -1.3646,0.68229 0,7.5 0,7.5 l -9.875,9.5625 -6.1562,5.8125 -8.5313,-4.09375 -3.4062,4.75 8.875,8.1875 2.0312,8.875 0,9.5625 -1.2812,5.125 0.2812,0 1.3438,5.4375 -3.4063,7.84375 3.6875,2.9375 2.1875,-3.21875 2.6563,0.21875 2.9062,3.625 7,0 2.875,-3.375 9.9063,1.9375 0.7187,4.09375 2.875,2.65625 c 0,0 -0.9474,2.90625 0.5,2.90625 l 5.3125,0 c 0,0 0,-2.65625 0.9688,-2.65625 l 5.2812,0 11.8438,-16.15625 -2.9063,-21.5 -1.4375,-3.84375 2.6563,-6.28125 3.375,0 4.3437,-6.75 -4.125,-4.59375 c 0,0 6.0537,-4.81634 5.8125,-5.78125 -0.2145,-0.85798 -0.7456,-6.59462 -0.875,-8 l -5.8437,-1.71875 2.375,-3.40625 5.125,-7.15625 -5.4688,-1.375 -3.75,1.71875 -5.125,0 -4.0937,2.71875 -6.8125,3.75 -0.3438,-12.28125 -7.5,-2.375 z" />
                <path id="Kunduz" d="m 374.9378,65.375 -4.5938,1.90625 -3.625,-0.96875 -7.2187,1.6875 -3.875,4.59375 -6.0313,1.6875 -2.4062,2.40625 -3.1563,0 0.25,4.34375 -5.5312,0.5 -5.5625,4.8125 -0.125,-0.125 8.125,15.46875 -0.25,0.40625 c 0.437,0.24843 2.4444,1.36287 3.6562,1.96875 0.1319,0.0659 0.2002,0.19756 0.25,0.34375 l 13.0625,0.34375 8.1875,2.40625 4.0938,5.78125 8.5,1.03125 6.1562,3.40625 -2.0625,-8.53125 c 0,0 4.1224,0.33073 3.7813,-1.375 -0.3412,-1.70573 -1.375,-4.40625 -1.375,-4.40625 l 1.0312,-6.15625 -4.0937,-4.4375 c 0,0 2.3854,-2.03646 3.75,-2.71875 1.3645,-0.68229 3.75,-4.78125 3.75,-4.78125 L 388.9378,77.125 388.219,74.3125 387.0003,75.71875 383.3753,75.5 374.9378,65.375 z M 326.719,77.21875 c 0.1644,0.02838 0.2905,0.08246 0.375,0.15625 -0.084,-0.0735 -0.2107,-0.127981 -0.375,-0.15625 z" />
                <path id="Takhar" d="m 412.7815,48.46875 -3.8437,1.21875 -4.0938,-0.71875 -3.375,2.40625 -2.1875,-2.1875 -4.0937,0.5 -5.3125,6.5 0.5,7.5 2.875,4.8125 -5.0313,5.8125 0.7188,2.8125 0.6875,7.84375 c 0,0 -2.3855,4.09896 -3.75,4.78125 -1.3646,0.68229 -3.75,2.71875 -3.75,2.71875 l 4.0937,4.4375 -1.0312,6.15625 c 0,0 1.0338,2.70052 1.375,4.40625 0.3411,1.70573 -3.7813,1.375 -3.7813,1.375 l 1.9375,7.96875 5.5938,5 6.8125,-3.40625 6.125,-3.75 1.7187,5.4375 4.0938,1.03125 -0.3438,7.5 3.75,4.78125 5.4688,4.4375 2.375,4.09375 -0.5625,0.375 2.625,-0.0312 4.7812,-3.75 6.5469,-0.10938 4.3594,-3.64062 1.375,-10.25 L 438.4065,116 c 0,0 -7.5156,-1.34375 -9.5625,-1.34375 -2.0469,0 -5.7812,-4.4375 -5.7812,-4.4375 l -0.6875,-9.90625 -4.4375,-4.4375 1.6875,-13.96875 6.8437,-8.1875 -8.1875,-3.40625 -0.3437,-4.09375 -2.7188,-8.1875 2.9688,-5.9375 -0.8125,0 z" />
                <path id="Badakhshan" d="m 448.0003,2.40625 -7.4688,8.1875 -5.5312,10.625 -8.2188,8.4375 -4.0937,1.6875 -0.25,3.875 4.3437,2.65625 0.9688,8.4375 -4.8125,5.78125 -4.75,0 -2.9688,5.9375 2.7188,8.1875 0.3437,4.09375 8.1875,3.40625 -6.8437,8.1875 -1.6875,13.96875 4.4375,4.4375 0.6875,9.90625 c 0,0 3.2781,3.88748 5.375,4.375 0.1397,0.0325 0.2783,0.0625 0.4062,0.0625 2.0469,0 9.5625,1.34375 9.5625,1.34375 l 1.0313,8.53125 -1.375,10.25 -4.3438,3.65625 -2.75,0.0312 -0.75,12.34375 3.0625,-2.0625 c 0,0 1.013,-2.02604 2.7188,-1.34375 1.7057,0.68229 5.8125,3.0625 5.8125,3.0625 l 2.375,5.8125 -1.6875,5.09375 4.7812,-0.6875 2.375,-3.40625 8.1875,1.71875 0.3438,-7.5 4.4375,-2.40625 0.3437,-5.09375 3.75,-9.5625 1.75,-5.5625 0.6563,0 5.1875,-6.34375 5.3125,-2.40625 5.0625,-7.71875 3.375,-5.78125 7.2187,2.625 0.75,-1.1875 -1.9375,-3.625 7.2188,-1.21875 1.4687,-2.625 2.875,-1.46875 1.2188,-3.375 4.0937,-0.25 -0.4687,-4.5625 11.0937,-1.6875 4.3438,-4.34375 14.9375,-0.5 1.9375,-2.15625 6.0312,-0.5 8.2188,-1.6875 24.5937,-1.1875 5.3125,2.65625 3.8438,0.46875 2.4062,-1.1875 c 0,0 -2.8947,-3.625 0,-3.625 l 4.8438,0 7,-5.5625 5.3125,-1.4375 0,-2.40625 -7.9688,-3.625 -0.25,-1.6875 c 0,0 5.0713,0.9649 5.3125,0 0.2412,-0.96491 -0.25,-4.34375 -0.25,-4.34375 l 6.75,0.25 4.125,-3.375 3.125,3.375 2.9063,0 -1.2188,-3.375 -6.75,-5.0625 -14,0.21875 -2.9062,-2.4062 -0.4688,2.65625 -3.625,0 -0.9687,3.125 -16.4063,7.71875 -3.125,0 -4.3437,-0.96875 -0.4688,-3.125 6.5,-0.96875 -0.4687,-5.78125 -8.9375,0.46875 -4.8125,-1.4375 -3.625,1.4375 -4.5938,1.46875 -6.5,3.375 -0.25,2.65625 -12.7812,5.3125 -5.3125,10.34375 -13.5,1.6875 -21.2188,19.3125 -6.5312,0 c 0,0 -8.4326,-12.06635 -9.1563,-13.03125 -0.7237,-0.96491 -1.4375,-7.21875 -1.4375,-7.21875 l 0.7188,-9.1875 1.9062,-14.71875 0.5,-13.5 2.1563,-2.875 0.25,-7.75 -5.5313,0 -3.875,3.875 -4.5937,-0.46875 0,-6.78125 3.875,-2.875 0,-8.4375 -15.9375,-9.40625 -8.6875,-0.25 z" />
                <path id="Parvan" d="m 388.0315,164.71875 -0.8125,0.0625 -6.125,2.0625 -3.4062,6.125 -9.5625,0.34375 -12.2813,9.5625 -18.0312,0.0937 1.6562,2.96875 4.0938,6.84375 0,5.09375 -0.1875,0.0937 4.2812,6.75 9.9063,-2.75 c 0,0 4.4218,2.0651 6.4687,2.40625 1.5793,0.26321 4.5274,1.71458 5.8125,2.375 l 1.3438,-4.09375 1.7187,-4.09375 c 0,0 -1.7057,-4.44271 0,-5.125 1.7057,-0.68229 4.7813,-1.34375 4.7813,-1.34375 l 6.8125,2.03125 6.8125,4.4375 5.4687,9.21875 6.8125,-1.71875 c 0,0 -1.3437,-5.79687 -1.3437,-7.84375 0,-2.04687 -0.6875,-8.875 -0.6875,-8.875 l -3.75,-5.78125 -8.875,-2.71875 3.3125,-8.09375 -6.4375,-0.3125 2.2187,-7.71875 z M 410.9065,199 c -0.1888,0.1159 -0.3945,0.26358 -0.5937,0.40625 0.1989,-0.14457 0.405,-0.28882 0.5937,-0.40625 z" />
                <path id="Kabul" d="m 377.6878,192.09375 c 0,0 -3.0756,0.66146 -4.7813,1.34375 -1.7057,0.68229 0,5.125 0,5.125 l -1.7187,4.09375 -1.3438,4.09375 c 0.3805,0.19555 0.6563,0.34375 0.6563,0.34375 0,0 -3.3855,8.1875 -0.6563,8.1875 2.7292,0 5.3245,3.61742 5.3245,3.61742 l 0.4999,2.59618 c 1.7668,0.73467 4.2025,1.73063 4.8006,1.88015 0.7314,0.2701 1.3871,0.84531 2,1.2812 l 5.9687,-4.15625 7.9688,7.65625 3.2187,0.25 -0.085,-2.85952 9.148,-7.73423 c 0,0 1.1222,0.0115 2.4375,-0.0312 l 1.1875,-10.34375 5.3125,-11.5625 -0.375,-0.0937 c -0.9109,1.02557 -3.3869,2.00055 -5.4687,2.78125 -2.7292,1.02344 -7.8438,7.15625 -7.8438,7.15625 l -0.375,0.25 c 6e-4,0.003 0.031,0.0937 0.031,0.0937 l -6.8125,1.71875 -5.4687,-9.21875 -6.8125,-4.4375 z" />
                <path id="Oruzgan" d="m 264.5003,275.375 -9.75,4.25 0.5,4.875 -8.125,1.875 1.125,-4.125 -5.625,-2 -9.25,6.875 -8.5,-3.75 -4.625,2.625 -5.9688,-0.5 -4.4375,8.25 -2.4062,4.09375 4.4375,22.5 -3.75,5.125 0,5.46875 c 0,0 3.188,-3.66155 5.4062,-4.15625 12.3892,-2.76302 11.6875,-11 11.6875,-11 l 6.6875,0.1875 0.5,3.0625 8.375,0.3125 4,-2.0625 4.0313,2.75 4,0.3125 4.4375,0 0.7812,0.71875 1.625,-5.125 1.3438,-5.125 4.4375,-3.40625 4.7812,-4.4375 2.375,1 -0.6562,5.8125 7.5,-8.875 4.7812,-4.4375 -1.0312,-5.09375 3.0625,-5.125 0.625,0.28125 0.75,-3.03125 5.7812,-2.375 0,-5.125 -15,1.71875 -0.031,-0.21875 -7.375,2.75 -6.5,-4.875 z" />
                <path id="Kapisa" d="m 392.2815,172.75 -3.3437,8.09375 8.875,2.71875 3.75,5.78125 c 0,0 0.6875,6.82813 0.6875,8.875 0,2.01572 1.2728,7.57838 1.3125,7.75 l 0.375,-0.25 c 0,0 2.0356,-2.44522 4.2187,-4.5 0.3184,-0.29954 0.6497,-0.56916 0.9688,-0.84375 0.4089,-0.35183 0.7988,-0.69041 1.1875,-0.96875 0.062,-0.0447 0.1245,-0.0805 0.1875,-0.125 0.1054,-0.0726 0.2101,-0.15396 0.3125,-0.21875 0.03,-0.0196 0.064,-0.0444 0.094,-0.0625 0.3067,-0.18829 0.6071,-0.33704 0.875,-0.4375 2.0818,-0.7807 4.5578,-1.75568 5.4687,-2.78125 0.035,-0.0399 0.063,-0.0849 0.094,-0.125 0.031,-0.0404 0.068,-0.0845 0.094,-0.125 0.1555,-0.24145 0.2169,-0.47601 0.1563,-0.71875 -0.3412,-1.36458 -2.0625,-8.53125 -2.0625,-8.53125 l -3.0625,-5.78125 -0.031,-0.0312 -1.6875,1.125 -1.4688,-8 -17,-0.84375 z" />
                <path id="Laghman" d="m 419.2503,173.875 -2,2.875 -3.875,3.0625 -0.9375,0.625 3.0937,5.84375 c 0,0 1.7214,7.16667 2.0625,8.53125 0.081,0.32365 -0.061,0.64987 -0.3437,0.96875 l 0.375,0.0937 -5.3125,11.5625 -1.1875,10.34375 c 1.0689,-0.0349 2.2597,-0.1106 3.125,-0.21875 1.9298,-0.24123 7.7215,1.44736 10.375,0 2.6534,-1.44736 11.0937,-3.84375 11.0937,-3.84375 l 3.8438,-0.5 -0.2188,-6.25 -0.25,-3.375 4.8125,-6.53125 4.0938,-2.375 -2.9063,-7.4375 -1.2187,1.78125 -7.5313,0.3125 -8.8437,-8.1875 -5.125,0 -3.0625,-5.4375 0.094,-1.71875 z" />
                <path id="Bamyan" d="m 311.1565,160.375 -4.6562,4.65625 -1.3125,-1.59375 c 0,0 -2.0674,0.11043 -3.6563,0.4375 -0.3257,0.0731 -0.6415,0.15135 -0.9375,0.25 -2.0469,0.68229 -7.5312,2.71875 -7.5312,2.71875 l -6.8125,-1.71875 -5.125,2.0625 -4.0938,6.46875 -7.5,3.40625 -0.6875,8.1875 -4.6562,4.6875 c 1.9525,1.35084 7.4062,7.9375 7.4062,7.9375 0,0 -0.021,3.75 1.3438,3.75 1.3645,0 6.8437,3.09375 6.8437,3.09375 l -1.375,5.4375 0.6875,2.40625 -3.0625,4.4375 -8.9375,1.0625 4.1563,1.3125 0,10.25 3.75,6.46875 -1.375,4.4375 16.7187,0.34375 3.75,-2.71875 4.7813,0.3125 0.1562,0.15625 c 1.5992,-1.03119 8.8721,-5.74141 10.4063,-6.96875 1.3337,-1.06701 4.55,-3.13599 7.0312,-3.84375 l -1.5625,-4.6875 -7.1562,0.34375 -4.4375,-5.78125 6.125,-2.75 8.5312,-4.4375 4.0938,-6.46875 9.2187,2.71875 4.7813,0 2.375,-6.125 5.125,-2.75 0,-5.09375 -4.0938,-6.84375 -6.2187,-11.28125 3.5937,-6.84375 -3.75,-4.78125 -6.5937,-2 -4.7813,2.0625 -10.5625,-2.71875 z" />
            </g>
        </svg>
    </div>
    <div class="stats">
        <article>
            <i class="fas fa-align-justify fa-3x"></i>
            <h2><em>{{ $totalResources }}</em></h2>
            <h2>Resources</h2>
        </article>
        <article>
            <i class="fas fa-eye fa-3x"></i>
            <h2><em>{{ $monthlyViews }}</em></h2>
            <h2>Monthly Views</h2>
        </article>
        <article>
            <i class="fas fa-map-marker-alt fa-3x"></i>
            <h2><em>15</em></h2>
            <h2>Provinces Covered</h2>
        </article>
        <article>
            <i class="fas fa-desktop fa-3x"></i>
            <h2><em>47</em></h2>
            <h2>DDL Demos Delivered</h2>
        </article>
    </div>
</section>
@endsection 