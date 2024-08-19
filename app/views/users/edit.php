<?php

class UserController extends Controller {

    public function index() {
        $userModel = $this->model('UserModel');
        $users = $userModel->getAllUsers();
        $this->view('user/index', ['users' => $users]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ];

            $userModel = $this->model('UserModel');
            if ($userModel->createUser($data)) {
                header('Location: ' . URL . 'user/index');
            }
        }
        $this->view('user/create');
    }

    public function edit($id) {
        $userModel = $this->model('UserModel');
        $user = $userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'name' => $_POST['name'],
                'email' => $_POST['email']
            ];

            if ($userModel->updateUser($data)) {
                header('Location: ' . URL . 'user/index');
            }
        }

        $this->view('user/edit', ['user' => $user]);
    }

    public function show($id) {
        $userModel = $this->model('UserModel');
        $user = $userModel->getUserById($id);
        $this->view('user/show', ['user' => $user]);
    }

    public function delete($id) {
        $userModel = $this->model('UserModel');
        if ($userModel->deleteUser($id)) {
            header('Location: ' . URL . 'user/index');
        }
    }
}
