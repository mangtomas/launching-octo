
<!Doctype html>
<html lang="eng">
<head>
<link href="<?=base_url('public');?>/admin/css/loader.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('fonts/font.css')?>">
<style type="text/css">
      html,
      body {
        height: 100%;
		margin:0;
		padding:0;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto;
        background:url(<?=base_url()?>public/admin/images/left-repeat.png)repeat-y 207px 0px;
      }
</style>

<script src="<?=base_url('public');?>/admin/js/jquery.js"></script>
 <script src="<?=base_url('public');?>/admin/js/jquery.nanoscroller.js"></script>

</script>
</head>
<body>
<div id="wrapper">
<div id="top-nav-fixed">
			<p class="navbar-text pull-left">
				<strong>Date and Time : <span id="servertime"></span></strong>
			  </p>
			 
			 <ul class="nav pull-right" role="navigation" id="user-login">
                    <li class="dropdown">
                      <a id="user-dropdown" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" style="background:none;padding-right:0;margin-right:0">Logged in as <strong><?=$info['email_address']?></strong> <i class="icon-cog icon-white"></i></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="user-dropdown" style="margin-left: 0px;margin-top: 6px;">
                        <li><a href="<?=base_url('xadmin/account/account-information')?>"><i class="icon-info-sign"></i> My Account Information</a></li>
                        <li><a href="<?=base_url('xadmin/account/settings')?>"><i class="icon-cog"></i> Account Settings</a></li>
               
                        <li class="divider"></li>
                        <li><a href="<?=base_url('main/logout')?>"><i class="icon-off"></i> Logout</a></li>
                      </ul>
                    </li>
         
                  </ul>
 
		</div>
		<!---<?=(_controller()=='main'AND _method()=='information')? '<span class="arrow-left"></span>' : null?>//-->
	<div id="leftPanel" class="pull-left">
		<div id="brand-logo">
			<a href="<?=base_url('xadmin/');?>"><img src="<?=base_url('public/admin/images/brand.png')?>" alt="Devstation Content Management System" /></a>
		</div>
		
		 <ul class="nav nav-list left-nav" id="left-menu-panel" style="font: bold 12px 'arial';">
              	<?php
              	$ctr = 1;
              	$count = count($menu);
		 		foreach ($menu as $key => $value) {
		 			# code...
		 			echo "<li class='nav-header'>".$value['label']."</li>";
		 				foreach ($value['module'] as $k => $v) {
		 					$x = explode('/',$v->url);
		 					$method = str_replace('-','_', $x[1]);
		 					$isactive = (_controller()== $x[0] || _method()==$method)? 'menu-active' : null;
		 						if($info['role_id']!=1){
		 							if($v->module_id!=1){

		 							echo "<li><a href='".base_url('xadmin/'.$v->url)."' class='".$isactive."'><i class='custom-icon-small-".strtolower(r_string($v->module))."' style='margin-top:-1px'></i> ".$v->module."</a></li>";
		 							}
		 						}else{
		 							echo "<li><a href='".base_url('xadmin/'.$v->url)."' class='".$isactive."'><i class='custom-icon-small-".strtolower(r_string($v->module))."' style='margin-top:-1px'></i> ".$v->module."</a></li>";

		 						}
		 				}
		 				if($ctr < $count){
		 					echo "<li class='divider'></li>";
		 				}
		 				
		 			$ctr = $ctr + 1;
		 		}


		 	?>
            </ul>
	</div>
	
<div id="rightPanel">
