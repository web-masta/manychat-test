<?php /* @var $content array */ ?>


<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['params']['title'] ?></h1>
</div>


<div class="card mb-4">
	<div class="card-header">
		<button
				type="button"
				class="btn btn-outline-secondary"
				data-bs-toggle="modal" data-bs-target="#create-edit"
				data-dep-title="Добавить сотрудника"
				data-action="create">
			<i class="fas fa-plus"></i> Добавить сотрудника
		</button>
	</div>
	<div class="card-body">
		<table id="reportTable" class="table">
			<thead>
			<tr>
				<th>Имя</th>
				<th>Пол</th>
				<th>Дата рождения</th>
				<th>Зарплата</th>
				<th>Отдел</th>
				<th>Проект</th>
				<th>Дата создания</th>
				<th>Дата обновления</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			
			<?php
				if(!empty($content['params']['data'])) {
					foreach ($content['params']['data'] as $key => $row) {
						$dep = \Ivan\models\DepartmentsModel::getById($row['department_id'], 'name')[0]['name'] ?? 'Не найден';
						$project = \Ivan\models\ProjectsModel::getById($row['project_id'], 'name')[0]['name'] ?? 'Не найден';

						
						?>
						<tr>
							<td><?= $row['lastname'] . ' ' . $row['name'] ?></td>
							<td><?= $row['gender'] ?></td>
							<td><?= $row['birthday'] ?></td>
							<td><?= $row['salary'] ?></td>
							<td><?= $dep ?></td>
							<td><?= $project ?></td>
							<td><?= $row['created'] ?></td>
							<td><?= $row['updated'] ?></td>
							<td>
								<button
										type="button"
										class="btn btn-outline-secondary"
										data-bs-toggle="modal" data-bs-target="#create-edit"
										data-dep-title="<?=$row['name']?>"
										data-dep-id="<?=$row['id']?>"
										data-action="edit"
										data-lastname="<?= $row['lastname']?>"
										data-gender="<?= $row['gender']?>"
										data-birthday="<?= $row['birthday']?>"
										data-salary="<?= $row['salary']?>"
										data-department="<?= $row['department_id']?>"
										data-project="<?= $row['project_id']?>"
										>
									<i class="fas fa-pencil-alt"></i>
								</button>
								
								<button
										type="button"
										class="btn btn-outline-secondary"
										data-bs-toggle="modal" data-bs-target="#delete-modal"
										data-dep-title="<?=$row['name']?>"
										data-id="<?=$row['id']?>">
									<i class="far fa-trash-alt"></i>
								</button>
							</td>
						</tr>
						<?php
					}
				}
			?>
			
			</tbody>
		</table>
	</div>
</div>
<?php include 'modals/employees-modals.php' ?>