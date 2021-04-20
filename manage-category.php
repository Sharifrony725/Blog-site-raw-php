<?php require_once'header.php';

?>
<div class="row">
                        <div class="col-sm-12">
                            <section class="card">
                                <header class="card-header">
                                    Dynamic Table
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="card-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" >
                                        <thead>


                                            <tr>
                                                <td>SI No</td>
                                                <td>Category name</td>
                                                <td>Status</td>
                                                <td style="width: 250px;">Action</td>
                                            </tr>
                                        </thead>
                                         <tbody>


<?php  
while($row = mysqli_fetch_row($result)){
   $sl = 1;
   $category_name = $row['category_name'];
   $status = $row['status'];

  ?>
                                              <tr>
                                                 <td><?= $sl; ?></td>
                                                 <td><?=  $row['category_name']  ?></td>
                                                 <td><?=  $row['status'] ==1 ?'Active' : 'Inactive' ?></td>
         <td>
             <?php
              if($row['status']==1){ ?>
                <a href="status.php?id=<?= $row['id']; ?>&cat=category&inactive=inactive" class="btn btn-info btn-sm"> <i class="fa fa-arrow-down"></i> Inactive</a>
          <?php }else{ ?>
            <a href="status.php?id=<?= $row['id']; ?>&cat=category&active=active" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up" aria-hidden="true"> Active</i></a>
       <?php  }  ?>
         

        

    <a href="edit-category.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></a>

        <a href="delete.php?id=<?= $row['id']; ?>&cat=category" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></a>
      </td>
                                             </tr>
         <?php $sl++;  } ?>                                     
                                         </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

<?php require_once 'footer.php';?>