
<div class='panel-body' align='center'>
	<fieldset>
		<legend>Unos ankete</legend>
		<table border='1' class='table table-bordered table-hover'>
			<thead>
				<tr>
					<th>Opis ankete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ankete as $anketa): ?>
				<tr>
					<td><?php echo $anketa->anketa_opis ?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</fieldset>
</div>
