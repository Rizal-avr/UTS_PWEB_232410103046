@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto my-10 bg-blue-900 text-white p-8 rounded-xl shadow shadow-slate-300">
    <h1 class="text-3xl font-bold mb-6">Profile</h1>
    <div class="space-y-4">
        <div>
            <p class="text-gray-200">Username:</p>
            <p class="font-medium">{{ $username }}</p>
        </div>
        <div>
            <p class="text-gray-200">Role:</p>
            <p class="font-medium">Admin Penjualan Sayur</p>
        </div>
        <div>
            <p class="text-gray-200">No Telp:</p>
            <p class="font-medium">08xxxxxxxxxx</p>
        </div>
        <div>
            <p class="text-gray-200">Alamat:</p>
            <p class="font-medium">London</p>
        </div>
    </div>
</div>
@endsection