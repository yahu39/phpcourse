<?php
require_once 'vendor/autoload.php';

use App\Models\{Job, Project};

$jobs = Job::all();
$projects = Project::all();
/* $project1 = new Project('Project 1', 'Description 1');
$projects = [
    $project1
]; */

  function printElement($job) {
/*     if($job->visible == false) {
      return;
    } */
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

  function printProject($project) {
    echo '<div class="project">';
    echo '<h5>'. $project->title . '</h5>';
    echo '<div class="row">';
    echo '<div class="col-3">';
    echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
    echo '</div>';
    echo '<div class="col">';
    echo '<p>' . $project->description .'</p>';
    echo '<strong>Technologies used: </strong>';
    echo '<span class="badge badge-secondary">PHP</span>';
    echo '<span class="badge badge-secondary">HTML</span>';
    echo '<span class="badge badge-secondary">CSS</span>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }