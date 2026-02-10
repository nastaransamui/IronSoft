<section class="container d-flex flex-column align-items-center gap-50 pt-94 pb-57" aria-labelledby="iron-pdf-for-c-plus-plus">
  <span class="comming-soon-wrapper">
    <h3 class="iron-pdf-header-text" id="iron-pdf-for-c-plus-plus">
      IronPDF for C++
      <img
        loading="lazy"
        width="81"
        height="81"
        src="<?= base_url('/images/Ilustration/comming-soon.webp') ?>" alt="Comming Soon" class="comming-soon" />
    </h3>
  </span>
  <span class="pdf-info">
    <?php foreach ($features as $index => $feature): ?>
      <p># <?= esc($feature) ?>
      <?php if ($index < count($features) -1): ?>
        <div class="seperator"></div>
        <?php endif; ?>
    <?php endforeach; ?>
  </span>
</section>

<section class="container d-flex flex-column align-items-center gap-22 pdf-second-section">
  <p class="new-library-text">
    The new <b>IronPDF library for C++</b> will enhance the C++ developer’s tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.
  </p>
  <p class="new-library-text">
    <b> IronPDF for C++</b> will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.
  </p>
</section>