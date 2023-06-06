<!-- Filière demandée - 1er Choix -->
<p class="text-primary text-center mb-3">Filière demandée - 1ère Choix</p>
<div class="form-check">
    <?php if ($typeBac != 'economie') { ?>
        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
    <?php } else { ?>
        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" disabled>
    <?php } ?>
    <label class="form-check-label" for="flexRadioDefault1">
        MCW (Multimédia et Conception Web)
    </label>
</div>
<!-- ... les autres boutons de choix de filière avec la même logique -->
