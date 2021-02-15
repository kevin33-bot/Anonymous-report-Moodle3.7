<?php

class __Mustache_1f0e1cddb33154f9e667f448f5b2cf67 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hascourses' section
        $value = $context->find('hascourses');
        $buffer .= $this->sectionC0cef542b26e28cb0dffe87f801758ee($context, $indent, $value);
        // 'hascourses' inverted section
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="pie-placeholder position-relative mt-50">
';
            $buffer .= $indent . '        ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionFbacea4709e6d35d6bf83f8c39056946($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        <div class="position-absolute w-full" style="top: 45%;">
';
            $buffer .= $indent . '            <div class="alert alert-secondary text-center w-full" role="alert">
';
            $buffer .= $indent . '                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionF6c3a10a59317d4e56e72ce041893f9d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function section8f2e0aca8677e5ceaa21db28b8b0a857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="{{id}}">{{fullname}}</option>
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
                
                $buffer .= $indent . '        <option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0cef542b26e28cb0dffe87f801758ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <select id="wdm-courseprogress-select" class="form-control singleselect w-full" name="state">
        {{#courses}}
        <option value="{{id}}">{{fullname}}</option>
        {{/courses}}
    </select>
    <canvas class="ct-chart p-10" style="display: none;"></canvas>
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
                
                $buffer .= $indent . '    <select id="wdm-courseprogress-select" class="form-control singleselect w-full" name="state">
';
                // 'courses' section
                $value = $context->find('courses');
                $buffer .= $this->section8f2e0aca8677e5ceaa21db28b8b0a857($context, $indent, $value);
                $buffer .= $indent . '    </select>
';
                $buffer .= $indent . '    <canvas class="ct-chart p-10" style="display: none;"></canvas>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbacea4709e6d35d6bf83f8c39056946(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pie-placeholder, local_edwiserreports';
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
                
                $buffer .= ' pie-placeholder, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6c3a10a59317d4e56e72ce041893f9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocourses, local_edwiserreports ';
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
                
                $buffer .= ' nocourses, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
