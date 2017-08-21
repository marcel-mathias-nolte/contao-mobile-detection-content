<?php

/**
 * mobilecontent extension for Contao Open Source CMS
 *
 * @author  Kamil Kuzminski <https://github.com/qzminski>
 * @author  derhaeuptling <https://derhaeuptling.com>
 * @author  Martin Schwenzer <mail@derhaeuptling.com>
 * @license LGPL
 */

/**
 * Load tl_content data container
 */
\Contao\Controller::loadDataContainer('tl_content');
\Contao\System::loadLanguageFile('tl_content');

/**
 * Extend palettes
 */
$GLOBALS['TL_DCA']['tl_faq']['palettes']['__selector__'][] = 'mobileImage';
$GLOBALS['TL_DCA']['tl_faq']['subpalettes']['mobileImage'] = 'mobileImageSrc,mobileImageSize';

\Haste\Dca\PaletteManipulator::create()
    ->addField('mobileImage', 'singleSRC', \Haste\Dca\PaletteManipulator::POSITION_AFTER)
    ->applyToSubpalette('addImage', 'tl_faq');

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_faq']['fields']['mobileImage'] = &$GLOBALS['TL_DCA']['tl_content']['fields']['mobileImage'];
$GLOBALS['TL_DCA']['tl_faq']['fields']['mobileImageSrc'] = &$GLOBALS['TL_DCA']['tl_content']['fields']['mobileImageSrc'];
$GLOBALS['TL_DCA']['tl_faq']['fields']['mobileImageSize'] = &$GLOBALS['TL_DCA']['tl_content']['fields']['mobileImageSize'];
