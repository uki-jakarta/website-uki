<?php
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;" />
        <title>Universitas Kristen Indonesia</title>
		
		<!-- Custome Style -->
		
        <link href="<?php echo base_url("assets/css/"); ?>style/home.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>style/table.css" rel="stylesheet" type="text/css"/>

		<!-- JQUERY UI -->
        <link rel="stylesheet" href="<?php echo base_url("assets/"); ?>jquery-ui/themes/base/jquery.ui.all.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url("assets/"); ?>datepick/jquery.datepick.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url("assets/"); ?>datepick/ui-redmond.datepick.css" type="text/css"/>

        <!-- Bootstrap -->
        <link href="<?php echo base_url("assets/"); ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("assets/"); ?>bootstrap/switch/stylesheets/bootstrap-switch.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("assets/"); ?>bootstrap/prettyCheckable/prettyCheckable.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("assets/"); ?>bootstrap/select/bootstrap-select.css" rel="stylesheet" type="text/css"/>

        <!-- Summer Note -->
        <link href="<?php echo base_url("assets/"); ?>fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url("assets/"); ?>summernote/summernote.css" rel="stylesheet" type="text/css"/>

		<!-- JQUERY JS -->
        <script src="<?php echo base_url("assets/"); ?>jquery-ui/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url("assets/"); ?>jquery-ui/ui/jquery.ui.js"></script>

        <!-- DatePick -->
        <script src="<?php echo base_url("assets/"); ?>datepick/jquery.datepick.js"></script>
        <script src="<?php echo base_url("assets/"); ?>datepick/jquery.datepick.ext.js"></script>
        <script src="<?php echo base_url("assets/"); ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url("assets/"); ?>js/jquery.form.js"></script>
        <script src="<?php echo base_url("assets/"); ?>js/input.mask.js"></script>
        <script src="<?php echo base_url("assets/"); ?>js/filter.js"></script>
        <script src="<?php echo base_url("assets/"); ?>bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url("assets/"); ?>bootstrap/switch/js/bootstrap-switch.js"></script>
        <script src="<?php echo base_url("assets/"); ?>bootstrap/prettyCheckable/prettyCheckable.js"></script>
        <script src="<?php echo base_url("assets/"); ?>bootstrap/select/bootstrap-select.min.js"></script>

        <!-- Full Calendar-->
        <link href='<?php echo base_url("assets/"); ?>fullcalendar/fullcalendar.css' rel='stylesheet' />
        <link href='<?php echo base_url("assets/"); ?>fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
        <script src='<?php echo base_url("assets/"); ?>fullcalendar/fullcalendar.js'></script>

	</head>
	<body>
	<div id="container">
		<?php 
			for ($i=0;$i<count($test['menu']);$i++) {
				if ($test['menu'][$i]['level'] == '1') {
					$pid = $test['menu'][$i]['menu_id'];
					echo "<br />"."<br />".$test['menu'][$i]['alias'];
					for ($j=0;$j<count($test['menu']);$j++){
						if (($test['menu'][$j]['level'] == '2') && ($test['menu'][$j]['parent_id'] == $pid)){
						$pid2 = $test['menu'][$j]['menu_id'];
						echo "<br />".'-'.$test['menu'][$j]['alias'];
							for ($k=0;$k<count($test['menu']);$k++){
								if (($test['menu'][$k]['level'] == '3') && ($test['menu'][$k]['parent_id'] == $pid2)){
								$pid3 = $test['menu'][$k]['menu_id'];
								echo "<br />".'- -'.$test['menu'][$k]['alias'];
									for ($l=0;$l<count($test['menu']);$l++){
										if (($test['menu'][$l]['level'] == '4') && ($test['menu'][$l]['parent_id'] == $pid3)){
											echo "<br />".'- - -'.$test['menu'][$l]['alias'];//echo "<br />".paling bawah disini
										}
									}
								}
							}
						}
						else if (($test['menu'][$j]['level'] == '3') && ($test['menu'][$j]['parent_id'] == $pid)){
							$pid3 = $test['menu'][$j]['menu_id'];
							echo "<br />".'-'.$test['menu'][$j]['alias'];
								for ($l=0;$l<count($test['menu']);$l++){
									if (($test['menu'][$l]['level'] == '4') && ($test['menu'][$l]['parent_id'] == $pid3)){
										echo "<br />".'- -'.$test['menu'][$l]['alias'];//echo "<br />".paling bawah disini
									}
								}
							}
					}
				}
			}
			?>
		</div>
	</body>
</html>

