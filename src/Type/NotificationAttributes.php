<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * NotificationAttributes
 */
class NotificationAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $eventType = null;
    /** @var mixed|null */
    protected $accountId = null;
    /** @var string|null */
    protected $objectType = null;
    /** @var mixed|null */
    protected $objectId = null;
    /** @var string|null */
    protected $metaData = null;

    /**
     * @param string|null $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string|null
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param mixed|null $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string|null $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param mixed|null $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }

    /**
     * @return mixed|null
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param string|null $metaData
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;
    }

    /**
     * @return string|null
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

}
