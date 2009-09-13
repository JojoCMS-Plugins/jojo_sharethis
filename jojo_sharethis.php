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
    public static function articleAfterBody()
    {
        /* only show blog icons if the option is enabled */
        if (Jojo::getOption('enablesharethis') == 'no') return '';
        
        global $smarty;
        $smarty->assign('code', Jojo::getOption('sharethiscode'));

        $code = $smarty->fetch('jojo_sharethis.tpl');

        return $code;
    }
}