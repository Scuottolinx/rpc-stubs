<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Citynews/TextToSpeech/TextToSpeec.proto

namespace Services\Citynews\Syntetizator;

use UnexpectedValueException;

/**
 * Protobuf type <code>services.citynews.Syntetizator.SyntetizeGoogleVoice</code>
 */
class SyntetizeGoogleVoice
{
    /**
     * Generated from protobuf enum <code>WAVENET = 0;</code>
     */
    const WAVENET = 0;
    /**
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;

    private static $valueToName = [
        self::WAVENET => 'WAVENET',
        self::STANDARD => 'STANDARD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SyntetizeGoogleVoice::class, \Services\Citynews\Syntetizator_SyntetizeGoogleVoice::class);

