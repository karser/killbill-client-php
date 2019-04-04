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
 * PaymentAttributes
 */
class PaymentAttributes extends \Killbill\Client\AbstractResource
{
    /** @var mixed|null */
    protected $accountId = null;
    /** @var mixed|null */
    protected $paymentId = null;
    /** @var string|null */
    protected $paymentNumber = null;
    /** @var string|null */
    protected $paymentExternalKey = null;
    /** @var float|null */
    protected $authAmount = null;
    /** @var float|null */
    protected $capturedAmount = null;
    /** @var float|null */
    protected $purchasedAmount = null;
    /** @var float|null */
    protected $refundedAmount = null;
    /** @var float|null */
    protected $creditedAmount = null;
    /** @var mixed|null */
    protected $currency = null;
    /** @var mixed|null */
    protected $paymentMethodId = null;
    /** @var PaymentTransactionAttributes[]|null */
    protected $transactions = null;
    /** @var PaymentAttemptAttributes[]|null */
    protected $paymentAttempts = null;
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
     * @param mixed|null $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return mixed|null
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $paymentNumber
     */
    public function setPaymentNumber($paymentNumber)
    {
        $this->paymentNumber = $paymentNumber;
    }

    /**
     * @return string|null
     */
    public function getPaymentNumber()
    {
        return $this->paymentNumber;
    }

    /**
     * @param string|null $paymentExternalKey
     */
    public function setPaymentExternalKey($paymentExternalKey)
    {
        $this->paymentExternalKey = $paymentExternalKey;
    }

    /**
     * @return string|null
     */
    public function getPaymentExternalKey()
    {
        return $this->paymentExternalKey;
    }

    /**
     * @param float|null $authAmount
     */
    public function setAuthAmount($authAmount)
    {
        $this->authAmount = $authAmount;
    }

    /**
     * @return float|null
     */
    public function getAuthAmount()
    {
        return $this->authAmount;
    }

    /**
     * @param float|null $capturedAmount
     */
    public function setCapturedAmount($capturedAmount)
    {
        $this->capturedAmount = $capturedAmount;
    }

    /**
     * @return float|null
     */
    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    /**
     * @param float|null $purchasedAmount
     */
    public function setPurchasedAmount($purchasedAmount)
    {
        $this->purchasedAmount = $purchasedAmount;
    }

    /**
     * @return float|null
     */
    public function getPurchasedAmount()
    {
        return $this->purchasedAmount;
    }

    /**
     * @param float|null $refundedAmount
     */
    public function setRefundedAmount($refundedAmount)
    {
        $this->refundedAmount = $refundedAmount;
    }

    /**
     * @return float|null
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * @param float|null $creditedAmount
     */
    public function setCreditedAmount($creditedAmount)
    {
        $this->creditedAmount = $creditedAmount;
    }

    /**
     * @return float|null
     */
    public function getCreditedAmount()
    {
        return $this->creditedAmount;
    }

    /**
     * @param mixed|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed|null $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return mixed|null
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param PaymentTransactionAttributes[]|null $transactions
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @return PaymentTransactionAttributes[]|null
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @return string
     */
    public function getTransactionsType()
    {
        return PaymentTransactionAttributes::class;
    }

    /**
     * @param PaymentAttemptAttributes[]|null $paymentAttempts
     */
    public function setPaymentAttempts($paymentAttempts)
    {
        $this->paymentAttempts = $paymentAttempts;
    }

    /**
     * @return PaymentAttemptAttributes[]|null
     */
    public function getPaymentAttempts()
    {
        return $this->paymentAttempts;
    }

    /**
     * @return string
     */
    public function getPaymentAttemptsType()
    {
        return PaymentAttemptAttributes::class;
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
