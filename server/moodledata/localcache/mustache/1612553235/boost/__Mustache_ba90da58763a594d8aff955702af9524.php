<?php

class __Mustache_ba90da58763a594d8aff955702af9524 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card bg-primary">
';
        $buffer .= $indent . '    <div class="card-block text-white">
';
        $buffer .= $indent . '        <div class="row mx-0">
';
        $buffer .= $indent . '            <div class="col-5">
';
        $buffer .= $indent . '                <div class="bold mb-1">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBc626928ad4041ee22276a670b89d9d9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="row mx-0 text-center">
';
        $buffer .= $indent . '                    <div class="d-flex w-100 todays-block bg-primary">
';
        $buffer .= $indent . '                        <div class="m-auto">
';
        $buffer .= $indent . '                            <div id="todays-onlinelearners" class=" font-size-30 font-weight-600 w-full">
';
        $buffer .= $indent . '                                <div class="data">0</div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <small>
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section19bd0c845e6f608a85254d4473ebc379($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </small>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="d-flex w-100 todays-block bg-primary">
';
        $buffer .= $indent . '                        <div class="m-auto">
';
        $buffer .= $indent . '                            <div id="todays-onlineteachers" class=" font-size-30 font-weight-600 w-full">
';
        $buffer .= $indent . '                                <div class="data">0</div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <small>
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAfb6274156326c3aa66b572bfaa5ffbf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </small>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-7">
';
        $buffer .= $indent . '                <table class="summary ml-auto">
';
        $buffer .= $indent . '                    <thead class="border-bottom">
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <th class="text-left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2f910eb1198b1773c58512eb25a30afe($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </th>
';
        $buffer .= $indent . '                            <th class="text-right ">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC7628254fdcf74b26290d3d8a2b5b29b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </th>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </thead>
';
        $buffer .= $indent . '                    <tbody>
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section569c33d8f849a61f46c55c3b6acbe518($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-enrollments">
';
        $buffer .= $indent . '                                <span class="data">0</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA3cdb8bd783e1e71b2a26712cad16f4c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-activitycompletions">
';
        $buffer .= $indent . '                                <span class="data">0</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB62018485b3b7ea9ee92806b46549b88($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-coursecompletions">
';
        $buffer .= $indent . '                                <span class="data">0</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6166e079f04d3967ff877a23eda00e7a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-registrations">
';
        $buffer .= $indent . '                                <span class="data">0</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                        <tr>
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section02c010dbfe90af446f66d0a7d1fa206d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-visits">
';
        $buffer .= $indent . '                                <span class="data">0</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                        <tr class="d-none">
';
        $buffer .= $indent . '                            <td align="left">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8a8f14ca405a77fe24f55c8ac3d15481($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                            <td align="right" class="" id="todays-timespend">
';
        $buffer .= $indent . '                                <span class="data">00:00:00</span>
';
        $buffer .= $indent . '                            </td>
';
        $buffer .= $indent . '                        </tr>
';
        $buffer .= $indent . '                    </tbody>
';
        $buffer .= $indent . '                </table>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="visual col-12">
';
        $buffer .= $indent . '            <p class="visual-head bold">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB29779ae56780621608db4de9df1a7fe($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            <div class="visual-body">
';
        $buffer .= $indent . '                <canvas class="ct-chart"></canvas>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section192cd996a610c0839cb515ebf0125d1e($context, $indent, $value);

        return $buffer;
    }

    private function sectionBc626928ad4041ee22276a670b89d9d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' todayslogin, local_edwiserreports ';
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
                
                $buffer .= ' todayslogin, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19bd0c845e6f608a85254d4473ebc379(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' learners, local_edwiserreports ';
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
                
                $buffer .= ' learners, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfb6274156326c3aa66b572bfaa5ffbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' teachers, local_edwiserreports ';
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
                
                $buffer .= ' teachers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f910eb1198b1773c58512eb25a30afe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' eventtoday, local_edwiserreports ';
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
                
                $buffer .= ' eventtoday, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7628254fdcf74b26290d3d8a2b5b29b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' count, local_edwiserreports ';
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
                
                $buffer .= ' count, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section569c33d8f849a61f46c55c3b6acbe518(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrollment, local_edwiserreports ';
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
                
                $buffer .= ' enrollment, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3cdb8bd783e1e71b2a26712cad16f4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activitycompletion, local_edwiserreports ';
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
                
                $buffer .= ' activitycompletion, local_edwiserreports ';
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

    private function section6166e079f04d3967ff877a23eda00e7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' newregistration, local_edwiserreports ';
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
                
                $buffer .= ' newregistration, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02c010dbfe90af446f66d0a7d1fa206d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' visits, local_edwiserreports ';
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
                
                $buffer .= ' visits, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8f14ca405a77fe24f55c8ac3d15481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timespent, local_edwiserreports ';
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
                
                $buffer .= ' timespent, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB29779ae56780621608db4de9df1a7fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sitevisits, local_edwiserreports ';
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
                
                $buffer .= ' sitevisits, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section192cd996a610c0839cb515ebf0125d1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(\'#todaysactivityblock .loader\').hide();
})
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
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(\'#todaysactivityblock .loader\').hide();
';
                $buffer .= $indent . '})
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
