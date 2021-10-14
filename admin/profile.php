<?php include "includes/admin_header.php"; ?>

<?php

if (isset($_SESSION['username'])) {



}

?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>Author</small>
                    </h1>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
                        </div>

                        <div class="form-group">
                            <select name="post_category" id="">

                                <?php

                                $query = "SELECT * FROM categories";

                                $select_categories = mysqli_query($connection, $query);

                                confirmQuery($select_categories);

                                while ($row = mysqli_fetch_assoc($select_categories)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];

                                    echo "<option value='$cat_id'>$cat_title</option>";

                                }

                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Post Author</label>
                            <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
                        </div>

                        <div class="form-group">
                            <label for="post_status">Post Status</label>
                            <input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
                        </div>

                        <div class="form-group">
                            <img width="300" src="../images/<?php echo $post_image; ?>">
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                            <label for="post_tags">Post Tags</label>
                            <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Post Content</label>
                            <textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php"; ?>
