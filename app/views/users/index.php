<div class="container mt-4">
    <h1>Usuarios</h1>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">
        Agregar Nuevo Usuario
    </button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data['users']) && !empty($data['users'])): ?>
                <?php foreach ($data['users'] as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td>
                            <a href="<?= URL ?>users/show/<?= htmlspecialchars($user['id']) ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="<?= URL ?>users/edit/<?= htmlspecialchars($user['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-usuario">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No se encontraron usuarios.</td>
                </tr>
            <?php endif; ?>
            <?php include "app/views/users/modals/delete_modal.php" ?>
        </tbody>
    </table>
</div>