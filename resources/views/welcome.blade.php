<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Mobil</title>
    @vite('resources/css/app.css')
</head>
<body class="font-custom">
    @include('components.Navbar')
    @include('components.HeroSection')
    @include('components.About')
    @include('components.JenisMobil')
    @include('components.TestimonialRental')
    @include('components.PromoRental')
    @include('components.Footer')
</body>
</html>