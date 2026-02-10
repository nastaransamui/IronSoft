  <section class="container flex" aria-labelledby="iron-pdf-sofware">
    <!-- <img src="<?= base_url('/images/Ilustration/cpp_pdf_logo.webp') ?>" alt="IronPDF C++ logo"
      class="pdf-logo"
      width="780"
      height="698"
      fetchpriority="high"
      loading="eager"
      decoding="async"> -->
      <img
  src="<?= base_url('images/Ilustration/cpp_pdf_logo_small.webp') ?>"
  srcset="
    <?= base_url('images/Ilustration/cpp_pdf_logo_small.webp') ?> 120w,
    <?= base_url('images/Ilustration/cpp_pdf_logo.webp') ?> 780w
  "
  sizes="(max-width: 600px) 120px, 300px"
  alt="IronPDF C++ logo"
  width="780"
  height="698"
  fetchpriority="high"
  decoding="async"
   class="pdf-logo"
/>
    <div class="header-text-wrapper">
      <img
        height="15"
        width="115"
        src="<?= base_url('/images/logo/Iron_logo.svg') ?>" alt="Iron soft" class="Iron-logo">
      <div>
        <p class="hero-eyebrow">
          <?= esc($hero['eyebrow']) ?>
        </p>

        <h1 class="hero-title">
          <?= esc($hero['subtitle']) ?>
        </h1>

        <h2 id="iron-pdf-sofware" class="hero-subtitle">
          <?= esc($hero['title']) ?>

        </h2>

        <p class="hero-meta">
         <?= esc($hero['meta']) ?>
        </p>
      </div>
    </div>


  </section>

  <div class="be-first-wrapper">
    <div class="container d-flex flex-column first-text-wrapper">
      <h2 class="be-first-title">
        <?= esc($cta['title']) ?>
      </h2>

      <p class="be-first-subtitle">
        <?= esc($cta['subtitle']) ?>
      </p>

      <form class="sign-up-form">
        <input
          class="input"
          type="email"
          placeholder="Enter email address"
          id="hero-input"
          name="hero-input"
          required
          aria-required="true">
        <button class="submit " type="submit">
          Sign up now
          <img
            loading="lazy"
            width="19"
            height="19"
            src="<?= base_url('/images/Ilustration/caret-right-fill.svg') ?>" 
            alt="Sign up"
            style="filter: brightness(0) invert(1);" />
        </button>
      </form>

      <div class="d-flex align-items-center gap-10 flex-layout hero-coming-soon">
        <p class="badge"># Coming soon</p>

        <p class="betta-text">IronPDF Beta Program also coming soon for <b>Python | Node.JS | Java</b></p>
      </div>
    </div>
  </div>