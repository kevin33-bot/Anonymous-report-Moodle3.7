<?php

class __Mustache_e63b04d209969d5789835c1a7f8ea322 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('downloadurl'), $context);
        $buffer .= $value;
        $buffer .= '" target="_blank" method="post" class="download-links row m-0 ml-auto">
';
        $buffer .= $indent . '    <input type="hidden" name="block" value="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="filter" value="';
        $value = $this->resolveValue($context->find('filter'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="cohortid" value="';
        $value = $this->resolveValue($context->find('cohortid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="region" value="';
        $value = $this->resolveValue($context->find('region'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <button type="submit" class="a border-0 bg-white fi fi-csv" name="type" value="csv">
';
        $buffer .= $indent . '        <div class="fi-content">
';
        $buffer .= $indent . '            <strong>csv</strong>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <button type="submit" class="a border-0 bg-white fi fi-excel" name="type" value="excel">
';
        $buffer .= $indent . '        <div class="fi-content">
';
        $buffer .= $indent . '            <strong>excel</strong>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <button type="submit" class="a border-0 bg-white fi fi-pdf" name="type" value="pdf">
';
        $buffer .= $indent . '        <div class="fi-content">
';
        $buffer .= $indent . '            <strong>pdf</strong>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <button type="submit" class="a border-0 bg-white fi fi-email" name="type" value="email">
';
        $buffer .= $indent . '        <div class="fi-content">
';
        $buffer .= $indent . '            <strong>email</strong>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }
}
