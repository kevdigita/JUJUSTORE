
<br>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PANIER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           
           <?php  include_once "admin/connect.php";
$req= $connec->prepare("SELECT * FROM commande  inner join produit on commande.article = produit.id ");

echo '   <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>image</th>
                  <th>nom</th>
                  <th>quantiter</th>
                  <th>Actions</th>
                  <th ><button class="btn btn-xs btn-primary active voir"  name="voir">commander<span class="glyphicon glyphicon-eye-open"></span></button></th>
                  </tr>
                  </thead>
                  <tbody>';
                  $req->execute();
                  
                  
   while($user=$req->fetch(PDO::FETCH_ASSOC))
    { 
                  ?>

                  <tr>

                  <td><img src="assets/img/produit/<?=$user['photo']?>" class="d-block mx-lg-auto img-fluid" alt="not found" width="70" height="50" loading="lazy"><br>
       </td>
       <td><?=$user['nom']?></td>

       <td><?=$user['quantite']?></td>

<td>

                      <button class="btn btn-xs btn-danger sup"  onclick="">Supprimer <span class="glyphicon glyphicon-remove"></span></button>                
                          </td>
                        </tr>
                      <?php
    }?>
                  
                                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>