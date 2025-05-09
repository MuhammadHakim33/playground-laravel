<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function salaries()
    {
        return $this->hasMany(Salary::class, 'emp_no', 'emp_no');
    }
}
