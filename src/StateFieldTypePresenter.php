<?php namespace Anomaly\StateFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class StateFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\StateFieldType
 */
class StateFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE support.
     *
     * @var StateFieldType
     */
    protected $object;

    /**
     * Return the state's name.
     *
     * @return null|string
     */
    public function name()
    {
        if (!$iso = $this->object->getValue()) {
            return null;
        }

        return array_get($this->object->getOptions(), $iso);
    }
}
