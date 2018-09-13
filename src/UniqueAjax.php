<?php

namespace Epartment\NovaUniqueAjaxField;

use Laravel\Nova\Fields\Field;

class UniqueAjax extends Field
{
    const BLUR = 'blur';
    const KEY_UP = 'key-up';

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-unique-ajax-field';

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->withMeta(['method' => self::KEY_UP]);
        $this->withMeta(['notUniqueMessage' => sprintf('%s should be unique.', $name)]);
        $this->withMeta(['keyUpDelay' => 250]);
    }

    public function keyUpDelay($delay = 250)
    {
        return $this->withMeta(['keyUpDelay', $delay]);
    }

    public function notUniqueMessage($message)
    {
        return $this->withMeta(['notUniqueMessage' => $message]);
    }

    public function actOn($method = self::KEY_UP)
    {
        if ($method !== self::BLUR && $method !== self::KEY_UP) {
            throw new MethodNotSupportedException(
                sprintf('%s is not supported. Supported methods are %s', $method, implode(', ', [self::BLUR, self::KEY_UP]))
            );
        }

        return $this->withMeta(['method' => $method]);
    }
}
