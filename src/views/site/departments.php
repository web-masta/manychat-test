<?php /* @var $content array */ ?>

<div class="container-fluid px-4">
	<h1 class="mt-4"><?= $content['data']['title'] ?></h1>
</div>

<div class="card mb-4">
	<div class="card-header">
		<button
				type="button"
				class="btn btn-outline-secondary"
				data-bs-toggle="modal" data-bs-target="#departmentModal"
				data-dep-title="Добавить новый отдел">
			<i class="fas fa-plus"></i> Добавить отдел
		</button>
	</div>
	
	<div class="card-body">
		<table id="reportTable">
			<thead>
			<tr>
				<th>Название</th>
				<th>Дата создания</th>
				<th>Дата редактирования</th>
				<th></th>
				
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Первый отдел</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
				<td>
					<button
							type="button"
							class="btn btn-outline-secondary"
							data-bs-toggle="modal" data-bs-target="#departmentModal"
							data-dep-title="Первый отдел">
						<i class="fas fa-pencil-alt"></i>
					</button>
					
					<button
							type="button"
							class="btn btn-outline-secondary"
							data-bs-toggle="modal" data-bs-target="#depDeleteModal"
							data-dep-title="Первый отдел">
						<i class="far fa-trash-alt"></i>
					</button>
				</td>
			</tr>
			<tr>
				<td>Второй отдел</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
			</tr>
			<tr>
				<td>Третий отдел</td>
				<td>14.01.2022</td>
				<td>01.02.2022</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<!-- Create/edit modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="departmentsModalLabel">Редактирование</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Отмена</button>
				<button type="button" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</div>
</div>

<!-- Delete modal -->
<div class="modal fade" id="depDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="departmentsModalLabel">Вы действительно хотите удалить отдел?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>Вы собираетесь удалить "<span class="delete-title"></span>".</p>
				<p>После удаления операция не может быть отменена. Действие безвозвратно.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning">Да, удалить</button>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Не удалять</button>
			</div>
		</div>
	</div>
</div>