<?php

class Login extends Controller
{
    public function index()
    {
        require APP . 'view/_templates/header-login.php';
        require APP . 'view/login/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function userLogin()
    {
        $session = $this->model->user($_POST["email"], $_POST["password"]);
        $email = null;
        $username = null;
        $user_id = null;

        foreach ($session as $user) { 
            $email = $user->email; 
        }

        $user_info = $this->model->getUserInfo($email);

        foreach ($user_info as $user) {
            $user_id = $user->user_id;
            $username = $user->username;
        }

        session_start();
        $_SESSION["newsession"] = $user_id;
        $posts = $this->model->getAllPosts();

        if (count($session) == 1) {
            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            $_SESSION["not_authenticated"] = true;
            header('location: ' . URL . 'login/index');
        }
    } 

    public function userPost()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            require APP . 'view/_templates//header-user-post.php';
            require APP . 'view/login/user-post.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function userPostTab()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            $posts = $this->model->postsUser($_SESSION["newsession"]);
        
            require APP . 'view/_templates//header-user-post.php';
            require APP . 'view/login/user-post-tab.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function userAccountTab()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            $user_info = $this->model->getUser($_SESSION["newsession"]);
        
            require APP . 'view/_templates//header-user-account.php';
            require APP . 'view/login/user-account-tab.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function search()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            $posts = null;
        
            if (isset($_POST["submit_search"])) {
                $posts = $this->model->search($_POST["keywords"]);
            }

            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-search.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function logout() 
    {
        session_start();
        unset($_SESSION["newsession"]);
        header('location: ' . URL . 'home/index');
    } 

    public function userHome()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    } 

    public function comment()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_comment"])) {
                $this->model->addComment($_POST["content"], $_POST["post_id"],  $_POST["user_id"]);
            }

            $posts = $this->model->getAllPosts();

            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function commentForm($post_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($post_id)) {
                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/user-comment.php';
                require APP . 'view/_templates/footer.php';
            } else {
                $posts = $this->model->getAllPosts();
                
                require APP . 'view/_templates//header-user.php';
                require APP . 'view/login/user-home.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function post()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_post"])) {
                $this->model->addPost($_POST["content"], $_POST["user_id"], $_POST["topic_id"]);
            }

            $posts = $this->model->getAllPosts();

            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function postForm()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            $topics = $this->model->getAllTopics();

            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-post.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function editPost($post_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($post_id)) {
                $post = $this->model->getPost($post_id);
                $topics = $this->model->getAllTopics();

                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/edit-post.php';
                require APP . 'view/_templates/footer.php';
            } else {
                $posts = $this->model->getAllPosts();
                
                require APP . 'view/_templates//header-user.php';
                require APP . 'view/login/user-home.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function updatePost()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_update_post"])) {
                $this->model->updatePost($_POST["content"], $_POST["user_id"],  $_POST["topic_id"], $_POST['post_id']);
            }

            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }


    public function deletePost($post_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($post_id)) {
                $this->model->deletePost($post_id);
            }

            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function editUsername($user_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($user_id)) {
                $user_info = $this->model->getUser($user_id);

                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/edit-username.php';
                require APP . 'view/_templates/footer.php';
            } else {
                $posts = $this->model->getAllPosts();
                
                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/user-home.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function updateUsername()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_update_username"])) {
                $this->model->updateUsername($_POST["user_id"], $_POST["username"]);
            }

            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function editEmail($user_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($user_id)) {
                $user_info = $this->model->getUser($user_id);

                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/edit-email.php';
                require APP . 'view/_templates/footer.php';
            } else {
                $posts = $this->model->getAllPosts();
                
                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/user-home.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function updateEmail()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_update_email"])) {
                $this->model->updateEmail($_POST["user_id"], $_POST["email"]);
            }

            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function editPass($user_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($user_id)) {
                $user_info = $this->model->getUser($user_id);

                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/edit-pass.php';
                require APP . 'view/_templates/footer.php';
            } else {
                $posts = $this->model->getAllPosts();
                
                require APP . 'view/_templates//header-user-home.php';
                require APP . 'view/login/user-home.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function updatePass()
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($_POST["submit_update_pass"])) {
                $this->model->updatePass($_POST["user_id"], $_POST["password"]);
            }

            $posts = $this->model->getAllPosts();
            
            require APP . 'view/_templates//header-user-home.php';
            require APP . 'view/login/user-home.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

    public function deleteUser($user_id)
    {
        session_start();
        if ($_SESSION["newsession"]) {
            if (isset($user_id)) {
                // do deleteSong() in model/model.php
                $this->model->deleteUser($user_id);
            }

            $posts = $this->model->getAllPosts();
            
            header('location: ' . URL . 'home/index');
        } else {
            header('location: ' . URL . 'home/index');
        }
    }

}

