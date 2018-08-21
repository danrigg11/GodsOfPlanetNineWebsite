<?php include 'header.php' ?>

<div class="container">

<form class="was-validated mt-2">
  <div class="row justify-content-center">

    <div class="col-md-8 order-md-1">
      <h1 class="mb-3">Submittion Form</h1>
      <form class="needs-validation">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="First name" required>
            <div class="invalid-feedback">
              Valid first name is required, must contain atleast One character.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
            <div class="invalid-feedback">
              Valid last name is required, must contain atleast One character.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">Your username is required.</div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>


        <hr class="mb-4">

        <h4 class="mb-3">Attach File</h4>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" required>
          <label class="custom-file-label" for="customFile">Choose file</label>
          <div class="invalid-feedback">Please attach a valid file.</div>
        </div>



        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="display-username">
          <label class="custom-control-label" for="same-address">Display username on website</label>
        </div>
        <div class="custom-control custom-checkbox pb-3">
          <input type="checkbox" class="custom-control-input" id="recieve-updates">
          <label class="custom-control-label" for="same-address">Recieve updates on leader</label>
        </div>
        <button class="btn btn-primary btn-lg btn-block mb-3" type="submit">Submit</button>
      </form>
    </div>
  </div>
</form>

</div>







<?php include 'footer.php' ?>
