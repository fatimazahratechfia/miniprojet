document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('ajout-produit-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const nomProduit = document.getElementById('nom-produit').value;
        const descriptionProduit = document.getElementById('description-produit').value;
        const prixProduit = document.getElementById('prix-produit').value;
        const quantiteProduit = document.getElementById('quantite-produit').value;
        if (nomProduit && descriptionProduit && prixProduit && quantiteProduit) {
            const nouveauProduit = {
                nom: nomProduit,
                description: descriptionProduit,
                prix: prixProduit,
                quantite: quantiteProduit
            };
            form.reset();
        } else {
            alert('Veuillez remplir tous les champs.');
        }
    });
});