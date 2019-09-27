<?php 

 $targetfolder = "file_pdf/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['$nama']) ;
$file_type=$_FILES['file']['type'];
if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
 echo "File Berhasil di Upload  file ". basename( $_FILES['file']['name']). " is uploaded";
 //Jalankan perintah insert ke database
 }
 else {
 echo "File Gagal di Upload";
 }
}
else {
 echo "Hanya Boleh upload PDF, JPEG GIF .<br>";
}
					// $target_file = $target_dir . basename($_FILES["file"]["name"]);
					// $uploadOk = 1;
					// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// $file_name =  $_GET['nik'];
					// // Check if image file is a actual image or fake image
					// if(isset($_POST["submit"])) {
					//    $check = getimagesize($_FILES["file"]["tmp_name"]);
					// 	if($check !== false) {
					// 		echo "File is an image - " . $check["mime"] . ".";
					// 		$uploadOk = 1;
					// 	} else {
					// 		echo "File is not an image.";
					// 		$uploadOk = 0;
					// 	}
					// }
					// // Check if file already exists
					// $filename = $file_name;
					// $file_name2 = substr("00000" .$file_name,-5) .' '.date("Ymd His"); 
					// if (file_exists($target_dir.$file_name ."file.pdf")) {
					// 	echo "<br><center>Maaf file yang anda pilih sudah ada.";
					// 	$uploadOk = 0;
					// }
					// // Check file size

					// // Allow certain file formats
					// if($imageFileType != "pdf"  ) {
					// 	echo "<center>Sorry, only PDF files are allowed.";
					// 	$uploadOk = 0;
					// }
					// // Check if $uploadOk is set to 0 by an error
					// if ($uploadOk == 0) {
					// 	echo "File anda tidak bisa diupload</center>.";
					// // if everything is ok, try to upload file
					// } else {

					// 	   if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir. $file_name .".file.pdf")) {
					// 	   echo "<center> Laporan Hasil Audit Nomor <b> $filename </b>". " Berhasil diupload.</center>";
					// 	} else {
					// 		echo "<center>maaf ada kesalahan saat menguploud file anda </cemter>.";

					// 	}
					// }

					?>