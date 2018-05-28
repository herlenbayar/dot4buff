<form action="<?php echo URL;?>forum/create" method="POST">
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" type="text" name="title" placeholder="title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <input class="form-control" type="text" name="category" placeholder="Category">
    </div>
    <div class="form-group">
        <label>Text</label>
        <textarea class="form-control ckeditor" type="text" name="text" placeholder="text"></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>