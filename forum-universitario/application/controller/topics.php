<?php


class Topics extends Controller
{

    public function index()
    {
        $topics = $this->model->getAllTopics();

        require APP . 'view/_templates/header-topics.php';
        require APP . 'view/topics/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search()
    {
        $posts = null;
        
        if (isset($_POST["submit_search"])) {
            $posts = $this->model->searchByTopics($_POST["keywords"]);
        }

        require APP . 'view/_templates/header-topics.php';
        require APP . 'view/topics/search-result.php';
        require APP . 'view/_templates/footer.php';
    }

}

