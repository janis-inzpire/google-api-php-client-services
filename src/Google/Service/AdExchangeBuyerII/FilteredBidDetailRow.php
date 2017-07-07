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

class Google_Service_AdExchangeBuyerII_FilteredBidDetailRow extends Google_Model
{
  protected $bidCountType = 'Google_Service_AdExchangeBuyerII_MetricValue';
  protected $bidCountDataType = '';
  public $detailId;
  protected $rowDimensionsType = 'Google_Service_AdExchangeBuyerII_RowDimensions';
  protected $rowDimensionsDataType = '';

  public function setBidCount(Google_Service_AdExchangeBuyerII_MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  public function getBidCount()
  {
    return $this->bidCount;
  }
  public function setDetailId($detailId)
  {
    $this->detailId = $detailId;
  }
  public function getDetailId()
  {
    return $this->detailId;
  }
  public function setRowDimensions(Google_Service_AdExchangeBuyerII_RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}