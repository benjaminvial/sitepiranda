<?php get_header();?>
<body>
<div class="wrap">

<div class="partie blanche">
  <!--ici nous avons la partie blanche de la page contact-->
  <h1> Me contacter </h1>
    <p> Pour toute information sur mes oeuvres et </p>
      <br>
    <p>mon travail.</p>
  <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/phone.svg" alt="logo phone" width="" height="">
  <h2> 06 77 65 97 77 </h2>
  <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/@.svg" alt="logo email" width="" height="">
  <h2> contact@francois-piranda.art </h2>
      <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/instagram.svg" alt="logo instagram" width="" height="">
      <!-- ici il y aura l'insta-->
        <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/viméo.svg" alt="logo vimeo" width="" height="">
        <!-- ici il y aura le viméo-->
          <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/pinterest.svg" alt="logo pinterest" width="" height="">
          <!-- ici il y aura le pinterest-->
</div>
<!-- ici nous avons la partie bleu de la page contact-->
<div class="partie bleu">
  <form id="contact" method="post" action="traitement_formulaire.php">
  <fieldset><legend> Coordonnées</legend>
    <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" /></p>
    <p><label for="prenom">Prénom :</label><input type="text" id="prénom" name="prénom" /></p>
    <p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
      <p><label for="phone">Téléphone :</label><input type="text" id="phone" name="phone" /></p>
  </fieldset>

  <fieldset><legend>Message :</legend>
    <p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
  </fieldset>
  <br>
  <p id=politique> En envoyant ce message vous consentez à la collecte et au traitement des
    données renseignées ci-dessus pour l'usage exclusif.<p>
  <p> <blod> En savoir plus </bold> </p>


  <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
</form>

</div>
</div>

  </body>
  <?php get_footer();?>
