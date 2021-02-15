<?php

class __Mustache_50eaef83238afbb6773b27ce5015f606 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="clearfix">
';
        $buffer .= $indent . '    <canvas class="ct-chart ';
        $value = $this->resolveValue($context->find('displaytype'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style="display: none;"></canvas>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
