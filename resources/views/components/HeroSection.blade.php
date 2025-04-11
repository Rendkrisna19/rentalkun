<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@extends('helper.animation')
<body class="bg-white font-custom">
    <div class="container mx-auto px-6 py-12 ">
        <!-- Hero Section -->
        <div class="flex flex-col lg:flex-row items-center justify-between mt-4">
            <!-- Teks -->
            <div class="lg:w-1/2" >
                <h1 class="text-4xl font-bold text-gray-900 leading-tight sm:text-6xl responsive-heading" data-aos="fade-right" data-aos-duration="2000" >
                    Sewa Kendaraan dengan
                    <span class="text-green-600" data-aos="fade-right" data-aos-duration="2000">Mudah</span> &
                    <span class="text-green-600" data-aos="fade-right" data-aos-duration="2000">Cepat!</span>
                </h1>
                <p class="text-gray-600 mt-4">
                    Nikmati perjalanan nyaman dengan kendaraan terbaik kami!
                </p>
                <button
                    class="bg-green-600 text-white px-6 py-3 mt-6 rounded-lg font-semibold shadow-lg hover:bg-green-700 " data-aos="fade-right" data-aos-duration="2000"
                    onclick="toggleModal(true)">
                    Sewa Sekarang
                </button>

                @include('components.sewa-modal')
                <!-- Testimoni -->
                <div class="flex items-center mt-6">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-2 border-white"
                            src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
                        <img class="w-10 h-10 rounded-full border-2 border-white"
                            src="https://randomuser.me/api/portraits/women/2.jpg" alt="User 2">
                        <img class="w-10 h-10 rounded-full border-2 border-white"
                            src="https://randomuser.me/api/portraits/men/3.jpg" alt="User 3">
                    </div>
                    <p class="text-gray-700 ml-4 font-medium">10K+ Testimony</p>
                </div>
            </div>

            <!-- Gambar Mobil dengan Latar Belakang Unik -->
            {{-- <div class="relative lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
                <!-- Latar Hijau dengan Shape -->
                <div class="absolute w-[400px] h-[300px] bg-green-600 rounded-[50px] top-10 left-5 
                            clip-path-custom"></div> --}}

                <!-- Mobil -->
                <img src="https://athayarentcar.com/wp-content/uploads/2024/05/Rental-mobil-Medan-avanza.webp"
                    alt="Mobil" class="relative w-[600px] z-10" data-aos="fade-left" data-aos-duration="2000">
            </div>
        </div>
    </div>

    <!-- Custom CSS untuk Bentuk Background -->
    <style>
        .clip-path-custom {
            clip-path: polygon(10% 0%, 50% 0%, 100% 80%, 80% 100%, 0% 100%, 0% 20%);
        }
    </style>
</body>

</html>