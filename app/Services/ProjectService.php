<?php
 namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class ProjectService
{
    public function getAll(): Collection
    {
        return Project::all();
    }
}