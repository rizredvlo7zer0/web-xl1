<html>
    <style type="text/css">
    @import url(view/xl.css)
    </style>
<div class="login">
	<h1>GET TOKEN</h1>
    <form method="post" action="">
    	<input type="int" name="msisdn" placeholder="Msisdn" required="required" />
    	<input type="text" name="otp" placeholder="OTP" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">AMBIL TOKEN</button>
        <br><center>
        <?php

if(isset($_POST['submit'])){
$main = new controller();
$main->get_token();
}?>
        <a href="/beli_paket" style="text-decoration:none">
            <button type="button" name="direct" class="btn btn-primary btn-block btn-large">TEMBAK KUOTA</button>
        </a>
        </center>
        
    </form>
</div>
        </form>
</html>
