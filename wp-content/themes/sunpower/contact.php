<?php

/*
Template Name: contact

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sunpower
 */

get_header();
?>

<main id="primary" class="site-main">

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		

    // Post des données du formulaire dans la BDD
	if (isset($_POST['submit-btn'])) {
			global $wpdb;
			$wpdb->insert(
				'contact',
				array(
					'type' => $_POST['submit-btn'],
					'nom' => $_POST['nom'],
					'prenom' => $_POST['prenom'],
					'qualite' => $_POST['qualite'],
					'email' => $_POST['email'],
					'adresse' => $_POST['adresse'],
					'telephone' => $_POST['telephone'],
					'description' => $_POST['description'],
          'file' => $_POST['file']
				)
			);
		} ?>
  <div id="form-contact-enterprise" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Je suis une entreprise ou une collectivité</h5>
          <p><button class="close" type="button" data-dismiss="modal" aria-label="Close"><br><span aria-hidden="true">×</span><br></button></p>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
              <label for="nom">Nom</label><br>
              <input name="nom" class="form-control" type="text">
              <p></p>
              <p> <label for="prenom">Prénom</label><br>
                <input name="prenom" class="form-control" type="text">
              </p>
              <p> <label for="qualite">Qualité du responsable :</label><br>
                <input name="qualite" class="form-control" type="text">
              </p>
              <p> <label for="email"> E-Mail : </label><br>
                <input name="email" class="form-control" type="email">
              </p>
              <p> <label for="adresse"> Adresse de l'entreprise :</label><br>
                <input name="adresse" class="form-control" type="text">
              </p>
              <p> <label for="telephone">Téléphone :</label><br>
                <input name="telephone" class="form-control" type="int">
              </p>
              <p> <label for="description">Description du projet :</label><br>
                <input name="description" class="form-control" type="text">
              </p>
              <label for="file">Ajouter un fichier au format pdf:</label>
              <input type="file" name="file" accept=".pdf">
            </div>
            <p> <button name="submit-btn" type="submit" value="entreprise">Envoyer</button>
            </p>
          </form>
        </div>
        <div class="modal-footer"><button type="button" data-dismiss="modal">Fermer</button>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <div id="form-contact-copro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Je suis une copropriété</h5>
          <p><button class="close" type="button" data-dismiss="modal" aria-label="Close"><br><span aria-hidden="true">×</span><br></button></p>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
              <label for="nom">Nom</label><br>
              <input name="nom" class="form-control" type="text">
              <p></p>
              <p> <label for="prenom">Prénom</label><br>
                <input name="prenom" class="form-control" type="text">
              </p>
              <p> <label for="qualite">Qualité du responsable :</label><br>
                <input name="qualite" class="form-control" type="text">
              </p>
              <p> <label for="email"> E-Mail : </label><br>
                <input name="email" class="form-control" type="email">
              </p>
              <p> <label for="adresse"> Adresse de la copropriété :</label><br>
                <input name="adresse" class="form-control" type="text">
              </p>
              <p> <label for="telephone">Téléphone :</label><br>
                <input name="telephone" class="form-control" type="int">
              </p>
              <p> <label for="description">Description du projet :</label><br>
                <input name="description" class="form-control" type="text">
              </p>
              <label for="file">Ajouter un fichier au format pdf:</label>
              <input type="file" name="file" accept=".pdf">
            </div>
            <p> <button name="submit-btn" type="submit" value="copropriete">Envoyer</button>
            </p>
          </form>
        </div>
        <div class="modal-footer"><button type="button" data-dismiss="modal">Fermer</button>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <div id="form-contact-particulier" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Je suis un particulier</h5>
          <p><button class="close" type="button" data-dismiss="modal" aria-label="Close"><br><span aria-hidden="true">×</span><br></button></p>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
              <label for="nom">Nom</label><br>
              <input name="nom" class="form-control" type="text">
              <p> <label for="prenom">Prénom</label><br>
                <input name="prenom" class="form-control" type="text">
              </p>
              <p>
                <input name="qualite" class="form-control" type="text" value=" " style='display: none;'></p>
              <p> <label for="email"> E-Mail : </label><br>
                <input name="email" class="form-control" type="email">
              </p>
              <p> <label for="adresse"> Adresse :</label><br>
                <input name="adresse" class="form-control" type="text">
              </p>
              <p> <label for="telephone">Téléphone :</label><br>
                <input name="telephone" class="form-control" type="int">
              </p>
              <p> <label for="description">Description du projet :</label><br>
                <input name="description" class="form-control" type="text">
              </p>
              <label for="file">Ajouter un fichier au format pdf:</label>
              <input type="file" name="file" accept=".pdf">
            </div>
            <p> <button name="submit-btn" type="submit" value="particulier">Envoyer</button>
            </p>
          </form>
        </div>
        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Fermer</button>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
