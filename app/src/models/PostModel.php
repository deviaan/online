<?php

namespace models;

use PDO;


class PostModel
{
    public function __construct (
        public int      $id,
        public string   $title,
        public string   $date,
        public string   $post,
        public string   $author,
        public string   $tags,
    )
    {}
}

class PostManager
{
    public function __construct (protected PDO $db)
    {
    }

    public function getPosts(): array {
        $rows = $this->db->query(
            'SELECT 
                p.id as id, 
                p.title as title, 
                p.date as date, 
                p.post as post, 
                a.name as name, 
                group_concat(t.name) as tags
            FROM posts p
                INNER JOIN authors a
                    ON p.author_id = a.id
                INNER JOIN post_tags pt
                    ON p.id = pt.post_id
                INNER JOIN tags t
                    ON t.id = pt.tag_id
            '
        );

        $model_rows = array();

        foreach ($rows as $row)
        {
            $model_rows[] = new PostModel(
                $row['id'],
                $row['title'],
                $row['date'],
                $row['post'],
                $row['name'],
                $row['tags']
            );
        }

        return $model_rows;
    }
}