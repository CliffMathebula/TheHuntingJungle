<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Jobs extends Model
{

    use Notifiable;
    protected $table = 'jobs';
    public $timestamps = true;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['reference', 'date_posted', 'job_name', 'job_title', 'job_descrition', 'job_start_date', 'no_of_positions', 'company_posted', 'users_id'];

}
