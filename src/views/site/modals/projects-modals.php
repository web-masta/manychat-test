<!-- Create/edit modal -->
<div class="modal fade" id="create-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="departmentsModalLabel">Редактирование</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="post" id="create-edit-form" action="<?= $_SERVER['REQUEST_URI'] ?>">
				<div class="modal-body">
					<div class="mb-3">
						<input type="text" class="form-control" id="name" name="name" placeholder="Название проекта">
						<input type="hidden" id="id" name="id" value="">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Отмена</button>
					<button type="submit" class="btn btn-primary">Сохранить</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="departmentsModalLabel">Вы действительно хотите удалить проект?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>Вы собираетесь удалить "<span class="delete-title"></span>".</p>
				<p>После удаления операция не может быть отменена. Действие безвозвратно.</p>
			</div>
			<div class="modal-footer">
				<a role="button" class="btn btn-warning delete-link" href="<?= $_SERVER['REQUEST_URI'] ?>/delete?id=">Да, удалить</a>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Не удалять</button>
			</div>
		</div>
	</div>
</div>