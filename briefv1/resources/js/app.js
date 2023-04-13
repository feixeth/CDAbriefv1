import './bootstrap';

// Supprimer une catégorie
$(document).on('submit', 'form.delete-category', function (e) {
    e.preventDefault();

    // Récupérer l'URL du formulaire de suppression
    var url = $(this).attr('action');

    // Envoyer une requête de suppression en AJAX
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function (response) {
            // Supprimer la ligne du tableau
            $('#categories-table').find('form[data-url="' + url + '"]').closest('tr').remove();
            // Afficher un message de succès
            alert('Category deleted successfully!');
        },
        error: function (xhr, status, error) {
            // Afficher un message d'erreur
            alert('An error occurred while deleting the category. Please try again later.');
        }
    });
});

// Supprimer un produit
$(document).on('submit', 'form.delete-product', function (e) {
    e.preventDefault();

    // Récupérer l'URL du formulaire de suppression
    var url = $(this).attr('action');

    // Envoyer une requête de suppression en AJAX
    $.ajax({
        url: url,
        type: 'POST',
        data: $(this).serialize(),
        success: function (response) {
            // Supprimer la ligne du tableau
            $('#products-table').find('form[data-url="' + url + '"]').closest('tr').remove();
            // Afficher un message de succès
            alert('Product deleted successfully!');
        },
        error: function (xhr, status, error) {
            // Afficher un message d'erreur
            alert('An error occurred while deleting the product. Please try again later.');
        }
    });
});
