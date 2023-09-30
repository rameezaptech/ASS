<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');

include('config.php');
//Display Products

$product_query = "SELECT * from products order by id desc";
$conn_query = mysqli_query($connection , $product_query);
if(mysqli_num_rows($conn_query) > 0){





?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>All Categories </h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                while($pro_data = mysqli_fetch_assoc($conn_query)){
                ?>
                    <tr>
                    <th scope="row"><?php echo $pro_data['id']?></th>
                    <td><?php echo $pro_data['title']?></td>
                    <td><?php echo $pro_data['category']?></td>
                    <td><?php echo $pro_data['description']?></td>
                    <td><img src="<?php echo 'images/'. $pro_data['images']?>" alt=""
                width="100px" height="100px"></td>
                <td>
<?php
if($pro_data['status'] == 1){
    echo "Active";
}else{
    echo "Deactive";
}
?>

                </td>    
                </tr>
               <?php
               }
            }
            ?>
             
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>