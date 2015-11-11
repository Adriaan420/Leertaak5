<div class="jumbotron">
	<h1>Live feed</h1>
	<p>click in the link below to go to the live feed presented in google maps</p>
	<p>
		<a class="btn btn-lg btn-primary" href="<?= Uri::create('home/map')?>" role="button">World overview »</a>
	</p>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Coldest European countries</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
			<tr>
				<th>#</th>
				<th>Country</th>
				<th>Average temperature</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($coldData as $item){ ?>
			<tr>
				<th scope="row"><?= $item->sort ?></th>
				<td><?= $item->country ?></td>
				<td><?= $item->data ?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Rainfall European countries</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
			<tr>
				<th>#</th>
				<th>Country</th>
				<th>Rainfall (ml)</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($rainData as $item){ ?>
				<tr>
					<th scope="row"><?= $item->sort ?></th>
					<td><?= $item->country ?></td>
					<td><?= $item->data ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<ul class="nav nav-pills">
	<li><?php echo Html::anchor('measurements/index','Index');?></li>
</ul>
<p>Statestieken</p>