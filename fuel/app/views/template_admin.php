<!DOCTYPE html>
<html>
<head>
	<?= $head ?>
</head>
<body>
<?= $header ?>
<div class="container">
	<div class="col-md-12">
		<h1><?php echo $title; ?></h1>
		<hr>
		<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
		<?php endif; ?>
		<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
		<?php endif; ?>
	</div>
	<?= $body ?>
	<?= $footer ?>
</div>
</body>
</html>
