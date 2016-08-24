<?php
class FluidCache_Standalone_layout_conrad_main_694ab0d212cf5d83c2eb5e7fb5f181a4b60f6f54 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<header class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = 'lib.logo';
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = 'lib.langnav';
$arguments4['data'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments7 = array();
$arguments7['typoscriptObjectPath'] = 'lib.navbar';
$arguments7['data'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
            </div>          
            <div style="display:none;" class="col-md-3 col-sm-3">
              <div>SEARCHBOX HERE</div>
            </div>
        </div>
  </div>
</header>

<div class="container">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['section'] = 'content';
$arguments10['partial'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
</div>

<footer>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments12 = array();
$arguments12['typoscriptObjectPath'] = 'lib.footerContent';
$arguments12['data'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper14->initializeArgumentsAndRender();

$output0 .= '
</footer>';


return $output0;
}


}
#1472033148    4700      