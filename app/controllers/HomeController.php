<?php

class HomeController extends Controller
{
    public function index()
    {
        // Verificar autenticación del usuario (descomentado si es necesario)
        // if (!$this->isUserAuthenticated()) {
        //     header('Location: ' . URL . 'login');
        //     exit();
        // }

        $dashboardModel = $this->model('HomeModel');
        $totalUsuarios = $dashboardModel->getTotalUsuarios();
        $totalVentas = $dashboardModel->getTotalVentas();
        $ventasRecientes = $dashboardModel->getVentasRecientes();
        $usuarios = $dashboardModel->getUsuarios();
        
        // Pasar todos los datos necesarios a la vista
        $this->view('index', [
            'module' => 'dashboard',
            'view' => 'index',
            'totalUsuarios' => $totalUsuarios,
            'totalVentas' => $totalVentas,
            'ventasRecientes' => $ventasRecientes,
            'usuarios' => $usuarios
        ]);
    }
}
