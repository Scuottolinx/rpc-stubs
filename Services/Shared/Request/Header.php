<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Shared/Request.proto

namespace Services\Shared\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>services.shared.Request.Header</code>
 */
class Header extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string service = 1;</code>
     */
    private $service = '';
    /**
     * Generated from protobuf field <code>string method = 2;</code>
     */
    private $method = '';
    /**
     * Generated from protobuf field <code>string format = 3;</code>
     */
    private $format = '';
    /**
     * Generated from protobuf field <code>string version = 4;</code>
     */
    private $version = '';
    /**
     * Generated from protobuf field <code>string tokenId = 5;</code>
     */
    private $tokenId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *     @type string $method
     *     @type string $format
     *     @type string $version
     *     @type string $tokenId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Shared\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string method = 2;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>string method = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string format = 3;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Generated from protobuf field <code>string format = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tokenId = 5;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Generated from protobuf field <code>string tokenId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tokenId = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Header::class, \Services\Shared\Request_Header::class);
