<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEvent
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var int $totalEstimatedConcurrentUsers
     */
    protected $totalEstimatedConcurrentUsers = null;

    /**
     * @var string[] $contentUrls
     */
    protected $contentUrls = null;

    /**
     * @var string[] $adTags
     */
    protected $adTags = null;

    /**
     * @var string $assetKey
     */
    protected $assetKey = null;

    /**
     * @var int $slateCreativeId
     */
    protected $slateCreativeId = null;

    /**
     * @var int $dvrWindowSeconds
     */
    protected $dvrWindowSeconds = null;

    /**
     * @var boolean $enableDaiAuthenticationKeys
     */
    protected $enableDaiAuthenticationKeys = null;

    /**
     * @var string $adBreakFillType
     */
    protected $adBreakFillType = null;

    /**
     * @var int $adHolidayDuration
     */
    protected $adHolidayDuration = null;

    /**
     * @var boolean $enableDurationlessAdBreaks
     */
    protected $enableDurationlessAdBreaks = null;

    /**
     * @var int $defaultAdBreakDuration
     */
    protected $defaultAdBreakDuration = null;

    /**
     * @var int[] $daiAuthenticationKeyIds
     */
    protected $daiAuthenticationKeyIds = null;

    /**
     * @var int[] $sourceContentConfigurationIds
     */
    protected $sourceContentConfigurationIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\HlsSettings $hlsSettings
     */
    protected $hlsSettings = null;

    /**
     * @var string $streamingFormat
     */
    protected $streamingFormat = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $status
     * @param \Google\AdsApi\AdManager\v202002\DateTime $creationDateTime
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     * @param boolean $unlimitedEndDateTime
     * @param int $totalEstimatedConcurrentUsers
     * @param string[] $contentUrls
     * @param string[] $adTags
     * @param string $assetKey
     * @param int $slateCreativeId
     * @param int $dvrWindowSeconds
     * @param boolean $enableDaiAuthenticationKeys
     * @param string $adBreakFillType
     * @param int $adHolidayDuration
     * @param boolean $enableDurationlessAdBreaks
     * @param int $defaultAdBreakDuration
     * @param int[] $daiAuthenticationKeyIds
     * @param int[] $sourceContentConfigurationIds
     * @param \Google\AdsApi\AdManager\v202002\HlsSettings $hlsSettings
     * @param string $streamingFormat
     */
    public function __construct($id = null, $name = null, $description = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $unlimitedEndDateTime = null, $totalEstimatedConcurrentUsers = null, array $contentUrls = null, array $adTags = null, $assetKey = null, $slateCreativeId = null, $dvrWindowSeconds = null, $enableDaiAuthenticationKeys = null, $adBreakFillType = null, $adHolidayDuration = null, $enableDurationlessAdBreaks = null, $defaultAdBreakDuration = null, array $daiAuthenticationKeyIds = null, array $sourceContentConfigurationIds = null, $hlsSettings = null, $streamingFormat = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->creationDateTime = $creationDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
      $this->contentUrls = $contentUrls;
      $this->adTags = $adTags;
      $this->assetKey = $assetKey;
      $this->slateCreativeId = $slateCreativeId;
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      $this->enableDaiAuthenticationKeys = $enableDaiAuthenticationKeys;
      $this->adBreakFillType = $adBreakFillType;
      $this->adHolidayDuration = $adHolidayDuration;
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      $this->defaultAdBreakDuration = $defaultAdBreakDuration;
      $this->daiAuthenticationKeyIds = $daiAuthenticationKeyIds;
      $this->sourceContentConfigurationIds = $sourceContentConfigurationIds;
      $this->hlsSettings = $hlsSettings;
      $this->streamingFormat = $streamingFormat;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedEndDateTime()
    {
      return $this->unlimitedEndDateTime;
    }

    /**
     * @param boolean $unlimitedEndDateTime
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalEstimatedConcurrentUsers()
    {
      return $this->totalEstimatedConcurrentUsers;
    }

    /**
     * @param int $totalEstimatedConcurrentUsers
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setTotalEstimatedConcurrentUsers($totalEstimatedConcurrentUsers)
    {
      $this->totalEstimatedConcurrentUsers = (!is_null($totalEstimatedConcurrentUsers) && PHP_INT_SIZE === 4)
          ? floatval($totalEstimatedConcurrentUsers) : $totalEstimatedConcurrentUsers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContentUrls()
    {
      return $this->contentUrls;
    }

    /**
     * @param string[]|null $contentUrls
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setContentUrls(array $contentUrls = null)
    {
      $this->contentUrls = $contentUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdTags()
    {
      return $this->adTags;
    }

    /**
     * @param string[]|null $adTags
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setAdTags(array $adTags = null)
    {
      $this->adTags = $adTags;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetKey()
    {
      return $this->assetKey;
    }

    /**
     * @param string $assetKey
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setAssetKey($assetKey)
    {
      $this->assetKey = $assetKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getSlateCreativeId()
    {
      return $this->slateCreativeId;
    }

    /**
     * @param int $slateCreativeId
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setSlateCreativeId($slateCreativeId)
    {
      $this->slateCreativeId = (!is_null($slateCreativeId) && PHP_INT_SIZE === 4)
          ? floatval($slateCreativeId) : $slateCreativeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDvrWindowSeconds()
    {
      return $this->dvrWindowSeconds;
    }

    /**
     * @param int $dvrWindowSeconds
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setDvrWindowSeconds($dvrWindowSeconds)
    {
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDaiAuthenticationKeys()
    {
      return $this->enableDaiAuthenticationKeys;
    }

    /**
     * @param boolean $enableDaiAuthenticationKeys
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setEnableDaiAuthenticationKeys($enableDaiAuthenticationKeys)
    {
      $this->enableDaiAuthenticationKeys = $enableDaiAuthenticationKeys;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdBreakFillType()
    {
      return $this->adBreakFillType;
    }

    /**
     * @param string $adBreakFillType
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setAdBreakFillType($adBreakFillType)
    {
      $this->adBreakFillType = $adBreakFillType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdHolidayDuration()
    {
      return $this->adHolidayDuration;
    }

    /**
     * @param int $adHolidayDuration
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setAdHolidayDuration($adHolidayDuration)
    {
      $this->adHolidayDuration = (!is_null($adHolidayDuration) && PHP_INT_SIZE === 4)
          ? floatval($adHolidayDuration) : $adHolidayDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDurationlessAdBreaks()
    {
      return $this->enableDurationlessAdBreaks;
    }

    /**
     * @param boolean $enableDurationlessAdBreaks
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setEnableDurationlessAdBreaks($enableDurationlessAdBreaks)
    {
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultAdBreakDuration()
    {
      return $this->defaultAdBreakDuration;
    }

    /**
     * @param int $defaultAdBreakDuration
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setDefaultAdBreakDuration($defaultAdBreakDuration)
    {
      $this->defaultAdBreakDuration = (!is_null($defaultAdBreakDuration) && PHP_INT_SIZE === 4)
          ? floatval($defaultAdBreakDuration) : $defaultAdBreakDuration;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getDaiAuthenticationKeyIds()
    {
      return $this->daiAuthenticationKeyIds;
    }

    /**
     * @param int[]|null $daiAuthenticationKeyIds
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setDaiAuthenticationKeyIds(array $daiAuthenticationKeyIds = null)
    {
      $this->daiAuthenticationKeyIds = $daiAuthenticationKeyIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSourceContentConfigurationIds()
    {
      return $this->sourceContentConfigurationIds;
    }

    /**
     * @param int[]|null $sourceContentConfigurationIds
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setSourceContentConfigurationIds(array $sourceContentConfigurationIds = null)
    {
      $this->sourceContentConfigurationIds = $sourceContentConfigurationIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\HlsSettings
     */
    public function getHlsSettings()
    {
      return $this->hlsSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\HlsSettings $hlsSettings
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setHlsSettings($hlsSettings)
    {
      $this->hlsSettings = $hlsSettings;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreamingFormat()
    {
      return $this->streamingFormat;
    }

    /**
     * @param string $streamingFormat
     * @return \Google\AdsApi\AdManager\v202002\LiveStreamEvent
     */
    public function setStreamingFormat($streamingFormat)
    {
      $this->streamingFormat = $streamingFormat;
      return $this;
    }

}
