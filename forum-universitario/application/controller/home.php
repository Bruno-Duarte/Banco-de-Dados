<?php

class Home extends Controller
{
    public function index()
    {
        $posts = $this->model->getAllPosts();

        require APP . 'view/_templates/header-home.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search()
    {
        $posts = null;

        if (isset($_POST["submit_search"])) {
            $posts = $this->model->search($_POST["keywords"]);
        }

        require APP . 'view/_templates/header-home.php';
        require APP . 'view/home/search-result.php';
        require APP . 'view/_templates/footer.php';
    }

}

