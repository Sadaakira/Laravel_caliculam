<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
<<<<<<< HEAD
    use SoftDeletes;
    
=======
>>>>>>> origin/master
    protected $fillable = [
        'title',
        'body',
        ];

    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}