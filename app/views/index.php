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
            
            <!-- Contenido Principal Dinámico -->
            <div class="col">
                <?php
                // Cargar la vista correspondiente basada en el módulo y la vista
                $viewFile = 'app/views/' . $data['module'] . '/' . $data['view'] . '.php';
                if (file_exists($viewFile)) {
                    // echo 'app/views/' . $data['module'] . '/' . $data['view'] . '.php';
                    include $viewFile;
                } else {
                    echo 'app/views/' . $data['module'] . '/' . $data['view'] . '.php'.'<p>Contenido no encontrado.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Incluir Footer -->
    <?php include_once 'app/views/templates/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include custom JavaScript if necessary -->

    
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