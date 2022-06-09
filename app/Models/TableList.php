<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TableList extends Model
{
    use HasFactory;
    protected $fillable = ['parent_id', 'style', 'text'];

    /**
     * Get all of the comments for the TableList
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(TableList::class, 'parent_id')->with('children');
    }
    /**
     * Get the user that owns the TableList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(TableList::class, 'id', 'parent_id');
    }
    public function scopeDefault($query)
    {
        $query->where('parent_id', 0)->with('children');
    }
}
