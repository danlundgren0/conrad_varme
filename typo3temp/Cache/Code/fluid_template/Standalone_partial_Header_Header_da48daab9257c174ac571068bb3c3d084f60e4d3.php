<?php
class FluidCache_Standalone_partial_Header_Header_da48daab9257c174ac571068bb3c3d084f60e4d3 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments1 = array();
$arguments1['expression'] = $currentVariableContainer->getOrNull('layout');
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments4 = array();
$arguments4['value'] = '1';
$arguments4['default'] = false;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = $currentVariableContainer->getOrNull('icon');
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output9 .= '"></i> ';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments13 = array();
$arguments13['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments13['target'] = '';
$arguments13['class'] = '';
$arguments13['title'] = '';
$arguments13['additionalParams'] = '';
$arguments13['additionalAttributes'] = array (
);
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = $currentVariableContainer->getOrNull('header');
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());
return (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '</h1>
	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments18 = array();
$arguments18['value'] = '2';
$arguments18['default'] = false;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output20 = '';

$output20 .= '
		<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments21 = array();
// Rendering Boolean node
$arguments21['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = $currentVariableContainer->getOrNull('icon');
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output23 .= (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));

$output23 .= '"></i> ';
return $output23;
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments27 = array();
$arguments27['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments27['target'] = '';
$arguments27['class'] = '';
$arguments27['title'] = '';
$arguments27['additionalParams'] = '';
$arguments27['additionalAttributes'] = array (
);
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = $currentVariableContainer->getOrNull('header');
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());
return (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));
};

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output20 .= '</h2>
	';
return $output20;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments32 = array();
$arguments32['value'] = '3';
$arguments32['default'] = false;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
$arguments35['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = $currentVariableContainer->getOrNull('icon');
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= '"></i> ';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments41 = array();
$arguments41['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments41['target'] = '';
$arguments41['class'] = '';
$arguments41['title'] = '';
$arguments41['additionalParams'] = '';
$arguments41['additionalAttributes'] = array (
);
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = $currentVariableContainer->getOrNull('header');
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());
return (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output34 .= '</h3>
	';
return $output34;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments46 = array();
$arguments46['value'] = '4';
$arguments46['default'] = false;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
		<h4>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments49 = array();
// Rendering Boolean node
$arguments49['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = $currentVariableContainer->getOrNull('icon');
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output51 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));

$output51 .= '"></i> ';
return $output51;
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments55 = array();
$arguments55['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments55['target'] = '';
$arguments55['class'] = '';
$arguments55['title'] = '';
$arguments55['additionalParams'] = '';
$arguments55['additionalAttributes'] = array (
);
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = $currentVariableContainer->getOrNull('header');
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());
return (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));
};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output48 .= '</h4>
	';
return $output48;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments60 = array();
$arguments60['value'] = '5';
$arguments60['default'] = false;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
		<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments63 = array();
// Rendering Boolean node
$arguments63['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = $currentVariableContainer->getOrNull('icon');
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output65 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));

$output65 .= '"></i> ';
return $output65;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments69 = array();
$arguments69['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments69['target'] = '';
$arguments69['class'] = '';
$arguments69['title'] = '';
$arguments69['additionalParams'] = '';
$arguments69['additionalAttributes'] = array (
);
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = $currentVariableContainer->getOrNull('header');
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());
return (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output62 .= '</h5>
	';
return $output62;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments74 = array();
$arguments74['value'] = '6';
$arguments74['default'] = false;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '
		<h6>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments77 = array();
// Rendering Boolean node
$arguments77['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('icon'));
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '<i class="fa fa-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = $currentVariableContainer->getOrNull('icon');
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() {return NULL;};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());

$output79 .= (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode']));

$output79 .= '"></i> ';
return $output79;
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments83 = array();
$arguments83['parameter'] = $currentVariableContainer->getOrNull('link');
$arguments83['target'] = '';
$arguments83['class'] = '';
$arguments83['title'] = '';
$arguments83['additionalParams'] = '';
$arguments83['additionalAttributes'] = array (
);
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = $currentVariableContainer->getOrNull('header');
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() {return NULL;};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());
return (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));
};

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output76 .= '</h6>
	';
return $output76;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments88 = array();
$arguments88['value'] = '100';
$arguments88['default'] = false;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CommentViewHelper
$arguments91 = array();
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return ' -- do not show header -- ';
};

$output90 .= '';

$output90 .= '
	';
return $output90;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments93 = array();
// Rendering Boolean node
$arguments93['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments93['value'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments96 = array();
// Rendering Boolean node
$arguments96['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('default'));
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments99 = array();
$arguments99['partial'] = 'Header/Header';
// Rendering Array
$array100 = array();
$array100['header'] = $currentVariableContainer->getOrNull('header');
$array100['layout'] = $currentVariableContainer->getOrNull('default');
$array100['link'] = $currentVariableContainer->getOrNull('link');
$array100['icon'] = $currentVariableContainer->getOrNull('icon');
$arguments99['arguments'] = $array100;
$arguments99['section'] = NULL;
$arguments99['optional'] = false;
$renderChildrenClosure101 = function() {return NULL;};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure101, $renderingContext);

$output98 .= '
		';
return $output98;
};

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
	';
return $output95;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output3 .= '
';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1472033148    24434     