<?php
include 'header.php';
// include 'functions.php';

?>

<main>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Resize your image</h1>
            </div>
            <div class="card-body">
                <form action="posted.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Enter Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Enter description</label>
                        <input type="text" name="description" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Enter Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                        <input type="submit" value="submit" name="submit" class="btn btn-sm btn-info mt-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>