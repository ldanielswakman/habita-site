<? $cf_page = $pages->find('contact-form') ?>

<div id="contact_form" class="dialog u-flex-column bg-greylightest u-flex-col-between">

  <div>

    <a href="javascript:toggleDialog('close')" class="u-floatright u-ph30 u-pv20">
      <i class="ion-ios-close-empty ion-3x c-greylight"></i>
    </a>

    <h2 class="c-orange u-mt30 u-mh30"><?= $cf_page->heading() ?></h2>

    <? if ($contact_form_obj->successful() == false && $contact_form_obj->hasMessage()): ?>
      <p class="message">
        <b><? $contact_form_obj->echoMessage() ?></b>
      </p>
    <? endif; ?>

  </div>
  <form action="<?= $page->url()?>/#contact_form" method="post" class="bg-white">

    <? foreach($cf_page->form_fields()->toStructure() as $field) : ?>

      <div class="u-relative">
        <?
        $slug = strtolower($field->label());
        switch ($field->type()) {

          // Field type: Textarea
          case 'textarea' : ?>

            <textarea class="field field-box<? e($contact_form_obj->hasError($slug), ' field--error') ?>" name="<?= $slug ?>" id="<?= $slug ?>" placeholder="<?= $field->placeholder() ?>" rows="5"><? $contact_form_obj->echoValue($slug) ?></textarea>
            <label class="field-box--label"><?= $field->label() ?></label>
            

          <? break;
          // Field type: Space type selection
          case 'space_type' : ?>

            <select class="field field-box<? e($contact_form_obj->hasError('space_type'), ' field--error') ?>" name="Space Type" id="space_type">
              <option value="-"><?= $field->placeholder() ?></option>
              <? $options = $pages->find('membership-options')->cards()->toStructure(); ?>
              <? foreach ($options as $option) : ?>
                <option value="<?= $option->title() ?>" <?= ( $contact_form_obj->value('space_type') == $option->title() ) ? 'selected' : ''; ?>><?= $option->title() ?></option>
              <? endforeach ?>
            </select>
            <i class="ion ion-chevron-down u-pinned-topright u-mv25 u-mr15 u-no-p-events"></i>

          <? break;
          // Field type: Email
          case 'email' : ?>

            <input class="field field-box<? e($contact_form_obj->hasError('_from'), ' field--error') ?>" type="<?= $field->type() ?>" name="_from" id="<?= $slug ?>" placeholder="<?= $field->placeholder() ?>" value="<? $contact_form_obj->echoValue('_from') ?>" required />
            <label class="field-box--label"><?= $field->label() ?></label>

          <? break;
          // Other field types: text, email, phone
          default: ?>

            <input class="field field-box<? e($contact_form_obj->hasError($slug), ' field--error') ?>" type="<?= $field->type() ?>" name="<?= $slug ?>" id="<?= $slug ?>" placeholder="<?= $field->placeholder() ?>" value="<? $contact_form_obj->echoValue($slug) ?>" />
            <label class="field-box--label"><?= $field->label() ?></label>

        <? } ?>
      </div>

    <? endforeach ?>

    <input type="hidden" name="source" id="source" value="<?= $page->title() . ' (' .  $page->slug() . ')' ?>" />

    <input type="text" name="website" id="website" style="position: absolute; top: -9999px; left: -9999px;" />

    <button type="submit" name="_submit" value="<?= $contact_form_obj->token() ?>" class="button button-primary u-widthfull u-pv20">Send</button>

  </form>

  <? // Custom message success panel ?>
  <? if ($contact_form_obj->successful() == true) : ?>

    <div id="message_success" class="u-stick-topfull u-minheightfull bg-white u-z2 u-flex-col-between">
      <div class="u-widthfull">
        <a href="javascript:toggleDialog('close'); $('#message_success').addClass('u-hide');" class="u-floatright u-ph30 u-pv20">
          <i class="ion-ios-close-empty ion-3x c-greylight"></i>
        </a>
      </div>
      <div class="u-aligncenter u-pb100 u-ph30">

        <i class="message-successicon ion ion-ios-checkmark-empty c-orange"></i>
        <br>
        <p><?= $cf_page->followup_title()->kirbytext() ?></p>
        <div id="message_followup" class="u-mt50 u-lineheight20 u-fromBottomOnLoadBody" data-delay="1500">

          <?= $cf_page->followup_text()->kirbytext() ?>

        </div>

      </div>
      <div></div>

    </div>

  <? endif; ?>

</div>

<!-- Nav content overlay -->
<a href="#" onclick="return toggleDialog('close')" class="dialog-fade"></a>
