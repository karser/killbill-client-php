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

class RoleDefinitionAttributes extends \Killbill\Client\Resource
{
    /** @var string|null */
    protected $role = null;
    /** @var array|null */
    protected $permissions = null;

    /**
     * @param string|null $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param array|null $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return array|null
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

}
