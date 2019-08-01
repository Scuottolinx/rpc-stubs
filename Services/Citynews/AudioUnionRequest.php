<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Citynews/TextToSpeech/TextToSpeec.proto

namespace Services\Citynews;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>services.citynews.AudioUnionRequest</code>
 */
class AudioUnionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.services.shared.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>repeated bytes inputAudio = 2;</code>
     */
    private $inputAudio;
    /**
     * Generated from protobuf field <code>.services.citynews.AudioUnionRequest.BackgroundAudio backgroundAudio = 3;</code>
     */
    private $backgroundAudio = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Services\Shared\Request $request
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $inputAudio
     *     @type \Services\Citynews\AudioUnionRequest\BackgroundAudio $backgroundAudio
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Citynews\TextToSpeech\TextToSpeec::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.services.shared.Request request = 1;</code>
     * @return \Services\Shared\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Generated from protobuf field <code>.services.shared.Request request = 1;</code>
     * @param \Services\Shared\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Services\Shared\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes inputAudio = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputAudio()
    {
        return $this->inputAudio;
    }

    /**
     * Generated from protobuf field <code>repeated bytes inputAudio = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->inputAudio = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.services.citynews.AudioUnionRequest.BackgroundAudio backgroundAudio = 3;</code>
     * @return \Services\Citynews\AudioUnionRequest\BackgroundAudio
     */
    public function getBackgroundAudio()
    {
        return $this->backgroundAudio;
    }

    /**
     * Generated from protobuf field <code>.services.citynews.AudioUnionRequest.BackgroundAudio backgroundAudio = 3;</code>
     * @param \Services\Citynews\AudioUnionRequest\BackgroundAudio $var
     * @return $this
     */
    public function setBackgroundAudio($var)
    {
        GPBUtil::checkMessage($var, \Services\Citynews\AudioUnionRequest_BackgroundAudio::class);
        $this->backgroundAudio = $var;

        return $this;
    }

}
