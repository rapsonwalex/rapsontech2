<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * @property integer $article_id
 * @property int $article_submited_by_user_id
 * @property int $article_laste_edited_by_user_id
 * @property int $review_status
 * @property int $publish_status
 * @property string $article_unique_id
 * @property string $article_title
 * @property string $article_short_description
 * @property string $author
 * @property string $article_body
 * @property string $created_at
 * @property string $updated_at
 * @property string $date_created
 * @property string $averta
 * @property boolean $end_record
 * @property string $article_body_searchable
 * @property boolean $request_for_review
 * @property string $last_request_for_review_date
 * @property string $published_date
 * @property User $user
// * @property User $user
 * @property PublisStatus $publisStatus
 * @property ReviewStatus $reviewStatus
 * @property Category[] $categories
 */
class Article_dump extends Model
{ 

     use SearchableTrait;

    protected $searchable = [

        'columns' => [

            'article_dumps.article_title' => 10,

            'article_dumps.article_short_description' => 5,

            'article_dumps.article_body_searchable' => 10,

            'article_dumps.author' => 3,
            'article_dumps.reference' => 5,
            
            'article_dumps.article_unique_id' => 5,

        ]

    ];
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'article_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['article_submited_by_user_id','reference', 'article_laste_edited_by_user_id', 'review_status', 'publish_status', 'article_unique_id', 'article_title', 'article_short_description', 'author', 'article_body', 'created_at', 'updated_at', 'date_created', 'averta', 'end_record', 'article_body_searchable', 'request_for_review', 'last_request_for_review_date', 'published_date', 'record_no', 'article_laste_edited_at_date', 'article_submited_at_date', 'article_comment_counter'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article_laste_edited_by_user_func()
    {
        return $this->belongsTo('App\User', 'article_laste_edited_by_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article_submited_by_user_func()
    {
        return $this->belongsTo('App\User', 'article_submited_by_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Publis_status_func()
    {
        return $this->belongsTo('App\Publis_status', 'publish_status', 'publish_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Review_status_func()
    {
        return $this->belongsTo('App\Review_status', 'review_status', 'review_status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories_func()
    {
        return $this->hasMany('App\Category', null, 'article_id');
    }
}
