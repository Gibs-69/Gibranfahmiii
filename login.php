<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
?>
<center><h1>Form Login Mahasiswa</h1>
<form action="./ceklogin.php" method="post">
<input type="email" name="email" placeholder="Email" alt="email" required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
<input type="submit" name="submit" value="Submit" alt="submit"/>
</form><br/>
</center>
<?php } ?>