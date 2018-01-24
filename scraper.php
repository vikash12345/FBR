<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
//  https://e.fbr.gov.pk/Registration/searchDetail.aspx?rand=0.6987121410114072&crup=6299999
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$cHeadres = array(
      'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
      'Accept-Language: en-US,en;q=0.5',
      'Connection: Keep-Alive',
      'Pragma: no-cache',
      'Cache-Control: no-cache'
     );


     function dlPage($link) {
        global $cHeadres;
        $ch = curl_init();
        if($ch){
         curl_setopt($ch, CURLOPT_URL, $link);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $cHeadres);
         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
         curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         curl_setopt($ch, CURLOPT_HEADER, false);
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
         curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
         $str = curl_exec($ch);
         curl_close($ch);
         $dom = new simple_html_dom();
         $dom->load($str);
         return $dom;
        }
       }
       //$maincode = dlPage($link);
for($page = 1; $page <3; $page++)
{
    
 $link = 'https://e.fbr.gov.pk/Registration/searchDetail.aspx?crup='.$page;
 $maincode = file_get_html($link);
 sleep(3);
if($maincode)
{
      $ntn = $maincode->find("//*[@id='lblSRNTN']",0)->plaintext;
      echo  "$ntn \n";
}
    
    
    
    
   // $NEWLINK    =   file_get_html($link);
   // echo $NEWLINK;
}
?>
