/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
  // Fonctions formulaires de contacts
  $(document).ready(function () {
    $(".enterprise-button").click(function () {
      console.log(`Click sur le bouton d'affichage de la modale entreprise`);
      $("#form-contact-enterprise").modal("show");
    });
    $(".copro-button").click(function () {
      console.log(`Click sur le bouton d'affichage de la modale copro`);
      $("#form-contact-copro").modal("show");
    });
    $(".particuliers-button").click(function () {
      console.log(`Click sur le bouton d'affichage de la modale particuliers`);
      $("#form-contact-particulier").modal("show");
    });
  });
})(jQuery);
