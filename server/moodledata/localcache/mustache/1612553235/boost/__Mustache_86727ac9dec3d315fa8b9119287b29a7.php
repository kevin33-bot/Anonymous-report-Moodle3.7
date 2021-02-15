<?php

class __Mustache_86727ac9dec3d315fa8b9119287b29a7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table id="accessinfotable" class="table mb-1 d-none">
';
        $buffer .= $indent . '    <tbody class="small">
';
        // 'siteaccess' section
        $value = $context->find('siteaccess');
        $buffer .= $this->sectionF98ba75d1bdba13acc2bea296552d48a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <tr class="text-center">
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section440fe51adbb0a941853e753d67f1bd1a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCfc42f63fd1a8c7a068a0625a885428e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section71c9205b1fe02771fb00f6b45df64ef1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section08e17088b5fd98a0ba98d81aca9b3db9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5544dbedf9e6b1bcb2b7dadc004beaa6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section857d0cc04ab6280893e749b3f0232285($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label small font-weight-700 border-0">
';
        $buffer .= $indent . '                <p class="m-0">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section80f6ea4df97bc9aa9c083b7616730903($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            </td>
';
        $buffer .= $indent . '            <td class="empty-label border-0"></td>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '<div class="px-1">
';
        $buffer .= $indent . '    <table id="accessinfodesctable" class="table small font-weight-700 mb-1" style="display: none;">
';
        $buffer .= $indent . '        <tbody>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="color-label-20 bg-secondary small font-weight-700 border border-white p-0">
';
        $buffer .= $indent . '                    <p class="invisible m-0">0</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="color-label-40 bg-secondary small font-weight-700 border border-white p-0">
';
        $buffer .= $indent . '                    <p class="invisible m-0">0</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="color-label-60 bg-secondary small font-weight-700 border border-white p-0">
';
        $buffer .= $indent . '                    <p class="invisible m-0">0</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="color-label-80 bg-secondary small font-weight-700 border border-white p-0">
';
        $buffer .= $indent . '                    <p class="invisible m-0">0</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="color-label-100 bg-secondary small font-weight-700 border border-white p-0">
';
        $buffer .= $indent . '                    <p class="invisible m-0">0</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="color-label empty-label border-0 p-0" style="width: 0.1px;"></td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">0%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">20%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">40%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">60%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">80%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="empty-label border-0 m-0 p-0">
';
        $buffer .= $indent . '                    <p class="position-relative">100%</p>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5ad5e099d256641f6e89738c39600ad4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' siteaccessinfo , local_edwiserreports, ';
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
                
                $buffer .= ' siteaccessinfo , local_edwiserreports, ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEac4c2847daf61a403b57cf0b8e5648b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="bg-secondary small font-weight-700 border border-white p-0"
                    data-toggle="tooltip"
                    title="{{#str}} siteaccessinfo , local_edwiserreports, {{/str}} {{value}}"
                    style="background-color: rgba(52,137,223,{{opacity}}) !important;">
                        <p class="m-0 d-none">{{value}}</p>
                    </td>
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
                
                $buffer .= $indent . '                    <td class="bg-secondary small font-weight-700 border border-white p-0"
';
                $buffer .= $indent . '                    data-toggle="tooltip"
';
                $buffer .= $indent . '                    title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5ad5e099d256641f6e89738c39600ad4($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    style="background-color: rgba(52,137,223,';
                $value = $this->resolveValue($context->find('opacity'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ') !important;">
';
                $buffer .= $indent . '                        <p class="m-0 d-none">';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC636ad9a693bfe56dcfb5f27f6b20f55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <td class="empty-label siteacess-time bg-white small font-weight-700 border border-white py-0">{{.}}</td>
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
                
                $buffer .= $indent . '                <td class="empty-label siteacess-time bg-white small font-weight-700 border border-white py-0">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10001217cb2fd78a3fdc6f18964254fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr class="siteaccess-tablerow">
                {{#access}}
                    <td class="bg-secondary small font-weight-700 border border-white p-0"
                    data-toggle="tooltip"
                    title="{{#str}} siteaccessinfo , local_edwiserreports, {{/str}} {{value}}"
                    style="background-color: rgba(52,137,223,{{opacity}}) !important;">
                        <p class="m-0 d-none">{{value}}</p>
                    </td>
                {{/access}}
                {{#time}}
                <td class="empty-label siteacess-time bg-white small font-weight-700 border border-white py-0">{{.}}</td>
                {{/time}}
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
                
                $buffer .= $indent . '        <tr class="siteaccess-tablerow">
';
                // 'access' section
                $value = $context->find('access');
                $buffer .= $this->sectionEac4c2847daf61a403b57cf0b8e5648b($context, $indent, $value);
                // 'time' section
                $value = $context->find('time');
                $buffer .= $this->sectionC636ad9a693bfe56dcfb5f27f6b20f55($context, $indent, $value);
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF98ba75d1bdba13acc2bea296552d48a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#.}}
        <tr class="siteaccess-tablerow">
                {{#access}}
                    <td class="bg-secondary small font-weight-700 border border-white p-0"
                    data-toggle="tooltip"
                    title="{{#str}} siteaccessinfo , local_edwiserreports, {{/str}} {{value}}"
                    style="background-color: rgba(52,137,223,{{opacity}}) !important;">
                        <p class="m-0 d-none">{{value}}</p>
                    </td>
                {{/access}}
                {{#time}}
                <td class="empty-label siteacess-time bg-white small font-weight-700 border border-white py-0">{{.}}</td>
                {{/time}}
        </tr>
        {{/.}}
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
                
                // '.' section
                $value = $context->last('.');
                $buffer .= $this->section10001217cb2fd78a3fdc6f18964254fd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section440fe51adbb0a941853e753d67f1bd1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sun, local_edwiserreports ';
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
                
                $buffer .= ' sun, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfc42f63fd1a8c7a068a0625a885428e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' mon, local_edwiserreports ';
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
                
                $buffer .= ' mon, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71c9205b1fe02771fb00f6b45df64ef1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tue, local_edwiserreports ';
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
                
                $buffer .= ' tue, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08e17088b5fd98a0ba98d81aca9b3db9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' wed, local_edwiserreports ';
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
                
                $buffer .= ' wed, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5544dbedf9e6b1bcb2b7dadc004beaa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' thu, local_edwiserreports ';
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
                
                $buffer .= ' thu, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section857d0cc04ab6280893e749b3f0232285(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fri, local_edwiserreports ';
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
                
                $buffer .= ' fri, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80f6ea4df97bc9aa9c083b7616730903(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sat, local_edwiserreports ';
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
                
                $buffer .= ' sat, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
