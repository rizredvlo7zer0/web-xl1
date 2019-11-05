<html>
    <style type="text/css">
    @import url(view/xl.css)
    </style>
<div class="login">
	<h1>Request OTP XL</h1>
    <form method="post" action="">
    	<input type="text" name="msisdn" placeholder="Msisdn" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">SUBMIT</button><br>
        <center>
            <?php

if(isset($_POST['submit'])){
$main = new controller();
$main->req_otp();}
?>
        </center>
        <a href="/get_token" style="text-decoration:none">
            <button type="button" name="direct" class="btn btn-primary btn-block btn-large">AMBIL TOKEN</button>
        </a><br>
        <a href="/beli_paket" style="text-decoration:none">
            <button type="button" name="direct" class="btn btn-primary btn-block btn-large" >TEMBAK KUOTA</button>
        </a>
        
        
    </form>
</div>
        </form>
</html>
