<?php
/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */
namespace WindowsAzure\ServiceBus\Models;
use WindowsAzure\Common\Internal\Resources;

/**
 * The base class for rule action.
 *
 * @category  Microsoft
 * @package   WindowsAzure\ServiceBus\Models
 * @author    Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      https://github.com/WindowsAzure/azure-sdk-for-php
 */

class Action
{
    /** 
     * The attributes of the filter. 
     *
     * @var array
     */ 
    protected $attributes;

    /**
     * The compatibility level.
     * 
     * @var string
     */
    private $_compatibilityLevel;

    /**
     * Creates an Action instance with default parameter. 
     */
    public function __construct()
    {
        $this->attributes              = array();
        $this->attributes['xmlns:xsi'] = Resources::XSI_XML_NAMESPACE;
    }

    /**
     * Gets the compatibility level. 
     * 
     * @return string 
     */
    public function getCompatibilityLevel()
    {
        return $this->_compatibilityLevel;
    }

    /**
     * Sets the compatibility level.
     * 
     * @param string $compatibilityLevel The level of compatibility.
     *
     * @return none
     */
    public function setCompatibilityLevel($compatibilityLevel)
    {
        $this->_compatibilityLevel = $compatibilityLevel;
    }

    /**
     * Gets the attributes. 
     *
     * @return array
     */ 
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets an attribute. 
     *
     * @param string $key   The key of the attribute.
     * @param string $value The value of the attribute.
     * 
     * @return none
     */
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }
}

