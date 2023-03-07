<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $appointment_date
 * @property string $appointment_time
 * @property string $name
 * @property string $email
 * @property string $phone_no
 * @property string $topic
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $other_specify
 * @property string $phone_no2
 * @property string $updated_at
 */
class Appointment_request extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['appointment_date', 'appointment_time', 'name', 'email', 'phone_no', 'topic', 'q1', 'q2', 'q3', 'other_specify', 'phone_no2'];
}
