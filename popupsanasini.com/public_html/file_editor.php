
<!DOCTYPE html>
<html>
<head>
    <title>File Editor</title>
    <link rel=stylesheet href="https://cpanel.gotrasoft.com/assets/styler/doc/docs.css">

    <link rel="stylesheet" href="https://cpanel.gotrasoft.com/assets/styler/lib/codemirror.css">
    <link rel="stylesheet" href="https://cpanel.gotrasoft.com/assets/styler/theme/monokai.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://codemirror.net/lib/codemirror.js"></script>
    <script src="https://cpanel.gotrasoft.com/assets/styler/mode/javascript/javascript.js"></script>
    <script src="https://cpanel.gotrasoft.com/assets/styler/addon/selection/active-line.js"></script>
    <script src="https://cpanel.gotrasoft.com/assets/styler/addon/edit/matchbrackets.js"></script>
    <script src="https://cpanel.gotrasoft.com/assets/styler/keymap/sublime.js"></script>
    <style>
        .CodeMirror {
          border: 1px solid #eee;
          height: 600px;
        }
        body{
          background-color: #ecf0f5;
        }
    </style>

</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-3" style="height: 650px;overflow-x: auto;">
    
<div id="accordion" style="width: 350px">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
          Home
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front/home';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=home/<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Loop
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front/loop';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=loop/<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Page
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front/page';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=page/<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          Partials
        </button>
      </h5>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front/partials';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=partials/<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          Sidebar
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front/sidebar';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=sidebar/<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
      </div>
    </div>
  </div>
</div>


        <ul class="list-group">

        <?php


$path = dirname(__FILE__).'/theme/front';
$files = array_values(array_diff(scandir($path), array('.', '..')));
$data = array();
// remove dir
foreach ($files as $file) {
    $ext = pathinfo($path.$file, PATHINFO_EXTENSION);
    if ($ext == '') {
        continue;
    }?>
    <li class="list-group-item"><a href="?file=<?= $file ?>" style="padding: 10px 20px;"><?= $file ?></a></li>
    <?php
}
?>
</ul>
    </div>
    <div class="col-9">
<?php
    $file = 'theme/front/'.@$_GET['file'];
    // var_dump($file);
    if($_POST['html'] != '')
    {
        $postedHTML = $_POST['html']; // You want to make this more secure!
        file_put_contents($file, $postedHTML);
    }
?>
         <form action="" method="post">
            <?php
            $content = file_get_contents($file);
            echo "<textarea name='html' id='code' style='width:500px;height:500px'>" . htmlspecialchars($content) . "</textarea>";
            ?>
            <div class="text-right pt-3">
                <button style="cursor: pointer;" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    height:'600px',
    theme:'monokai',
    keyMap:'sublime'
  });

</script>


</body>
</html>