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

interface ProtocolInterface
{
    const MQTT_PROTOCOL_LEVEL_3_1 = 3;

    const MQTT_PROTOCOL_LEVEL_3_1_1 = 4;

    const MQTT_PROTOCOL_LEVEL_5_0 = 5;

    const MQISDP_PROTOCOL_NAME = 'MQIsdp';

    const MQTT_PROTOCOL_NAME = 'MQTT';

    const MQTT_QOS_0 = 0;

    const MQTT_QOS_1 = 1;

    const MQTT_QOS_2 = 2;

    const MQTT_RETAIN_0 = 0;

    const MQTT_RETAIN_1 = 1;

    const MQTT_RETAIN_2 = 2;

    const MQTT_DUP_0 = 0;

    const MQTT_DUP_1 = 1;

    const MQTT_SESSION_PRESENT_0 = 0;

    const MQTT_SESSION_PRESENT_1 = 1;

    public static function pack(array $array): string;

    public static function unpack(string $data): array;
}
