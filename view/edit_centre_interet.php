<?php
	require("view/header.php")
?>
<!-- topbar -->

<?php
	$active_plus = "active";
	require("view/couverture.php");
?>
<!-- top area -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<!-- A gauche recent activity et modifier info -->
							<?php
								require("view/recent_activity_modify_info.php");
							?><!-- sidebar -->

							<div class="col-lg-6">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Editer les centres d'intérêts</h5> <i OnClick="window.location='index.php?action=ajouter_nouvelle_centre_interet&amp;id=<?= $id ?>'"  style="color: #1da1f2 !important; font-size: 50px !important; display: inline !important;margin-left:25%!important;cursor:pointer !important;" class="fa fa-plus addeo"> </i>
										<form method="post" class="formcomp" action="index.php?action=mettre_jours_centre_interet&amp;id=<?= $id ?>&amp;id_centre_interet=<?= $id_centre_interet ?>">
																				
											<div class="form-group">	
											  <input type="text" required="required" name="centre_d_interet" value="<?= $centre_interet_existe_li["centre_d_interet"] ?>"/>
											  <label class="control-label" for="input">Centres d'intérêts</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
												<textarea rows="4" id="textarea" name="description_interet" required="required" ><?= $centre_interet_existe_li["description_interet"] ?></textarea>
												<label class="control-label" for="textarea"> Déscription</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="submit" style="margin-left:0% !important; background-color:#2ebc4f !important;" name="mettre_jours_centre_interet" class="mtr-btn "><span>Mettre à jour</span></button>
											</div>
										</form>
										
										
									</div>
								</div>	
							</div><!-- centerl meta -->
							<!-- A droite : your page et who's following -->
							<?php
								require("view/your_page_who_s_following.php");
							?>
							
							<!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

<!-- side panel -->		
	
<?php
	require("view/js.php");
?>
</body>	

</html>