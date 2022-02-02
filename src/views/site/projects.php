<?php /* @var $content array */ ?>


<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['data']['title'] ?></h1>
</div>


<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-table me-1"></i>
		Список проектов.
	</div>
	
	<div class="card-body">
		<table id="reportTable">
			<thead>
			<tr>
				<th>Название</th>
				<th>Дата создания</th>
				<th>Дата редактирования</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<th>Название</th>
				<th>Дата создания</th>
				<th>Дата редактирования</th>
			</tr>
			</tfoot>
			<tbody>
			<tr>
				<td>Первый проект</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
			</tr>
			<tr>
				<td>Третий проект</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
			</tr>
			<tr>
				<td>Четвертый проект</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
