<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MantisProject extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mantis_project_table';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Orders projects by the number of bugs associated with them.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeOrderByBugCount($query)
    {
        return $query
            ->select('mantis_project_table.*', DB::raw('COUNT(mantis_bug_table.id) as bug_count'))
            ->leftJoin('mantis_bug_table', 'mantis_bug_table.project_id', '=', 'mantis_project_table.id')
            ->groupBy('mantis_project_table.id')
            ->orderByDesc('bug_count');
    }

    /**
     * Get the bugs associated with this project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bugs()
    {
        return $this->hasMany(MantisBug::class, 'project_id');
    }
}
