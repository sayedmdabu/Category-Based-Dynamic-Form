<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['organization_id', 'name', 'description'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function formTemplates()
    {
        return $this->hasMany(FormTemplate::class);
    }
}
