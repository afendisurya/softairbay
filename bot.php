<?php
// HEAD


/*

// SERVER
include('/home/asus/Desktop/0/header/header.php');
include('/home/asus/Desktop/0/badan_atas/badan_atas.php');
include('/home/asus/Desktop/0/curl/curl.php');
include('/home/asus/Desktop/0/parsing/parsing.php');
include('/home/asus/Desktop/0/countdown/countdown.php');
include('/home/asus/Desktop/0/CLI/CLI.php');
include('/home/asus/Desktop/0/warna/warna.php');
include('/home/asus/Desktop/0/garis/garis.php');
include('/home/asus/Desktop/0/notif/notif.php');

*/

// TERMUX
include('0/header/header.php');
include('0/badan_atas/badan_atas.php');
include('0/curl/curl.php');
include('0/parsing/parsing.php');
include('0/countdown/countdown.php');
include('0/CLI/CLI.php');
include('0/warna/warna.php');
include('0/garis/garis.php');
include('0/notif/notif.php');

// SCRIPT
include('config.php');

/*

function fungsi_menulis_config($isi){
	$file = "config.php";
	$teks = '<?php
	$EC = "'.$isi.'";

	?>';
	file_put_contents($file, $teks);
	}
*/
	
/* ======================================================================================================== */ 

//waktu 
$waktu = date('H:i:s');

// BODY

// CLEAR
fungsi_reset();

fungsi_badan_atas("SOFTAIRBAY", "1.0.0");

//echo "\n".$EC;

echo "\n".$warna_isi_kuning_terang."Kuy Gas...\n$warna_reset\n";

while (true) {

	$url = "https://www.softairbay.com/autoSAB/auto.php";
	$Cookie = $Coki;
	$data = "DOGECOIN=ttyng";
	//echo "\n".$cookie;

	// VAR
	$var_untuk_fungsi_curl_post_web = fungsi_curl_post($url, $Cookie, $data);
	$var_untuk_fungsi_parsing_html_ec = fungsi_parsing_html($var_untuk_fungsi_curl_post_web, '<b style="float:right; color:#fff; font-size:18px; font-weight:bold; margin: 10px 7px 10px 0px">', "</b>", 1);
	//$var_untuk_fungsi_parsing_html = fungsi_parsing_html($var_untuk_fungsi_curl_post_web, "<title>", "</title>", 1);
	$var_untuk_fungsi_parsing_html_claim = fungsi_parsing_html($var_untuk_fungsi_curl_post_web, '<div style="text-align:center; color:#5eff66; font-size:16px; font-weight:bold; margin: 0 0 0 0;">', '</div>', 1);
	$var_untuk_fungsi_parsing_html_cp = fungsi_parsing_html($var_untuk_fungsi_curl_post_web, '<b id="hmcp" style="float:right; color:#fff; font-size:18px; font-weight:bold; margin: 10px 7px 10px 0px">', '</b>'	, 1);

	// ECHO
	//echo "\n".$var_untuk_fungsi_curl_post_web;
	//echo "\n".$var_untuk_fungsi_parsing_html;
	//echo "\n".$var_untuk_fungsi_parsing_html_ec;
	//echo "\n".$var_untuk_fungsi_parsing_html_claim;
	//echo "\n".$var_untuk_fungsi_parsing_html_token;

	$var_teks = "[*] EC = ".$warna_isi_kuning_terang.$var_untuk_fungsi_parsing_html_ec.$warna_reset." | ".$warna_isi_hijau_terang.$var_untuk_fungsi_parsing_html_claim.$warna_reset." | CP = ".$warna_isi_merah_terang.$var_untuk_fungsi_parsing_html_cp.$warna_reset;
	echo $var_teks;

echo "\n";
fungsi_countdown(305, 0);
//echo "\r$garis_dua";
}
?>