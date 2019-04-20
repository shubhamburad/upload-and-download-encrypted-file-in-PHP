<?php //code for save_file.php (form action)

$uploadDirectory = "upload/"; //folder to save the encrypted file 
$downloadDirectory ="download/";

$fileName = $_FILES['fileToUpload']['name']; 

$tempFileName = $_FILES['fileToUpload']['tmp_name'];

$error = $_FILES['fileToUpload']['error']; 

$fileContentType = $_FILES['fileToUpload']['type']; 

$fileSize = $_FILES['fileToUpload']['size'];

//$fileName = $_FILES['fileToUpload'];

//move_uploaded_file($tempFileName, "upload/".$file_name);

if($error==UPLOAD_ERR_OK){

$file = fopen($tempFileName,"r"); 

$content = fread($file,filesize($tempFileName));

$encryptedContent = base64_encode($content);

$encryptedFileSaveName=$uploadDirectory.md5($fileName).".data";

$encryptedFile = fopen($encryptedFileSaveName,'w');

fwrite($encryptedFile,$encryptedContent); 

fclose($encryptedFile); 
print("File has been upload and encrypted successfully.");

$file1 = fopen($encryptedFileSaveName,"r"); 

$content1 = fread($file1,filesize($encryptedFileSaveName));

$decryptedContent = base64_decode($content1);

$decryptedFileSaveName=$downloadDirectory.$fileName;

$decryptedFile = fopen($decryptedFileSaveName,'w');

fwrite($decryptedFile,$decryptedContent); 

fclose($decryptedFile);

}
else
{
	print("Error while uploading......"); 
}

echo "<meta http-equiv='refresh' content='2;url=index.php'/>";
//header("Location : index.php")
?>