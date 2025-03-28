<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="sewaModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50 overflow-y-auto">
        <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-md relative">
            <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900" onclick="toggleModal(false)">
                ✖
            </button>
    
            <h2 class="text-lg font-semibold mb-3">Form Sewa Mobil</h2>
    
            <form id="sewaForm">
                @csrf
                <div class="mb-2">
                    <label class="block text-sm font-medium">Nama</label>
                    <input type="text" name="nama" id="nama" required class="w-full border rounded p-1 text-sm">
                </div>
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" id="email" required class="w-full border rounded p-1 text-sm">
                </div>
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Telepon</label>
                    <input type="tel" name="telepon" id="telepon" required class="w-full border rounded p-1 text-sm">
                </div>
    
                {{-- <div class="mb-2">
                    <label class="block text-sm font-medium">Jenis Mobil</label>
                    <select name="jenis" id="jenis" class="w-full border rounded p-1 text-sm">
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                        <option value="MPV">MPV</option>
                        <option value="Hatchback">Hatchback</option>
                    </select>
                </div> --}}
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Pilih Mobil</label>
                    <select name="mobil_id" id="mobil_id" class="w-full border rounded p-1 text-sm">
                        @foreach($mobils as $mobil)
                            <option value="{{ $mobil->id }}">{{ $mobil->nama }}</option>
                        @endforeach
                    </select>
                </div>
                
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Tipe Mobil</label>
                    <select name="tipe" id="tipe" class="w-full border rounded p-1 text-sm">
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                    </select>
                </div>
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Tanggal Sewa</label>
                    <input type="date" name="tanggal_sewa" id="tanggal_sewa" required class="w-full border rounded p-1 text-sm">
                </div>
    
                <div class="mb-2">
                    <label class="block text-sm font-medium">Durasi (Hari)</label>
                    <input type="number" name="durasi" id="durasi" min="1" required class="w-full border rounded p-1 text-sm">
                </div>
    
                <div class="mb-3">
                    <label class="block text-sm font-medium">Catatan</label>
                    <textarea name="catatan" id="catatan" class="w-full border rounded p-1 text-sm"></textarea>
                </div>
    
                <button type="button" onclick="submitSewa()" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 w-full text-sm">
                    Kirim
                </button>
            </form>
        </div>
    </div>
    
            
    
                
    
    <!-- Script Modal -->
    <script>
        function toggleModal(status) {
            const modal = document.getElementById('sewaModal');
            const body = document.body;
    
            modal.classList.toggle('hidden', !status);
    
            if (status) {
                body.style.overflow = 'hidden'; // Non-scrollable body
            } else {
                body.style.overflow = 'auto'; // Restore scroll
            }
        }
    
        function submitSewa() {
    let formData = new FormData();
    formData.append("mobil_id", document.getElementById("mobil_id").value);
    formData.append("nama", document.getElementById("nama").value); // Perbaikan: Nama langsung, bukan nama_pelanggan
    formData.append("email", document.getElementById("email").value);
    formData.append("telepon", document.getElementById("telepon").value);
    formData.append("tanggal_sewa", document.getElementById("tanggal_sewa").value);
    formData.append("durasi", document.getElementById("durasi").value);
    formData.append("catatan", document.getElementById("catatan").value);

    fetch("/sewa-mobil", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Sewa berhasil dikirim!");
            toggleModal(false);
            document.getElementById("sewaForm").reset();
        } else {
            alert("Terjadi kesalahan: " + data.message);
        }
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Gagal mengirim data.");
    });
}

    </script>
    
</body>
</html>


