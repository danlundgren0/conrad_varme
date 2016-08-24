<?php
class FluidCache_Standalone_partial_MediaGallery_b3177bf3fd49b7511e689954e526e87138aeaa06 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section imageType
 */
public function section_ace079acb629d94759a1cd1cdcb8e13ba65aa524(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments7 = array();
$arguments7['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext);
$arguments7['target'] = '';
$arguments7['class'] = '';
$arguments7['title'] = '';
$arguments7['additionalParams'] = '';
$arguments7['additionalAttributes'] = array (
);
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['section'] = 'media';
$arguments10['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments10['partial'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
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
$arguments15['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'image_zoom', $renderingContext));
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output17 = '';

$output17 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments18 = array();
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments21 = array();
$arguments21['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments21['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments24 = array();
$arguments24['section'] = 'media';
$arguments24['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments24['partial'] = NULL;
$arguments24['optional'] = false;
$renderChildrenClosure25 = function() {return NULL;};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
					';
return $output23;
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper26->setArguments($arguments21);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output20 .= $viewHelper26->initializeArgumentsAndRender();

$output20 .= '
				';
return $output20;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments27 = array();
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments30 = array();
$arguments30['section'] = 'media';
$arguments30['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments30['partial'] = NULL;
$arguments30['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
				';
return $output29;
};

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output17 .= '
			';
return $output17;
};
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments33 = array();
$arguments33['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments33['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['section'] = 'media';
$arguments36['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments36['partial'] = NULL;
$arguments36['optional'] = false;
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
					';
return $output35;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper38->setArguments($arguments33);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output32 .= $viewHelper38->initializeArgumentsAndRender();

$output32 .= '
				';
return $output32;
};
$arguments15['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments40 = array();
$arguments40['section'] = 'media';
$arguments40['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments40['partial'] = NULL;
$arguments40['optional'] = false;
$renderChildrenClosure41 = function() {return NULL;};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
				';
return $output39;
};

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
		';
return $output14;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments43 = array();
$arguments43['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext);
$arguments43['target'] = '';
$arguments43['class'] = '';
$arguments43['title'] = '';
$arguments43['additionalParams'] = '';
$arguments43['additionalAttributes'] = array (
);
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments46 = array();
$arguments46['section'] = 'media';
$arguments46['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments46['partial'] = NULL;
$arguments46['optional'] = false;
$renderChildrenClosure47 = function() {return NULL;};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
			';
return $output45;
};

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'image_zoom', $renderingContext));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments52 = array();
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output54 = '';

$output54 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments55 = array();
$arguments55['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments55['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments58 = array();
$arguments58['section'] = 'media';
$arguments58['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments58['partial'] = NULL;
$arguments58['optional'] = false;
$renderChildrenClosure59 = function() {return NULL;};

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
					';
return $output57;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper60->setArguments($arguments55);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output54 .= $viewHelper60->initializeArgumentsAndRender();

$output54 .= '
				';
return $output54;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments61 = array();
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments64 = array();
$arguments64['section'] = 'media';
$arguments64['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments64['partial'] = NULL;
$arguments64['optional'] = false;
$renderChildrenClosure65 = function() {return NULL;};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
				';
return $output63;
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output51 .= '
			';
return $output51;
};
$arguments49['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments67 = array();
$arguments67['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments67['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments70 = array();
$arguments70['section'] = 'media';
$arguments70['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments70['partial'] = NULL;
$arguments70['optional'] = false;
$renderChildrenClosure71 = function() {return NULL;};

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
					';
return $output69;
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper72->setArguments($arguments67);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output66 .= $viewHelper72->initializeArgumentsAndRender();

$output66 .= '
				';
return $output66;
};
$arguments49['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments74 = array();
$arguments74['section'] = 'media';
$arguments74['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments74['partial'] = NULL;
$arguments74['optional'] = false;
$renderChildrenClosure75 = function() {return NULL;};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
				';
return $output73;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
		';
return $output48;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * section audioType
 */
public function section_0692d8e0c1d80242e92c18277f5889ccb50da04f(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output76 = '';

$output76 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments77 = array();
$arguments77['section'] = 'media';
$arguments77['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments77['partial'] = NULL;
$arguments77['optional'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
';


return $output76;
}
/**
 * section videoType
 */
public function section_bf42574423dddd49454a9b47d66919ef33139146(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output79 = '';

$output79 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments80 = array();
$arguments80['section'] = 'media';
$arguments80['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments80['partial'] = NULL;
$arguments80['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
';


return $output79;
}
/**
 * section media
 */
public function section_bb362a46a483f3f8c993ec45978ae24e60b1ea4e(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output82 = '';

$output82 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$arguments83 = array();
$arguments83['file'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments83['width'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'dimensions.width', $renderingContext);
$arguments83['height'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'dimensions.height', $renderingContext);
$arguments83['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.alternative', $renderingContext);
$arguments83['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.title', $renderingContext);
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['additionalConfig'] = array (
);
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper

$output82 .= $viewHelper85->initializeArgumentsAndRender();

$output82 .= '
';


return $output82;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output86 = '';

$output86 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'rows', $renderingContext));
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
	<div class="ce-gallery';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments90 = array();
// Rendering Boolean node
$arguments90['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'imageborder', $renderingContext));
$arguments90['then'] = ' ce-border';
$arguments90['else'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '" data-ce-columns="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'count.columns', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output89 .= (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));

$output89 .= '" data-ce-images="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
$arguments95['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'count.files', $renderingContext);
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = NULL;
$arguments95['doubleEncode'] = true;
$renderChildrenClosure96 = function() {return NULL;};
$value97 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure96());

$output89 .= (!is_string($value97) ? $value97 : htmlspecialchars($value97, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments95['encoding'] !== NULL ? $arguments95['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments95['doubleEncode']));

$output89 .= '">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments98 = array();
// Rendering Boolean node
$arguments98['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.horizontal', $renderingContext), 'center');
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<div class="ce-outer">
				<div class="ce-inner">
		';
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output89 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments100 = array();
$arguments100['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'rows', $renderingContext);
$arguments100['as'] = 'row';
$arguments100['key'] = '';
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output102 = '';

$output102 .= '
			<div class="ce-row">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments103 = array();
$arguments103['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('row'), 'columns', $renderingContext);
$arguments103['as'] = 'column';
$arguments103['key'] = '';
$arguments103['reverse'] = false;
$arguments103['iteration'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments106 = array();
// Rendering Boolean node
$arguments106['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext));
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
						<div class="ce-column">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments109 = array();
// Rendering Boolean node
$arguments109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.description', $renderingContext));
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments112 = array();
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<figure>
								';
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments114 = array();
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<div class="ce-media">
								';
};

$output111 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output111 .= '
							';
return $output111;
};
$arguments109['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<figure>
								';
};
$arguments109['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									<div class="ce-media">
								';
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments116 = array();
$arguments116['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.type', $renderingContext);
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output118 = '';

$output118 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments119 = array();
$arguments119['value'] = '3';
$arguments119['default'] = false;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments122 = array();
$arguments122['section'] = 'audioType';
$arguments122['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments122['partial'] = NULL;
$arguments122['optional'] = false;
$renderChildrenClosure123 = function() {return NULL;};

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
								';
return $output121;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments124 = array();
$arguments124['value'] = '4';
$arguments124['default'] = false;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments127 = array();
$arguments127['section'] = 'videoType';
$arguments127['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments127['partial'] = NULL;
$arguments127['optional'] = false;
$renderChildrenClosure128 = function() {return NULL;};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
								';
return $output126;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output118 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments129 = array();
// Rendering Boolean node
$arguments129['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments129['value'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments132 = array();
$arguments132['section'] = 'imageType';
$arguments132['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments132['partial'] = NULL;
$arguments132['optional'] = false;
$renderChildrenClosure133 = function() {return NULL;};

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
								';
return $output131;
};

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output118 .= '
							 ';
return $output118;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output108 .= '

							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.description', $renderingContext));
$arguments134['then'] = NULL;
$arguments134['else'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments137 = array();
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
										<figcaption>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments140 = array();
$arguments140['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.description', $renderingContext);
$arguments140['keepQuotes'] = false;
$arguments140['encoding'] = NULL;
$arguments140['doubleEncode'] = true;
$renderChildrenClosure141 = function() {return NULL;};
$value142 = ($arguments140['value'] !== NULL ? $arguments140['value'] : $renderChildrenClosure141());

$output139 .= (!is_string($value142) ? $value142 : htmlspecialchars($value142, ($arguments140['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments140['encoding'] !== NULL ? $arguments140['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments140['doubleEncode']));

$output139 .= '
										</figcaption>
									</figure>
								';
return $output139;
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments143 = array();
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									</div>
								';
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output136 .= '
							';
return $output136;
};
$arguments134['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output145 = '';

$output145 .= '
										<figcaption>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments146 = array();
$arguments146['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.description', $renderingContext);
$arguments146['keepQuotes'] = false;
$arguments146['encoding'] = NULL;
$arguments146['doubleEncode'] = true;
$renderChildrenClosure147 = function() {return NULL;};
$value148 = ($arguments146['value'] !== NULL ? $arguments146['value'] : $renderChildrenClosure147());

$output145 .= (!is_string($value148) ? $value148 : htmlspecialchars($value148, ($arguments146['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments146['encoding'] !== NULL ? $arguments146['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments146['doubleEncode']));

$output145 .= '
										</figcaption>
									</figure>
								';
return $output145;
};
$arguments134['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
									</div>
								';
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output108 .= '
						</div>
					';
return $output108;
};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
				';
return $output105;
};

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
			</div>
		';
return $output102;
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output89 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments149 = array();
// Rendering Boolean node
$arguments149['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('gallery'), 'position.horizontal', $renderingContext), 'center');
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
				</div>
			</div>
		';
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output89 .= '
	</div>
';
return $output89;
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments151 = array();
$arguments151['name'] = 'imageType';
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments154 = array();
// Rendering Boolean node
$arguments154['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext));
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output156 = '';

$output156 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments157 = array();
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output159 = '';

$output159 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments160 = array();
$arguments160['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext);
$arguments160['target'] = '';
$arguments160['class'] = '';
$arguments160['title'] = '';
$arguments160['additionalParams'] = '';
$arguments160['additionalAttributes'] = array (
);
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments163 = array();
$arguments163['section'] = 'media';
$arguments163['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments163['partial'] = NULL;
$arguments163['optional'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
			';
return $output162;
};

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
		';
return $output159;
};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments165 = array();
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments168 = array();
// Rendering Boolean node
$arguments168['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'image_zoom', $renderingContext));
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output170 = '';

$output170 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments171 = array();
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output173 = '';

$output173 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments174 = array();
$arguments174['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments174['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output176 = '';

$output176 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments177 = array();
$arguments177['section'] = 'media';
$arguments177['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments177['partial'] = NULL;
$arguments177['optional'] = false;
$renderChildrenClosure178 = function() {return NULL;};

$output176 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
					';
return $output176;
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper179->setArguments($arguments174);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output173 .= $viewHelper179->initializeArgumentsAndRender();

$output173 .= '
				';
return $output173;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments180 = array();
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output182 = '';

$output182 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments183 = array();
$arguments183['section'] = 'media';
$arguments183['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments183['partial'] = NULL;
$arguments183['optional'] = false;
$renderChildrenClosure184 = function() {return NULL;};

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
				';
return $output182;
};

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output170 .= '
			';
return $output170;
};
$arguments168['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments186 = array();
$arguments186['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments186['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output188 = '';

$output188 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments189 = array();
$arguments189['section'] = 'media';
$arguments189['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments189['partial'] = NULL;
$arguments189['optional'] = false;
$renderChildrenClosure190 = function() {return NULL;};

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
					';
return $output188;
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper191->setArguments($arguments186);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output185 .= $viewHelper191->initializeArgumentsAndRender();

$output185 .= '
				';
return $output185;
};
$arguments168['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output192 = '';

$output192 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments193 = array();
$arguments193['section'] = 'media';
$arguments193['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments193['partial'] = NULL;
$arguments193['optional'] = false;
$renderChildrenClosure194 = function() {return NULL;};

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
				';
return $output192;
};

$output167 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
		';
return $output167;
};

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output156 .= '
	';
return $output156;
};
$arguments154['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output195 = '';

$output195 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments196 = array();
$arguments196['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.link', $renderingContext);
$arguments196['target'] = '';
$arguments196['class'] = '';
$arguments196['title'] = '';
$arguments196['additionalParams'] = '';
$arguments196['additionalAttributes'] = array (
);
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';

$output198 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments199 = array();
$arguments199['section'] = 'media';
$arguments199['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments199['partial'] = NULL;
$arguments199['optional'] = false;
$renderChildrenClosure200 = function() {return NULL;};

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
			';
return $output198;
};

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
		';
return $output195;
};
$arguments154['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output201 = '';

$output201 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments202 = array();
// Rendering Boolean node
$arguments202['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'image_zoom', $renderingContext));
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output204 = '';

$output204 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments205 = array();
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments208 = array();
$arguments208['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments208['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output210 = '';

$output210 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments211 = array();
$arguments211['section'] = 'media';
$arguments211['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments211['partial'] = NULL;
$arguments211['optional'] = false;
$renderChildrenClosure212 = function() {return NULL;};

$output210 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
					';
return $output210;
};
$viewHelper213 = $self->getViewHelper('$viewHelper213', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper213->setArguments($arguments208);
$viewHelper213->setRenderingContext($renderingContext);
$viewHelper213->setRenderChildrenClosure($renderChildrenClosure209);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output207 .= $viewHelper213->initializeArgumentsAndRender();

$output207 .= '
				';
return $output207;
};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments214 = array();
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output216 = '';

$output216 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments217 = array();
$arguments217['section'] = 'media';
$arguments217['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments217['partial'] = NULL;
$arguments217['optional'] = false;
$renderChildrenClosure218 = function() {return NULL;};

$output216 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
				';
return $output216;
};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output204 .= '
			';
return $output204;
};
$arguments202['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output219 = '';

$output219 .= '
					';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$arguments220 = array();
$arguments220['image'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments220['configuration'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'media.popup', $renderingContext);
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output222 = '';

$output222 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments223 = array();
$arguments223['section'] = 'media';
$arguments223['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments223['partial'] = NULL;
$arguments223['optional'] = false;
$renderChildrenClosure224 = function() {return NULL;};

$output222 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output222 .= '
					';
return $output222;
};
$viewHelper225 = $self->getViewHelper('$viewHelper225', $renderingContext, 'TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper');
$viewHelper225->setArguments($arguments220);
$viewHelper225->setRenderingContext($renderingContext);
$viewHelper225->setRenderChildrenClosure($renderChildrenClosure221);
// End of ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper

$output219 .= $viewHelper225->initializeArgumentsAndRender();

$output219 .= '
				';
return $output219;
};
$arguments202['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments227 = array();
$arguments227['section'] = 'media';
$arguments227['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments227['partial'] = NULL;
$arguments227['optional'] = false;
$renderChildrenClosure228 = function() {return NULL;};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
				';
return $output226;
};

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
		';
return $output201;
};

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
';
return $output153;
};

$output86 .= '';

$output86 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments229 = array();
$arguments229['name'] = 'audioType';
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output231 = '';

$output231 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments232 = array();
$arguments232['section'] = 'media';
$arguments232['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments232['partial'] = NULL;
$arguments232['optional'] = false;
$renderChildrenClosure233 = function() {return NULL;};

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
';
return $output231;
};

$output86 .= '';

$output86 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments234 = array();
$arguments234['name'] = 'videoType';
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output236 = '';

$output236 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments237 = array();
$arguments237['section'] = 'media';
$arguments237['arguments'] = $currentVariableContainer->getOrNull('_all');
$arguments237['partial'] = NULL;
$arguments237['optional'] = false;
$renderChildrenClosure238 = function() {return NULL;};

$output236 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
';
return $output236;
};

$output86 .= '';

$output86 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments239 = array();
$arguments239['name'] = 'media';
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output241 = '';

$output241 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$arguments242 = array();
$arguments242['file'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media', $renderingContext);
$arguments242['width'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'dimensions.width', $renderingContext);
$arguments242['height'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'dimensions.height', $renderingContext);
$arguments242['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.alternative', $renderingContext);
$arguments242['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('column'), 'media.title', $renderingContext);
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['additionalConfig'] = array (
);
$arguments242['class'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$renderChildrenClosure243 = function() {return NULL;};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper');
$viewHelper244->setArguments($arguments242);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper

$output241 .= $viewHelper244->initializeArgumentsAndRender();

$output241 .= '
';
return $output241;
};

$output86 .= '';

$output86 .= '

';


return $output86;
}


}
#1472033148    62104     