  <!--  footer --> 
  <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="icon/3.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Menus</h3>
                        <i><img src="icon/2.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Linkes</h3>
                        <i><img src="icon/1.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><img src="icon/fb.png" alt="icon"/></li>
                           <li><img src="icon/tw.png" alt="icon"/></li>
                           <li><img src="icon/lin(2).png" alt="icon"/></li>
                           <li><img src="icon/instagram.png" alt="icon"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>