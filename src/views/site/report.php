<?php /* @var $content array */ ?>


<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['data']['title'] ?></h1>
</div>


<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-table me-1"></i>
		Список всех проектов отсортированных по бюджету. Бюджет формируется из сумм зарплат всех сотрудников, кто в нём участвует.
	</div>
	
	<div class="card-body">
		<table id="reportTable">
			<thead>
			<tr>
				<th>ID</th>
				<th>Название проекта</th>
				<th>Бюджет</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<th>ID</th>
				<th>Название проекта</th>
				<th>Бюджет</th>
			</tr>
			</tfoot>
			<tbody>
			<tr>
				<td>1</td>
				<td>System Architect</td>
				<td>320800</td>
			</tr>
			<tr>
				<td>22</td>
				<td>Accountant</td>
				<td>170750</td>
			</tr>
			<tr>
				<td>14</td>
				<td>Junior Technical Author</td>
				<td>86000</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Senior Javascript Developer</td>
				<td>433060</td>
			</tr>
			<tr>
				<td>9</td>
				<td>Accountant</td>
				<td>162700</td>
			</tr>
			<tr>
				<td>11</td>
				<td>Integration Specialist</td>
				<td>372000</td>
			</tr>
			<tr>
				<td>34</td>
				<td>Sales Assistant</td>
				<td>137500</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Integration Specialist</td>
				<td>327900</td>
			</tr>
			<tr>
				<td>54</td>
				<td>Javascript Developer</td>
				<td>205500</td>
			</tr>
			<tr>
				<td>32</td>
				<td>Software Engineer</td>
				<td>103600</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
