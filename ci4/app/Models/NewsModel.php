<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'emabania_news';
<<<<<<< HEAD
    
    protected $allowedFields = ['title', 'slug', 'body'];
=======
>>>>>>> d711f1d86bcfc62abf0b6193164765d6509d96cd

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
