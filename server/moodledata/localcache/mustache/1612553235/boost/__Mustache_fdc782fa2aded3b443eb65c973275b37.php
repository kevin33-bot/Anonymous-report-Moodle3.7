<?php

class __Mustache_fdc782fa2aded3b443eb65c973275b37 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="wdm-edwiserreports" class="row m-0 d-none" data-editing="';
        $value = $this->resolveValue($context->find('editing'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'blocks' section
        $value = $context->find('blocks');
        $buffer .= $this->section1b67c214e5d7e4ac6e5c9b9efaf857f4($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7651fd7f97f824db493c7664aad70595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' block-hidden ';
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
                
                $buffer .= ' block-hidden ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04c7adac946f1e1da3972b17cb14f3d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-2 p-0">
                            {{> local_edwiserreports/blocksettingdropdown }}
                        </div>
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
                
                $buffer .= $indent . '                        <div class="col-2 p-0">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/blocksettingdropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb1dc0d9e40e709c5e6f62849dff91a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loader, local_edwiserreports';
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
                
                $buffer .= ' loader, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e63e03e2e2b7166c847ea4217965649(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' more, local_edwiserreports ';
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
                
                $buffer .= ' more, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4567fe94b268669a72aa2dea598dd16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="">
                                <a href="{{{.}}}" class="btn btn-primary btn-sm">{{#str}} more, local_edwiserreports {{/str}}</a>
                            </div>
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
                
                $buffer .= $indent . '                            <div class="">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-primary btn-sm">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7e63e03e2e2b7166c847ea4217965649($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC13cc01bad99fc0e414bd9ba5dac207d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> local_edwiserreports/exportreports }}
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
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportreports')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b67c214e5d7e4ac6e5c9b9efaf857f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{extraclasses}}} mb-5 edwiserReport-block {{# hiddenblock }} block-hidden {{/ hiddenblock}}">
            <div id="{{id}}" data-sesskey="{{sesskey}}">
                <div class="panel m-0">
                    <div class="panel-header d-flex">
                        <div class="panel-title px-0 col-10">
                            <strong class="mb-1">
                                {{{name}}}
                                <a href="javascript:void(0)" data-title="{{info}}" class="small" data-toggle="tooltip" data-trigger="hover" data-placement="bottom">
                                    <i class="fa fa-question-circle"></i>
                                </a>
                            </strong>

                            <div class="block-filters">{{{ filters }}}</div>
                        </div>
                        {{# editopt }}
                        <div class="col-2 p-0">
                            {{> local_edwiserreports/blocksettingdropdown }}
                        </div>
                        {{/ editopt }}
                    </div>
                    <div class="panel-body p-0">
                        {{{ blockview }}}
                        <div class="loader w-full text-center">
                            {{# pix }} loader, local_edwiserreports{{/ pix }}
                        </div>
                    </div>
                    <div class="panel-footer row m-0">
                        {{# morelink }}
                            <div class="">
                                <a href="{{{.}}}" class="btn btn-primary btn-sm">{{#str}} more, local_edwiserreports {{/str}}</a>
                            </div>
                        {{/ morelink }}
                        {{# hasdownloadlink }}
                            {{> local_edwiserreports/exportreports }}
                        {{/ hasdownloadlink }}
                    </div>
                </div>
            </div>
        </div>
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
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= $value;
                $buffer .= ' mb-5 edwiserReport-block ';
                // 'hiddenblock' section
                $value = $context->find('hiddenblock');
                $buffer .= $this->section7651fd7f97f824db493c7664aad70595($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <div id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-sesskey="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="panel m-0">
';
                $buffer .= $indent . '                    <div class="panel-header d-flex">
';
                $buffer .= $indent . '                        <div class="panel-title px-0 col-10">
';
                $buffer .= $indent . '                            <strong class="mb-1">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                <a href="javascript:void(0)" data-title="';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="small" data-toggle="tooltip" data-trigger="hover" data-placement="bottom">
';
                $buffer .= $indent . '                                    <i class="fa fa-question-circle"></i>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </strong>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <div class="block-filters">';
                $value = $this->resolveValue($context->find('filters'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </div>
';
                // 'editopt' section
                $value = $context->find('editopt');
                $buffer .= $this->section04c7adac946f1e1da3972b17cb14f3d5($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="panel-body p-0">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('blockview'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        <div class="loader w-full text-center">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionCb1dc0d9e40e709c5e6f62849dff91a1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="panel-footer row m-0">
';
                // 'morelink' section
                $value = $context->find('morelink');
                $buffer .= $this->sectionC4567fe94b268669a72aa2dea598dd16($context, $indent, $value);
                // 'hasdownloadlink' section
                $value = $context->find('hasdownloadlink');
                $buffer .= $this->sectionC13cc01bad99fc0e414bd9ba5dac207d($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
