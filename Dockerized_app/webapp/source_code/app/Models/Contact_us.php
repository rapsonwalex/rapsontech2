<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $clientornot
 * @property string $created_at
 * @property string $updated_at
 */
class Contact_us extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_us';

    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'message', 'clientornot'];
}
