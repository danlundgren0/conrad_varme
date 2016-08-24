<?php
class FluidCache_Standalone_template_file_tmpl_conrad_main_c0304699794db536c3b55a74ea6f2c911e07badf extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'conrad_main';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
    <!--TYPO3SEARCH_begin-->
    <div class="row main">
        <div class="col-md-12 topcontent">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments1 = array();
$arguments1['value'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content_topcontent');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        </div>
        <div class="col-md-12">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments3 = array();
$arguments3['value'] = NULL;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content');
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
        </div>
    </div>
    <!--TYPO3SEARCH_end-->
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output5 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments6 = array();
$arguments6['name'] = 'conrad_main';
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output5 .= $viewHelper8->initializeArgumentsAndRender();

$output5 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments9 = array();
$arguments9['name'] = 'content';
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
    <!--TYPO3SEARCH_begin-->
    <div class="row main">
        <div class="col-md-12 topcontent">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments12 = array();
$arguments12['value'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content_topcontent');
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
        </div>
        <div class="col-md-12">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper
$arguments14 = array();
$arguments14['value'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return $currentVariableContainer->getOrNull('content');
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\RawViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
        </div>
    </div>
    <!--TYPO3SEARCH_end-->
';
return $output11;
};

$output5 .= '';


return $output5;
}


}
#1472033148    4550      