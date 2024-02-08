<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionData extends Model
{
    use HasFactory;
    protected $fillable = ['form_submission_id', 'form_field_id', 'field_value'];

    public function formSubmission()
    {
        return $this->belongsTo(FormSubmission::class);
    }

    public function formField()
    {
        return $this->belongsTo(FormField::class);
    }
}
