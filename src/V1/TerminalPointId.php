<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/fleetengine.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated: TerminalPoints are no longer supported in Fleet Engine. Use
 * `TerminalLocation.point` instead.
 *
 * @deprecated
 * Generated from protobuf message <code>maps.fleetengine.v1.TerminalPointId</code>
 */
class TerminalPointId extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string value = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $value = '';
    protected $Id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $place_id
     *           Deprecated.
     *     @type string $generated_id
     *           Deprecated.
     *     @type string $value
     *           Deprecated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\Fleetengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string place_id = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getPlaceId()
    {
        if ($this->hasOneof(2)) {
            @trigger_error('place_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->readOneof(2);
    }

    public function hasPlaceId()
    {
        if ($this->hasOneof(2)) {
            @trigger_error('place_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->hasOneof(2);
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string place_id = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setPlaceId($var)
    {
        @trigger_error('place_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string generated_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getGeneratedId()
    {
        if ($this->hasOneof(3)) {
            @trigger_error('generated_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->readOneof(3);
    }

    public function hasGeneratedId()
    {
        if ($this->hasOneof(3)) {
            @trigger_error('generated_id is deprecated.', E_USER_DEPRECATED);
        }
        return $this->hasOneof(3);
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string generated_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setGeneratedId($var)
    {
        @trigger_error('generated_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string value = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getValue()
    {
        if ($this->value !== '') {
            @trigger_error('value is deprecated.', E_USER_DEPRECATED);
        }
        return $this->value;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string value = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setValue($var)
    {
        @trigger_error('value is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->whichOneof("Id");
    }

}

