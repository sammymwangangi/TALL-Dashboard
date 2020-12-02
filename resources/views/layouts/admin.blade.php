<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TALL Dashboard is a dashboard made with Tailwind CSS,AlpineJS,Laravel and Livewire.">
    <meta name="keywords" content="TailwindCss,AlpineJs, LaravelLivewire,Laravel,livewire, tailwindcss, tailwindui,css,dashboard, Tall stack, Tall Dashboard">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TallDashboard') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/table.css') }}" rel="stylesheet"> --}}
<!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css" rel="stylesheet" SameSite=None>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <!-- Video -->
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
    <!-- FilePond -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">
    <!-- Flickity Carousel -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


    @livewireStyles
    <script>
        if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
        } else if (localStorage.theme === 'dark') {
            document.querySelector('html').classList.add('dark')
        }
    </script>


</head>
<body class="bg-gray-50 dark:bg-gray-800 h-screen antialiased leading-none">
<div id="app">
    @yield('content')
</div>

<script>
    document.getElementById('switchTheme').addEventListener('click', function() {
        let htmlClasses = document.querySelector('html').classList;
        if(localStorage.theme == 'dark') {
            htmlClasses.remove('dark');
            localStorage.removeItem('theme')
        } else {
            htmlClasses.add('dark');
            localStorage.theme = 'dark';
        }
    });
</script>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        })
            .columns.adjust()
    });
</script>

<!-- Filepond -->
<script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>

<!-- Flickity Carousel -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

@livewireScripts

{{-- <script src="{{ $earnings_chart->cdn() }}"></script> --}}

{{ $earnings_chart->script() }}
{{ $statics_chart->script() }}
</body>
</html>
