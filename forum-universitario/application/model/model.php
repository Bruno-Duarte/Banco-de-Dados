<?php

class Model
{
    
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllPosts()
    {
        $sql = "SELECT posts.user_id AS user_id, 
                posts.id AS post_id, 
                posts.content AS content_post, 
                comments.content AS content_comment 
                FROM posts, comments 
                WHERE posts.id = comments.post_id;" ;
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllTopics()
    {
        $sql = "SELECT id, title FROM topics;";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addUser($username, $email, $password)
    {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':email' => $email, ':password' => md5($password));

        $query->execute($parameters);
    }

    public function search($keywords)
    {
        if ($keywords == "") {
            return null;
        } else {
            $sql = "SELECT posts.user_id AS user_id, 
                           posts.id AS post_id,
                           posts.content AS content_post, 
                           comments.content AS content_comment 
                    FROM posts, comments
                    WHERE (posts.content LIKE '%{$keywords}%' OR comments.content LIKE '%{$keywords}%') 
                    AND posts.id = comments.post_id;" ;

            $query = $this->db->prepare($sql);
            $parameters = array(':keywords' => $keywords);
            $query->execute($parameters);

            return $query->fetchAll();
        }
    }

    public function searchByTopics($keywords)
    {
        if ($keywords == "") {
            return null;
        } else {
            $sql = "SELECT title FROM topics WHERE title LIKE '%{$keywords}%';" ;

            $query = $this->db->prepare($sql);
            $parameters = array(':keywords' => $keywords);
            $query->execute($parameters);

            return $query->fetchAll();
        }
    }

    public function user($email, $password)
    {
        $sql = "SELECT email, password FROM users WHERE email = :email and password = :password";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':password' => md5($password));
        $query->execute($parameters);
        
        return $query->fetchAll();
    }

    public function addComment($content, $post_id, $user_id)
    {
        $sql = "INSERT INTO comments (content, post_id, user_id) VALUES (:content, :post_id, :user_id)";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':content' => $content, ':post_id' => $post_id, ':user_id' => $user_id);

        $query->execute($parameters);
    }

    public function addPost($content, $user_id, $topic_id)
    {
        $sql = "INSERT INTO posts (content, user_id, topic_id) VALUES (:content, :user_id, :topic_id)";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':content' => $content, ':user_id' => $user_id, ':topic_id' => $topic_id);

        $query->execute($parameters);
    }

    public function getUserInfo($email)
    {
        $sql = "SELECT id AS user_id, username FROM users WHERE email = :email";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);

        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function postsUser($user_id)
    {
        $sql = "SELECT id, content, user_id, topic_id FROM posts WHERE user_id = :user_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);

        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getPost($post_id)
    {
        $sql = "SELECT id, content, user_id, topic_id FROM posts WHERE id = :post_id LIMIT 1";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':post_id' => $post_id);

        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getUser($user_id)
    {
        $sql = "SELECT id, username, email, password FROM users WHERE id = :user_id LIMIT 1";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);

        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deletePost($post_id)
    {
        $sql = "DELETE FROM posts WHERE id = :post_id";

        $query = $this->db->prepare($sql);
        $parameters = array(':post_id' => $post_id);

        $query->execute($parameters);
    }

    public function updatePost($content, $user_id, $topic_id, $post_id)
    {
        $sql = "UPDATE posts SET content = :content, user_id = :user_id, topic_id = :topic_id WHERE id = :post_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':content' => $content, ':user_id' => $user_id, ':topic_id' => $topic_id, ':post_id' => $post_id);

        $query->execute($parameters);
    }

    public function updateUsername($user_id, $username)
    {
        $sql = "UPDATE users SET username = :username WHERE id = :user_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id, ':username' => $username);

        $query->execute($parameters);
    }

    public function updateEmail($user_id, $email)
    {
        $sql = "UPDATE users SET email = :email WHERE id = :user_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id, ':email' => $email);

        $query->execute($parameters);
    }

    public function updatePass($user_id, $password)
    {
        $sql = "UPDATE users SET password = :password WHERE id = :user_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id, ':password' => md5($password));

        $query->execute($parameters);
    }

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM users WHERE id = :user_id";
        
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);

        $query->execute($parameters);
    }

}

