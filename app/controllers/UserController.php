<?php

class UserController extends Controller {

    // Mostrar la lista de usuarios
    public function index() {
        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Obtener datos del modelo
        $usuarios = $userModel->getAllUsers();

        // Pasar datos a la vista
        $this->view('user/index', ['usuarios' => $usuarios]);
    }

    // Mostrar un formulario para crear un nuevo usuario
    public function create() {
        $this->view('user/create');
    }

    // Manejar la solicitud para crear un nuevo usuario
    public function store() {
        // Obtener datos del formulario
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Crear nuevo usuario
        $userModel->createUser($name, $email);

        // Redirigir a la lista de usuarios
        header('Location: ' . URL . 'user');
    }

    // Mostrar los detalles de un usuario
    public function show($id) {
        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Obtener datos del modelo
        $usuario = $userModel->getUserById($id);

        // Verificar si el usuario existe
        if ($usuario) {
            // Pasar datos a la vista
            $this->view('user/show', ['usuario' => $usuario]);
        } else {
            // Redirigir si el usuario no existe
            header('Location: ' . URL . 'user');
        }
    }

    // Mostrar un formulario para editar un usuario
    public function edit($id) {
        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Obtener datos del modelo
        $usuario = $userModel->getUserById($id);

        // Verificar si el usuario existe
        if ($usuario) {
            // Pasar datos a la vista
            $this->view('user/edit', ['usuario' => $usuario]);
        } else {
            // Redirigir si el usuario no existe
            header('Location: ' . URL . 'user');
        }
    }

    // Manejar la solicitud para actualizar un usuario
    public function update($id) {
        // Obtener datos del formulario
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Actualizar usuario
        $userModel->updateUser($id, $name, $email);

        // Redirigir a la lista de usuarios
        header('Location: ' . URL . 'user');
    }

    // Manejar la solicitud para eliminar un usuario
    public function delete($id) {
        // Cargar el modelo
        $userModel = $this->model('UserModel');

        // Eliminar usuario
        $userModel->deleteUser($id);

        // Redirigir a la lista de usuarios
        header('Location: ' . URL . 'user');
    }
}
