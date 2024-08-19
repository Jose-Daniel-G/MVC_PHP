<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= URL ?>public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Incluir Navbar -->
    <?php include_once 'app/views/templates/navbar.php'; ?>
    
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Incluir Sidebar -->
            <?php include_once 'app/views/templates/sidebar.php'; ?>
            <!-- Contenido Principal -->
            <div class="col py-3">
                <h1 class="text-center mt-4">Dashboard</h1>

                <div class="row my-4">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Total Usuarios</h5>
                                <p class="card-text display-4"><?= $data['totalUsuarios'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Total Ventas</h5>
                                <p class="card-text display-4">$<?= number_format($data['totalVentas'], 2) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Gráfico de Ventas</h5>
                                <canvas id="ventasChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabla de Usuarios -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Usuarios</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['usuarios'] as $usuario): ?>
                                            <tr>
                                                <td><?= $usuario['id'] ?></td>
                                                <td><?= $usuario['nombre'] ?></td>
                                                <td><?= $usuario['email'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- Fin del Contenido Principal -->
            
        </div>
    </div>

    <!-- Incluir Footer -->
    <?php include_once 'app/views/templates/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        const ctx = document.getElementById('ventasChart').getContext('2d');
        const ventasChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($data['ventasRecientes'] as $venta) {
                                echo "'" . $venta['fecha'] . "',";
                            } ?>],
                datasets: [{
                    label: 'Monto de Ventas',
                    data: [<?php foreach ($data['ventasRecientes'] as $venta) {
                                echo $venta['monto'] . ",";
                            } ?>],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>