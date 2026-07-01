
<div class="card" data-name="<?=$pokemon->getName()?>" >
  <div class="card-content">
    <div class="card-header">

      <p class="eyebrow-card"><?=$pokemon->getSlug()?></p>
    </div>

  </div>

  <div class="card-bg">
    <img
      class="bg-img"
      src="<?=$pokemon->getPokemonImage($pokemon->getId())?>"
      alt="leafs"
          />
  </div>
  <div class="shadow">
    <img
      class="shadow-img"
      src="/tp/asset/background.png"
      alt="leafs"
          />
  </div>
</div>