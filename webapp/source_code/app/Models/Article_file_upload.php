<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $article
 * @property string $mime
 * @property string $original_filename
 * @property string $filename
 * @property boolean $end_record
 * @property string $created_at
 * @property string $updated_at
 * @property Article $article_id
 */
class Article_file_upload extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['article', 'mime', 'original_filename', 'filename', 'end_record', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article', 'article', 'article_id');
    }
}
