<?php
namespace TYPO3\CMS\Form\Domain\Validator;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

class FileMaximumSizeValidator extends AbstractValidator
{
    /**
     * @var array
     */
    protected $supportedOptions = array(
        'element' => array('', 'The name of the element', 'string', true),
        'errorMessage' => array('', 'The error message', 'array', true),
        'maximum' => array('', 'The maximum file size', 'integer', true),
    );

    /**
     * Constant for localisation
     *
     * @var string
     */
    const LOCALISATION_OBJECT_NAME = 'tx_form_system_validate_filemaximumsize';

    /**
     * Check if $value is valid. If it is not valid, needs to add an error
     * to result.
     *
     * @param mixed $value
     * @return void
     */
    public function isValid($value)
    {
        $fileValue = $this->rawArgument[$this->options['element']];
        $value = $fileValue['size'];
        if ($value > (int)$this->options['maximum']) {
            $this->addError(
                $this->renderMessage(
                    $this->options['errorMessage'][0],
                    $this->options['errorMessage'][1],
                    'error'
                ),
                1442006702
            );
        }
    }

    /**
     * Substitute makers in the message text
     * Overrides the abstract
     *
     * @param string $message Message text with markers
     * @return string Message text with substituted markers
     */
    public function substituteMarkers($message)
    {
        $message = str_replace('%maximum', GeneralUtility::formatSize($this->options['maximum']), $message);
        return $message;
    }
}
