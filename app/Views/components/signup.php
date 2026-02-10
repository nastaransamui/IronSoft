  <section class="signup-section" aria-labelledby="signup-title">
    <div class="container d-flex py-55 align-items-center gap-30 flex-column">
      <h2 class="signup-title" id="signup-title">
        Sign up to our <b>Betta Program</b>
      </h2>
      <form class="sign-up-form">
        <input
          class="input"
          type="email"
          placeholder="Enter email address"
          id="signup-input"
          name="singup-input"
          required
          aria-required="true">
        <button class="submit " type="submit">
          Sign up now
          <img
            loading="lazy"
            width="18"
            height="18"
            src="<?= base_url('/images/Ilustration/caret-right-fill.svg') ?>" 
            alt="Sign up"
            style="filter: brightness(0) invert(1);" />
        </button>
      </form>
    </div>
  </section>