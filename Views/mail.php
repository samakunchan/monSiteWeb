<section class="row emailPage">
    <article class="col-lg-12">
        <?php if ($donnees['messageError']):?>
            <div class="alert alert-danger">
                <p><?= $donnees['messageError'];?></p>
            </div>
        <?php endif; ?>
        <?php if ($donnees['messageSuccess']):?>
            <div class="alert alert-success">
                <p><?= $donnees['messageSuccess'];?></p>
            </div>
        <?php endif; ?>
    </article>
    <article class="col-lg-8">
        <form class="row" method="post">
            <div class="col-lg-6">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="col-lg-6">
                <label for="entreprise">Entreprise</label>
                <input type="text" id="entreprise" name="entreprise">
            </div>
            <div class="col-lg-6">
                <label for="mail">Email</label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="col-lg-6">
                <label for="tel">Téléphone</label>
                <input type="tel" id="tel" name="tel">
            </div>
            <div class="col-lg-12">
                <p><label for="content">Message</label></p>
                <textarea name="content" id="content" cols="100%" rows="10"></textarea>
            </div>
            <input type="hidden" name="token" value="<?= \Controllers\EmailController::tokenCSRF('ProtectedMailSend'); ?>">
            <input class="btn btn-primary" type="submit" value="Envoyer">
        </form>
    </article>
    <article class="col-lg-4">
        <h2 class="col-lg-12">Me contacter </h2>
        <div class="col-lg-12">
            <i class="material-icons">phone_android</i>
            <span>06.46.60.34.61</span>
        </div>
        <div class="col-lg-12">
            <i class="material-icons">mail</i>
            <span>cedric.badjah@gmail.com</span>
        </div>
        <div class="col-lg-12"></div>
    </article>
</section>