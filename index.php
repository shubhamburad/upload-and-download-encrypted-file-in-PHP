<html>
 <head>
 <title>How to encrypt and upload file using PHP </title>
 </head> 
 <body> 
 <form action="upload.php" method="post" enctype="multipart/form-data" name="formFileUpload" id="formFileUpload"> 
 <table border="0"> 
 <tr>
 <td>Select a file </td>
 <td><input name="fileToUpload" type="file" id="fileToUpload">
 </td> </tr> 
 <tr> <td>&nbsp;</td>
 <td> <input name="btnUploadFile" type="submit" id="btnUploadFile" value="Upload"> 

 </td> 
 </tr>
 </table> 
 </form>

<br><br>
<h3> Currently  files in folder<h3>
<?php
  $files = scandir("download");
 
 for($a =2; $a<count($files); $a++) {

	 ?>
	 
	 <p>
		<a dowload ="<?php echo $files[$a] ?>"  href="download/<?php echo $files[$a] ?>"><?php echo $files["$a"] ?></a>

	 </P>
	
	 <?php
	
	}?>
 </body>  </html>