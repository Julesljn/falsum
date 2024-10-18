<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    /**
     *
     *
     * @var string
     */
    protected $table = 'words';

    /**
     *
     *
     * @var array
     */
    protected $fillable = ['word'];

    /**
     *
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
