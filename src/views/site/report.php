<?php /* @var $content array */ ?>


<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['params']['title'] ?></h1>
</div>


<div class="card mb-4">
	<div class="card-header">
		<i class="fas fa-table me-1"></i>
		Список всех проектов отсортированных по бюджету. Бюджет формируется из сумм зарплат всех сотрудников, кто в нём участвует.
	</div>
	
	<div class="card-body">
		<table id="reportTable" class="table">
			<thead>
			<tr>
				<th>ID</th>
				<th>Название проекта</th>
				<th>Бюджет</th>
			</tr>
			</thead>
			<tbody>
			
			<?php
				if (!empty($content['params']['data'])) {
					foreach ($content['params']['data'] as $key => $row) {
						?>
						<tr>
							<td><?=$row['id']?></td>
							<td><?=$row['name']?></td>
							<td><?=$row['money']?></td>
						</tr>
						<?php
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>
