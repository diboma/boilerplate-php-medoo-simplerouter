<!-- CONTENT -->

<div class="container">

  <?php include("app/views/partials/flash.php") ?>

  <div class="row d-flex justify-content-center">

    <div class="col-10 col-md-8 col-lg-6 mt-3 bg-white rounded shadow" style="max-width: 400px;">

      <h3 class="text-center mt-3 mb-3">Wachtwoord wijzigen</h3>

      <form action="<?= URL ?>/pw-reset" method="post" class="needs-validation" novalidate>

        <?= csrf() ?>

        <div class="mb-3">
          <label for="email" class="form-label">E-mailadres</label>
          <input type="email" name="email" id="email" class="form-control" value="<?= PasswordController::getEmailFromRequest(); ?>" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Nieuw wachtwoord</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="password_confirm" class="form-label">Bevestig wachtwoord</label>
          <input type="password" name="password_confirm" id="password_confirm" class="form-control" required>
        </div>

        <div class="d-grid gap-2 mb-5">
          <button type="submit" class="btn btn-dark mb-2">Verzenden</button>
          <a href="<?= URL ?>/login" class="btn btn-outline-secondary">Annuleren</a>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- SCRIPTS -->
<?php include('app/views/partials/scripts-bs5.php') ?>
<?php include('app/views/partials/scripts-form-validate.php'); ?>

<script>
  // document.querySelector("#nav-item-register").classList.add("active");
</script>