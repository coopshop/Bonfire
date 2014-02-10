<style>
form .controls { margin-left: 43% !important; }
form label { width: 40% !important; }
form .form-actions { padding-left: 43% !important; }
</style>
<div class="admin-box">
    <?php
    if (isset($orig) && is_array($orig) && count($orig)) :
        echo form_open(current_url(), 'class="form-horizontal" id="translate_form"');
    ?>
		<input type="hidden" name="trans_lang" value="<?php e($trans_lang); ?>" />
		<fieldset>
			<legend><?php echo lang('tr_translate_file') . ": {$lang_file}"; ?></legend>
    		<?php foreach ($orig as $key => $val) : ?>
            <div class="control-group">
                <label class="control-label" for="lang<?php echo $key; ?>"><?php e($val); ?></label>
                <div class="controls">
                    <input type="text" class="input-xxlarge" name="lang[<?php echo $key; ?>]" id="lang<?php echo $key; ?>" value="<?php e(isset($new[$key]) ? $new[$key] : ''); ?>" />
                </div>
            </div>
            <?php endforeach; ?>
		</fieldset>
        <fieldset class="form-actions">
            <input type="submit" name="save" class="btn btn-primary" value="<?php e(lang('bf_action_save')) ?>" /> <?php e(lang('bf_or')) ?>
            <a href="<?php
                echo site_url(SITE_AREA . '/developer/translate/index') . '/';
                e($trans_lang);
            ?>"><?php e(lang('bf_action_cancel'), 'class="btn btn-danger"'); ?></a>
        </fieldset>
	<?php
        echo form_close();
    endif;
    ?>
</div>