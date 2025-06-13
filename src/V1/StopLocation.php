<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/trips.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The actual location where a stop (pickup/dropoff) happened.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.StopLocation</code>
 */
class StopLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Denotes the actual location.
     *
     * Generated from protobuf field <code>.google.type.LatLng point = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $point = null;
    /**
     * Indicates when the stop happened.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     */
    protected $timestamp = null;
    /**
     * Input only. Deprecated.  Use the timestamp field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_time = 3 [deprecated = true, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @deprecated
     */
    protected $stop_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\LatLng $point
     *           Required. Denotes the actual location.
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Indicates when the stop happened.
     *     @type \Google\Protobuf\Timestamp $stop_time
     *           Input only. Deprecated.  Use the timestamp field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\Trips::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Denotes the actual location.
     *
     * Generated from protobuf field <code>.google.type.LatLng point = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\LatLng|null
     */
    public function getPoint()
    {
        return $this->point;
    }

    public function hasPoint()
    {
        return isset($this->point);
    }

    public function clearPoint()
    {
        unset($this->point);
    }

    /**
     * Required. Denotes the actual location.
     *
     * Generated from protobuf field <code>.google.type.LatLng point = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setPoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->point = $var;

        return $this;
    }

    /**
     * Indicates when the stop happened.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Indicates when the stop happened.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Input only. Deprecated.  Use the timestamp field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_time = 3 [deprecated = true, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     * @deprecated
     */
    public function getStopTime()
    {
        if (isset($this->stop_time)) {
            @trigger_error('stop_time is deprecated.', E_USER_DEPRECATED);
        }
        return $this->stop_time;
    }

    public function hasStopTime()
    {
        if (isset($this->stop_time)) {
            @trigger_error('stop_time is deprecated.', E_USER_DEPRECATED);
        }
        return isset($this->stop_time);
    }

    public function clearStopTime()
    {
        @trigger_error('stop_time is deprecated.', E_USER_DEPRECATED);
        unset($this->stop_time);
    }

    /**
     * Input only. Deprecated.  Use the timestamp field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_time = 3 [deprecated = true, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     * @deprecated
     */
    public function setStopTime($var)
    {
        @trigger_error('stop_time is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->stop_time = $var;

        return $this;
    }

}

