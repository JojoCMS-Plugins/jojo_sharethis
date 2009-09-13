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
Jojo::addHook('articleAfterBody', 'articleAfterBody', 'jojo_sharethis');

/* enable or disable blog icons */
$_options[] = array(
    'id'          => 'enablesharethis',
    'category'    => 'Articles',
    'label'       => 'Enable ShareThis',
    'description' => 'Enable / disable the display of the ShareThis button.',
    'type'        => 'radio',
    'default'     => 'yes',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_sharethis'
);

/* an option for listing your choice of blog icons */
$_options[] = array(
    'id'          => 'sharethiscode',
    'category'    => 'Articles',
    'label'       => 'Button code',
    'description' => 'ShareThis button code - sign up and get it from http://sharethis.com/publishers/getcode/',
    'type'        => 'textarea',
    'default'     => '',
    'options'     => '',
    'plugin'      => 'jojo_sharethis'
);