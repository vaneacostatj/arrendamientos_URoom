<?php
$session = session();

$User = $session->user;
$Pass = $session->password;

$user = $getLog->user;
$pass = $getLog->password;
$rol = $getLog->rol;

/* echo $User;
echo $pass; */

if ($User == $user && $Pass == $pass) {

  if ($rol == 'Admin') {

    return redirect(base_url('/public/readAdmin'));
  } else {
    if ($rol == 'Host') {

      return redirect(base_url('/public/readHost'));
    } else {
      return redirect(base_url('/public/readInvited'));
    }
  }
}
