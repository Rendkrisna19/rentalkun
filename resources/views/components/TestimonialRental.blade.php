<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Animasi Slider */
        @keyframes slide-right {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        @keyframes slide-left {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .slider-right {
            display: flex;
            gap: 20px;
            animation: slide-right 10s linear infinite;
        }

        .slider-left {
            display: flex;
            gap: 20px;
            animation: slide-left 10s linear infinite;
        }
    </style>
</head>
<body class="bg-gray-100 p-6 ">
    <div class="max-w-6xl mx-auto md:pt-24 pt-20">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Testimonial <span class="text-green-500">Pelanggan</span></h1>

        <!-- Baris 1: Bergerak ke kanan -->
        <div class="overflow-hidden whitespace-nowrap mb-6">
            <div class="slider-right">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white shadow-md p-4 w-80 inline-block">
                        <img src="https://source.unsplash.com/100x100/?person" alt="Foto" class="w-16 h-16 rounded-full mx-auto">
                        <h2 class="text-lg font-semibold text-gray-800 text-center mt-2">John Doe</h2>
                        <div class="flex justify-center text-yellow-500 my-2">
                            ★★★★★
                        </div>
                        <p class="text-gray-600 text-center">"Pelayanan rental sangat baik, mobil bersih dan nyaman!"</p>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Baris 2: Bergerak ke kiri -->
        <div class="overflow-hidden whitespace-nowrap">
            <div class="slider-left">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-white shadow-md p-4 w-80 inline-block">
                        <img src="https://source.unsplash.com/100x100/?face" alt="Foto" class="w-16 h-16 rounded-full mx-auto">
                        <h2 class="text-lg font-semibold text-gray-800 text-center mt-2">Jane Smith</h2>
                        <div class="flex justify-center text-yellow-500 my-2">
                            ★★★★★
                        </div>
                        <p class="text-gray-600 text-center">"Harga sewa terjangkau, dan mobilnya dalam kondisi prima!"</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</body>
</html>
