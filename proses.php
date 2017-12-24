<?php
include('simple_html_dom.php');
include('koneksi.php');
?>


<?php

if(isset($_POST['url_site'])){
	
	$url_site = $_POST['target'];
 	$html = file_get_html($url_site);
 	$nama_barang = $html->find('.u-txt--fair');
	$harga = $html->find('.c-product-detail-price');
	$url_image=$html->find('img');

	$array_urlimg = array(); 
	foreach($url_image as $urlimage => $value2) {
	       $array_urlimg[] = $value2->src;
	} 


	$array_barang = array();
	foreach ($nama_barang as $name_product => $value) {
		// print_r($hasil);
		$array_barang[] = $value->plaintext;
		$value->plaintext;
	}


	foreach ($harga as $price => $value1) {
		$array_barang[] = $value1->plaintext;
		$value1->plaintext;
	}

	$gender		= $_POST['gender'];	//membuat variabel $gender dan datanya dari inputan dropdown gender
	$kategori	= $_POST['kategori'];	//membuat variabel $kategori dan datanya dari inputan dropdown kategori

	$result = mysql_query("INSERT INTO barang (url_img, nama_barang, harga, url_site, gender, kategori) VALUES('$array_urlimg[1]','$array_barang[0]','$array_barang[6]','$url_site', '$gender', '$kategori')");

	if($result == true){
		echo "database berhasil disimpan";
		echo '<a href="index.php">Kembali</a>';
	}else{
		echo "database gagal disimpan";
		echo mysql_error();
	}


	//inputan url
	$link ="?page=";
    $page = 1 ;
    for ($page; $page <11 ; $page++) { 

    	$r = mysql_query("SELECT * FROM barang WHERE url_site ='$url_site'");

			while($row= mysql_fetch_assoc($r)){
			$id_barang = $row['id_barang'];
		}
    	
    	$url_site = $_POST['target'].$link.$page; 
    	echo "<br>";
    	$html = file_get_html($url_site);

		
    	$ulasan = $html->find('.qa-product-review-content');
   		foreach($ulasan as $key => $review)
	    {

	      //fungsi plaintext : mengambil text 
	      $review->plaintext;
	      echo "<br>";
	      //insert data ke database 
	      mysql_query("INSERT INTO feedback (feedback_product, id_barang) VALUES('$review->plaintext','$id_barang')");
	    }  
    }
}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}

?>

