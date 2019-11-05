<html>
    <style type="text/css">
    @import url(view/xl.css)
    </style>
<div class="login">
	<h1>Beli Paket</h1>
    <form method="post" action="">
    	<input type="int" name="msisdn" placeholder="Msisdn" required="required" />
    	<input type="text" name="token" placeholder="token" required="required" />
    	<input type="int" name="serviceid" placeholder="Service ID" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">DOR</button>
        <br><center>
        <?php

if(isset($_POST['submit'])){
$main = new controller();
$main->beli_paket_token();
}?>
        </center>
        
    </form>
</div>
        </form>
</html>