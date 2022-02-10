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
				data-dep-title="Добавить проект"
				data-action="create">
			<i class="fas fa-plus"></i> Добавить проект
		</button>
	</div>
	
	<div class="card-body">
		<table id="reportTable" class="table">
			<thead>
			<tr>
				<th>Название</th>
				<th>Дата создания</th>
				<th>Дата редактирования</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			<?php
				if (!empty($content['params']['data']))	{
					foreach ($content['params']['data'] as $key => $row) {
						?>
						<tr>
							<td><?= $row['name'] ?></td>
							<td><?= $row['created'] ?></td>
							<td><?= $row['updated'] ?></td>
							<td>
								<button
										type="button"
										class="btn btn-outline-secondary"
										data-bs-toggle="modal" data-bs-target="#create-edit"
										data-dep-title="<?=$row['name']?>"
										data-dep-id="<?=$row['id']?>"
										data-action="edit">
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
<?php include 'modals/projects-modals.php' ?>