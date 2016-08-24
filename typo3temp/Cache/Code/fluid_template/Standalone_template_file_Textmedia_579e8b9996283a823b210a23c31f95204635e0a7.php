<?php
class FluidCache_Standalone_template_file_Textmedia_579e8b9996283a823b210a23c31f95204635e0a7 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<div id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '">
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.noWrap', $renderingContext), 1);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Header';
$arguments7['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
	';
return $output6;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

	<div class="ce-textpic ce-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.horizontal', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output0 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output0 .= ' ce-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.vertical', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output0 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.noWrap', $renderingContext));
$arguments15['then'] = ' ce-nowrap';
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.vertical', $renderingContext), 'below');
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'MediaGallery';
$arguments20['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure21 = function() {return NULL;};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
		';
return $output19;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '

		<div class="ce-bodytext">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments22 = array();
// Rendering Boolean node
$arguments22['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.noWrap', $renderingContext));
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['partial'] = 'Header';
$arguments25['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments25['section'] = NULL;
$arguments25['optional'] = false;
$renderChildrenClosure26 = function() {return NULL;};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
			';
return $output24;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments27 = array();
$arguments27['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'bodytext', $renderingContext);
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.vertical', $renderingContext), 'below');
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'MediaGallery';
$arguments32['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
		';
return $output31;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
	</div>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments34 = array();
$arguments34['partial'] = 'Footer';
$arguments34['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments34['section'] = NULL;
$arguments34['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
</div>

';


return $output0;
}


}
#1472033148    10398     