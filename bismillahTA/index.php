<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>KAGS Hotspot</title>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />	
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link rel="stylesheet" href="login.css" media="screen">

</head>
<body class='login'>

	<form name="sendin" action="$(link-login-only)" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="$(link-orig)" />
		<input type="hidden" name="popup" value="true" />
	</form>
	
	<script type="text/javascript" src="/md5.js"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('$(chap-id)' + document.login.password.value + '$(chap-challenge)');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>



<form class="vertical-form" name="login" action="$(link-login-only)" method="post"
	$(if chap-id) onSubmit="return doLogin()" $(endif)>
<input type="hidden" name="dst" value="$(link-orig)" />
<input type="hidden" name="popup" value="true" />
<div style="margin:0;padding:0;display:inline"></div>
<legend>
<img class="logo" src="logo.png" width="90px" />
<br><span style="color: #000000; font-size: 16px"><b>Pondok Pesantren Ki Ageng Galang Sewu</b></p></span>
<hr>
<input autocomplete="on" name="username" type="text" value="$(username)" placeholder="NIS" size="30" />
<input autocomplete="on" name="password" type="password" label="false" placeholder="Password" size="20" />
<input name="submit" type="submit" value=" " />
<div class='footer'>
	
<p><span style="color: #0000FF; font-size: 15px">Bagi yang ingin mengganti <b>Password</b> silahkan hubungi Tim Wi-Fi Pondok</p></span>
<p><span style="color: #000000; font-size: 15px"><b>Jangan Lupa Bayar Wi-Fi dan Syahriyah dengan Disiplin</b></p></span>
<p>Cara  login/logout  dari perangkat Laptop atau HP(jika tidak diarahkan pada halaman atau
<br>notifikasi login ) ketikan <span style="color: #0000FF; font-size: 14px">galangsewu.net</span> pada kolom search  browser perangkat Anda	
<p><span style="color: #000080; font-size: 11px">Bagi yang belum mendapatkan akun atau lupa / bermasalah dengan akunnya bisa menghubungi TIM Wi-Fi Pondok
<br>Putra : kang Jati <span style="color: #4682B4; font-size: 11px">_ _ _ _ _ _ _</span> <span style="color: #000080; font-size: 11px">Putri : mbak Rubi</span>
<p><span style="color: #ff0000; font-size: 12px">Untuk mengurangi penggunaan Wi-Fi yang kurang berfaedah saat Jama'ah Sholat dan kegiatan Pondok,
<br>maka situs-situs seperti Youtube, Instragram, Facebook, Olshop, Anime dan Streaming Video akan di blok pada jam tersebut</span>
</p>
</div>
</form>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
</body>
</html>
