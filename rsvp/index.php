<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><!-- InstanceBegin template="/Templates/lindsey-and-michael.dwt.php" codeOutsideHTMLIsLocked="false" -->

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>RSVP</title>
		<!-- InstanceEndEditable -->
		
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
		
		<!-- InstanceBeginEditable name="head" -->
		<!-- InstanceEndEditable -->

	</head>

	<body<?php if(!empty($section)) : ?> id="<?= $section; ?>"<?php endif; ?>>

		<div id="page">
			<div id="page-gutter">
		
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.html'); ?>
		
				<hr />
				
				<div id="content">
					<div id="content-gutter">
				
						<div id="main-content">
			
							<!-- InstanceBeginEditable name="content" -->
						<h1>RSVP</h1>
						
						<?php include('rsvp-dd-formmailer.php'); ?>
						<!-- InstanceEndEditable -->
							
						</div> <!-- end #main-content -->
						
						<hr />
						
						<div id="sidebar">
							
							<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'); ?>
							
						</div> <!-- end #sidebar -->
		
					</div> <!-- end #content-gutter -->
				</div> <!-- end #content -->
				
				<hr />
				
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.html'); ?>
			
			</div> <!-- end #page-gutter -->
		</div> <!-- end #page -->
	
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/analytics.php'); ?>
	
	</body>

<!-- InstanceEnd --></html>
