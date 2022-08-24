<?php
$page = 'con';
include 'head.php';
?>
<style>
    body {
        background-color: #f0f2f5;
    }

    @media only screen and (max-width: 770px) {
        .responsive {
            display: none;
        }
        .res-map{
            display: none;
        }
    }
</style>
<section class="">
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h2 style="text-align:center"><b>CONTACT US</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="responsive" src="contactpage-removebg-preview.png" style="width: 498px;
                      height: 378px;" alt="">

            </div>
            <div class="col-md-6" style="background-color: white">
                <form class="needs-validation pt-3" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Contact</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Mob. number"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">State</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="message">Message</label>
                            <textarea type="text" class="form-control" id="mesaage" placeholder="Mesaage"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn-primary form-control" value="Sumbit">
                    </div>
                </form>

            </div>
        </div>
        <div class="container my-3 res-map" style="margin:auto;
        width: 50%;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.7480572533686!2d77.1959814153349!3d28.517226882463476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1514726729f%3A0x60863f370d4750c4!2sPantheon%20digital!5e0!3m2!1sen!2sin!4v1661379289031!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
</section>
<?php
include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
</body>

</html>