<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/tab-icon.png') }}">
    <title>{{ $project[0]['fields']['name'] }}</title>
</head>

<body style="margin: 0px">
    <embed src="{{ $project[0]['fields']['link_preview'] }}" style="width: 100%; height: 100vh; overflow: hidden;">
</body>

</html>
