<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;

    public $table = 'tenants';


    protected $fillable = [
        'user_id',
        'building_id',
        'depatament_id',
        'name', 
        'surname', 
        'second_surname', 
        'email', 
        'type', 
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function departaments()
    {
        return $this->belongsTo(Depataments::class, 'depatament_id');
    }

    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function tenantPayments()
    {
        return $this->hasMany(TenantPayments::class);
    }
}
