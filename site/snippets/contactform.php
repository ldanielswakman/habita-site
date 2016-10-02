<div class="dialog u-flex-column" style="justify-content: space-between;">

  <div>

    <a href="javascript:toggleDialog('close')" class="u-floatright u-ph30 u-pv20">
      <i class="ion-ios-close-empty ion-3x c-greylight"></i>
    </a>

    <h2 class="c-orange u-ma30">Get in touch</h2>

  </div>

  <form data-action="" class="">

    <div class="u-relative">
      <textarea class="field field-box" placeholder="Hello great people at habita..." rows="5" required></textarea>
      <label class="field-box--label">Message</label>
    </div>

    <div class="u-relative">
      <!-- <input class="field field-box" type="text" name="name" id="name" placeholder="your name" /> -->
      <select class="field field-box">
        <option disabled selected>-- Space type (optional)</option>
        <option>Test 1</option>
        <option>Test 1</option>
        <option>Test 1</option>
        <option>Test 1</option>
      </select>
      <i class="ion ion-chevron-down u-pinned-topright u-mv25 u-mr15"></i>
    </div>

    <div class="u-relative">
      <input class="field field-box" type="text" name="name" id="name" placeholder="your name" />
      <label class="field-box--label">Name</label>
    </div>

    <div class="u-relative">
      <input class="field field-box" type="email" name="email" id="email" placeholder="your email" required />
      <label class="field-box--label">Email</label>
    </div>

    <button type="submit" class="button button-primary u-widthfull u-pv20">Send</button>

  </form>
</div>

<!-- Nav content overlay -->
<a href="#" onclick="return toggleDialog('close')" class="dialog-fade"></a>
