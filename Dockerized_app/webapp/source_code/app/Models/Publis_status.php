<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $publish_status_id
 * @property string $publish_status_name
 * @property string $publish_status_description
 * @property string $created_at
 * @property string $updated_at
 */
class Publis_status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'publis_status';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'publish_status_id';

    /**
     * @var array
     */
    protected $fillable = ['publish_status_name', 'publish_status_description', 'created_at', 'updated_at'];

}
