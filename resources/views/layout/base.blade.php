<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/css/Pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom_style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fileinput.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-toggle.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <style>
        @media only screen and (max-width: 767px) {
            .bulgy-radios {
                width: 19rem;
                background: #fff;
                padding: 1.5rem 0 1.5rem 2.5rem;
                border-radius: 0.5rem;
            }

            .bulgy-radios label {
                display: block;
                position: relative;
                height: 0.5em;
                padding-left: 2rem;
                margin-bottom: .87rem;
                cursor: pointer;
                font-size: 1.25rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                color: #555;
                letter-spacing: 0.5px;
            }

            .bulgy-radios label:hover input:not(:checked)~.radio {
                opacity: 0.8;
            }

            .bulgy-radios .label {
                display: flex;
                align-items: center;
                padding-right: 1.5rem;
            }

            .bulgy-radios .label span {
                line-height: 0.5em;
            }

            .bulgy-radios input {
                position: absolute;
                cursor: pointer;
                height: 0;
                width: 0;
                left: -1000px;
            }

            .bulgy-radios input:checked~.radio {
                background-color: #0ac07d;
                transition: background 0.3s;
            }

            .bulgy-radios input:checked~.radio::after {
                opacity: 1;
            }

            .bulgy-radios input:checked~.label {
                color: #0bae72;
            }

            .bulgy-radios input:checked~.label span {
                -webkit-animation: bulge 0.5s forwards;
                animation: bulge 0.5s forwards;
            }

            .bulgy-radios input:checked~.label span:nth-child(1) {
                -webkit-animation-delay: 0.025s;
                animation-delay: 0.025s;
            }

            .bulgy-radios input:checked~.label span:nth-child(2) {
                -webkit-animation-delay: 0.05s;
                animation-delay: 0.05s;
            }

            .bulgy-radios input:checked~.label span:nth-child(3) {
                -webkit-animation-delay: 0.075s;
                animation-delay: 0.075s;
            }

            .bulgy-radios input:checked~.label span:nth-child(4) {
                -webkit-animation-delay: 0.1s;
                animation-delay: 0.1s;
            }

            .bulgy-radios input:checked~.label span:nth-child(5) {
                -webkit-animation-delay: 0.125s;
                animation-delay: 0.125s;
            }

            .bulgy-radios input:checked~.label span:nth-child(6) {
                -webkit-animation-delay: 0.15s;
                animation-delay: 0.15s;
            }

            .bulgy-radios input:checked~.label span:nth-child(7) {
                -webkit-animation-delay: 0.175s;
                animation-delay: 0.175s;
            }

            .bulgy-radios input:checked~.label span:nth-child(8) {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
            }

            .bulgy-radios input:checked~.label span:nth-child(9) {
                -webkit-animation-delay: 0.225s;
                animation-delay: 0.225s;
            }

            .bulgy-radios input:checked~.label span:nth-child(10) {
                -webkit-animation-delay: 0.25s;
                animation-delay: 0.25s;
            }

            .bulgy-radios input:checked~.label span:nth-child(11) {
                -webkit-animation-delay: 0.275s;
                animation-delay: 0.275s;
            }

            .bulgy-radios input:checked~.label span:nth-child(12) {
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
            }

            .bulgy-radios input:checked~.label span:nth-child(13) {
                -webkit-animation-delay: 0.325s;
                animation-delay: 0.325s;
            }

            .bulgy-radios input:checked~.label span:nth-child(14) {
                -webkit-animation-delay: 0.35s;
                animation-delay: 0.35s;
            }

            .bulgy-radios input:checked~.label span:nth-child(15) {
                -webkit-animation-delay: 0.375s;
                animation-delay: 0.375s;
            }

            .bulgy-radios input:checked~.label span:nth-child(16) {
                -webkit-animation-delay: 0.4s;
                animation-delay: 0.4s;
            }

            .bulgy-radios input:checked~.label span:nth-child(17) {
                -webkit-animation-delay: 0.425s;
                animation-delay: 0.425s;
            }

            .bulgy-radios input:checked~.label span:nth-child(18) {
                -webkit-animation-delay: 0.45s;
                animation-delay: 0.45s;
            }

            .bulgy-radios input:checked~.label span:nth-child(19) {
                -webkit-animation-delay: 0.475s;
                animation-delay: 0.475s;
            }

            .radio {
                position: absolute;
                top: 0.1rem;
                left: 0;
                height: 1.25rem;
                width: 1.25rem;
                background: #c9ded6;
                border-radius: 50%;
            }

            .radio::after {
                content: "";
                position: absolute;
                opacity: 0;
                top: 0.25rem;
                left: 0.25rem;
                width: 0.75rem;
                height: 0.75rem;
                border-radius: 50%;
                background: #fff;
            }

            @-webkit-keyframes bulge {
                50% {
                    transform: rotate(4deg);
                    font-size: 1.5em;
                    font-weight: bold;
                }

                100% {
                    transform: rotate(0);
                    font-size: 1em;
                    font-weight: bold;
                }
            }

            @keyframes bulge {
                50% {
                    transform: rotate(4deg);
                    font-size: 1.5em;
                    font-weight: bold;
                }

                100% {
                    transform: rotate(0);
                    font-size: 1em;
                    font-weight: bold;
                }
            }

        }

        @media only screen and (min-width: 768px) {
            .bulgy-radios {
                width: 38rem;
                background: #fff;
                padding: 3rem 0 3rem 5rem;
                border-radius: 1rem;
            }

            .bulgy-radios label {
                display: block;
                position: relative;
                height: 1em;
                padding-left: 4rem;
                margin-bottom: 1.75rem;
                cursor: pointer;
                font-size: 2.5rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                color: #555;
                letter-spacing: 1px;
            }

            .bulgy-radios label:hover input:not(:checked)~.radio {
                opacity: 0.8;
            }

            .bulgy-radios .label {
                display: flex;
                align-items: center;
                padding-right: 3rem;
            }

            .bulgy-radios .label span {
                line-height: 1em;
            }

            .bulgy-radios input {
                position: absolute;
                cursor: pointer;
                height: 0;
                width: 0;
                left: -2000px;
            }

            .bulgy-radios input:checked~.radio {
                background-color: #0ac07d;
                transition: background 0.3s;
            }

            .bulgy-radios input:checked~.radio::after {
                opacity: 1;
            }

            .bulgy-radios input:checked~.label {
                color: #0bae72;
            }

            .bulgy-radios input:checked~.label span {
                -webkit-animation: bulge 0.5s forwards;
                animation: bulge 0.5s forwards;
            }

            .bulgy-radios input:checked~.label span:nth-child(1) {
                -webkit-animation-delay: 0.025s;
                animation-delay: 0.025s;
            }

            .bulgy-radios input:checked~.label span:nth-child(2) {
                -webkit-animation-delay: 0.05s;
                animation-delay: 0.05s;
            }

            .bulgy-radios input:checked~.label span:nth-child(3) {
                -webkit-animation-delay: 0.075s;
                animation-delay: 0.075s;
            }

            .bulgy-radios input:checked~.label span:nth-child(4) {
                -webkit-animation-delay: 0.1s;
                animation-delay: 0.1s;
            }

            .bulgy-radios input:checked~.label span:nth-child(5) {
                -webkit-animation-delay: 0.125s;
                animation-delay: 0.125s;
            }

            .bulgy-radios input:checked~.label span:nth-child(6) {
                -webkit-animation-delay: 0.15s;
                animation-delay: 0.15s;
            }

            .bulgy-radios input:checked~.label span:nth-child(7) {
                -webkit-animation-delay: 0.175s;
                animation-delay: 0.175s;
            }

            .bulgy-radios input:checked~.label span:nth-child(8) {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
            }

            .bulgy-radios input:checked~.label span:nth-child(9) {
                -webkit-animation-delay: 0.225s;
                animation-delay: 0.225s;
            }

            .bulgy-radios input:checked~.label span:nth-child(10) {
                -webkit-animation-delay: 0.25s;
                animation-delay: 0.25s;
            }

            .bulgy-radios input:checked~.label span:nth-child(11) {
                -webkit-animation-delay: 0.275s;
                animation-delay: 0.275s;
            }

            .bulgy-radios input:checked~.label span:nth-child(12) {
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
            }

            .bulgy-radios input:checked~.label span:nth-child(13) {
                -webkit-animation-delay: 0.325s;
                animation-delay: 0.325s;
            }

            .bulgy-radios input:checked~.label span:nth-child(14) {
                -webkit-animation-delay: 0.35s;
                animation-delay: 0.35s;
            }

            .bulgy-radios input:checked~.label span:nth-child(15) {
                -webkit-animation-delay: 0.375s;
                animation-delay: 0.375s;
            }

            .bulgy-radios input:checked~.label span:nth-child(16) {
                -webkit-animation-delay: 0.4s;
                animation-delay: 0.4s;
            }

            .bulgy-radios input:checked~.label span:nth-child(17) {
                -webkit-animation-delay: 0.425s;
                animation-delay: 0.425s;
            }

            .bulgy-radios input:checked~.label span:nth-child(18) {
                -webkit-animation-delay: 0.45s;
                animation-delay: 0.45s;
            }

            .bulgy-radios input:checked~.label span:nth-child(19) {
                -webkit-animation-delay: 0.475s;
                animation-delay: 0.475s;
            }

            .radio {
                position: absolute;
                top: 0.2rem;
                left: 0;
                height: 2.5rem;
                width: 2.5rem;
                background: #c9ded6;
                border-radius: 50%;
            }

            .radio::after {
                content: "";
                position: absolute;
                opacity: 0;
                top: 0.5rem;
                left: 0.5rem;
                width: 1.5rem;
                height: 1.5rem;
                border-radius: 50%;
                background: #fff;
            }

            @-webkit-keyframes bulge {
                50% {
                    transform: rotate(4deg);
                    font-size: 1.5em;
                    font-weight: bold;
                }

                100% {
                    transform: rotate(0);
                    font-size: 1em;
                    font-weight: bold;
                }
            }

            @keyframes bulge {
                50% {
                    transform: rotate(4deg);
                    font-size: 1.5em;
                    font-weight: bold;
                }

                100% {
                    transform: rotate(0);
                    font-size: 1em;
                    font-weight: bold;
                }
            }
        }

        .colored-toast.swal2-icon-success {
            background-color: #a5dc86 !important;
        }

        .colored-toast.swal2-icon-error {
            background-color: #f27474 !important;
        }

        .colored-toast.swal2-icon-warning {
            background-color: #f8bb86 !important;
        }

        .colored-toast.swal2-icon-info {
            background-color: #3fc3ee !important;
        }

        .colored-toast.swal2-icon-question {
            background-color: #87adbd !important;
        }

        .colored-toast .swal2-title {
            color: white;
        }

        .colored-toast .swal2-close {
            color: white;
        }

        .colored-toast .swal2-html-container {
            color: white;
        }
    </style>
    <title>Incorporación Web</title>
</head>

<body>

    <div class="app-container"
        style="background-image: url('{{ asset('admin/img/background.jpg') }}');background-attachment: fixed; background-size:cover">
        <div class="app-main">
            @yield('contenido')
        </div>
    </div>
    @yield('modal')
    <div id="domMessage" style="display:none; border:none">
        <span class="loader"></span>
    </div>

    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/19cc44ce18.js" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="{{ asset('admin/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/buffer.min.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/filetype.min.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/piexif.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/sortable.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/fileinput.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/locales/fr.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/locales/es.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/theme.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput/theme2.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.blockUI.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('admin/js/bootstrap-toggle.min.js') }}"></script> --}}

    @yield('script')


</body>

</html>
