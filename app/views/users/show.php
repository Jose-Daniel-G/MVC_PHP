<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>public/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once 'app/views/templates/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include_once 'app/views/templates/sidebar.php'; ?>
            <div class="col py-3">
                <h1 class="text-center mt-4">Show User</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['user']['name'] ?></h5>
                        <p class="card-text">Email: <?= $data['user']['email'] ?></p>
                        <a href="<?= URL ?>user/edit/<?= $data['user']['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= URL ?>user/delete/<?= $data['user']['id'] ?>" class="btn btn-danger">Delete</a>
                        <a href="<?= URL ?>user/index" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'app/views/templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
