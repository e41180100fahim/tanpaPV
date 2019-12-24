<!--
Author: DesignMaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Responsive Static Login Form HTML5 Template | DesignMaz</title>
<!-- Custom Theme files -->
<link href="css/styleei.css" rel="stylesheet" type="text/css" media="all"/>


<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Static Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--script-->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!--script-->
<!---Google Analytics Designmaz.net-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>
</head>
<style>
	.loader-wrapper {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: white;
      display:flex;
      justify-content: center;
      align-items: center;
}

.loader-wrapper img {
      display: inline-block;
      position: relative;                      /******** <- Remove this line *********/
      border: 4px solid #Fff;
      animation: loader 2s infinite ease;
}    
</style>
<body>
	<div class="head">
		<div class="logo">
			<div class="logo-top">
        <h1>SMA Ibrahimy</h1>
        <h4>Harap Login Terlebih Dahulu</h4>
			</div>
			<div class="logo-bottom">
      
			</div>
		</div>		
		<div class="login">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
						<div class="clearfix"></div>
					</ul>				  	 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-top">
								<form action="proses.php" method="post">
									<input type="text" class="email" name="nis" placeholder="Email" required=""/>
									<input type="password" class="password" name="password" placeholder="Password" required=""/>		
								
								<div class="login-bottom login-bottom1">
									<div class="submit">
										<input type="submit" value="LOGIN"/>
									</div>
									
								</div>
								<div style="margin-top:130px">
									    <a style="text-decoration:none;color:black;" href="index.php"><img src="assets/img/arrow.jpg" width="5%">Back</a>
									</div>
								</form>	
							</div>
						</div>							
					</div>	
				</div>
			</div>	
		</div>	
		<div class="clear"></div>
	</div>	
	<div class="account">
			<ul>
				<li><p>&copy; Sma Ibrahimy 2019</p></li><span>/</span>
				<li><p>Kel 1 Gol International</p></li>
				<div class="clear"></div>
			</ul>
		</div>
	<div style="text-align:center; margin-top:10px;">
				<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-8011246932591811"
data-ad-slot="9844648019"
data-ad-format="auto"></ins> <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				</div>
				<div class="loader-wrapper">
                  <img src="assets/img/load.gif"/>
            </div>
    <!-- ./Footer -->
    
    <script>
        $(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});
</script>
</body>
</html>