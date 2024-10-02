<?php 
    require_once(__DIR__. '/../partials/head.php')
?>

<h1>Inscription</h1>
<form method="POST">
    <div class="col-md-4 mx-auto d-block mt-5">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name='pseudo' id="pseudo">
            <?php if (isset($this->arrayError['pseudo'])) {
        ?>
			<p class='text-danger'><?= $this->arrayError['pseudo'] ?></p>
        <?php
        } ?>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">E-mail</label>
            <input type="email" class="form-control" name='mail' id="mail">
            <?php if (isset($this->arrayError['mail'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['mail'] ?></p>
        <?php
        } ?>
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name='password' id="password">
            <?php if (isset($this->arrayError['password'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['password'] ?></p>
        <?php
        } ?>
        </div>
        <label for="idRole">Role</label>
        <select class="form-select" aria-label="idRole" name="idRole">
            <option value="1">Parent</option>
            <option value="2">Enfant</option>
        </select>
        <?php if (isset($this->arrayError['idRole'])) {
        ?>
            <p class='text-danger'><?= $this->arrayError['idRole'] ?></p>
        <?php
        } ?>
    </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </div>
</form>

<?php
if (isset($error)) {
    echo "<p class='text-danger'>" . $error . "<p>";
}

    require_once(__DIR__. '/../partials/footer.php')
?>