<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_name',
        'employer_logo',
        'employer_website',
        'employer_company_type',
        'publisher',
        'employment_type',
        'job_title',
        'job_category',
        'apply_link',
        'description',
        'is_remote',
        'city',
        'state',
        'country',
        'google_link',
        'posted_at',
        'expaire_at',
        'min_salary',
        'max_salary',
        'salary_currency',
        'salary_period',
        'benefits',
        'qualifications',
        'responsibilities',
        'required_experience',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'expaire_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($jobListing) {
            $jobListing->uuid = Str::uuid();
        });
    }
}
