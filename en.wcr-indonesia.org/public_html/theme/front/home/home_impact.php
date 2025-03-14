<style>

#_impact-root {
  padding-top: clamp(4rem, 2vw, 8rem);
  padding-bottom: clamp(4rem, 2vw, 8rem);
}

#_impact-root ._impact-card-wrapper * {
  padding: 0;
  margin: 0;
}

#_impact-root ._impact-card-wrapper {
  display: grid;
  gap: clamp(1.6rem, 2vw, 4rem);
  grid-template-columns: 1fr;
}

#_impact-root ._impact-card {
  background: var(--colors);
  padding: clamp(2rem, 2vw, 4rem);
  border-radius: 10px;
  gap: clamp(.8rem, 2vw, 1rem);
}

#_impact-root ._impact-card * {
  color: white;
}

#_impact-root ._impact-card-number {
  color: white;
  font-weight: bold;
  font-family: 'DINNextRoundedLTW01-Light'
}

#_impact-root ._impact-card-text {
  color: white;
  text-align: center;
  font-family: 'DINNextRoundedLTW01-Light';
  font-size: clamp(1.1rem, 2vw, 1.2rem);
  text-transform: capitalize;
}

.counters strong {
  font-size: clamp(1.6rem, 2vw, 2rem) !important;
}

@media (min-width: 768px) {
  #_impact-root ._impact-card-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
}

</style>

<section id="_impact-root" class="" style="background: #fff6f1;">
  <?php 
    $_impact = json_decode(json_encode([
      'title' => 'Dampak Program Kami',
      'items' => [
        [
          'number' => 1500,
          'text' => 'orang telah mendapatkan sosialisasi dari WCR',
        ],
        [
          'number' => 200,
          'text' => 'peserta telah difasilitasi pelatihan oleh WCR',
        ],
        [
          'number' => 60,
          'text' => 'mitra lembaga telah berkolaborasi dengan WCR',
        ],
      ]
    ]))
  ?>

  <div class="container wow fadeInUp d-flex flex-column justify-content-start align-items-stretch">
    <div class="d-flex title-product justify-content-center align-items-center">
      <h2 class="text-center"><?= $_impact->title ?></h2>
    </div>
    <div class="_impact-card-wrapper counters">
      <?php foreach($_impact->items as $item): ?>
        <div class="_impact-card d-flex flex-column justify-content-start align-items-center">
          <div class="counter _impact-card-number">
            <strong data-to="<?= $item->number ?>" data-append="+">0</strong>
          </div>
          <p class="_impact-card-text"><?= $item->text ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>