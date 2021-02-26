<?php
require_once '../App/auth.php';
require_once '../layout/script.php';
require '../layout/scrit2.php';
echo $head;
echo $header;
echo $aside;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<?php
echo 'Usuário: '.$usuario.'</br>Perfil: ';
echo $perm;

echo '</div>';

echo  $footer;
echo $javascript;



// require '../layout/footer.php';
?>