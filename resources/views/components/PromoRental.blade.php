<div class="relative w-full bg-green-500 text-white flex flex-col md:flex-row items-center justify-center min-h-screen px-6 py-12">
    <!-- Gambar Full di Kiri (Desktop) / Bawah (HP) -->
    <div class="w-full md:w-1/2 flex justify-center mb-6 md:mb-0">
        <img src="https://media.istockphoto.com/id/1656048099/photo/call-center-woman-and-working-in-team-office-with-headset-computer-and-online-customer.webp?a=1&b=1&s=612x612&w=0&k=20&c=N0QYope4rzJHS9DZoDrwN5FanuxA1YB87Thra4DwJCw=" 
            alt="Customer Service" class="w-full max-w-md md:max-w-full h-auto object-cover rounded-lg shadow-lg">
    </div>

    <!-- Teks Besar di Kanan (Desktop) / Atas (HP) -->
    <div class="w-full md:w-1/2 flex flex-col justify-center text-center md:text-left px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">
            <i class="fas fa-car text-yellow-300"></i> Sewa Mobil 
            <span class="text-yellow-300">Aman & Terpercaya</span>
        </h1>
        <p class="text-lg md:text-2xl mt-4 text-white/90 drop-shadow-md">
            Dapatkan layanan rental mobil terbaik dengan harga terjangkau!  
            Kami menjamin <span class="font-bold text-yellow-200">100% kepuasan</span> dan kenyamanan perjalanan Anda.
        </p>
        <button class="bg-yellow-500 text-white px-6 py-3 mt-6 rounded-lg font-semibold shadow-lg hover:bg-yellow-700 transition-all duration-300"
            onclick="toggleModal(true)">
            <i class="fas fa-rocket"></i> Sewa Sekarang
        </button>
        @include('components.sewa-modal')
    </div>
</div>
