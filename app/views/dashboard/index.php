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
                                                <td><?= $usuario['name'] ?></td>
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
            