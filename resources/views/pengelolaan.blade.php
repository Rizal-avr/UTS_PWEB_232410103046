@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-amber-400">Pengelolaan Penjualan</h1><br>
    <button class="bg-blue-800 hover:bg-blue-900 text-white font-medium py-2 px-4 rounded-lg shadow transition duration-200">
        <i class="fas fa-plus mr-2"></i>Tambah Data Penjualan
    </button>
    <button class="bg-red-700 hover:bg-red-800 text-white font-medium py-2 px-4 rounded-lg shadow transition duration-200">
        <i class="fas fa-plus mr-2"></i>Hapus Data Penjualan
    </button>
</div>

<div class="bg-blue-900 text-white p-6 rounded-lg shadow">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-cyan-400">
            <thead class="bg-blue-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama Sayur</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama Pembeli</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Kuantitas (kg)</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Harga Jual (per kg)</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Penghasilan</th>
                </tr>
            </thead>
            <tbody class="bg-blue-900 divide-y divide-cyan-400">
                @foreach($salesData as $sale)
                <tr class="hover:bg-blue-800 transition duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $sale['tanggal'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $sale['nama_sayur'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $sale['nama_pembeli'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $sale['kuantitas'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($sale['harga_jual'], 0, ',', '.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($sale['penghasilan'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
