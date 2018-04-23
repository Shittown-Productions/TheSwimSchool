<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class STSwimmer extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at', 'birthDate'];

    /**
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'birthDate',
        'email',
        'phone',
        'parent',
        'notes',
        'street',
        'city',
        'state',
        'zip',
        'emergencyName',
        'emergencyRelationship',
        'emergencyPhone',
        'stripeChargeId',
        's_t_level_id',
        'promo_code_id'
    ];

    public function level()
    {
        return $this->belongsTo(STLevel::class, 's_t_level_id');
    }

    /**
     * @return mixed
     */
    public function yearsOld()
    {
        return $this->getAttribute('birthDate')->diffInYears(Carbon::now());
    }

    /**
     * @return mixed
     */
    public function monthsOld()
    {
        return $this->getAttribute('birthDate')->diffInMonths(Carbon::now());
    }

    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }

    public function promoAppliedPrice()
    {
        if($this->promoCode){
            $discount_percent = ($this->promoCode->discount_percent * .01);
            $price = $this->level->price;
            return ($price - ($discount_percent * $price));
        } else {
            return $this->level->price;
        }
    }
}
