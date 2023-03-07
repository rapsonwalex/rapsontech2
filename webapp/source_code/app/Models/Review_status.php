<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $review_status_id
 * @property string $review_status_name
 * @property string $review_status_decription
 * @property string $created_at
 * @property string $updated_at
 * @property Article[] $articles
 */
class Review_status extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'review_status';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'review_status_id';

    /**
     * @var array
     */
    protected $fillable = ['review_status_name', 'review_status_decription', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article', 'review_status', 'review_status_id');
    }
}
