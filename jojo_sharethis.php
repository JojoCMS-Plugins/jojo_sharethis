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
        $code = $smarty->fetch('jojo_sharethis.tpl');
        return $code;
    }

     public static function foot() {
        if (Jojo::getOption('sharetype', 'sharethis')=='sharethis') {
            return '<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
' . ( Jojo::getOption('sharethisid', '') ? '<script type="text/javascript">
/*<![CDATA[*/
stLight.options({publisher:\'' . Jojo::getOption('sharethisid') . '\', tracking:\'google\'});
/*]]>*/
</script>
' : '');
        } else {
            return '<script type="text/javascript">
/*<![CDATA[*/
 var addthis_config = {"data_track_clickback":true};
 /*]]>*/
</script>
 <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=' . Jojo::getOption('sharethisid', 'xa-4f5d46f52303b861') . '">
 </script>
 ';
        }

    }
}
