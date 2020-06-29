<?php  

function get($url = null, $headers = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($headers != "") {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}

	return $result = curl_exec($ch);
	curl_close($ch);
}

function number($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function create_account() {
	
}

echo "\e[96m---------------------------\n";
echo "|                         |\n";
echo "|     NordVpn Premium     |\n";
echo "|       PremiumKita       |\n";
echo "|                         |\n";
echo "---------------------------\n";


echo "\e[93mJumlah Akun : ";
$banyak = trim(fgets(STDIN));
echo "\n\e[93mPilih Jangka Premium :";
echo "
1. Premium 1 Tahun
2. Premium 3 Tahun
Masukan Angka : ";
$tipe = trim(fgets(STDIN));
echo "\n";
echo "\e[93mSEDANG MEMBUAT AKUN\n";

for ($i = 0; $i < $banyak ; $i++) {
	sleep(3);
	flush();
	if ($tipe == '1') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+365 days', strtotime(date('d M Y'))))."]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+365 days', strtotime(date('d M Y'))))."] \n\r");
		fclose($fh);
	} elseif ($tipe == '2') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+1095 days', strtotime(date('d M Y'))))."]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Expired ".date('d M Y', strtotime('+1095 days', strtotime(date('d M Y'))))."] \n\r");
		fclose($fh);
	}
}
echo "====================================================\n";
echo "Akun NordVpn Premium \e[92mSUKSES\e[0m Dibuat Cek result.txt\n";
echo "====================================================\n";

?>