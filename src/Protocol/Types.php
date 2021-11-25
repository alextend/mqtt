<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 *
 * @link     https://github.com/simps/mqtt
 * @contact  Lu Fei <lufei@simps.io>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace Simps\MQTT\Protocol;

class Types
{
    const CONNECT = 1; // Client request to connect to Server

    const CONNACK = 2; // Connect acknowledgment

    const PUBLISH = 3; // Publish message

    const PUBACK = 4; // Publish acknowledgment

    const PUBREC = 5; // Publish received (assured delivery part 1)

    const PUBREL = 6; // Publish release (assured delivery part 2)

    const PUBCOMP = 7; // Publish complete (assured delivery part 3)

    const SUBSCRIBE = 8; // Client subscribe request

    const SUBACK = 9; // Subscribe acknowledgment

    const UNSUBSCRIBE = 10; // Unsubscribe request

    const UNSUBACK = 11; // Unsubscribe acknowledgment

    const PINGREQ = 12; // PING request

    const PINGRESP = 13; // PING response

    const DISCONNECT = 14; // Client is disconnecting

    const AUTH = 15; // Authentication exchange

    protected static $types = [
        self::CONNECT => 'connect',
        self::CONNACK => 'connack',
        self::PUBLISH => 'publish',
        self::PUBACK => 'puback',
        self::PUBREC => 'pubrec',
        self::PUBREL => 'pubrel',
        self::PUBCOMP => 'pubcomp',
        self::SUBSCRIBE => 'subscribe',
        self::SUBACK => 'suback',
        self::UNSUBSCRIBE => 'unsubscribe',
        self::PINGREQ => 'pingreq',
        self::PINGRESP => 'pingresp',
        self::DISCONNECT => 'disconnect',
        self::AUTH => 'auth',
    ];

    public static function getTypes(): array
    {
        return static::$types;
    }

    public static function getType(int $type): string
    {
        return static::$types[$type] ?? '';
    }
}
