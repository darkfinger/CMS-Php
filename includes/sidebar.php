<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 5/29/2018
 * Time: 5:11 PM
 */
?>
<div class="col-md-4">
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
            </div>
        </form>

        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->

    <?php
    $query = "select * from categories";
    $categoriesForSidebar = mysqli_query($connection, $query);
    ?>
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php
                    while ($row = mysqli_fetch_assoc($categoriesForSidebar)) { ?>
                        <li><a href="#"><?php echo $row['cat_title'] ?></a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- /.col-lg-6 -->
<!--            <div class="col-lg-6">-->
<!--                <ul class="list-unstyled">-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
            laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>
