<html>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<body>
<div class="container">
    <div class="row">
        <h1>Search</h1>
        <div class="col-md-12 mt-5">
            <form class="form-group" method="post" action="index.php">
                <input type="text" class="form-control" name="mac" placeholder="Enter MAC">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary mt-4">Check</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <h2>Results</h2>
        <div class="col-12">
            <ol>
                <?php
                foreach (scandir(__DIR__ . '/files') as $file) {
                    if (similar_text($file, $_POST['mac']) > 10) {
                        echo '<li><a href="/files/' . $file . '" target="_blank">' . $file . '</a></li>';
                    }
                }
                ?>
            </ol>
        </div>
    </div>
</div>
</body>
</html>
