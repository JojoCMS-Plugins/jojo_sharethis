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

/* adds the blog icons after the body of the article */
Jojo::addHook('ShareThis', 'afterBody', 'jojo_sharethis');

Jojo::addHook('customhead', 'head', 'jojo_sharethis');

Jojo::addHook('foot', 'foot', 'jojo_sharethis');

/* share type */
$_options[] = array(
    'id'          => 'sharetype',
    'category'    => 'Share',
    'label'       => 'Share provider',
    'description' => 'ShareThis or AddThis',
    'type'        => 'radio',
    'default'     => 'sharethis',
    'options'     => 'sharethis,addthis',
    'plugin'      => 'jojo_sharethis'
);

/* Your ShareThis publisher ID */
$_options[] = array(
    'id'          => 'sharethisid',
    'category'    => 'Share',
    'label'       => 'Publisher id code',
    'description' => 'Share/AddThis publisher ID (required for ShareThis and for AddThis analytics)',
    'type'        => 'text',
    'default'     => '',
    'options'     => '',
    'plugin'      => 'jojo_sharethis'
);

/* share type */
$_options[] = array(
    'id'          => 'sharesize',
    'category'    => 'Share',
    'label'       => 'Share button size',
    'description' => 'Small or large buttons',
    'type'        => 'radio',
    'default'     => 'small',
    'options'     => 'small,large',
    'plugin'      => 'jojo_sharethis'
);

/* Your ShareThis favourites */
$_options[] = array(
    'id'          => 'sharethis_favourites',
    'category'    => 'Share',
    'label'       => 'ShareThis Favourites',
    'description' => 'Comma separated list of the widgets you want included as buttons, from: facebook,fblike,twitter,linkedin,googleplus,plusone,pinterest,email (see ShareThis for others)',
    'type'        => 'text',
    'default'     => 'fblike,plusone,twitter,pinterest,email',
    'options'     => '',
    'plugin'      => 'jojo_sharethis'
);

