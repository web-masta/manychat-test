<!-- Create/edit modal -->
<div class="modal fade" id="create-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="employees-modal-label">Добавить сотрудника</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form class="form" method="post" id="create-edit-form" action="<?= $_SERVER['REQUEST_URI'] ?>">
				<div class="modal-body">
					<div class="form-floating input-group mb-3">
						<input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
						<label for="name">Имя</label>
					</div>
					<div class="form-floating input-group mb-3">
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Фамилия" required>
						<label for="lastname">Фамилия</label>
					</div>
					<div class="form-floating input-group mb-3">
						<input type="text" id="datepicker2" name="birthday" class="datepicker_input form-control" placeholder="DD.MM.YYYY">
						<label for="datepicker2">Дата рождения</label>
					</div>
					<div class="form-floating input-group mb-3">
						<input type="number" class="form-control" id="salary" name="salary" placeholder="Зарплата" required>
						<label for="lastname">Зарплата</label>
					</div>
					<div class="form-floating input-group mb-3">
						<select class="form-select" aria-label="Пол" name="gender" id="gender">
							<option value="муж">муж</option>
							<option value="жен">жен</option>
							<option value="н\д">н\д</option>
						</select>
						<label for="gender">Пол</label>
					</div>
					<?php if (!empty($content['params']['departments'])) : ?>
						<div class="form-floating input-group mb-3">
							<select class="form-select" aria-label="Пол" name="department_id" id="department_id" required>
								<?php
									foreach ($content['params']['departments'] as $key => $row) { ?>
										<option value="<?=$row['id']?>"><?=$row['name']?></option>
									<?php } ?>
							</select>
							<label for="department_id">Отдел</label>
						</div>
					<?php endif; ?>
					<?php if (!empty($content['params']['projects'])) : ?>
						<div class="form-floating input-group mb-3">
							<select class="form-select" aria-label="Пол" name="project_id" id="project_id" required>
								<?php
									foreach ($content['params']['projects'] as $key => $row) { ?>
										<option value="<?=$row['id']?>"><?=$row['name']?></option>
									<?php } ?>
							</select>
							<label for="project_id">Проект</label>
						</div>
					<?php endif; ?>
					
						<input type="hidden" id="id" name="id" value="">
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
				<h5 class="modal-title" id="departmentsModalLabel">Вы действительно хотите удалить сотрудника?</h5>
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

<!-- Vanilla Datepicker JS -->
<script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>