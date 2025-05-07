@extends('layouts.app')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <p class="text-gray-600">Selamat datang, {{ $username }}!</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-blue-900 p-6 rounded-lg shadow">
        <h3 class="text-white text-lg font-semibold mb-2">Total Penghasilan</h3>
        <p class="text-white text-2xl font-bold">Rp {{ number_format($totalIncome, 0, ',', '.') }}</p>
    </div>
    <div class="bg-blue-900 p-6 rounded-lg shadow">
        <h3 class="text-white text-lg font-semibold mb-2">Total Penjualan</h3>
        <p class="text-white text-2xl font-bold">{{ $totalSales }} transaksi</p>
    </div>
</div>

<div class="bg-blue-900 text-white p-6 rounded-lg shadow">
    <h2 class="text-white text-xl font-semibold mb-4">Harga Sayur per Kg</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama Sayur</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Harga per Kg</th>
                </tr>
            </thead>
            <tbody class="bg-blue-900 divide-y divide-cyan-400">
                @foreach($vegetablePrices as $vegetable => $price)
                <tr class="hover:bg-blue-800 transition duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $vegetable }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($price, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection