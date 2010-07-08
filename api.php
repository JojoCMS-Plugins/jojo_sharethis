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

/* add javascript to head */
Jojo::addHook('customhead', 'customhead', 'jojo_sharethis');


/* enable or disable ShareThis */
$_options[] = array(
    'id'          => 'enablesharethis',
    'category'    => 'ShareThis',
    'label'       => 'Enable ShareThis',
    'description' => 'Enable / disable the display of the ShareThis button.',
    'type'        => 'radio',
    'default'     => 'yes',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_sharethis'
);

/* Your ShareThis publisher ID */
$_options[] = array(
    'id'          => 'sharethisid',
    'category'    => 'ShareThis',
    'label'       => 'Publisher id code',
    'description' => 'ShareThis publisher ID - sign up and get it from http://sharethis.com/publishers/getcode/ - the bit after publisher= in the head code',
    'type'        => 'text',
    'default'     => '',
    'options'     => '',
    'plugin'      => 'jojo_sharethis'
);
