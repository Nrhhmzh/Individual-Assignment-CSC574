<?php
    include('./layout/header.php');
?>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="title">Contact Me</h2>
            <div class="contact-content">
                 <form action="#">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>First Name</label>
                        </div>
                        <div class="input-data">
                            <input type="text" required>
                            <div class="underline"></div>
                            <label>Last Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                           <input type="email" required>
                           <div class="underline"></div>
                           <label>Email Address</label>
                        </div>
                        <div class="input-data">
                           <input type="text" required>
                           <div class="underline"></div>
                           <label>Website Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                           <textarea rows="8" cols="80" required></textarea>
                           <br />
                           <div class="underline"></div>
                           <label for="">Write your message</label>
                           <br />
                           <div class="form-row submit-btn">
                              <div class="input-data">
                                 <div class="inner"></div>
                                 <input type="submit" value="submit" onclick="msg()">
                              </div>
                           </div>
                        </div>
                     </div> 
                 </form>
            </div>
        </div>
    </section>
    <!-- contact section end -->
<?php
    include('./layout/footer.php');
?>