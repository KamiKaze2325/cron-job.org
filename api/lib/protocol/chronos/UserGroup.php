<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class UserGroup
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'userGroupId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'title',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'requestTimeout',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'requestMaxSize',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        5 => array(
            'var' => 'maxFailures',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        6 => array(
            'var' => 'executionPriority',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
    );

    /**
     * @var int
     */
    public $userGroupId = null;
    /**
     * @var string
     */
    public $title = null;
    /**
     * @var int
     */
    public $requestTimeout = null;
    /**
     * @var int
     */
    public $requestMaxSize = null;
    /**
     * @var int
     */
    public $maxFailures = null;
    /**
     * @var int
     */
    public $executionPriority = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['userGroupId'])) {
                $this->userGroupId = $vals['userGroupId'];
            }
            if (isset($vals['title'])) {
                $this->title = $vals['title'];
            }
            if (isset($vals['requestTimeout'])) {
                $this->requestTimeout = $vals['requestTimeout'];
            }
            if (isset($vals['requestMaxSize'])) {
                $this->requestMaxSize = $vals['requestMaxSize'];
            }
            if (isset($vals['maxFailures'])) {
                $this->maxFailures = $vals['maxFailures'];
            }
            if (isset($vals['executionPriority'])) {
                $this->executionPriority = $vals['executionPriority'];
            }
        }
    }

    public function getName()
    {
        return 'UserGroup';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->userGroupId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->title);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->requestTimeout);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->requestMaxSize);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->maxFailures);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->executionPriority);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('UserGroup');
        if ($this->userGroupId !== null) {
            $xfer += $output->writeFieldBegin('userGroupId', TType::I64, 1);
            $xfer += $output->writeI64($this->userGroupId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->title !== null) {
            $xfer += $output->writeFieldBegin('title', TType::STRING, 2);
            $xfer += $output->writeString($this->title);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->requestTimeout !== null) {
            $xfer += $output->writeFieldBegin('requestTimeout', TType::I32, 3);
            $xfer += $output->writeI32($this->requestTimeout);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->requestMaxSize !== null) {
            $xfer += $output->writeFieldBegin('requestMaxSize', TType::I32, 4);
            $xfer += $output->writeI32($this->requestMaxSize);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->maxFailures !== null) {
            $xfer += $output->writeFieldBegin('maxFailures', TType::I32, 5);
            $xfer += $output->writeI32($this->maxFailures);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->executionPriority !== null) {
            $xfer += $output->writeFieldBegin('executionPriority', TType::BYTE, 6);
            $xfer += $output->writeByte($this->executionPriority);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
