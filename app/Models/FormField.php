<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;
    protected $fillable = ['form_template_id', 'field_type', 'field_label', 'field_description'];

    public function formTemplate()
    {
        return $this->belongsTo(FormTemplate::class);
    }
}
