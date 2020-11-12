<?php
include 'database.php';

$artists = mysqli_query($con, "SELECT * FROM artists");

?>
<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <?php foreach ($artists as $artist): ?>
            <div class="col-2">
                <a href="albums.php?id=<?php echo $artist['id']; ?>"><!--  Each singer can have multiple albums View each singer's album !-->
                    <img src="image/<?php echo $artist['image']; ?>" class="img-fluid rounded-circle">
                    <h4>
                        <?php echo $artist['name']; ?>
                    </h4>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
