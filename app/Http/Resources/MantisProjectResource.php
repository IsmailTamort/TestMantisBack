<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MantisProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Count the number of ongoing and resolved bugs for the specified categories and statuses
        $ongoingBugs = $this->bugs->where('category_id', 2)->whereNotIn('status', [80, 90])->count();
        $resolvedBugs = $this->bugs->where('category_id', 2)->whereIn('status', [80, 90])->count();
        $ongoingImprovements = $this->bugs->where('category_id', 3)->whereNotIn('status', [80, 90])->count();
        $resolvedImprovements = $this->bugs->where('category_id', 3)->whereIn('status', [80, 90])->count();

        // Return the transformed data as an array
        return [
            'name' => $this->name,
            'total' => $this->bug_count,
            'bugs' => [
                'ongoing' => $ongoingBugs,
                'resolved' => $resolvedBugs
            ],
            'improvements' => [
                'ongoing' => $ongoingImprovements,
                'resolved' => $resolvedImprovements
            ]
        ];
    }
}
