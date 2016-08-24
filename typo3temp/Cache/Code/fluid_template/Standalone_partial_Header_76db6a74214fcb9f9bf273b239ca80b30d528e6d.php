<?php
class FluidCache_Standalone_partial_Header_76db6a74214fcb9f9bf273b239ca80b30d528e6d extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('!=', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header_layout', $renderingContext), 100);
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'subheader', $renderingContext));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				<header>
			';
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments12 = array();
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output14 = '';

$output14 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments15 = array();
// Rendering Boolean node
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'date', $renderingContext));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<header>
				';
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
			';
return $output14;
};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				<header>
			';
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments18 = array();
// Rendering Boolean node
$arguments18['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'date', $renderingContext));
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					<header>
				';
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
			';
return $output17;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Header/Header';
// Rendering Array
$array21 = array();
$array21['header'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header', $renderingContext);
$array21['layout'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header_layout', $renderingContext);
$array21['link'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header_link', $renderingContext);
$array21['icon'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'tx_iconfont_icon', $renderingContext);
$array21['default'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'defaultHeaderType', $renderingContext);
$arguments20['arguments'] = $array21;
$arguments20['section'] = NULL;
$arguments20['optional'] = false;
$renderChildrenClosure22 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'subheader', $renderingContext));
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'Header/SubHeader';
// Rendering Array
$array27 = array();
$array27['subheader'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'subheader', $renderingContext);
$array27['layout'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'header_layout', $renderingContext);
$array27['default'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'defaultHeaderType', $renderingContext);
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output25 .= '
		';
return $output25;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'Header/Date';
$arguments29['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure30 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output6 .= '

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'subheader', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				</header>
			';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'date', $renderingContext));
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					</header>
				';
};

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
			';
return $output38;
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
		';
return $output33;
};
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				</header>
			';
};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
$arguments42['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'date', $renderingContext));
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
					</header>
				';
};

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
			';
return $output41;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output6 .= '
	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1472033148    13196     