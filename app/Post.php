<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
public function getPaginateByLimit(int $limit_count = 10)
=======
public function getPaginateByLimit(int $limit_count = 5)
>>>>>>> c1fa252 ([add]記事詳細画面)
{
    
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}