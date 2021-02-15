<?php

class __Mustache_208c7f8785c705883d0af0c779711114 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<input type="checkbox" name="choicecodes" id="choicecodes" checked="checked" value="1" /> <label for="choicecodes">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8707732941fa9196b2e8edd5c74bd0d3($context, $indent, $value);
        $buffer .= '</label><br />
';
        $buffer .= $indent . '<input type="checkbox" name="choicetext" id="choicetext" checked="checked" value="1" /> <label for="choicetext">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section92af50f360e3e26b2e5971c3f876895e($context, $indent, $value);
        $buffer .= '</label><br />
';
        $buffer .= $indent . '<input type="checkbox" name="complete" id="complete" value="1" /> <label for="complete">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE14835981747db606bb3f9889d81eecd($context, $indent, $value);
        $buffer .= '</label><br />
';
        $buffer .= $indent . '<input type="checkbox" name="rankaverages" id="rankaverages" value="1" /> <label for="rankaverages">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5adcf6560854a99c10e747d31a484623($context, $indent, $value);
        $buffer .= '</label><br />
';

        return $buffer;
    }

    private function section8707732941fa9196b2e8edd5c74bd0d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'includechoicecodes, questionnaire';
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
                
                $buffer .= 'includechoicecodes, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92af50f360e3e26b2e5971c3f876895e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'includechoicetext, questionnaire';
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
                
                $buffer .= 'includechoicetext, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE14835981747db606bb3f9889d81eecd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'includeincomplete, questionnaire';
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
                
                $buffer .= 'includeincomplete, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5adcf6560854a99c10e747d31a484623(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'includerankaverages, questionnaire';
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
                
                $buffer .= 'includerankaverages, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
