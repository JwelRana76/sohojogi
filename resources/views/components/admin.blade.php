<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>

    @include('shared.style-sheets')
    @livewireStyles
</head>

<body class="fixed-navbar">

    <div class="page-wrapper">
        @include('shared.header')
        @include('shared.sidebar')

        <div class="content-wrapper">
            <div class="page-content">
                {{ $slot ?? '' }}
            </div>
        </div>
    </div>


    @livewireScripts
    @include('shared.scripts')
</body>

</html>
