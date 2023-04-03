<?php
require_once "connection/config.php";




if(isset($_POST['kirim'])){
    $nama = trim(mysqli_real_escape_string($con, $_POST['name']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $pesan = trim(mysqli_real_escape_string($con, $_POST['pesan']));
    


    mysqli_query($con, "INSERT INTO pesan ( nama, email, pesan ) VALUES ('$nama','$email','$pesan')") or die (mysqli_error($con));
    
} else {

}
echo "<script>window.location='https://milki.panggahtani.net/pesan.html'</script>";
?>