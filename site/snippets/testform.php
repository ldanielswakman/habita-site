<style>
    label, .radio-group__label {
        display: block;
        width: 200px;
        font-size: 0.75em;
    }
    label + input {
        display: block;
        margin-bottom: 0.5em;
    }
</style>

<form action="<?php echo $page->url()?>#form" method="post">

    <label for="name" class="required">Name</label>
    <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>

    <label for="email" class="required">E-Mail</label>
    <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>

    <label for="expertise">Area of expertise</label>
    <input type="text" name="expertise" id="expertise" value="<?php $form->echoValue('expertise') ?>"/>

    <label for="attendees">Number of attendees</label>
    <input<?php e($form->hasError('attendees'), ' class="erroneous"')?> type="number" name="attendees" id="attendees" value="<?php $form->echoValue('attendees') ?>"/>

    <label for="booth">Booth size</label>
    <select name="booth" id="booth">
        <?php $value = $form->value('booth') ?>
        <option value="6 sqm"<?php e($value=='6 sqm', ' selected')?>>6 m²</option>
        <option value="12 sqm"<?php e($value=='12 sqm', ' selected')?>>12 m²</option>
        <option value="18 sqm"<?php e($value=='18 sqm', ' selected')?>>18 m²</option>
        <option value="special"<?php e($value=='special', ' selected')?>>special size >18 m²</option>
    </select>

    <div class="radio-group">
        <div class="radio-group__label">Do you want to receive the newsletter?</div>
        <?php $value = $form->value('newsletter') ?>
        <label for="newsletter-yes">
            <input type="radio" name="newsletter" id="newsletter-yes" value="yes"<?php e($value=='yes'||$value=='', ' checked')?>/> Yes
        </label>
        <label for="newsletter-no">
            <input type="radio" name="newsletter" id="newsletter-no" value="no"<?php e($value=='no', ' checked')?>/> No
        </label>
    </div>

    <label for="receive-copy">
        <input type="checkbox" name="_receive_copy" id="receive-copy" <?php e($form->value('_receive_copy'), ' checked')?>/> Receive a copy of the sent data
    </label>

    <label for="message">Message</label>
    <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

    <label class="uniform__potty" for="website">Please leave this field blank</label>
    <input type="text" name="website" id="website" class="uniform__potty" />

    <a name="form"></a>
<?php if ($form->hasMessage()): ?>
    <div class="message <?php e($form->successful(), 'success' , 'error')?>">
        <?php $form->echoMessage() ?>
    </div>
<?php endif; ?>

    <button type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

</form>