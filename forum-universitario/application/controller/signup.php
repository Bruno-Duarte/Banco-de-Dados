<?php


class Signup extends Controller
{

    public function index()
    {
        $posts = $this->model->getAllPosts();

        require APP . 'view/_templates/header-signup.php';
        require APP . 'view/signup/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addUser()
    {
        if (isset($_POST["submit_add_user"])) {
            $user_id = null;
            $username = null;

            $this->model->addUser($_POST["username"], $_POST["email"],  $_POST["password"]);
            $user_info = $this->model->getUserInfo($_POST["email"]);

            foreach ($user_info as $user) {
                $user_id = $user->user_id;
                $username = $user->username;
            }

            session_start();
            $_SESSION["newsession"] = $user_id;
            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        }

        header('location: ' . URL . 'home/index');
    }

}

