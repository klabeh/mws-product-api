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
 * OffersList
 *
 * Properties:
 * <ul>
 *
 * <li>Offer: array</li>
 *
 * </ul>
 */
class OffersList extends MwsProductsModel {

    public function __construct($data = null)
    {
        $this->_fields = [
            'Offer' => [
                'FieldValue' => [],
                'FieldType' => ['OfferType']
            ],
        ];

        parent::__construct($data);
    }

    /**
     * Get the value of the Offer property.
     *
     * @return List<OfferType> Offer.
     */
    public function getOffer()
    {
        if ($this->_fields['Offer']['FieldValue'] == null)
        {
            $this->_fields['Offer']['FieldValue'] = [];
        }

        return $this->_fields['Offer']['FieldValue'];
    }

    /**
     * Set the value of the Offer property.
     *
     * @param array offer
     *
     * @return this instance
     */
    public function setOffer($value)
    {
        if ( ! $this->_isNumericArray($value))
        {
            $value = [$value];
        }

        $this->_fields['Offer']['FieldValue'] = $value;

        return $this;
    }

    /**
     * Clear Offer.
     */
    public function unsetOffer()
    {
        $this->_fields['Offer']['FieldValue'] = [];
    }

    /**
     * Check to see if Offer is set.
     *
     * @return true if Offer is set.
     */
    public function isSetOffer()
    {
        return ! empty($this->_fields['Offer']['FieldValue']);
    }

    /**
     * Add values for Offer, return this.
     *
     * @param offer
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOffer()
    {
        foreach (func_get_args() as $Offer)
        {
            $this->_fields['Offer']['FieldValue'][] = $Offer;
        }

        return $this;
    }

}
