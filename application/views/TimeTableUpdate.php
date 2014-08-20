<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Data Tables</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->

	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<link href="<?php echo base_url('assets/css/jquery-ui.css')?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/uniform/themes/default/css/uniform.default.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/chosen/chosen.min.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/colorpicker/css/colorpicker.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/tagsinput/jquery.tagsinput.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/css/datepicker.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/css/bootstrap-timepicker.min.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/switch/static/stylesheets/bootstrap-switch.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<!-- END PAGE LEVEL  STYLES -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body>

	<!-- MAIN WRAPPER -->
	<div id="wrap">

		<!--PAGE CONTENT -->
		<div>

			<div class="inner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2> แก้ไขฟอร์มเวลเข้าทำงาน </h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url('index.php/TimeTableUpdate_controller/updateemp')?>" class="form-horizontal" id="block-validate"
						method="post">
							<div class="form-group">
								<label class="control-label col-lg-4">ID :</label>
								<div class="col-lg-5">
								<input type="hidden" id="EMP_ID" name="EMP_ID" class="form-control" value="<?php echo $working[0]['EMP_ID'] ?>" required/>
									<label class="control-label col-lg-1">
										<?php echo $working[0]['EMP_ID'] ?>
									</label>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4" for="dp2">วันที่ :</label>
								<div class="col-lg-3">
									<div class="input-group input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
										<input class="form-control" type="text" value="<?php echo $working[0]['WOR_DATEWORK']?>" value="<?php echo date(" d-m-Y ")?>" readonly="" data-date-format="dd-mm-Y"
										id="WORDATEWORK" name="WORDATEWORK" required />
										
										<span class="input-group-addon add-on">
											<i class="icon-calendar"></i>
										</span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">เวลาเข้างาน :</label>
								<div class="col-lg-3">
									<div class="input-group bootstrap-timepicker">
										<input class="timepicker-24 form-control" type="text" id="WORTIMEWORK" name="WORTIMEWORK" onchange="checktime()"  value="<?php echo $working[0]['WOR_TIMEWORK']?>" required/>										
										<span class="input-group-addon add-on">
											<i class="icon-time"></i>
										</span>
									</div>
									<span id="start" style="color:red"></span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">เวลาออกงาน :</label>
								<div class="col-lg-3">
									<div class="input-group bootstrap-timepicker">
										<input class="timepicker-24 form-control" type="text" id="WORTIMEOUT" name="WORTIMEOUT" onchange="checktime()" value="<?php echo $working[0]['WOR_TIMEOUT']?>"
										required/>
										<span class="input-group-addon add-on">
											<i class="icon-time"></i>
										</span>
									</div>
									<span id="end" style="color:red"></span>
								</div>
							</div>

					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<input type="submit" id="submit" value="ยืนยัน" class="btn btn-primary btn-lg" />
						<a href="<?php echo base_url('index.php/TimeTable_controller')?>" class="btn btn-danger btn-lg">ยกเลิก</a>


					</div>
					</form>
				</div>
			</div>

			<!-- ************************************ เขียนโปรแกรม ************************************ -->
		</div>
	</div>
	</div>
	<!--END PAGE CONTENT -->

	</div>

	<!--END MAIN WRAPPER -->

	<!-- Modal -->

	<script>
		$('#modal-submit').click(function () {
			$('#block-validate').submit();
		});

		function checktime() {
			timestart = document.getElementById('WORTIMEWORK').value
			timeend = document.getElementById('WORTIMEOUT').value
			time1 = new Date("2014-02-02 " + timestart);
			time2 = new Date("2014-02-02 " + timeend);
			if (timestart != "" && timeend != "") {
				if (time2 <= time1) {
					document.getElementById("start").innerHTML = "โปรดกรอกรูปแบบเวลาให้ถูกต้อง";
					document.getElementById("end").innerHTML = "โปรดกรอกรูปแบบเวลาให้ถูกต้อง";
					document.getElementById("submit").disabled = true;
				} else {
					document.getElementById("start").innerHTML = "";
					document.getElementById("end").innerHTML = "";
					document.getElementById("submit").disabled = false;
				}
			}
		}

	</script>

	<!-- End Modal  -->

	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url('assets/js/validationInit.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/chosen/chosen.jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/colorpicker/js/bootstrap-colorpicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/tagsinput/jquery.tagsinput.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validVal/js/jquery.validVal.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/timepicker/js/bootstrap-timepicker.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/switch/static/js/bootstrap-switch.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/autosize/jquery.autosize.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jasny/js/bootstrap-inputmask.js')?>"></script>
	<script src="<?php echo base_url('assets/js/formsInit.js')?>"></script>
	<script>
		$(function () {
			formValidation();
		});
	</script>
	<script>
		$(function () {
			formInit();
		});

	</script>
	<!-- END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->

</html>
