<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'zip',
        'birthdate',
    
    ];
    protected $appends = ['fullname'];
    public function getFullnameAttritube()
    {
        return $this->fname . '' . $this->lname;
    }

    public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
