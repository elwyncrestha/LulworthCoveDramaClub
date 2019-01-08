<footer class="footer">
    <div class="row">
        <div class="col-sm-4 text-left">
            <h4>Subscribe our newsletter</h4>
            <form class="form-inline" action="../controller/SubscriptionController.php" method="POST">
                <div class="input-group mb-2 mr-sm-2">
                    <input type="email" class="form-control" id="footerSubscribe" name="footerSubscribe" placeholder="Email" required>
                </div>

                <input type="submit" class="btn btn-custom mb-2" value="Submit" name="newsletterSubscribe">
            </form>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4 text-center">
            <h4>Our social media accounts</h4>
            <div class="socialaccounts">
                <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
            </div><!-- /.socialaccounts -->
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4 text-right">
            <h5>Lulworth Cove Drama Club</h5>
            <h5>Dorset, United Kingdom</h5>
        </div><!-- /.col-sm-4 -->
    </div><!-- /.row -->
    <hr />
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>Copyright &copy; <?php echo date("Y") ?> All Rights Reserved</p>
            <p>Designed and developed by <a href="https://github.com/elwyncrestha" class="developer">Elvin Shrestha</a></p>
        </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->
</footer>

<?php require 'pageFooter.php' ?>
<!-- tawk.to script -->
<script src="../build/js/tawk.js"></script>