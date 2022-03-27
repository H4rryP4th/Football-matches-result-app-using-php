<?php include_once('header.php'); ?>

<?php include_once('functions.php'); ?>

<?php $responseArray = converIntoArray(); ?>


<div class="main">
    <div class="row mt-4">

        <?php if (array_key_exists('data', $responseArray)) { ?>
            <?php foreach ($responseArray['data'] as $object) { ?>
                <div class="col-lg-4 col-sm-12 col-md-6 text-center">
                    <div class="card single-card mt-5">
                        <img src="" alt="" class="single-card-img">
                        <div class="card-body">
                            <div class="card-title" style="font-weight: bold;">Title</div>
                            <div class="card-text single-card-text">

                                <div class="alert alert-secondary">
                                    <img src="<?php echo $object['teams']['home']['img'] ?>" alt=""><br>
                                </div>
                                <?php echo $object['teams']['home']['name'] ?>
                                <?php echo $object['scores']['home_score'] ?>
                                -
                                <?php echo $object['scores']['away_score'] ?>
                                <?php echo $object['teams']['away']['name'] ?>
                                <div class="alert alert-secondary">
                                    <img src="<?php echo $object['teams']['away']['img'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h3 class="text-center text-uppercase">There no matches today</h3>
            <form action="yesterday.php" method="GET" class="text-center">
                <input type="submit" value="Yesterday" name="" class="btn btn-primary">
            </form>
            <form action="tomorrow.php" method="GET" class="text-center mt-2">
                <input type="submit" value="Tomorrow" name="" class="btn btn-warning">
            </form>
        <?php } ?>
    </div>
</div>


<?php include_once('footer.php'); ?>