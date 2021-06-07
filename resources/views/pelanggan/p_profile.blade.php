Your Name IS {{Auth::user()->name}}
<br>
Foto Profile Anda
<br>
<img src="{{url('img/foto_profile/'.Auth::user()->foto_profile)}}" alt="" width="100" height="100"></td>
Alamat Anda {{Auth::user()->alamat}}
