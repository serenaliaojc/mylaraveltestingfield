<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Event extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('enabled', function (Builder $builder) {
           $builder->where('enabled', '=', 0);
        });
    }

    public function getNameAttribute($value) {
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];
        $name = explode(' ', $value);
        $modifiedName = [];
        foreach ($name as $word)
        {
            if (! in_array(strtolower($word), $ignore))
            {
                $modifiedName[] = ucfirst($word);
            } else {
                $modifiedName[] = strtolower($word);
            }
        }
        return join(' ', $modifiedName);
    }

    public function occurringToday()
    {
        return $this->created_at->isToday();
    }

}
