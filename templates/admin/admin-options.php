<div class="wrap">
    <h1><?php _e('Site Preloader Options','site_preloader')?></h1>
    <form action="#" method="post">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label for="template"><?php _e('Template', 'site_preloader')?></label>
                </th>
                <td>
                    <select id="template" name="template">
                        <option value="circle" <?php if($template == 'circle'):?> selected <?php endif;?>><?php _e('Circle','site_preloader')?></option>
                        <option value="dots" <?php if($template == 'dots'):?> selected <?php endif;?>><?php _e('Dots','site_preloader')?></option>
                        <option value="spinning" <?php if($template == 'spinning'):?> selected <?php endif;?>><?php _e('Spinning','site_preloader')?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="timeout"><?php _e('Timeout', 'site_preloader')?></label>
                </th>
                <td>
                    <input id="timeout" type="number" min="0" name="timeout" value="<?php echo $timeout?>"/>
                    <br>
                    <strong class="description">
                        <?php _e('Time in milliseconds to hide the preloader.','site_preloader')?>
                    </strong>
                </td>
            </tr>
        </table>
        <button class="button button-primary" type="submit">
            <?php _e('Save Changes', 'site_preloader') ?>
        </button>
    </form>
</div>