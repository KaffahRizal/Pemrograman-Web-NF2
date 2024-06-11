<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; // 'students' -> nama tabel

    // mendefinisikan field yang bolehdiisi
    protected $fillable = ['name','nim','major','class','course_id'];


    /**
     * 1 to 1
     * - hasOne(nama modelnya) : tabel ini meminjamkan key
     * - belongsTo(nama modelnya) : tabel ini meminjam id dari tabel lainnya
     * 
     * 1 to many
     * - hasMany(nama modelnya) : tabel ini meminjamkan id
     * - belongsToMany(nama modelnya) : tabel ini meminjamkan id dari tabel lainnya
     * 
     */
    // mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Course::class,);
    }
}
