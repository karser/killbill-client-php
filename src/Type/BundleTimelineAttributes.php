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
 * BundleTimelineAttributes
 */
class BundleTimelineAttributes extends \Killbill\Client\AbstractResource
{
    /** @var mixed|null */
    protected $accountId = null;
    /** @var mixed|null */
    protected $bundleId = null;
    /** @var string|null */
    protected $externalKey = null;
    /** @var EventSubscriptionAttributes[]|null */
    protected $events = null;
    /** @var AuditLogAttributes[]|null */
    protected $auditLogs = null;

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
     * @param mixed|null $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;
    }

    /**
     * @return mixed|null
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * @param string|null $externalKey
     */
    public function setExternalKey($externalKey)
    {
        $this->externalKey = $externalKey;
    }

    /**
     * @return string|null
     */
    public function getExternalKey()
    {
        return $this->externalKey;
    }

    /**
     * @param EventSubscriptionAttributes[]|null $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }

    /**
     * @return EventSubscriptionAttributes[]|null
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @return string
     */
    public function getEventsType()
    {
        return EventSubscriptionAttributes::class;
    }

    /**
     * @param AuditLogAttributes[]|null $auditLogs
     */
    public function setAuditLogs($auditLogs)
    {
        $this->auditLogs = $auditLogs;
    }

    /**
     * @return AuditLogAttributes[]|null
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

    /**
     * @return string
     */
    public function getAuditLogsType()
    {
        return AuditLogAttributes::class;
    }

}
