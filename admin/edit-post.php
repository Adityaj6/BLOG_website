<?php
  include 'partials/header.php';
?>





<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="Title">
            <select id="">
                <option value="1">Devotion</option>
                <option value="1">Devotion</option>
                <option value="1">Devotion</option>
                <option value="1">Art</option>
                <option value="1">Travel</option>
                <option value="1">Science & Technology</option>
            </select>
            <textarea name="" id="" cols="" rows="10" placeholder="Body"></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is__featured" checked>
                <label for="is__featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">change Thumbnail</label>
                <input type="file"id="thumbnail">
            </div>
          
            <button type="submit" class="btn">Update Post </button>
            
        </form>
    </div>
</section>



<?php
  include '../partials/footer.php';
?>

