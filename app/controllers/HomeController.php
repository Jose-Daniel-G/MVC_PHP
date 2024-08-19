<?php

class HomeController extends Controller
{

    public function index()
    {
        $module = isset($_GET['module']) ? $_GET['module'] : 'default'; // Determina el módulo a cargar

        $dashboardModel = $this->model('DashboardModel');
        $totalUsuarios = $dashboardModel->getTotalUsuarios();
        $totalVentas = $dashboardModel->getTotalVentas();
        $ventasRecientes = $dashboardModel->getVentasRecientes();
        $usuarios = $dashboardModel->getUsuarios();

        $this->view('home/index', [
            'totalUsuarios' => $totalUsuarios,
            'totalVentas' => $totalVentas,
            'ventasRecientes' => $ventasRecientes,
            'usuarios' => $usuarios
        ]);
        // $data = [
        //     'totalUsuarios' => $totalUsuarios,
        //     'totalVentas' => $totalVentas,
        //     'ventasRecientes' => $ventasRecientes,
        //     'usuarios' => $usuarios
        // ];
        // // Cargar la vista principal con el contenido del módulo
        // $this->view('home/index', [
        //     'module' => $module,
        //     'data' => $data
        // ]);
    }
 
}
