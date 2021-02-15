<?php

class __Mustache_352df8a60a63f7e3a26084a8b131399b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="wdm-activeusers-individual" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="wdm-userfilter" class="h-auto my-10">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="filters col-12 d-flex mb-1">
';
        $buffer .= $indent . '                <div class="backbutton">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->find('backurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-secondary">
';
        $buffer .= $indent . '                        <i class="icon fa fa-arrow-left"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex ml-auto">
';
        // 'cohortfilters' section
        $value = $context->find('cohortfilters');
        $buffer .= $this->section6d0f711533945c801df24700c099f729($context, $indent, $value);
        $buffer .= $indent . '                    <div class="dropdown">
';
        $buffer .= $indent . '                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="filter-dropdown" aria-expanded="false">
';
        $buffer .= $indent . '                            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1a820dc2f0b751bbacad031e7035500e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                        <div class="dropdown-menu" aria-labelledby="filter-dropdown" role="menu">
';
        $buffer .= $indent . '                            <div id="activeUser-calendar" class="dropdown-calendar"></div>
';
        $buffer .= $indent . '                            <div class="dropdown-body">
';
        $buffer .= $indent . '                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem" value="weekly">
';
        $buffer .= $indent . '                                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1a820dc2f0b751bbacad031e7035500e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem" value="monthly">
';
        $buffer .= $indent . '                                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD51af92dfda0bf8ff3577714a367ae9a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                                <a class="dropdown-item" href="javascript:void(0)" role="menuitem" value="yearly">
';
        $buffer .= $indent . '                                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2a6165708677f5d28dd0412b7ad9970a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                                <input class="dropdown-item border-0 custom d-none d-md-block" id="flatpickrCalender" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section02e39274faa6579b4258f15f3f06b520($context, $indent, $value);
        $buffer .= '"  data-input/>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="alert alert-info alert-block fade in " role="alert" data-aria-autofocus="true">
';
        $buffer .= $indent . '        <button type="button" class="close" data-dismiss="alert">×</button>
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5a8f8a6ce9c759677b7244f2e1f98580($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="table-responsive">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/activeuserstable')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        // 'export' section
        $value = $context->find('export');
        $buffer .= $this->sectionEd7b45b2a830fae50424a158af1f3481($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2b3f7b608d1468235a1f499d837edd8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, local_edwiserreports ';
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
                
                $buffer .= ' all, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1d6a3e4b61746c456ced9c06aff5c2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="dropdown-item" href="javascript:void(0)" data-cohortid="{{ id }}" role="menuitem">
                                {{ name }}
                            </a>
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
                
                $buffer .= $indent . '                            <a class="dropdown-item" href="javascript:void(0)" data-cohortid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="menuitem">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d0f711533945c801df24700c099f729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown mr-1">
                        <button type="button" class="btn dropdown-toggle" id="cohortfilter" data-toggle="dropdown" aria-expanded="false">
                            {{ text }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cohortfilter" role="menu" x-placement="bottom-start">
                            <a class="dropdown-item" href="javascript:void(0)" data-cohortid="0" role="menuitem">
                                {{# str }} all, local_edwiserreports {{/ str }}
                            </a>
                            {{# values }}
                            <a class="dropdown-item" href="javascript:void(0)" data-cohortid="{{ id }}" role="menuitem">
                                {{ name }}
                            </a>
                            {{/ values }}
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
                
                $buffer .= $indent . '                    <div class="dropdown mr-1">
';
                $buffer .= $indent . '                        <button type="button" class="btn dropdown-toggle" id="cohortfilter" data-toggle="dropdown" aria-expanded="false">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                        <div class="dropdown-menu" aria-labelledby="cohortfilter" role="menu" x-placement="bottom-start">
';
                $buffer .= $indent . '                            <a class="dropdown-item" href="javascript:void(0)" data-cohortid="0" role="menuitem">
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2b3f7b608d1468235a1f499d837edd8a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                // 'values' section
                $value = $context->find('values');
                $buffer .= $this->sectionC1d6a3e4b61746c456ced9c06aff5c2b($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a820dc2f0b751bbacad031e7035500e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastweek, local_edwiserreports ';
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
                
                $buffer .= ' lastweek, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51af92dfda0bf8ff3577714a367ae9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmonth, local_edwiserreports ';
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
                
                $buffer .= ' lastmonth, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a6165708677f5d28dd0412b7ad9970a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastyear, local_edwiserreports ';
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
                
                $buffer .= ' lastyear, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02e39274faa6579b4258f15f3f06b520(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' custom, local_edwiserreports';
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
                
                $buffer .= ' custom, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8f8a6ce9c759677b7244f2e1f98580(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clicktogetuserslist, local_edwiserreports ';
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
                
                $buffer .= ' clicktogetuserslist, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd7b45b2a830fae50424a158af1f3481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="pull-right px-5">
            {{> local_edwiserreports/exportreports }}
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
                
                $buffer .= $indent . '        <div class="pull-right px-5">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportreports')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
