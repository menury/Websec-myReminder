<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reminder extends Model
{
    use HasFactory;

    protected $primaryKey = 'reminder_id';
    protected $fillable = ['title', 'exam_time', 'date_of_exam'];
    public $timestamps = false;

    public function setDateOfExamAttribute($value)
    {
         $this->attributes['date_of_exam'] = (new Carbon($value))->format('Y/m/d');
    }

    public function getDateOfExamAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['date_of_exam'])->format('Y/m/d');
    }
}
