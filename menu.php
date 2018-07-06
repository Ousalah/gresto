<?php require_once("fragments/header.php"); ?>

    <!-- Start Content -->
    <div class="menu content">
     	<div class="container">
     		<div class="row">
     			<?php for ($i=0; $i < 10; $i++) : ?>
	     		<div class="col-xs-6 col-sm-4 col-md-3">
		     		<div class="card">
						<img src="http://placehold.it/300x200/ddd/&text=Image" alt=""/>
						<div class="avatar">
							<img src="http://placehold.it/80X80/888/eee/&text=10+DH" alt="" />
						</div>
						<div class="info">
							<div class="title" title="The Title <?= $i + 1 ?>">
								The Title <?= $i + 1 ?>
							</div>
						</div>
					</div>
	            </div>
	        	<?php endfor ?>
	        </div>
        </div>
    </div>
    <!-- End Content -->
    
<?php require_once("fragments/footer.php"); ?>