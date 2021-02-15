<?php

class __Mustache_08087fd01ee822e38de1f8bed4b18a0f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form method="get" action="';
        $value = $this->resolveValue($context->find('base'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="dataformatselector">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        // 'extrafields' section
        $value = $context->find('extrafields');
        $buffer .= $this->section3372d34be1c8f27b55237625918dc90a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div><label for="downloadtype_';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <select name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="downloadtype_';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'options' section
        $value = $context->find('options');
        $buffer .= $this->section197676a28ef86074518642e3d0c0d2d5($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <input type="submit" value="';
        $value = $this->resolveValue($context->find('submit'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-primary"></div><br />
';
        // 'allowemailreporting' section
        $value = $context->find('allowemailreporting');
        $buffer .= $this->sectionD0b47e9b7fae0d0627d997c3127e6830($context, $indent, $value);
        // 'params' section
        $value = $context->find('params');
        $buffer .= $this->section7674d76e70ac3e9edc762040fe896bbb($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section3372d34be1c8f27b55237625918dc90a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{extrafields}}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('extrafields'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section197676a28ef86074518642e3d0c0d2d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}">{{label}}</option>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE23da53f647cec5bb70a0392b63e02d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emailroles, questionnaire';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'emailroles, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3bed9f6d20e570ca4d9949b50a5caa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emailextra, questionnaire';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'emailextra, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0ace51d5e5665ef9504ec891db3fdf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emailsend, questionnaire';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'emailsend, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0b47e9b7fae0d0627d997c3127e6830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div><input type="checkbox" name="emailroles" id="emailroles" value="1" />
        <label for="emailroles">{{#str}}emailroles, questionnaire{{/str}}</label> {{{emailroleshelp}}}
        <input type="text" name="emailextra" id="emailextra" value="" />
        <label for="emailextra">{{#str}}emailextra, questionnaire{{/str}}</label> {{{emailextrahelp}}}
        <input type="submit" value="{{#str}}emailsend, questionnaire{{/str}}" name="emailreport" class="btn btn-primary" /></div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div><input type="checkbox" name="emailroles" id="emailroles" value="1" />
';
                $buffer .= $indent . '        <label for="emailroles">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE23da53f647cec5bb70a0392b63e02d9($context, $indent, $value);
                $buffer .= '</label> ';
                $value = $this->resolveValue($context->find('emailroleshelp'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        <input type="text" name="emailextra" id="emailextra" value="" />
';
                $buffer .= $indent . '        <label for="emailextra">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB3bed9f6d20e570ca4d9949b50a5caa8($context, $indent, $value);
                $buffer .= '</label> ';
                $value = $this->resolveValue($context->find('emailextrahelp'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        <input type="submit" value="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF0ace51d5e5665ef9504ec891db3fdf1($context, $indent, $value);
                $buffer .= '" name="emailreport" class="btn btn-primary" /></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7674d76e70ac3e9edc762040fe896bbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <input type="hidden" name="{{name}}" value="{{value}}" />
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
