<?php

class __Mustache_48b11150e775fc023a3eabd4bcb7a1f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="table admintable">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <th class="">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e8b20a9fe6d8f29751db4d6458c169e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </th>
';
        $buffer .= $indent . '        <th class="">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9580cf5b027cd4376ef78414b1cca9a9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </th>
';
        $buffer .= $indent . '        <th class="">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC139f94cfd58d9c268a8bd2176815487($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </th>
';
        $buffer .= $indent . '        <th class="">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB2359923da58f01851bcadba0cda8e66($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </th>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        // 'activeusers' section
        $value = $context->find('activeusers');
        $buffer .= $this->sectionEd4279bd192e6bada232e93721239145($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section4e8b20a9fe6d8f29751db4d6458c169e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' date, local_edwiserreports ';
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
                
                $buffer .= ' date, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9580cf5b027cd4376ef78414b1cca9a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofactiveusers, local_edwiserreports ';
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
                
                $buffer .= ' noofactiveusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC139f94cfd58d9c268a8bd2176815487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofenrolledusers, local_edwiserreports ';
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
                
                $buffer .= ' noofenrolledusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2359923da58f01851bcadba0cda8e66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofcompletedusers, local_edwiserreports ';
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
                
                $buffer .= ' noofcompletedusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd4279bd192e6bada232e93721239145(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr>
            <td>
                <span class="d-none">{{filter}}</span>
                {{{date}}}
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-dark" data-action="activeusers" data-filter="{{filter}}">
                    {{activeusers}}
                </a>
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-dark" data-action="enrolments" data-filter="{{filter}}">
                    {{courseenrolment}}
                </a>
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-dark" data-action="completions" data-filter="{{filter}}">
                    {{coursecompletion}}
                </a>
            </td>
        </tr>
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
                
                $buffer .= $indent . '        <tr>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <span class="d-none">';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-dark" data-action="activeusers" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('activeusers'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-dark" data-action="enrolments" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('courseenrolment'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-dark" data-action="completions" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('coursecompletion'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
