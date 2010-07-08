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
     public static function customhead()
    {
        if ($id = Jojo::getOption('sharethisid')) {
            return '<script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=' . $id . '&amp;type=website&amp;post_services=email%2Cfacebook%2Ctwitter%2Cgbuzz%2Cmyspace%2Cdigg%2Csms%2Cwindows_live%2Cdelicious%2Cstumbleupon%2Creddit%2Cgoogle_bmarks%2Clinkedin%2Cbebo%2Cybuzz%2Cblogger%2Cyahoo_bmarks%2Cmixx%2Ctechnorati%2Cfriendfeed%2Cpropeller%2Cwordpress%2Cnewsvine&amp;button=false"></script>';
        }
        return '';
    }

    public static function afterBody()
    {
        /* only show blog icons if the option is enabled */
        if (Jojo::getOption('enablesharethis') == 'no') return '';
        global $smarty;
        $code = $smarty->fetch('jojo_sharethis.tpl');
        return $code;
    }
}