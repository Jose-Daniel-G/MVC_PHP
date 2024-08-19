<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>public/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once 'app/views/templates/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include_once 'app/views/templates/sidebar.php'; ?>
            <div class="col py-3">
                <h1 class="text-center mt-4">Create User</h1>
                <form method="POST" action="<?= URL ?>user/create">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'app/views/templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
