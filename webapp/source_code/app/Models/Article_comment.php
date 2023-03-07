<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $article_comment_id
 * @property integer $article
 * @property int $commentator_user_id
 * @property string $comment_body
 * @property string $comment_date
 * @property string $created_at
 * @property string $updated_at
 * @property boolean $end_record
 * @property Article $article
 * @property User $user
 */
class Article_comment extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'article_comment_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['article', 'commentator_user_id', 'comment_body', 'comment_date', 'created_at', 'updated_at', 'end_record'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Article', 'article', 'article_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'commentator_user_id');
    }
}
