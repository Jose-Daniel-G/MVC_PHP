<!-- resources/views/user/show.php -->
<div class="container mt-4">
    <h1>Detalles del Usuario</h1>
    <div class="card">
        <div class="card-header">
            Usuario #<?= htmlspecialchars($user->id) ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($user->name) ?></h5>
            <p class="card-text"><strong>Email:</strong> <?= htmlspecialchars($user->email) ?></p>
            <p class="card-text"><strong>Created At:</strong> <?= htmlspecialchars($user->created_at) ?></p>
            <p class="card-text"><strong>Updated At:</strong> <?= htmlspecialchars($user->updated_at) ?></p>
            <a href="<?= URL ?>users/edit/<?= htmlspecialchars($user->id) ?>" class="btn btn-primary">Editar</a>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar</button>
        </div>
    </div>
</div>

<!-- Modal de Eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar a <?= htmlspecialchars($user->name) ?>?
            </div>
            <div class="modal-footer">
                <form action="<?= URL ?>users/delete/<?= htmlspecialchars($user->id) ?>" method="POST">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
