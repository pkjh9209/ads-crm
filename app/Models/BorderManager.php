<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorderManager extends Model
{
    use HasFactory;

    protected $table = 'bbs_manager';

    /**
     * @var array
     * */
    protected $fillable = [
        'board_name'
        ,'board_subject'
        ,'board_level_list'
        ,'board_level_read'
        ,'board_level_write'
        ,'board_drop'
        ,'created_at'
        ,'updated_at'
    ];
}
