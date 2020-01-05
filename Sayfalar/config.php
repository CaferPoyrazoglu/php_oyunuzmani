<?php  session_start();
try {

	
	$db = new PDO("mysql:host=localhost;charset=utf8mb4;dbname=u766912778_oyunuzmani","u766912778_admin","realniggas32");

	function turkishcharacters( $string ) { 
		$string = str_replace ( '&ccedil;', 'ç', $string ); 
		$string = str_replace ( '&yacute;','ı',$string ); 
		$string = str_replace ( '&Ccedil;', 'Ç', $string ); 
		$string = str_replace ( '&Ouml;', 'Ö', $string ); 
		$string = str_replace ( '&Yacute;', 'Ü', $string ); 
		$string = str_replace ( '&ETH;','Ğ',$string ); 
		$string = str_replace ( '&THORN;','Ş', $string ); 
		$string = str_replace ( '&Yacute;','İ', $string ); 
		$string = str_replace ( '&ouml;','ö', $string ); 
		$string = str_replace ( '&thorn;','ş', $string ); 
		$string = str_replace ( '&eth;','ğ', $string ); 
		$string = str_replace ( '&uuml;','ü', $string ); 
		$string = str_replace ( '&yacute;','ı', $string ); 
		$string = str_replace ( '&amp;','&', $string ); 
		$string = str_replace ( '&nbsp;',' ', $string ); 

		return $string; 
		
	} 

	function seo($s) {
		$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',',"'");
		$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','-');
		$s = str_replace($tr,$eng,$s);
		$s = strtolower($s);
		$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
		$s = preg_replace('/\s+/', '-', $s);
		$s = preg_replace('|-+|', '-', $s);
		$s = preg_replace('/#/', '', $s);
		$s = str_replace('.', '', $s);
		$s = trim($s, '-');
		return $s;
	}	

	
	
	
}
catch(PDOException $e){
	print $e->getMessage();
}

// Google giris



