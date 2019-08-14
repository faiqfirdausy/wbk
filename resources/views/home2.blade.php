@if($session->id_role ==1)
@include('home')

@elseif ($session->id_role ==0)
@include('verifikasi')

@endif
 