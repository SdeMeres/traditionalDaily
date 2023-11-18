<?php include 'viuud/partials/header.php' ?>
<form action="/admin/articles" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" rows="3" name="body"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>
<?php include 'viuud/partials/footer.php' ?>