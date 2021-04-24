<?php require_once 'header.php';?>
<div class="row">
                        <div class="col-sm-12">
                            <section class="card">
                                <header class="card-header">
                                All Blog Post
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
                                                <td>Ttile</td>
                                                <td>Content</td>
                                                <td>Photo</td>
                                                <td>Status</td>
                                                <td style="width: 250px;">Action</td>
                                            </tr>
                                        </thead>
                                         <tbody>

  
         <td>
           
             
                <a href=""class="btn btn-info btn-sm"> <i class="fa   fa-arrow-down"></i> Inactive</a>
          
            <a href="status.php?id=<?= $row['id']; ?>&blog=blog&active=active" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up" aria-hidden="true"> Active</i></a>

         

        

    <a href="" class="btn btn-warning btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></a>

        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></a>
      </td>
                                             </tr>
                                           
                                         </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>





















<?php require_once 'footer.php';?>