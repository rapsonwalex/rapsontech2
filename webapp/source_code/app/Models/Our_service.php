<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $icon
 * @property string $url_link
 * @property int $order
 */
class Our_service extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'icon', 'url_link', 'order'];
}
