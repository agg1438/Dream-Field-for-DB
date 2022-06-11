<?php @include "../header.php" ?>

<title> Dream Field DB Sitesi - Oyuncular Listesi</title>

<div class="container">
<div class="row">
<div class="col-md-12">
<?php

$files = glob("*");
echo '<ul>'.implode('', array_map('sprintf', array_fill(0, count($files), '<li><a href="%s">%s</a></li>'), $files, $files)).'</ul>';

?>

</div>
</div>

</div>


<?php @include "../footer.php" ?>