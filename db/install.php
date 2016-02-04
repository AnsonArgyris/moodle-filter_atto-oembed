<?php
/**
 * Created by PhpStorm.
 * User: wappis
 * Date: 2/4/16
 * Time: 12:40 PM
 */

/**
 * Installs the OEmbed filter.
 */
function xmldb_filter_atto-oembed_install() {
    global $CFG;
    filter_set_global_state('filter/atto-oembed', TEXTFILTER_ON);
}