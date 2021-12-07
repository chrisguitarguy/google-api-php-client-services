<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsVersioningV1mainWorkloadSaaEnrollmentResponse extends \Google\Collection
{
  protected $collection_key = 'setupErrors';
  public $setupErrors;
  public $setupStatus;

  public function setSetupErrors($setupErrors)
  {
    $this->setupErrors = $setupErrors;
  }
  public function getSetupErrors()
  {
    return $this->setupErrors;
  }
  public function setSetupStatus($setupStatus)
  {
    $this->setupStatus = $setupStatus;
  }
  public function getSetupStatus()
  {
    return $this->setupStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsVersioningV1mainWorkloadSaaEnrollmentResponse::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsVersioningV1mainWorkloadSaaEnrollmentResponse');
