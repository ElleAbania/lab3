<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'emabania_news';
<<<<<<< HEAD
    protected $allowedFields = ['title', 'slug', 'body'];
=======
    
    protected $allowedFields = ['title', 'slug', 'body'];

>>>>>>> e88638bcd7e3e3f5a9386ac902529d78433c214a
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}