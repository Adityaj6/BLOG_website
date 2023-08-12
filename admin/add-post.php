<?php
  include 'partials/header.php';
 // fetch categories from database 
  $query = " SELECT * FROM categories";
  $categories = mysqli_query($connection , $query);

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL?>admin/add-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="title" id="" placeholder="Title">
            <select id="" name="category">
                <?php while($category = mysqli_fetch_assoc($categories)) :  ?>
                <option value="<?= $category['id'] ?>"><?= $category['title']?></option>
               <?php endwhile?>
                
            </select>
            <textarea name="body" id="" cols="" rows="10" placeholder="Body"></textarea>
            <?php if(isset($_SESSION['user_is_admin'])) : ?>
            <div class="form__control inline">
                <input type="checkbox" name="is_featured" vlaue="1"id="is__featured" checked>
                <label for="is__featured" checked>Featured</label>
            </div>
            <?php endif?>
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file"id="thumbnail">
            </div>
          
            <button type="submit" name="submit" class="btn">Add Post </button>
            
        </form>
    </div>
</section>



<?php
  include '../partials/footer.php';
?>

