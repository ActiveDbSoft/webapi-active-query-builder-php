<?php
/**
 * Transform
 *
 * PHP version 5
 *
 * @category Class
 * @package  WebApiActiveQueryBuilder
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QueryBuilderApi
 *
 * Active Query Builder Web API lets create, analyze and modify SQL queries for different database servers using RESTful HTTP requests to a cloud-based service. It requires SQL execution context (information about database schema and used database server) to be stored under the registered account at https://webapi.activequerybuilder.com/.
 *
 * OpenAPI spec version: 1.1.3
 * Contact: support@activedbsoft.com
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

namespace WebApiActiveQueryBuilder;

use \ArrayAccess;

/**
 * Transform Class Doc Comment
 *
 * @category    Class */
 // @description SQL transformation parameters and commands.
/** 
 * @package     WebApiActiveQueryBuilder
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transform implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transform';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'guid' => 'string',
        'sql' => 'string',
        'pagination' => '\WebApiActiveQueryBuilder\Pagination',
        'totals' => '\WebApiActiveQueryBuilder\Totals[]',
        'sortings' => '\WebApiActiveQueryBuilder\Sorting[]',
        'filter' => '\WebApiActiveQueryBuilder\ConditionGroup',
        'hidden_columns' => '\WebApiActiveQueryBuilder\HiddenColumn[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'guid' => 'Guid',
        'sql' => 'Sql',
        'pagination' => 'Pagination',
        'totals' => 'Totals',
        'sortings' => 'Sortings',
        'filter' => 'Filter',
        'hidden_columns' => 'HiddenColumns'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'guid' => 'setGuid',
        'sql' => 'setSql',
        'pagination' => 'setPagination',
        'totals' => 'setTotals',
        'sortings' => 'setSortings',
        'filter' => 'setFilter',
        'hidden_columns' => 'setHiddenColumns'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'guid' => 'getGuid',
        'sql' => 'getSql',
        'pagination' => 'getPagination',
        'totals' => 'getTotals',
        'sortings' => 'getSortings',
        'filter' => 'getFilter',
        'hidden_columns' => 'getHiddenColumns'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['totals'] = isset($data['totals']) ? $data['totals'] : null;
        $this->container['sortings'] = isset($data['sortings']) ? $data['sortings'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['hidden_columns'] = isset($data['hidden_columns']) ? $data['hidden_columns'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets guid
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     * @param string $guid Unique identifier that defines SQL execution context for the given query, i.e. database server (SQL syntax rules),  database schema. The context itself must be saved in the user account on https://webapi.activequerybuilder.com/.
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets sql
     * @return string
     */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
     * Sets sql
     * @param string $sql Text of original SQL query to be transformed.
     * @return $this
     */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;

        return $this;
    }

    /**
     * Gets pagination
     * @return \WebApiActiveQueryBuilder\Pagination
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     * @param \WebApiActiveQueryBuilder\Pagination $pagination
     * @return $this
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets totals
     * @return \WebApiActiveQueryBuilder\Totals[]
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     * @param \WebApiActiveQueryBuilder\Totals[] $totals
     * @return $this
     */
    public function setTotals($totals)
    {
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets sortings
     * @return \WebApiActiveQueryBuilder\Sorting[]
     */
    public function getSortings()
    {
        return $this->container['sortings'];
    }

    /**
     * Sets sortings
     * @param \WebApiActiveQueryBuilder\Sorting[] $sortings
     * @return $this
     */
    public function setSortings($sortings)
    {
        $this->container['sortings'] = $sortings;

        return $this;
    }

    /**
     * Gets filter
     * @return \WebApiActiveQueryBuilder\ConditionGroup
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     * @param \WebApiActiveQueryBuilder\ConditionGroup $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets hidden_columns
     * @return \WebApiActiveQueryBuilder\HiddenColumn[]
     */
    public function getHiddenColumns()
    {
        return $this->container['hidden_columns'];
    }

    /**
     * Sets hidden_columns
     * @param \WebApiActiveQueryBuilder\HiddenColumn[] $hidden_columns
     * @return $this
     */
    public function setHiddenColumns($hidden_columns)
    {
        $this->container['hidden_columns'] = $hidden_columns;

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
            return json_encode(\WebApiActiveQueryBuilder\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\WebApiActiveQueryBuilder\ObjectSerializer::sanitizeForSerialization($this));
    }
}


