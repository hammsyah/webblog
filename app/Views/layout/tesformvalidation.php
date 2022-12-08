<?= $this->extend('/layout/template'); ?>
<?= $this->section('isikonten'); ?>

<div class="x_content">
    <form class="" action="" method="post" validate>
        <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
        </p>
        <span class="section">Personal Info</span>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. John f. Kennedy" required="required" />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Occupation<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" class='optional' name="occupation" data-validate-length-range="5,15" type="text" />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" name="email" class='email' required="required" type="email" />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Confirm email address<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="email" class='email' name="confirm_email" data-validate-linked='email' required='required' />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Number <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="number" class='number' name="number" data-validate-minmax="10,100" required='required'>
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Date<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" class='date' type="date" name="date" required='required'>
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Time<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" class='time' type="time" name="time" required='required'>
            </div>
        </div>

        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />

                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                    <i id="slash" class="fa fa-eye-slash"></i>
                    <i id="eye" class="fa fa-eye"></i>
                </span>
            </div>
        </div>

        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="password" name="password2" data-validate-linked='password' required='required' />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input class="form-control" type="tel" class='tel' name="phone" required='required' data-validate-length-range="8,20" />
            </div>
        </div>
        <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">message<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <textarea required="required" name='message'></textarea>
            </div>
        </div>
        <div class="ln_solid">
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button type='submit' class="btn btn-primary">Submit</button>
                    <button type='reset' class="btn btn-success">Reset</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>