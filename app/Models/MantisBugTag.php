<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MantisBugTag extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mantis_bug_tag_table';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Define the relationship between a bug tag and its associated bug.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bug()
    {
        return $this->belongsTo(MantisBug::class);
    }

    /**
     * Define the relationship between a bug tag and its associated tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        return $this->belongsTo(MantisTag::class);
    }
}
