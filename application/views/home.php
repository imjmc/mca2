   <style type="text/css">
   i.fa {
  display: inline-block;
  border-radius: 200px;
  
  padding: 0.5em 0.6em;
  font-size: 100px;

}</style>
<?PHP
if((!$this->session->userdata('returnuser'))){
	?>
    <script>


    $( document ).ready(function() {
       
       $('.hover_bkgr_fricc').show();
   
   
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
        $('html,body').animate({ scrollTop: 70 }, 'slow');
        <?PHP
			$this->session->set_userdata('returnuser','Yes');
        ?>
    });
   });
</script>
<?PHP
}
?>
<!--popuup box -->

                	<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
<h2>Access site as:</h2>
        <div class="popupCloseButton"><a href="#"><h3>Visitor</h3></a></div>
       	<a href="<?PHP echo base_url('company');?>"><h3>Company</h3></a>
    </div>
</div>
    <!-- popupbox end -->
<header class="masthead bg-primary text-white text-center">
</header>
<br /><br />
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="login-panel panel panel-success">
                
                <div class="panel-body">

		<div id="carousel">

			<div class="carousel1">

					<a href="#form">
						<div id="carousel-health">

							<i class="fa fa-stethoscope"></i>
							<br /><br /><br />
							<span id="iconlink">Health </span>

						</div>
					</a>
						
			</div>

			<div class="carousel1">
						
					<a href="#form">
						<div id="carousel-life">

							<i class="fa fa-child"></i><br>
							<br /><br />
							<span id="iconlink">Life</span>

						</div>
					</a>

			</div>
			
			<div class="carousel1">
						
					<a href="#form">
						<div id="carousel-life">

							<i class="fa fa-money"></i><br>
							<br /><br />
							<span id="iconlink">Investment</span>

						</div>
					</a>

			</div>

		</div>

		<div style="clear:both;"></div>
		<br /><br />
		
<br /><br /><br /><br />



		
