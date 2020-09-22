<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Project;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'phpcourse',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
/* use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container)); */

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if (!empty($_POST)){
  var_dump($_GET);
  var_dump($_POST);

$project = new Project();
$project->title = $_POST['title'];
$project->description = $_POST['description'];
$project->save();

}
?>
<html>
  <head>
    <title>Add Job</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <form action="addProject.php" method="POST">
      <h1>Add Project</h1>
      <label for="">Title</label>
      <input type="text" name="title"><br>
      <label for="">Description:</label>
      <input type="text" name="description"><br>
      <button type="submit">Save</button>
    </form>
  </body>

</html>