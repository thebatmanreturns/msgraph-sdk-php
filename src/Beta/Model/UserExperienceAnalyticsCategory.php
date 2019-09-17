<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* UserExperienceAnalyticsCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsCategory extends Entity
{
    /**
    * Gets the displayName
    * The name of the user experience analytics category.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the user experience analytics category.
    *
    * @param string $val The displayName
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the overallScore
    * The overall score of the user experience analytics category.
    *
    * @return int The overallScore
    */
    public function getOverallScore()
    {
        if (array_key_exists("overallScore", $this->_propDict)) {
            return $this->_propDict["overallScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overallScore
    * The overall score of the user experience analytics category.
    *
    * @param int $val The overallScore
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setOverallScore($val)
    {
        $this->_propDict["overallScore"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the insights
    * The insights for the user experience analytics category.
     *
     * @return array The insights
     */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
           return $this->_propDict["insights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the insights
    * The insights for the user experience analytics category.
    *
    * @param UserExperienceAnalyticsInsight $val The insights
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setInsights($val)
    {
		$this->_propDict["insights"] = $val;
        return $this;
    }
    

     /** 
     * Gets the metricValues
    * The metric values for the user experience analytics category.
     *
     * @return array The metricValues
     */
    public function getMetricValues()
    {
        if (array_key_exists("metricValues", $this->_propDict)) {
           return $this->_propDict["metricValues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the metricValues
    * The metric values for the user experience analytics category.
    *
    * @param UserExperienceAnalyticsMetric $val The metricValues
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setMetricValues($val)
    {
		$this->_propDict["metricValues"] = $val;
        return $this;
    }
    
}