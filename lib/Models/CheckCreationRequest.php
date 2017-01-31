<?php
/**
 * CheckCreationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit background checking requests
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Onfido\Models;

use \ArrayAccess;

/**
 * CheckCreationRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Onfido
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckCreationRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckCreationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'redirect_uri' => 'string',
        'reports' => '\Onfido\Models\Report[]',
        'report_type_groups' => 'string[]',
        'criminal_history_report_details' => 'object',
        'tags' => 'string[]',
        'suppress_form_emails' => 'bool',
        'charge_applicant_for_check' => 'bool'
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
        'type' => 'type',
        'redirect_uri' => 'redirect_uri',
        'reports' => 'reports',
        'report_type_groups' => 'report_type_groups',
        'criminal_history_report_details' => 'criminal_history_report_details',
        'tags' => 'tags',
        'suppress_form_emails' => 'suppress_form_emails',
        'charge_applicant_for_check' => 'charge_applicant_for_check'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'redirect_uri' => 'setRedirectUri',
        'reports' => 'setReports',
        'report_type_groups' => 'setReportTypeGroups',
        'criminal_history_report_details' => 'setCriminalHistoryReportDetails',
        'tags' => 'setTags',
        'suppress_form_emails' => 'setSuppressFormEmails',
        'charge_applicant_for_check' => 'setChargeApplicantForCheck'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'redirect_uri' => 'getRedirectUri',
        'reports' => 'getReports',
        'report_type_groups' => 'getReportTypeGroups',
        'criminal_history_report_details' => 'getCriminalHistoryReportDetails',
        'tags' => 'getTags',
        'suppress_form_emails' => 'getSuppressFormEmails',
        'charge_applicant_for_check' => 'getChargeApplicantForCheck'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['reports'] = isset($data['reports']) ? $data['reports'] : null;
        $this->container['report_type_groups'] = isset($data['report_type_groups']) ? $data['report_type_groups'] : null;
        $this->container['criminal_history_report_details'] = isset($data['criminal_history_report_details']) ? $data['criminal_history_report_details'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['suppress_form_emails'] = isset($data['suppress_form_emails']) ? $data['suppress_form_emails'] : null;
        $this->container['charge_applicant_for_check'] = isset($data['charge_applicant_for_check']) ? $data['charge_applicant_for_check'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type standard or express
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets redirect_uri
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     * @param string $redirect_uri For standard checks, redirect to this URI when the applicant has submitted their data.
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets reports
     * @return \Onfido\Models\Report[]
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     * @param \Onfido\Models\Report[] $reports Array of Reports being requested for this check.
     * @return $this
     */
    public function setReports($reports)
    {
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets report_type_groups
     * @return string[]
     */
    public function getReportTypeGroups()
    {
        return $this->container['report_type_groups'];
    }

    /**
     * Sets report_type_groups
     * @param string[] $report_type_groups Array containing ids of the Report type groups being requested for.
     * @return $this
     */
    public function setReportTypeGroups($report_type_groups)
    {
        $this->container['report_type_groups'] = $report_type_groups;

        return $this;
    }

    /**
     * Gets criminal_history_report_details
     * @return object
     */
    public function getCriminalHistoryReportDetails()
    {
        return $this->container['criminal_history_report_details'];
    }

    /**
     * Sets criminal_history_report_details
     * @param object $criminal_history_report_details Hash containing properties required for standard or enhanced UK criminal history reports. Only required for checks containing these specific reports. See Criminal history report details arguments.
     * @return $this
     */
    public function setCriminalHistoryReportDetails($criminal_history_report_details)
    {
        $this->container['criminal_history_report_details'] = $criminal_history_report_details;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags Array of tags being assigned to this check.
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets suppress_form_emails
     * @return bool
     */
    public function getSuppressFormEmails()
    {
        return $this->container['suppress_form_emails'];
    }

    /**
     * Sets suppress_form_emails
     * @param bool $suppress_form_emails For standard checks, applicant form will not be automatically sent if this is set to true. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Defaults to false (i.e., form will be sent automatically by default).
     * @return $this
     */
    public function setSuppressFormEmails($suppress_form_emails)
    {
        $this->container['suppress_form_emails'] = $suppress_form_emails;

        return $this;
    }

    /**
     * Gets charge_applicant_for_check
     * @return bool
     */
    public function getChargeApplicantForCheck()
    {
        return $this->container['charge_applicant_for_check'];
    }

    /**
     * Sets charge_applicant_for_check
     * @param bool $charge_applicant_for_check For standard checks, applicants will be presented with a mandatory payment screen before they can submit the applicant form, if this is set to true. In this case, your account will not be charged. Defaults to false.
     * @return $this
     */
    public function setChargeApplicantForCheck($charge_applicant_for_check)
    {
        $this->container['charge_applicant_for_check'] = $charge_applicant_for_check;

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
            return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Onfido\ObjectSerializer::sanitizeForSerialization($this));
    }
}