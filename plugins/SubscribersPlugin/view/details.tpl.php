<?php
/**
 * SubscribersPlugin for phplist.
 *
 * This file is a part of SubscribersPlugin.
 *
 * SubscribersPlugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * SubscribersPlugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @category  phplist
 *
 * @author    Duncan Cameron
 * @copyright 2011-2017 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */

/**
 * This is the HTML template for the plugin page.
 *
 * @category  phplist
 */

/**
 * Available fields
 * - $form: optional raw HTML for attribute search/select form
 * - $listing: raw HTML output of Listing.
 */
?>
<div>
    <hr/>
<?php echo $toolbar; ?>
    <div style='padding-top: 10px;'>
<?php echo $form; ?>
    </div>
    <div style='text-align: right;'>
<?php echo $command_link; ?>
    </div>
    <div style='padding-top: 10px;'>
<?php echo $listing; ?>
<?php echo $command_link; ?>
    </div>
        <p><a href='#top'>[<?php echo s('top') ?>]</a></p>
</div>
