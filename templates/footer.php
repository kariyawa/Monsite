<?php
echo'
<footer class="container-fluid footer">
    <div class="container"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
            </div>
        </div>
    </div>
</footer>'
?>