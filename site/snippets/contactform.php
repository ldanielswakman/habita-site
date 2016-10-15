<div id="contact_form" class="dialog u-flex-column bg-greylightest" style="justify-content: space-between;">

  <div>

    <a href="javascript:toggleDialog('close')" class="u-floatright u-ph30 u-pv20">
      <i class="ion-ios-close-empty ion-3x c-greylight"></i>
    </a>

    <h2 class="c-orange u-ma30">Get in touch</h2>

    <? if ($contact_form_obj->hasMessage()): ?>
      <p class="message u-mh30">
        <? $contact_form_obj->echoMessage() ?>
      </p>
    <? endif; ?>

  </div>
  <form action="<?= $page->url()?>/#contact_form" method="post" class="bg-white">

    <div class="u-relative">
      <textarea class="field field-box<? e($contact_form_obj->hasError('message'), ' field--error') ?>" name="message" id="message" placeholder="Hello great people at habita..." rows="5"><? $contact_form_obj->echoValue('message') ?></textarea>
      <label class="field-box--label">Message</label>
    </div>

    <div class="u-relative">
      <!-- <input class="field field-box" type="text" name="name" id="name" placeholder="your name" /> -->
      <select class="field field-box<? e($contact_form_obj->hasError('space_type'), ' field--error') ?>" name="space_type" id="space_type">
        <option selected>-- Space type (optional)</option>
        <option>Test 1</option>
        <option>Test 1</option>
        <option>Test 1</option>
        <option>Test 1</option>
      </select>
      <i class="ion ion-chevron-down u-pinned-topright u-mv25 u-mr15 u-no-p-events"></i>
    </div>

    <div class="u-relative">
      <input class="field field-box<? e($contact_form_obj->hasError('name'), ' field--error') ?>" type="text" name="name" id="name" placeholder="your name" value="<? $contact_form_obj->echoValue('name') ?>" />
      <label class="field-box--label">Name</label>
    </div>

    <div class="u-relative">
      <input class="field field-box<? e($contact_form_obj->hasError('_from'), ' field--error') ?>" type="email" name="_from" id="email" placeholder="your email" value="<? $contact_form_obj->echoValue('_from') ?>" />
      <label class="field-box--label">Email</label>
    </div>

    <div class="u-relative">
      <input class="field field-box<? e($contact_form_obj->hasError('phone'), ' field--error') ?>" type="tel" name="phone" id="phone" placeholder="your phone number" value="<? $contact_form_obj->echoValue('phone') ?>" />
      <label class="field-box--label">Phone number</label>
    </div>

    <input type="hidden" name="source" id="source" value="<?= $page->title() . ' (' .  $page->slug() . ')' ?>" />

    <input type="text" name="website" id="website" style="position: absolute; top: -9999px; left: -9999px;" />

    <button type="submit" name="_submit" value="<?= $contact_form_obj->token() ?>" class="button button-primary u-widthfull u-pv20">Send</button>

  </form>

</div>

<!-- Nav content overlay -->
<a href="#" onclick="return toggleDialog('close')" class="dialog-fade"></a>
