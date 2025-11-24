<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';

    protected $fillable = [
        'trade_name',
        'rfc',
        'legal_name',
        'phone',
        'company_mail',
        'naics_code',
        'number_employees',
        'seniority',
        'sector',
        'products_services',
        'street',
        'number',
        'postal_code',
        'neighborhood',
        'city',
        'state',
        'incorporated_united_states',
        'company_name',
        'business_line',
        'company_linkedin',
        'company_website',
        'company_social_net',
        'contact_name',
        'contact_last_name',
        'contact_email',
        'contact_phone',
        'contact_position',
        'contact_job_area',
        'contact_linkedin',
    ];
}
