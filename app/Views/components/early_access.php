<section class="early-access-section" aria-labelledby="early-access">
  <div class="container d-flex py-80 align-items-center gap-40 ">
    <div class="d-flex flex-column gap-22">
      <h1 class="html-to-pdf-title" id="early-access">
        Early Access to <b>C++ PDF Library</b>
      </h1>
      <p class="html-to-pdf-text">
        Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features.
      </p>
      <div class="release-wrapper">
        <?php foreach ($earlyAccess as  $access): ?>
          <?php
          $status = strtolower($access['status']);
          $badgeClass = match ($status) {
            'released' => 'release-badge',
            'coming soon' => 'coming-soon-badge',
            default => 'release-badge'
          };
          ?>
          <span class="release-status-wrapper">
            <p class="<?= esc($badgeClass) ?>">
              # <?= esc($access['status']) ?>
            </p>
            <span class="d-flex flex-column">
              <img src="<?= base_url($access['image']) ?>"
                alt="IronPDF for <?= esc($access['language']) ?>"
                class="iron-pdf-logo">
              <p class="for-release">
                for <?= esc($access['language']) ?>
              </p>
            </span>
          </span>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>