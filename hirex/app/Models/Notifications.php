<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id", "status", "job_id"
    ];

    /**
     * Get the job associated with the notification.
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    
}