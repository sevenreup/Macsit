    </div>
<div class="contact-container">
    <div class="container">
        <div class="row">
                <div class="col-md-3">
                    <h3>INFORMATION</h3>
                    <ul class="info">
                            <li><a href="<?php echo site_url(); ?>about">General Information</a></li>
                            <li><a href="<?php echo site_url(); ?>about/services">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                     <h3>CATEGORIES</h3>
                     <ul class="info">
                        <?php foreach($categories as $category) : ?>
                            <li>
                            <a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-3">
                     <h3>CONTACT</h3>
                     <ul class="info">
                            <li>Malawi University of science and Technology</li>
                            <li>P.O Box 1234</li>
                            <li>Thylo</li>
                            <li><a href="#">+265 880 00 00 07</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                        <div class="sos-net">
                            <ul class="social-icons">
                                <li><a title="Go to Our Facebook Page" class="facebook w3ls" href="http://facebook.com"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a title="Go to Our Twitter Account" class="twitter w3l" href="http://twitter.com"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a title="Go to Our Google Plus Account" class="googleplus w3" href="http://googleplus.com"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                                <li><a title="Go to Our Instagram Account" class="instagram wthree" href="http://instagram.com"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a title="Go to Our Youtube Channel" class="youtube w3layouts" href="http://youtube.com"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
        </div>
    </div>
</div>

    <div class="copyright">
        <div >
            <p>© 2017 ciMixit. All Rights Reserved | Design by <a href="#" target="=_blank"> SevenReup4ill </a></p>
        </div>
    </div>
<a id="toTop" style="display: inline;" href="#"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>
<script  src="/Macsit/assets/js/easing.js"></script>
<script  src="/Macsit/assets/js/move-top.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>    
</body>

</html>