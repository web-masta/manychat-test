<?php /* @var $content array */ ?>


<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['data']['title'] ?></h1>
</div>


<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-table me-1"></i>
		Список всех сотрудников.
	</div>
	
	<div class="card-body">
		<table id="reportTable">
			<thead>
			<tr>
				<th>Имя</th>
				<th>Пол</th>
				<th>Дата рождения</th>
				<th>Зарплата</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<th>Имя</th>
				<th>Пол</th>
				<th>Дата рождения</th>
				<th>Зарплата</th>
			</tr>
			</tfoot>
			<tbody>
			<tr>
				<td>Веселов Иван</td>
				<td>муж</td>
				<td>11.04.1987</td>
				<td>100500</td>
				
			</tr>
			<tr>
				<td>Иванов Иван</td>
				<td>муж</td>
				<td>04.11.1985</td>
				<td>100200</td>
			</tr>
			<tr>
				<td>Иванов Иван</td>
				<td>муж</td>
				<td>04.11.1985</td>
				<td>100300</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
