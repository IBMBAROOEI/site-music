<?php
include 'database.php';

$album_id = $_GET['id'];

$album = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM albums WHERE id = $album_id")) ;
$musics = mysqli_query($con, "SELECT * FROM musics WHERE album_id = $album_id");
?>
<?php include 'header.php'; ?>

<script>
    $(document).ready(function () {
        $(".music").click(function () {
            var x = $(this).data('address');
            $("#play").attr('src', 'music/' + x);
        })
    })
</script>
<div class="container">
    <div class="row mt-3">
        <div class="col-8">
            <div class="row">
                <div class="col-6 offset-3">
                <img src="image/<?php echo $album['image']; ?>" class="img-fluid rounded-lg">
                </div>
            </div>
            <div class="row justify-content-center">
                <audio id="play" src="music/<?php echo mysqli_fetch_assoc($musics)['audio']; ?>" controls></audio>
            </div>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <?php foreach($musics as $music): ?>
                <li class="list-group-item music" data-address="<?php echo $music['audio']; ?>"> <!--  Show albums and put music on each album!-->
                    <div class="row">
                        <div class="col-4">
                            <img src="image/<?php echo $album['image']; ?>" class="img-fluid rounded-lg">
                        </div>
                        <div class="col-8">
                            <?php echo $music['name']; ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
