<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_Jojo_sharethis extends JOJO_Plugin
{
    public static function afterBody()
    {
        /* only show blog icons if the option is enabled */
        global $smarty;
        $smarty->assign('sharetype', Jojo::getOption('sharetype', 'sharethis'));
        $smarty->assign('sharethisid', Jojo::getOption('sharethisid'));
        $smarty->assign('sharesize', Jojo::getOption('sharesize', 'small'));
        $favourites = Jojo::getOption('sharethis_favourites', '');
        if ($favourites) {
            $favourites = explode(',', $favourites);
        }
        $smarty->assign('sharethis_favourites', $favourites);
        return $smarty->fetch('jojo_sharethis.tpl');
    }

     public static function head() {
            return '';
    }

     public static function foot() {
        if (Jojo::getOption('sharetype', 'sharethis')=='sharethis') {
            return '<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "' . Jojo::getOption('sharethisid') . '", tracking:"google", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
';
        } elseif (Jojo::getOption('sharetype', 'sharethis')=='addthis') {
            return '<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=' . Jojo::getOption('sharethisid') . '"  async="async"></script>
 ';
        }
        return false;

    }
}