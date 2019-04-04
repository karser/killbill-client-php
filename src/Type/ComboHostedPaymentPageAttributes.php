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
 * ComboHostedPaymentPageAttributes
 */
class ComboHostedPaymentPageAttributes extends \Killbill\Client\AbstractResource
{
    /** @var AccountAttributes|null */
    protected $account = null;
    /** @var PaymentMethodAttributes|null */
    protected $paymentMethod = null;
    /** @var HostedPaymentPageFieldsAttributes|null */
    protected $hostedPaymentPageFields = null;
    /** @var PluginPropertyAttributes[]|null */
    protected $paymentMethodPluginProperties = null;
    /** @var AuditLogAttributes[]|null */
    protected $auditLogs = null;

    /**
     * @param AccountAttributes|null $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return AccountAttributes|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return AccountAttributes::class;
    }

    /**
     * @param PaymentMethodAttributes|null $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return PaymentMethodAttributes|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @return string
     */
    public function getPaymentMethodType()
    {
        return PaymentMethodAttributes::class;
    }

    /**
     * @param HostedPaymentPageFieldsAttributes|null $hostedPaymentPageFields
     */
    public function setHostedPaymentPageFields($hostedPaymentPageFields)
    {
        $this->hostedPaymentPageFields = $hostedPaymentPageFields;
    }

    /**
     * @return HostedPaymentPageFieldsAttributes|null
     */
    public function getHostedPaymentPageFields()
    {
        return $this->hostedPaymentPageFields;
    }

    /**
     * @return string
     */
    public function getHostedPaymentPageFieldsType()
    {
        return HostedPaymentPageFieldsAttributes::class;
    }

    /**
     * @param PluginPropertyAttributes[]|null $paymentMethodPluginProperties
     */
    public function setPaymentMethodPluginProperties($paymentMethodPluginProperties)
    {
        $this->paymentMethodPluginProperties = $paymentMethodPluginProperties;
    }

    /**
     * @return PluginPropertyAttributes[]|null
     */
    public function getPaymentMethodPluginProperties()
    {
        return $this->paymentMethodPluginProperties;
    }

    /**
     * @return string
     */
    public function getPaymentMethodPluginPropertiesType()
    {
        return PluginPropertyAttributes::class;
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
