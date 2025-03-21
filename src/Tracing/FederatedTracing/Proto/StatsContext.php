<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The context around a block of stats and traces indicating from which client the operation was executed and its
 * operation type. Operation type and subtype are only used by Apollo Router.
 *
 * Generated from protobuf message <code>StatsContext</code>
 */
class StatsContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_name = 2 [json_name = "clientName"];</code>
     */
    protected $client_name = '';
    /**
     * Generated from protobuf field <code>string client_version = 3 [json_name = "clientVersion"];</code>
     */
    protected $client_version = '';
    /**
     * Generated from protobuf field <code>string operation_type = 4 [json_name = "operationType"];</code>
     */
    protected $operation_type = '';
    /**
     * Generated from protobuf field <code>string operation_subtype = 5 [json_name = "operationSubtype"];</code>
     */
    protected $operation_subtype = '';
    /**
     * The result of the operation. Either OK or the error code that caused the operation to fail.
     * This will not contain all errors from a query, only the primary reason the operation failed. e.g. a limits failure or an auth failure.
     *
     * Generated from protobuf field <code>string result = 6 [json_name = "result"];</code>
     */
    protected $result = '';
    /**
     * Client awareness contexts
     *
     * Generated from protobuf field <code>string client_library_name = 7 [json_name = "clientLibraryName"];</code>
     */
    protected $client_library_name = '';
    /**
     * Generated from protobuf field <code>string client_library_version = 8 [json_name = "clientLibraryVersion"];</code>
     */
    protected $client_library_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_name
     *     @type string $client_version
     *     @type string $operation_type
     *     @type string $operation_subtype
     *     @type string $result
     *           The result of the operation. Either OK or the error code that caused the operation to fail.
     *           This will not contain all errors from a query, only the primary reason the operation failed. e.g. a limits failure or an auth failure.
     *     @type string $client_library_name
     *           Client awareness contexts
     *     @type string $client_library_version
     * }
     */
    public function __construct($data = NULL) {
        \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_name = 2 [json_name = "clientName"];</code>
     * @return string
     */
    public function getClientName()
    {
        return $this->client_name;
    }

    /**
     * Generated from protobuf field <code>string client_name = 2 [json_name = "clientName"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientName($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_version = 3 [json_name = "clientVersion"];</code>
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Generated from protobuf field <code>string client_version = 3 [json_name = "clientVersion"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string operation_type = 4 [json_name = "operationType"];</code>
     * @return string
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Generated from protobuf field <code>string operation_type = 4 [json_name = "operationType"];</code>
     * @param string $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string operation_subtype = 5 [json_name = "operationSubtype"];</code>
     * @return string
     */
    public function getOperationSubtype()
    {
        return $this->operation_subtype;
    }

    /**
     * Generated from protobuf field <code>string operation_subtype = 5 [json_name = "operationSubtype"];</code>
     * @param string $var
     * @return $this
     */
    public function setOperationSubtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_subtype = $var;

        return $this;
    }

    /**
     * The result of the operation. Either OK or the error code that caused the operation to fail.
     * This will not contain all errors from a query, only the primary reason the operation failed. e.g. a limits failure or an auth failure.
     *
     * Generated from protobuf field <code>string result = 6 [json_name = "result"];</code>
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The result of the operation. Either OK or the error code that caused the operation to fail.
     * This will not contain all errors from a query, only the primary reason the operation failed. e.g. a limits failure or an auth failure.
     *
     * Generated from protobuf field <code>string result = 6 [json_name = "result"];</code>
     * @param string $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->result = $var;

        return $this;
    }

    /**
     * Client awareness contexts
     *
     * Generated from protobuf field <code>string client_library_name = 7 [json_name = "clientLibraryName"];</code>
     * @return string
     */
    public function getClientLibraryName()
    {
        return $this->client_library_name;
    }

    /**
     * Client awareness contexts
     *
     * Generated from protobuf field <code>string client_library_name = 7 [json_name = "clientLibraryName"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientLibraryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_library_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_library_version = 8 [json_name = "clientLibraryVersion"];</code>
     * @return string
     */
    public function getClientLibraryVersion()
    {
        return $this->client_library_version;
    }

    /**
     * Generated from protobuf field <code>string client_library_version = 8 [json_name = "clientLibraryVersion"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientLibraryVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_library_version = $var;

        return $this;
    }

}

