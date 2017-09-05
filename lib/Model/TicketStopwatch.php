<?php
/**
 * TicketStopwatch
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Time
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Time API
 *
 * ConnectWise Time API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model;

use \ArrayAccess;

/**
 * TicketStopwatch Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Time
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TicketStopwatch implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TicketStopwatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_info' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Metadata',
        'agreement' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\AgreementReference',
        'billable_option' => 'string',
        'business_unit_id' => 'int',
        'date_entered' => '\DateTime',
        'end_time' => '\DateTime',
        'id' => 'int',
        'internal_notes' => 'string',
        'location_id' => 'int',
        'member' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\MemberReference',
        'mobile_guid' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid',
        'notes' => 'string',
        'service_status' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ServiceStatusReference',
        'start_time' => '\DateTime',
        'status' => 'string',
        'ticket' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\TicketReference',
        'ticket_mobile_guid' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid',
        'total_pause_time' => 'int',
        'work_role' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkRoleReference',
        'work_type' => '\Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkTypeReference',
        'show_notes_in_discussion_flag' => 'bool',
        'show_notes_in_internal_flag' => 'bool',
        'show_notes_in_resolution_flag' => 'bool',
        'email_notes_to_contact_flag' => 'bool',
        'email_notes_to_resources_flag' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_info' => '_info',
        'agreement' => 'agreement',
        'billable_option' => 'billableOption',
        'business_unit_id' => 'businessUnitId',
        'date_entered' => 'dateEntered',
        'end_time' => 'endTime',
        'id' => 'id',
        'internal_notes' => 'internalNotes',
        'location_id' => 'locationId',
        'member' => 'member',
        'mobile_guid' => 'mobileGuid',
        'notes' => 'notes',
        'service_status' => 'serviceStatus',
        'start_time' => 'startTime',
        'status' => 'status',
        'ticket' => 'ticket',
        'ticket_mobile_guid' => 'ticketMobileGuid',
        'total_pause_time' => 'totalPauseTime',
        'work_role' => 'workRole',
        'work_type' => 'workType',
        'show_notes_in_discussion_flag' => 'showNotesInDiscussionFlag',
        'show_notes_in_internal_flag' => 'showNotesInInternalFlag',
        'show_notes_in_resolution_flag' => 'showNotesInResolutionFlag',
        'email_notes_to_contact_flag' => 'emailNotesToContactFlag',
        'email_notes_to_resources_flag' => 'emailNotesToResourcesFlag'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_info' => 'setInfo',
        'agreement' => 'setAgreement',
        'billable_option' => 'setBillableOption',
        'business_unit_id' => 'setBusinessUnitId',
        'date_entered' => 'setDateEntered',
        'end_time' => 'setEndTime',
        'id' => 'setId',
        'internal_notes' => 'setInternalNotes',
        'location_id' => 'setLocationId',
        'member' => 'setMember',
        'mobile_guid' => 'setMobileGuid',
        'notes' => 'setNotes',
        'service_status' => 'setServiceStatus',
        'start_time' => 'setStartTime',
        'status' => 'setStatus',
        'ticket' => 'setTicket',
        'ticket_mobile_guid' => 'setTicketMobileGuid',
        'total_pause_time' => 'setTotalPauseTime',
        'work_role' => 'setWorkRole',
        'work_type' => 'setWorkType',
        'show_notes_in_discussion_flag' => 'setShowNotesInDiscussionFlag',
        'show_notes_in_internal_flag' => 'setShowNotesInInternalFlag',
        'show_notes_in_resolution_flag' => 'setShowNotesInResolutionFlag',
        'email_notes_to_contact_flag' => 'setEmailNotesToContactFlag',
        'email_notes_to_resources_flag' => 'setEmailNotesToResourcesFlag'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_info' => 'getInfo',
        'agreement' => 'getAgreement',
        'billable_option' => 'getBillableOption',
        'business_unit_id' => 'getBusinessUnitId',
        'date_entered' => 'getDateEntered',
        'end_time' => 'getEndTime',
        'id' => 'getId',
        'internal_notes' => 'getInternalNotes',
        'location_id' => 'getLocationId',
        'member' => 'getMember',
        'mobile_guid' => 'getMobileGuid',
        'notes' => 'getNotes',
        'service_status' => 'getServiceStatus',
        'start_time' => 'getStartTime',
        'status' => 'getStatus',
        'ticket' => 'getTicket',
        'ticket_mobile_guid' => 'getTicketMobileGuid',
        'total_pause_time' => 'getTotalPauseTime',
        'work_role' => 'getWorkRole',
        'work_type' => 'getWorkType',
        'show_notes_in_discussion_flag' => 'getShowNotesInDiscussionFlag',
        'show_notes_in_internal_flag' => 'getShowNotesInInternalFlag',
        'show_notes_in_resolution_flag' => 'getShowNotesInResolutionFlag',
        'email_notes_to_contact_flag' => 'getEmailNotesToContactFlag',
        'email_notes_to_resources_flag' => 'getEmailNotesToResourcesFlag'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const BILLABLE_OPTION_BILLABLE = 'Billable';
    const BILLABLE_OPTION_DO_NOT_BILL = 'DoNotBill';
    const BILLABLE_OPTION_NO_CHARGE = 'NoCharge';
    const BILLABLE_OPTION_NO_DEFAULT = 'NoDefault';
    const STATUS_RESET = 'Reset';
    const STATUS_RUNNING = 'Running';
    const STATUS_PAUSED = 'Paused';
    const STATUS_STOPPED = 'Stopped';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBillableOptionAllowableValues()
    {
        return [
            self::BILLABLE_OPTION_BILLABLE,
            self::BILLABLE_OPTION_DO_NOT_BILL,
            self::BILLABLE_OPTION_NO_CHARGE,
            self::BILLABLE_OPTION_NO_DEFAULT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RESET,
            self::STATUS_RUNNING,
            self::STATUS_PAUSED,
            self::STATUS_STOPPED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
        $this->container['agreement'] = isset($data['agreement']) ? $data['agreement'] : null;
        $this->container['billable_option'] = isset($data['billable_option']) ? $data['billable_option'] : null;
        $this->container['business_unit_id'] = isset($data['business_unit_id']) ? $data['business_unit_id'] : null;
        $this->container['date_entered'] = isset($data['date_entered']) ? $data['date_entered'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['internal_notes'] = isset($data['internal_notes']) ? $data['internal_notes'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['mobile_guid'] = isset($data['mobile_guid']) ? $data['mobile_guid'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['service_status'] = isset($data['service_status']) ? $data['service_status'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
        $this->container['ticket_mobile_guid'] = isset($data['ticket_mobile_guid']) ? $data['ticket_mobile_guid'] : null;
        $this->container['total_pause_time'] = isset($data['total_pause_time']) ? $data['total_pause_time'] : null;
        $this->container['work_role'] = isset($data['work_role']) ? $data['work_role'] : null;
        $this->container['work_type'] = isset($data['work_type']) ? $data['work_type'] : null;
        $this->container['show_notes_in_discussion_flag'] = isset($data['show_notes_in_discussion_flag']) ? $data['show_notes_in_discussion_flag'] : null;
        $this->container['show_notes_in_internal_flag'] = isset($data['show_notes_in_internal_flag']) ? $data['show_notes_in_internal_flag'] : null;
        $this->container['show_notes_in_resolution_flag'] = isset($data['show_notes_in_resolution_flag']) ? $data['show_notes_in_resolution_flag'] : null;
        $this->container['email_notes_to_contact_flag'] = isset($data['email_notes_to_contact_flag']) ? $data['email_notes_to_contact_flag'] : null;
        $this->container['email_notes_to_resources_flag'] = isset($data['email_notes_to_resources_flag']) ? $data['email_notes_to_resources_flag'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["Billable", "DoNotBill", "NoCharge", "NoDefault"];
        if (!in_array($this->container['billable_option'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'billable_option', must be one of #{allowed_values}.";
        }

        if ($this->container['member'] === null) {
            $invalid_properties[] = "'member' can't be null";
        }
        if (!is_null($this->container['notes']) && (strlen($this->container['notes']) > 4000)) {
            $invalid_properties[] = "invalid value for 'notes', the character length must be smaller than or equal to 4000.";
        }

        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["Reset", "Running", "Paused", "Stopped"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['ticket'] === null) {
            $invalid_properties[] = "'ticket' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["Billable", "DoNotBill", "NoCharge", "NoDefault"];
        if (!in_array($this->container['billable_option'], $allowed_values)) {
            return false;
        }
        if ($this->container['member'] === null) {
            return false;
        }
        if (strlen($this->container['notes']) > 4000) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["Reset", "Running", "Paused", "Stopped"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['ticket'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }

    /**
     * Gets agreement
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\AgreementReference
     */
    public function getAgreement()
    {
        return $this->container['agreement'];
    }

    /**
     * Sets agreement
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\AgreementReference $agreement
     * @return $this
     */
    public function setAgreement($agreement)
    {
        $this->container['agreement'] = $agreement;

        return $this;
    }

    /**
     * Gets billable_option
     * @return string
     */
    public function getBillableOption()
    {
        return $this->container['billable_option'];
    }

    /**
     * Sets billable_option
     * @param string $billable_option
     * @return $this
     */
    public function setBillableOption($billable_option)
    {
        $allowed_values = array('Billable', 'DoNotBill', 'NoCharge', 'NoDefault');
        if (!is_null($billable_option) && (!in_array($billable_option, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'billable_option', must be one of 'Billable', 'DoNotBill', 'NoCharge', 'NoDefault'");
        }
        $this->container['billable_option'] = $billable_option;

        return $this;
    }

    /**
     * Gets business_unit_id
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     * @param int $business_unit_id
     * @return $this
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets date_entered
     * @return \DateTime
     */
    public function getDateEntered()
    {
        return $this->container['date_entered'];
    }

    /**
     * Sets date_entered
     * @param \DateTime $date_entered
     * @return $this
     */
    public function setDateEntered($date_entered)
    {
        $this->container['date_entered'] = $date_entered;

        return $this;
    }

    /**
     * Gets end_time
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param \DateTime $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets internal_notes
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->container['internal_notes'];
    }

    /**
     * Sets internal_notes
     * @param string $internal_notes
     * @return $this
     */
    public function setInternalNotes($internal_notes)
    {
        $this->container['internal_notes'] = $internal_notes;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets member
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\MemberReference
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\MemberReference $member
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets mobile_guid
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid
     */
    public function getMobileGuid()
    {
        return $this->container['mobile_guid'];
    }

    /**
     * Sets mobile_guid
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid $mobile_guid
     * @return $this
     */
    public function setMobileGuid($mobile_guid)
    {
        $this->container['mobile_guid'] = $mobile_guid;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        if (!is_null($notes) && (strlen($notes) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $notes when calling TicketStopwatch., must be smaller than or equal to 4000.');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets service_status
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ServiceStatusReference
     */
    public function getServiceStatus()
    {
        return $this->container['service_status'];
    }

    /**
     * Sets service_status
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\ServiceStatusReference $service_status
     * @return $this
     */
    public function setServiceStatus($service_status)
    {
        $this->container['service_status'] = $service_status;

        return $this;
    }

    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('Reset', 'Running', 'Paused', 'Stopped');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'Reset', 'Running', 'Paused', 'Stopped'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ticket
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\TicketReference
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\TicketReference $ticket
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

        return $this;
    }

    /**
     * Gets ticket_mobile_guid
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid
     */
    public function getTicketMobileGuid()
    {
        return $this->container['ticket_mobile_guid'];
    }

    /**
     * Sets ticket_mobile_guid
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\Guid $ticket_mobile_guid
     * @return $this
     */
    public function setTicketMobileGuid($ticket_mobile_guid)
    {
        $this->container['ticket_mobile_guid'] = $ticket_mobile_guid;

        return $this;
    }

    /**
     * Gets total_pause_time
     * @return int
     */
    public function getTotalPauseTime()
    {
        return $this->container['total_pause_time'];
    }

    /**
     * Sets total_pause_time
     * @param int $total_pause_time
     * @return $this
     */
    public function setTotalPauseTime($total_pause_time)
    {
        $this->container['total_pause_time'] = $total_pause_time;

        return $this;
    }

    /**
     * Gets work_role
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkRoleReference
     */
    public function getWorkRole()
    {
        return $this->container['work_role'];
    }

    /**
     * Sets work_role
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkRoleReference $work_role
     * @return $this
     */
    public function setWorkRole($work_role)
    {
        $this->container['work_role'] = $work_role;

        return $this;
    }

    /**
     * Gets work_type
     * @return \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkTypeReference
     */
    public function getWorkType()
    {
        return $this->container['work_type'];
    }

    /**
     * Sets work_type
     * @param \Spinen\ConnectWise\Clients\Time\Spinen\ConnectWise\Clients\Time\Model\WorkTypeReference $work_type
     * @return $this
     */
    public function setWorkType($work_type)
    {
        $this->container['work_type'] = $work_type;

        return $this;
    }

    /**
     * Gets show_notes_in_discussion_flag
     * @return bool
     */
    public function getShowNotesInDiscussionFlag()
    {
        return $this->container['show_notes_in_discussion_flag'];
    }

    /**
     * Sets show_notes_in_discussion_flag
     * @param bool $show_notes_in_discussion_flag
     * @return $this
     */
    public function setShowNotesInDiscussionFlag($show_notes_in_discussion_flag)
    {
        $this->container['show_notes_in_discussion_flag'] = $show_notes_in_discussion_flag;

        return $this;
    }

    /**
     * Gets show_notes_in_internal_flag
     * @return bool
     */
    public function getShowNotesInInternalFlag()
    {
        return $this->container['show_notes_in_internal_flag'];
    }

    /**
     * Sets show_notes_in_internal_flag
     * @param bool $show_notes_in_internal_flag
     * @return $this
     */
    public function setShowNotesInInternalFlag($show_notes_in_internal_flag)
    {
        $this->container['show_notes_in_internal_flag'] = $show_notes_in_internal_flag;

        return $this;
    }

    /**
     * Gets show_notes_in_resolution_flag
     * @return bool
     */
    public function getShowNotesInResolutionFlag()
    {
        return $this->container['show_notes_in_resolution_flag'];
    }

    /**
     * Sets show_notes_in_resolution_flag
     * @param bool $show_notes_in_resolution_flag
     * @return $this
     */
    public function setShowNotesInResolutionFlag($show_notes_in_resolution_flag)
    {
        $this->container['show_notes_in_resolution_flag'] = $show_notes_in_resolution_flag;

        return $this;
    }

    /**
     * Gets email_notes_to_contact_flag
     * @return bool
     */
    public function getEmailNotesToContactFlag()
    {
        return $this->container['email_notes_to_contact_flag'];
    }

    /**
     * Sets email_notes_to_contact_flag
     * @param bool $email_notes_to_contact_flag
     * @return $this
     */
    public function setEmailNotesToContactFlag($email_notes_to_contact_flag)
    {
        $this->container['email_notes_to_contact_flag'] = $email_notes_to_contact_flag;

        return $this;
    }

    /**
     * Gets email_notes_to_resources_flag
     * @return bool
     */
    public function getEmailNotesToResourcesFlag()
    {
        return $this->container['email_notes_to_resources_flag'];
    }

    /**
     * Sets email_notes_to_resources_flag
     * @param bool $email_notes_to_resources_flag
     * @return $this
     */
    public function setEmailNotesToResourcesFlag($email_notes_to_resources_flag)
    {
        $this->container['email_notes_to_resources_flag'] = $email_notes_to_resources_flag;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Time\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Time\ObjectSerializer::sanitizeForSerialization($this));
    }
}


