<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('projects');

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->name = $project['name'];
            $newProject->description = $project['description'];
            $newProject->project_image = $project['project_image'];
            $newProject->used_technologies = $project['used_technologies'];
            $newProject->project_date = $project['project_date'];
            $newProject->link_github = $project['link_github'];

            $newProject->save();
        }
    }
}
