

<?php $__env->startSection('content'); ?>
<div class="row">
    <!-- Grid column -->
    <div class="col-lg-12 col-md-12">

        <!--Panel-->
        <div class="card">
            <h3 class="card-header elegant-color-dark lighten-1 white-text text-uppercase font-weight-bold text-center py-5">Feedback US</h3>
            <div class="container my-5">
                <!--Section: Content-->
                <!-- Default form contact -->
                <form class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">Have something to tell us about?</p>

                    <!-- Name -->
                    <input type="text" id="defaultContactFormName" name="name" class="form-control mb-4" placeholder="Name">

                    <!-- Email -->
                    <input type="email" id="defaultContactFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

                    <!-- Subject -->
                    <label>Subject</label>
                    <select name="subject" class="browser-default custom-select mb-4">
                        <option value="" disabled>Choose option</option>
                        <option value="1" selected>Feedback</option>
                        <option value="2">Report a bug</option>
                        <option value="3">Feature request</option>
                    </select>

                    <!-- Message -->
                    <div class="form-group">
                        <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                    </div>

                    <!-- Send button -->
                    <button class="btn btn-info btn-block" name="send" type="submit">Submit</button>

                </form>
                <!-- Default form contact -->

            </div>


        </div>
        <!--/.Panel-->

    </div>
    <!-- Grid column -->
</div>
<!-- Grid row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bhsc1\OneDrive\Desktop\UniVis_firebase\resources\views/feedback.blade.php ENDPATH**/ ?>