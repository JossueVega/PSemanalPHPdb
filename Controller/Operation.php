<?php include '../Layouts/head.php'; ?>
<?php
require_once '../Model/config.php';
require_once '../Model/BlogModel.php';


$Blog=BlogModel::ListaBlog();

if (isset($Blog)) {


}
else{

}
 ?>
<div class="row justify-content-left mt-3">
  <div class="container">
    <a href="../Index.php" class="btn btn-sm btn-outline-primary">Comentarios enviados</a>
  </div>

</div>
<div class="row justify-content-center">


  <div class="col-md-10 mt-4">
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>Asunto</th>
          <th>Mensaje</th>
          <th colspan="2">Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Blog as $c): ?>
          <tr>
            <td><?php echo $c[0]; ?></td>
            <td><?php echo $c[1]; ?></td>
            <td><?php echo $c[2]; ?></td>
            <td><?php echo $c[3];?></td>
          <!--<td colspan="2"><form class="form-inline my-2 my-lg-0" action="Update.php" method="get">
              <input type="hidden" name="Id" value="<?php echo $c[0]; ?>  ">
              <button type="submit" name="button" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i> </button> -->

            </form>
            <form class="form-inline my-2 my-lg-0" action="Delete.php" method="post">
              <input type="hidden" name="Id" value="<?php echo $c[0]; ?>">
              <button type="submit" name="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
            </form>
          </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</div>
<?php include '../Layouts/footer.php'; ?>
