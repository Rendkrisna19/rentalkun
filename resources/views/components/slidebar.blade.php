<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Rental Mobil</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome untuk ikon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

    <script>
        function toggleSidebar() {
            let sidebar = document.getElementById('sidebar');
            let menuText = document.querySelectorAll('.menu-text');
            
            // Toggle kelas untuk memperbesar/memperkecil sidebar
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');

            // Toggle visibilitas teks menu
            menuText.forEach(text => {
                text.classList.toggle('hidden');
            });
        }
    </script>

</head>
<body class="bg-gray-100 font-custom">
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="w-64 h-screen bg-indigo-400 text-white transition-all duration-300">
            <!-- Header Sidebar -->
            <div class="flex justify-between items-center p-4">
                <span class="text-xl font-bold menu-text">Rental Mobil</span>
                <button onclick="toggleSidebar()" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Menu Navigasi -->
            <nav class="mt-4">
                <a href="/dashboard" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-home text-lg"></i>
                    <span class="ml-3 menu-text">Home</span>
                </a>
                <a href="/dashboard/mobil" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-car text-lg"></i>
                    <span class="ml-3 menu-text">Tambah Jenis Mobil</span>
                </a>
                <a href="/dashboard/penyewaan" class="flex items-center p-3 hover:bg-gray-700">
                    <i class="fas fa-list text-lg"></i>
                    <span class="ml-3 menu-text">Lihat Data Booking</span>
                </a>
            </nav>
        </div>

        {{-- <!-- Konten -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p>Selamat datang di sistem rental mobil!</p>
        </div> --}}
    </div>
</body>
</html>
