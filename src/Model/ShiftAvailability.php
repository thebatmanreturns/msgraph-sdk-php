<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShiftAvailability File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ShiftAvailability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ShiftAvailability extends Entity
{

    /**
    * Gets the recurrence
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }

    /**
    * Sets the recurrence
    *
    * @param PatternedRecurrence $val The value to assign to the recurrence
    *
    * @return ShiftAvailability The ShiftAvailability
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
         return $this;
    }
    /**
    * Gets the timeZone
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    *
    * @param string $val The value of the timeZone
    *
    * @return ShiftAvailability
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }

    /**
    * Gets the timeSlots
    *
    * @return TimeRange The timeSlots
    */
    public function getTimeSlots()
    {
        if (array_key_exists("timeSlots", $this->_propDict)) {
            if (is_a($this->_propDict["timeSlots"], "Microsoft\Graph\Model\TimeRange")) {
                return $this->_propDict["timeSlots"];
            } else {
                $this->_propDict["timeSlots"] = new TimeRange($this->_propDict["timeSlots"]);
                return $this->_propDict["timeSlots"];
            }
        }
        return null;
    }

    /**
    * Sets the timeSlots
    *
    * @param TimeRange $val The value to assign to the timeSlots
    *
    * @return ShiftAvailability The ShiftAvailability
    */
    public function setTimeSlots($val)
    {
        $this->_propDict["timeSlots"] = $val;
         return $this;
    }
}