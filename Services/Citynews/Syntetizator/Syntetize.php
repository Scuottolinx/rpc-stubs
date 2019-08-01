<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Citynews/TextToSpeech/TextToSpeec.proto

namespace Services\Citynews\Syntetizator;

use UnexpectedValueException;

/**
 * Protobuf type <code>services.citynews.Syntetizator.Syntetize</code>
 */
class Syntetize
{
    /**
     * Generated from protobuf enum <code>ALEXA = 0;</code>
     */
    const ALEXA = 0;
    /**
     * Generated from protobuf enum <code>GOOGLE = 1;</code>
     */
    const GOOGLE = 1;

    private static $valueToName = [
        self::ALEXA => 'ALEXA',
        self::GOOGLE => 'GOOGLE',
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
class_alias(Syntetize::class, \Services\Citynews\Syntetizator_Syntetize::class);

