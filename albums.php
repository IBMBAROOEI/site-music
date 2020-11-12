<?php
include 'database.php';

$artist_id = $_GET['id'];

$albums = mysqli_query($con, "SELECT * FROM albums WHERE artist_id = $artist_id");
/* you get album  echa artist */

?>
<?php include 'header.php'; ?>

<div class="container">
    <div class="row">

        <?php foreach ($albums as $album): ?>
            <div class="col-2">
                <a href="musics.php?id=<?php echo $album['id']; ?>"><!--  Each  have multiple albums View each  many museic !-->
                    <img src="image/<?php echo $album['image']; ?>" class="img-fluid rounded-circle">
                    <h4>
                        <?php echo $album['name']; ?>
                    </h4>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php include 'footer.php'; ?>
