<?php

namespace DraperStudio\Friendable\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Friend.
 */
class Friend extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
