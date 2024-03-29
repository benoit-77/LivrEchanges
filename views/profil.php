<h2>Bienvenue sur votre profil</h2>

<section>
    <div id="profil">
        <div>
            <img class="profilPicture" src="/../assets/img/users/<?= $user->picture ?>" alt="Photo de profil">
        </div>
        <div class="infoProfile">
            <i class="bi bi-person-fill" style="font-size: 60px;"></i>
            <p><?= $user->surname ?></p>
            <p><?= $user->firstname ?></p>
            <i class="bi bi-envelope-at-fill" style="font-size: 60px;"></i>
            <p><?= $user->email ?></p>
            <i class="bi bi-geo-fill" style="font-size: 60px;"></i>
            <p><?= $user->streetName ?></p>
            <p><?= $user->postalCode ?></p>
            <p><?= $user->city ?></p>
        </div>
    </div>
    
    <div id="buttonsProfile">
        <a class="card-text" href="/../modifier-profil.php/"><button class="btn">Modifier votre informations personnelles</button></a>
        <a class="card-text" href="/../modifier-infos.php/"><button class="btn">Modifier votre adresse mail et mot de passe</button></a>
        <button class="btn btn-primary" id="displayDonationsBtn">Voir mes dons en cours</button>
    </div>

</section>