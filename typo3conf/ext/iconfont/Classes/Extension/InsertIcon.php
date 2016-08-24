<?php
namespace Laxap\Iconfont\Extension;

/*
 *
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *
 */

use TYPO3\CMS\Rtehtmlarea\RteHtmlAreaApi;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/**
 * Insert Icon plugin for htmlArea RTE
 *
 */
class InsertIcon extends RteHtmlAreaApi {

	// The key of the extension that is extending htmlArea RTE
	protected $extensionKey = 'iconfont';

	// The name of the plugin registered by the extension
	protected $pluginName = 'InsertIcon';

	protected $pluginButtons = 'fonticon';

	protected $convertToolbarForHtmlAreaArray = array(
		'fonticon' => 'InsertIcon'
	);

	/**
	 * Return JS configuration of the htmlArea plugins registered by the extension
	 *
	 * @param  integer	$RTEcounter		Relative id of the RTE editing area in the form
	 * @return string					JS configuration for registered plugins
	 */
	public function buildJavascriptConfiguration($RTEcounter = 0) {
		return parent::buildJavascriptConfiguration($RTEcounter);
	}

}
