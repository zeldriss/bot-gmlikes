
<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');
echo "===============================================\n";
echo "                        	\n";
echo "          [+] GMLIKES Account Creator  [+]\n"; 
echo "                        	\n";
echo "================================================\n";

echo "[+] Reffmu : ";
$reff = trim(fgets(STDIN));
//Rao5k7Mw
//mnemonic2710
$pass = 'sgb12345';

$count = '99';
$string = "abcdefghijklmnopqrstuvwxyz";

	for($i=0; $i < $count; $i++){
		$email = substr(str_shuffle($string), 0, 10);
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://enapi.gmlikes.com/login/regist",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => "username=$email@gmail.com&word=2%2C7%2C1%2C0&sc=$reff&prop=1&password=$pass&confirm=$pass&timestamp=1632069487&user=0&sign=8ca5f235dcdf6858db7788d4f624291f",
        CURLOPT_HTTPHEADER => array(
            "Host: enapi.gmlikes.com",
            "User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0",
            "Connection: keep-alive",
            "content-type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);
curl_close($ch);
		$date = date("D-M-Y h:i:s");
		echo "[-] Email: $email@gmail.com | Pass: $pass | Reff: $reff => success \n";
		fwrite(fopen("gmlikesakun.txt", "a"), "Email: $email@gmail.com | Pass: $pass | Reff: $reff\n");
        return $response;
}

?>
