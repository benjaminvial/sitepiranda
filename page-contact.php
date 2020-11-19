<?php get_header();?>
<body>
  <div class="wrap_body">

  <div class="blanche">

      <div class="infos">
    <!--ici nous avons la partie blanche de la page contact-->
    <h1> Me contacter </h1>
      <span id="gg"> Pour toute information sur mes oeuvres et<br>
      mon travail.</span>

    <div class="info">
      <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/phone.svg" alt="logo phone" width="" height="">
        <span> 06 77 65 97 77 </span>
  </div>


  <div class="info">
    <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/email.png" alt="logo email" width="" height="">
    <span id="rs"> contact@francois-piranda.art </span>
  </div>

  <div class="info">
     <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/instagram.svg" alt="logo instagram" width="" height="">
     <span> instagram </span>
  </div>


  <div class="info">
      <img  src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/viméo.svg" alt="logo vimeo" width="" height="">
     <span> viméo </span>
  </div>


     <div class="info">
       <img src="<?php echo get_template_directory_uri();?>/pictures/logo/logo_bleu/pinterest.svg">
       <span> pinterest </span>
  </div>
  </div>
  </div>


  <!-- ici nous avons la partie bleu de la page contact-->
  <div id="bleu">
    <form id="contact" method="post" action="traitement_formulaire.php">
    <fieldset><legend> Coordonnées</legend>
      <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" /></p>
      <p><label for="prenom">Prénom :</label><input type="text" id="prénom" name="prénom" /></p>
      <p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
        <p><label for="phone">Téléphone :</label><input type="text" id="phone" name="phone" /></p>
    </fieldset>

    <fieldset><legend>Message :</legend>
      <p><label for="message"></label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
    </fieldset>
    <br>
    <span id="politique"> En envoyant ce message vous consentez à la collecte et au traitement des
      données renseignées ci-dessus pour l'usage exclusif.</span>
    <span id="esp"> <bold> En savoir plus</bold> </span>


    <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
  </form>

  </div>
  </div>
</body>
<?php get_footer();?>
