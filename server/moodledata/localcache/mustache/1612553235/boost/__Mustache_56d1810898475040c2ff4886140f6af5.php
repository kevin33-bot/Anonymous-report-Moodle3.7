<?php

class __Mustache_56d1810898475040c2ff4886140f6af5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Begin HTML generated from results_text template. -->
';
        // 'responses.0' section
        $value = $context->findDot('responses.0');
        $buffer .= $this->section7e9a407f32f14a7bf7c5c7d74b9a033a($context, $indent, $value);
        // 'responses' section
        $value = $context->find('responses');
        $buffer .= $this->section0830f901bb632089e9b97911443ca90b($context, $indent, $value);
        // 'total' section
        $value = $context->find('total');
        $buffer .= $this->sectionB595ffa777663fa0d8495811c46a6106($context, $indent, $value);
        // 'responses.0' section
        $value = $context->findDot('responses.0');
        $buffer .= $this->section894b86197a3f0314cc88cf604281b3b1($context, $indent, $value);
        // 'responses' inverted section
        $value = $context->find('responses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <p class="generaltable">&nbsp;';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE48dd7e223a1807b1512d7450ee92d6e($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $buffer .= $indent . '<!-- End HTML generated from results_choice template. -->';

        return $buffer;
    }

    private function section2360f138ff46b1eb00f071a801b5fbb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' respondent, mod_questionnaire ';
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
                
                $buffer .= ' respondent, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4198e9115776db0597d221b379396960(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' response, mod_questionnaire ';
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
                
                $buffer .= ' response, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e9a407f32f14a7bf7c5c7d74b9a033a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<table class="generaltable">
    <thead>
    <tr>
        <th class="header c0" style="text-align:left;" scope="col">{{#str}} respondent, mod_questionnaire {{/str}}</th>
        <th class="header c1 lastcol" style="text-align:right;" scope="col">{{#str}} response, mod_questionnaire {{/str}}</th>
    </tr>
    </thead>
    <tbody>
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
                
                $buffer .= $indent . '<table class="generaltable">
';
                $buffer .= $indent . '    <thead>
';
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <th class="header c0" style="text-align:left;" scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2360f138ff46b1eb00f071a801b5fbb5($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '        <th class="header c1 lastcol" style="text-align:right;" scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4198e9115776db0597d221b379396960($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '    </tr>
';
                $buffer .= $indent . '    </thead>
';
                $buffer .= $indent . '    <tbody>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9faa58c79dd23b1f033f7e7964e2621a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="">
        <td class="cell c0" style="text-align:left;">{{{response.respondent}}}</td>
        <td class="cell c1 lastcol" style="text-align:right;">{{{response.text}}}</td>
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
                
                $buffer .= $indent . '    <tr class="">
';
                $buffer .= $indent . '        <td class="cell c0" style="text-align:left;">';
                $value = $this->resolveValue($context->findDot('response.respondent'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td class="cell c1 lastcol" style="text-align:right;">';
                $value = $this->resolveValue($context->findDot('response.text'), $context);
                $buffer .= $value;
                $buffer .= '</td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0830f901bb632089e9b97911443ca90b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#response}}
    <tr class="">
        <td class="cell c0" style="text-align:left;">{{{response.respondent}}}</td>
        <td class="cell c1 lastcol" style="text-align:right;">{{{response.text}}}</td>
    </tr>
    {{/response}}
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
                
                // 'response' section
                $value = $context->find('response');
                $buffer .= $this->section9faa58c79dd23b1f033f7e7964e2621a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e04a6ed1b59bd7adc2a78e508c300a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalresponses, mod_questionnaire';
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
                
                $buffer .= ' totalresponses, mod_questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB595ffa777663fa0d8495811c46a6106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr>
        <td colspan="2"><div class="tabledivider"></div></td>
    </tr>
    <tr class="lastrow">
        <td class="cell c0" style="text-align:left;">{{#str}} totalresponses, mod_questionnaire{{/str}}</td>
        <td class="cell c1 lastcol" style="text-align:right;">{{total}}</td>
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
                
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <td colspan="2"><div class="tabledivider"></div></td>
';
                $buffer .= $indent . '    </tr>
';
                $buffer .= $indent . '    <tr class="lastrow">
';
                $buffer .= $indent . '        <td class="cell c0" style="text-align:left;">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7e04a6ed1b59bd7adc2a78e508c300a1($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td class="cell c1 lastcol" style="text-align:right;">';
                $value = $this->resolveValue($context->find('total'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section894b86197a3f0314cc88cf604281b3b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    </tbody>
</table>
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
                
                $buffer .= $indent . '    </tbody>
';
                $buffer .= $indent . '</table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE48dd7e223a1807b1512d7450ee92d6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noresponsedata, questionnaire';
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
                
                $buffer .= ' noresponsedata, questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
