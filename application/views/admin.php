<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


	<title>Admin Page</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		text-align: center;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: auto;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<div id="container">
	<h1>Welcome to the Admin Page!</h1>

	<div id="body">

    <h2>The user ID: </h2>
    <?php echo $user->id; ?>
    <h2>The user name: </h2>
    <?php echo $user->name; ?>
    <h2>The user type: </h2>
    <?php   if ($user->admin == 0){
                echo "User";
            }
            else 
                echo "Admin";
    ?>
    UserID for Session:
	<?php echo $this->session->userdata('userID'); ?> 
	<h2>
    Logout:
    </h2> 
    <?php echo form_open('user/logout'); ?>
    <button type="submit" class="btn btn-primary">Logout</button>
	<?php echo form_close(); ?>
	
    <h2>Logout all users</h2>


    <form class="form-inline" id="messageForm">
			
				<input type="submit" value="submit" />
    </form>
    <?php $this->load->helper('url'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/js/node_modules/socket.io-client/dist/socket.io.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/js/nodeClient.js"></script>
    
	


    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
    
    </p>
</div>

</body>
</html>