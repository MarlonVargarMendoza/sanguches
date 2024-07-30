<?php

namespace MongoDB\Driver\Monitoring;

/**
 * Encapsulates information about a failed command.
 * @link https://secure.php.net/manual/en/class.mongodb-driver-monitoring-commandfailedevent.php
 * @since 1.3.0
 */
class CommandFailedEvent
{
    final private function __construct() {}

    final public function __wakeup() {}

    /**
     * Returns the command name.
     * @link   https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getcommandname.php
     * @return string The command name (e.g. "find", "aggregate").
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getCommandName() {}

    /**
     * Returns the command's duration in microseconds
     * The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.
     * @link   https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php
     * @return int the command's duration in microseconds.
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getDurationMicros() {}

    /**
     * Returns the Exception associated with the failed command
     * @link   https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.geterror.php
     * @return \Exception
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getError() {}

    /**
     * Returns the command's operation ID.
     * The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.
     * Note: Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId() should be used instead.
     * @link   https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getoperationid.php
     * @return string the command's operation ID.
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getOperationId() {}

    /**
     * Returns the command reply document.
     * The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).
     * @link https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getreply.php
     * @return object the command reply document as a stdClass object.
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getReply() {}

    /**
     * Returns the command's request ID.
     * The request ID is generated by the driver and may be used to associate this CommandSucceededEvent with a previous CommandStartedEvent.
     * @link https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getrequestid.php
     * @return string the command's request ID.
     * @throws \InvalidArgumentException on argument parsing errors.
     * @since 1.3.0
     */
    final public function getRequestId() {}

    /**
     * Returns the Server on which the command was executed.
     * @link https://secure.php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getserver.php
     * @return \MongoDB\Driver\Server on which the command was executed.
     * @since 1.3.0
     */
    final public function getServer() {}
}
