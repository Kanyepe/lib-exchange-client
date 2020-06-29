<?php
/**
 * OrderStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  com.blockchain.exchange.rest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blockchain.com Exchange REST API
 *
 * ## Introduction Welcome to Blockchain.com's Exchange API and developer documentation. These documents detail and give examples of various functionality offered by the API such as receiving real time market data, requesting balance information and performing trades. ## To Get Started Create or log into your existing Blockchain.com Exchange account Select API from the drop down menu Fill out form and click “Create New API Key Now” Once generated you can view your keys under API Settings
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.blockchain.exchange.rest\com.blockchain.exchange.rest.model;
use \com.blockchain.exchange.rest\ObjectSerializer;

/**
 * OrderStatus Class Doc Comment
 *
 * @category Class
 * @package  com.blockchain.exchange.rest
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatus
{
    /**
     * Possible values of this enum
     */
    const OPEN = 'OPEN';
    const REJECTED = 'REJECTED';
    const CANCELED = 'CANCELED';
    const FILLED = 'FILLED';
    const EXPIRED = 'EXPIRED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
            self::REJECTED,
            self::CANCELED,
            self::FILLED,
            self::EXPIRED,
        ];
    }
}

