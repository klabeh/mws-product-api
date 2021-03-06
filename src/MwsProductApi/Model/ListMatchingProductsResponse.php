<?php namespace RaffW\MwsProductApi\Model;

/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 *
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 *           Library Version: 2014-10-20
 *           Generated: Fri Oct 17 17:59:56 GMT 2014
 */

use RaffW\MwsProductApi\MwsProductsModel;

/**
 * ListMatchingProductsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListMatchingProductsResult: ListMatchingProductsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class ListMatchingProductsResponse extends MwsProductsModel {

    public function __construct($data = null)
    {
        $this->_fields = [
            'ListMatchingProductsResult' => [
                'FieldValue' => null,
                'FieldType' => 'ListMatchingProductsResult'
            ],
            'ResponseMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'ResponseMetadata'
            ],
            'ResponseHeaderMetadata' => [
                'FieldValue' => null,
                'FieldType' => 'ResponseHeaderMetadata'
            ],
        ];

        parent::__construct($data);
    }

    /**
     * Construct ListMatchingProductsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListMatchingProductsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMatchingProductsResponse']");
        if ($response->length == 1)
        {
            return new ListMatchingProductsResponse(($response->item(0)));
        }
        else
        {
            throw new \Exception ("Unable to construct ListMatchingProductsResponse from provided XML.
                                  Make sure that ListMatchingProductsResponse is a root element");
        }
    }

    /**
     * Get the value of the ListMatchingProductsResult property.
     *
     * @return ListMatchingProductsResult ListMatchingProductsResult.
     */
    public function getListMatchingProductsResult()
    {
        return $this->_fields['ListMatchingProductsResult']['FieldValue'];
    }

    /**
     * Check to see if ListMatchingProductsResult is set.
     *
     * @return true if ListMatchingProductsResult is set.
     */
    public function isSetListMatchingProductsResult()
    {
        return ! is_null($this->_fields['ListMatchingProductsResult']['FieldValue']);
    }

    /**
     * Set the value of ListMatchingProductsResult, return this.
     *
     * @param listMatchingProductsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListMatchingProductsResult($value)
    {
        $this->setListMatchingProductsResult($value);

        return $this;
    }

    /**
     * Set the value of the ListMatchingProductsResult property.
     *
     * @param ListMatchingProductsResult listMatchingProductsResult
     *
     * @return this instance
     */
    public function setListMatchingProductsResult($value)
    {
        $this->_fields['ListMatchingProductsResult']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return ! is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     *
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return ! is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);

        return $this;
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     *
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;

        return $this;
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ListMatchingProductsResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMatchingProductsResponse>";

        return $xml;
    }

}
