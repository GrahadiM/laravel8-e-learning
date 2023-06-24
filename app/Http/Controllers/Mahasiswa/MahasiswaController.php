<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    private $userModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userModel    = new User();
    }

    public function dashboard() {
        $data['total']      = 0;
        $data['title']      = 'Dashboard Mahasiswa';
        return view('mahasiswa.dashboard', $data);
    }

    public function gantiformat($nomorhp) {
        $nomorhp = trim($nomorhp);
        $nomorhp = strip_tags($nomorhp);
        $nomorhp = str_replace(" ","",$nomorhp);
        $nomorhp = str_replace("(","",$nomorhp);
        $nomorhp = str_replace(".","",$nomorhp);

        if(!preg_match('/[^+0-9]/',trim($nomorhp))){
            if(substr(trim($nomorhp), 0, 3) =='+62'){
                $nomorhp = trim($nomorhp);
            }
            elseif(substr($nomorhp, 0, 1) =='0'){
                $nomorhp = '+62'.substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }
}
