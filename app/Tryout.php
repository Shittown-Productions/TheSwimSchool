<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

/**
 * A tryout is to see if you are skilled enough for the swim team
 */

class Tryout extends Model
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at', 'registration_open', 'event_time'];

    /**
     * @var array
     */
    protected $fillable = [
        'location_id',
        's_t_season_id',
        'class_size',
        'registration_open',
        'event_time'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Athletes()
    {
        return $this->hasMany(Athlete::class)->currentseason();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Location()
    {
        return $this->belongsTo(Location::class);
    }

    public function Season()
    {
        return $this->belongsTo(STSeason::class, 's_t_season_id');
    }


    /**
     * @return mixed
     */
    public function AllTryoutsOpenForSignups()
    {
        return $this->whereDate('class_start_date', '>', Carbon::now())
                    ->whereDate('registration_open', '<=', Carbon::now());
    }


    /**
     * @return bool
     */
    public function isFull()
    {
        if($this->athletes()->count() >= $this->getAttribute('class_size')){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeCurrentSeason($query)
    {
        return $query->where('s_t_season_id', STSeason::GetCurrentSeason()->id);
    }
}
