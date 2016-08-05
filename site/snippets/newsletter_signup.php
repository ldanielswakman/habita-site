<? $showname = (isset($name)) ? $name : false; ?>
<? $showtelephone = (isset($telephone)) ? $telephone : false; ?>
<? $light = (isset($theme) && $theme == 'light') ? ' field-light' : ''; ?>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="u-aligncenter">
  <form action="//habita.us13.list-manage.com/subscribe/post?u=f12afb9c7fac0362abb729571&amp;id=8b50cfe5d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

    <div id="mc_embed_signup_scroll" class="u-inlineblock">

      <div id="mce-responses">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>

      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f12afb9c7fac0362abb729571_8b50cfe5d5" tabindex="-1" value=""></div>

      <div class="mc-field-group u-floatleft u-mr20">
        <input type="email" value="" name="EMAIL" class="field <?= $light ?> required email" id="mce-EMAIL" placeholder="<?= l::get('email_address') ?>" style="width: 160px;">
      </div>

      <? if($showname) :?>
      <div class="u-clearfix"></div>
      <div class="mc-field-group u-block u-mr20 u-mt10 u-mb10">
        <input type="text" value="" name="NAME" class="field <?= $light ?> name" id="mce-NAME" placeholder="<?= l::get('name') ?>" style="width: 160px;">
      </div>
      <? endif ?>

      <? if($showtelephone) :?>
      <div class="mc-field-group u-block u-mr20 u-mb20">
        <input type="text" value="" name="TEL" class="field <?= $light ?> tel" id="mce-TEL" placeholder="<?= l::get('telephone') ?>" style="width: 160px;">
      </div>
      <? endif ?>

      <input type="submit" value="<?= l::get('send') ?>" name="subscribe" id="mc-embedded-subscribe" class="button button-small">

    </div>

  </form>
</div>

<!--End mc_embed_signup-->
