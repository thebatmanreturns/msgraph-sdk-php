<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DayOfWeek File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* DayOfWeek class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DayOfWeek extends Enum
{
    /**
    * The Enum DayOfWeek
    */
    const FRIDAY = "friday";
    const MONDAY = "monday";
    const SATURDAY = "saturday";
    const SUNDAY = "sunday";
    const THURSDAY = "thursday";
    const TUESDAY = "tuesday";
    const WEDNESDAY = "wednesday";
}