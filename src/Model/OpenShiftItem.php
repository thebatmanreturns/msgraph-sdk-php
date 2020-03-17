<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShiftItem File
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
* OpenShiftItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OpenShiftItem extends ShiftItem
{
    /**
    * Gets the openSlotCount
    *
    * @return int The openSlotCount
    */
    public function getOpenSlotCount()
    {
        if (array_key_exists("openSlotCount", $this->_propDict)) {
            return $this->_propDict["openSlotCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the openSlotCount
    *
    * @param int $val The value of the openSlotCount
    *
    * @return OpenShiftItem
    */
    public function setOpenSlotCount($val)
    {
        $this->_propDict["openSlotCount"] = $val;
        return $this;
    }
}