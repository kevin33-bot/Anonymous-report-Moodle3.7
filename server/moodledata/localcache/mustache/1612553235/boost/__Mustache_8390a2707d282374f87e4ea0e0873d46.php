<?php

class __Mustache_8390a2707d282374f87e4ea0e0873d46 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="wdm-completion-individual" class="table-responsive" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="wdm-userfilter" class="h-auto my-10">
';
        $buffer .= $indent . '        <div class="row mx-0">
';
        $buffer .= $indent . '            <div class="">
';
        $buffer .= $indent . '                <div class="filters col-12 d-flex mb-1 py-1">
';
        // 'cohortfilters' section
        $value = $context->find('cohortfilters');
        $buffer .= $this->section6d0f711533945c801df24700c099f729($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <table class="table" style="display: none;">
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <th class="text-nowrap bg-image-none no-sorting-arrow border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section47b67cfeeed66155b85b2b709424317e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5a8f34cd3da18b66700847eebed94511($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEa74e7f58bf15431340be15c137bfa0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDa40f904b1f8b4e959712b0b617ac19d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB62018485b3b7ea9ee92806b46549b88($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1c2e1ae4af58990cc70c620b4321e0ff($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section98073be8795f340a0dd5fadd31b2d1b8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center bg-image-none no-sorting-arrow text-nowrap border-bottom-0">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF1ad50b86182247e377f2b687f4f39da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody></tbody>
';
        $buffer .= $indent . '    </table>
';
        // 'completionexport' section
        $value = $context->find('completionexport');
        $buffer .= $this->section3b7874a8e2d1cbd02eb8f7d4f6e59e89($context, $indent, $value);
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

    private function section47b67cfeeed66155b85b2b709424317e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fullname, local_edwiserreports ';
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
                
                $buffer .= ' fullname, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8f34cd3da18b66700847eebed94511(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolledon, local_edwiserreports ';
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
                
                $buffer .= ' enrolledon, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa74e7f58bf15431340be15c137bfa0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolltype, local_edwiserreports ';
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
                
                $buffer .= ' enrolltype, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa40f904b1f8b4e959712b0b617ac19d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofvisits, local_edwiserreports ';
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
                
                $buffer .= ' noofvisits, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB62018485b3b7ea9ee92806b46549b88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursecompletion, local_edwiserreports ';
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
                
                $buffer .= ' coursecompletion, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c2e1ae4af58990cc70c620b4321e0ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completiontime, local_edwiserreports ';
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
                
                $buffer .= ' completiontime, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98073be8795f340a0dd5fadd31b2d1b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' grade, local_edwiserreports ';
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
                
                $buffer .= ' grade, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1ad50b86182247e377f2b687f4f39da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccess, local_edwiserreports ';
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
                
                $buffer .= ' lastaccess, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b7874a8e2d1cbd02eb8f7d4f6e59e89(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '    <div class="pull-right px-5">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportreports')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
