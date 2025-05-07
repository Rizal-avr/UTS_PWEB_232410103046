<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($request->username === 'rizal' && $request->password === '123') {
            return redirect()->route('dashboard', ['username' => $request->username]);
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function dashboard(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');
        
        $vegetablePrices = [
            'Cabai' => 100000,
            'Tomat' => 70000,
            'Kol' => 60000,
            'Wortel' => 50000,
            'Bayam' => 30000
        ];
        
        $salesData = $this->getSalesData();
        $totalIncome = array_sum(array_column($salesData, 'penghasilan'));
        $totalSales = count($salesData);

        return view('dashboard', compact('username', 'vegetablePrices', 'totalIncome', 'totalSales'));
    }

    public function pengelolaan(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $salesData = $this->getSalesData();
        return view('pengelolaan', compact('salesData'));
    }

    public function profile(Request $request)
    {
        if (!$request->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    private function getSalesData()
    {
        return [
            [
                'tanggal' => '2023-05-01',
                'nama_sayur' => 'Cabai',
                'nama_pembeli' => 'Budi',
                'kuantitas' => 2,
                'harga_jual' => 100000,
                'penghasilan' => 200000
            ],
            [
                'tanggal' => '2023-05-02',
                'nama_sayur' => 'Tomat',
                'nama_pembeli' => 'Ani',
                'kuantitas' => 5,
                'harga_jual' => 70000,
                'penghasilan' => 350000
            ],
            [
                'tanggal' => '2023-05-03',
                'nama_sayur' => 'Kol',
                'nama_pembeli' => 'Cici',
                'kuantitas' => 3,
                'harga_jual' => 60000,
                'penghasilan' => 180000
            ],
            [
                'tanggal' => '2023-05-04',
                'nama_sayur' => 'Wortel',
                'nama_pembeli' => 'Dedi',
                'kuantitas' => 4,
                'harga_jual' => 50000,
                'penghasilan' => 200000
            ],
            [
                'tanggal' => '2023-05-05',
                'nama_sayur' => 'Bayam',
                'nama_pembeli' => 'Eva',
                'kuantitas' => 6,
                'harga_jual' => 30000,
                'penghasilan' => 180000
            ]
        ];
    }

    public function logout(Request $request)
    {
        return redirect()->route('login')->with('success', 'Anda telah logout');
    }
}