<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Actions\Actionable;

class PrivatePoolSession extends Model
{
    use SoftDeletes, Actionable, Notifiable;

    /**
     * @var array
     */
    protected $dates = ['deleted_at', 'start', 'end'];

    /**
     * @var array
     */
    protected $fillable = ['start', 'end', 'private_lesson_id', 'location_id'];

    /**
     * @return BelongsTo
     */
    public function lesson()
    {
        return $this->belongsTo(PrivateLesson::class, 'private_lesson_id');
    }

    /**
     * @return HasMany
     */
    public function swimmers()
    {
        return $this->hasMany(PrivateSwimmer::class, 'private_lesson_id');
    }

    /**
     * @return BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    /**
     * @return BelongsTo
     */
    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * If the user has swimmers then its considered full
     *
     * @return bool
     */
    public function getFullAttribute(): bool
    {
        return $this->swimmers->count() ? true : false;
    }

    /**
     * Scope a query to only include pool session being available.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeAvailable($query)
    {
        return $query->whereNull('private_lesson_id');
    }

    /**
     * Scope a query to only include pool session being available.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeUnavailable($query)
    {
        return $query->whereNotNull('private_lesson_id');
    }

    /**
     * Scope a query to only include pool session being available.
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeAfterNow($query)
    {
        return $query->whereDate('start', '>', Carbon::now());
    }

    /**
     * This  is needed for safari to parse the date time of for the private calendar
     */
    public function getStartAttribute($value)
    {
        return Carbon::parse($value);
    }

    /**
     * This  is needed for safari to parse the date time of for the private calendar
     */
    public function getEndAttribute($value)
    {
        return Carbon::parse($value);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeStartingTomorrow($query)
    {
        return $query->where('start', Carbon::tomorrow());
    }
}
