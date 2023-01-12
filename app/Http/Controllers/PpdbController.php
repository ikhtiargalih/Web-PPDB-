<?php
 
namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\payment;
use App\Models\User;
use Illuminate\Auth\Events\Validated; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PpdbController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('landing.index', compact('landing'));
    }

    public function login()
    {
        return view('landing.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register() 
    {
        return view('landing.register');
    }

    public function dashboardAdmin()
    {
        return view('dashboard.admin');
    }

    public function dashboardStudent()
    {
        return view('dashboard.student');
    }

    public function contentPembayaran()
    {
        $siswa = payment::where('user_id', Auth::user()->id)->first();
        return view('content.pembayaran', compact('siswa'));
    }

    public function contentStudent()
    {
        return view('content.student');
    }

    public function registerAccount(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|min:7',
            'namalengkap' => 'required',
            'asalsekolah' => 'required',
            'email' => 'required',
            'no_hp' => 'required|min:9',
            'no_hp_ayah' => 'required|min:9',
            'no_hp_ibu' => 'required|min:9',
            'referensi' => 'required',
            'jk' => 'required',
        ]);

        User::create([
            'role' => 'user',
            'nisn' => $request->nisn,
            'namalengkap' => $request->namalengkap,
            'asalsekolah' => $request->asalsekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'referensi' => $request->referensi,
            'jk' => $request->jk,
            'password' => bcrypt($request->nisn)
        ]);
        // User::create($validated);
        return redirect('/')->with('success', 'Berhasil menambahkan peserta ppdb!');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ], [
            'email.exists' => 'Email ini belum tersedia',
            'email' => 'Email harus diisi',
            'password' => 'password harus diisi'   
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            if(!Auth::user()->role == 'user'){
                return redirect('/dashboard/student')->with('successLogin', 'Anda berhasil login!');
            }else if(Auth::user()->role == 'admin'){
                return redirect('/dashboard/admin');
            }
           
        }
    }

    public function store(Request $request)
    {
        $pembayaran = $request->validate([
            'nama_bank' => 'required',
            'pemilik_rekening' => 'required',
            'nominal' => 'required|min:4',
            'bukti' => 'required|image|mimes:jpg,png,jpeg,svg,gif'
        ]);

        $pembayaran['bukti'] = $request->file('bukti')->store('bukti-img');

        payment::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $request->nama_bank,
            'pemilik_rekening' => $request->pemilik_rekening,
            'nominal' => $request->nominal,
            'bukti' => $pembayaran['bukti'],
        ]);
        return redirect('/pembayaran');


    }
}