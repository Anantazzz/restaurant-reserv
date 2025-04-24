<div>
    <div>
        <div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Form Reservasi</h2>
        
            <form wire:submit.prevent="submit" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Nama Lengkap</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Nomor HP</label>
                    <input type="tel" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Tanggal Reservasi</label>
                    <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Waktu</label>
                    <input type="time" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Jumlah Orang</label>
                    <input type="number" min="1" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
        
                <div>
                    <label class="block text-sm font-medium">Catatan (opsional)</label>
                    <textarea class="w-full border border-gray-300 rounded px-3 py-2" rows="3"></textarea>
                </div>
        
                <a href="{{ route('reservation.status') }}" class="btn btn-primary m-2">Submit</a>               
            </form>
        </div>    
    </div>    
</div>
