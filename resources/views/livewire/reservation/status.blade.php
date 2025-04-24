<div>
    <h2 class="text-2xl font-bold mb-4 text-center">Status Reservasi Anda</h2>

    @if($reservation)
        <ul class="space-y-4">
            <li class="bg-white shadow-md p-4 rounded-lg">
                <h3 class="font-semibold">Reservasi pada: {{ $reservation['tanggal_reservasi'] }}</h3>
                <p>Status: <span class="text-green-500">{{ $reservation['status'] }}</span></p>
                <p>Jumlah Orang: {{ $reservation['jumlah_orang'] }}</p>
                <p>Catatan: {{ $reservation['catatan'] ?? 'Tidak ada' }}</p>
            </li>
        </ul>
    @else
        <p>Anda belum membuat reservasi apapun.</p>
    @endif
</div>
