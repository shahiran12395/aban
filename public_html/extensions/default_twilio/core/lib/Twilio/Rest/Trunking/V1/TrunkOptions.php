<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Trunking\V1;

use Twilio\Options;
use Twilio\Values;

abstract class TrunkOptions
{
    /**
     * @param string  $friendlyName           The friendly_name
     * @param string  $domainName             The domain_name
     * @param string  $disasterRecoveryUrl    The disaster_recovery_url
     * @param string  $disasterRecoveryMethod The disaster_recovery_method
     * @param string  $recording              The recording
     * @param boolean $secure                 The secure
     *
     * @return CreateTrunkOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE)
    {
        return new CreateTrunkOptions($friendlyName, $domainName, $disasterRecoveryUrl, $disasterRecoveryMethod, $recording, $secure);
    }

    /**
     * @param string  $friendlyName           The friendly_name
     * @param string  $domainName             The domain_name
     * @param string  $disasterRecoveryUrl    The disaster_recovery_url
     * @param string  $disasterRecoveryMethod The disaster_recovery_method
     * @param string  $recording              The recording
     * @param boolean $secure                 The secure
     *
     * @return UpdateTrunkOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE)
    {
        return new UpdateTrunkOptions($friendlyName, $domainName, $disasterRecoveryUrl, $disasterRecoveryMethod, $recording, $secure);
    }
}

class CreateTrunkOptions extends Options
{
    /**
     * @param string  $friendlyName           The friendly_name
     * @param string  $domainName             The domain_name
     * @param string  $disasterRecoveryUrl    The disaster_recovery_url
     * @param string  $disasterRecoveryMethod The disaster_recovery_method
     * @param string  $recording              The recording
     * @param boolean $secure                 The secure
     */
    public function __construct($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['domainName'] = $domainName;
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        $this->options['recording'] = $recording;
        $this->options['secure'] = $secure;
    }

    /**
     * The friendly_name
     *
     * @param string $friendlyName The friendly_name
     *
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The domain_name
     *
     * @param string $domainName The domain_name
     *
     * @return $this Fluent Builder
     */
    public function setDomainName($domainName)
    {
        $this->options['domainName'] = $domainName;
        return $this;
    }

    /**
     * The disaster_recovery_url
     *
     * @param string $disasterRecoveryUrl The disaster_recovery_url
     *
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryUrl($disasterRecoveryUrl)
    {
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        return $this;
    }

    /**
     * The disaster_recovery_method
     *
     * @param string $disasterRecoveryMethod The disaster_recovery_method
     *
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryMethod($disasterRecoveryMethod)
    {
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        return $this;
    }

    /**
     * The recording
     *
     * @param string $recording The recording
     *
     * @return $this Fluent Builder
     */
    public function setRecording($recording)
    {
        $this->options['recording'] = $recording;
        return $this;
    }

    /**
     * The secure
     *
     * @param boolean $secure The secure
     *
     * @return $this Fluent Builder
     */
    public function setSecure($secure)
    {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Trunking.V1.CreateTrunkOptions '.implode(' ', $options).']';
    }
}

class UpdateTrunkOptions extends Options
{
    /**
     * @param string  $friendlyName           The friendly_name
     * @param string  $domainName             The domain_name
     * @param string  $disasterRecoveryUrl    The disaster_recovery_url
     * @param string  $disasterRecoveryMethod The disaster_recovery_method
     * @param string  $recording              The recording
     * @param boolean $secure                 The secure
     */
    public function __construct($friendlyName = Values::NONE, $domainName = Values::NONE, $disasterRecoveryUrl = Values::NONE, $disasterRecoveryMethod = Values::NONE, $recording = Values::NONE, $secure = Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['domainName'] = $domainName;
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        $this->options['recording'] = $recording;
        $this->options['secure'] = $secure;
    }

    /**
     * The friendly_name
     *
     * @param string $friendlyName The friendly_name
     *
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName)
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The domain_name
     *
     * @param string $domainName The domain_name
     *
     * @return $this Fluent Builder
     */
    public function setDomainName($domainName)
    {
        $this->options['domainName'] = $domainName;
        return $this;
    }

    /**
     * The disaster_recovery_url
     *
     * @param string $disasterRecoveryUrl The disaster_recovery_url
     *
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryUrl($disasterRecoveryUrl)
    {
        $this->options['disasterRecoveryUrl'] = $disasterRecoveryUrl;
        return $this;
    }

    /**
     * The disaster_recovery_method
     *
     * @param string $disasterRecoveryMethod The disaster_recovery_method
     *
     * @return $this Fluent Builder
     */
    public function setDisasterRecoveryMethod($disasterRecoveryMethod)
    {
        $this->options['disasterRecoveryMethod'] = $disasterRecoveryMethod;
        return $this;
    }

    /**
     * The recording
     *
     * @param string $recording The recording
     *
     * @return $this Fluent Builder
     */
    public function setRecording($recording)
    {
        $this->options['recording'] = $recording;
        return $this;
    }

    /**
     * The secure
     *
     * @param boolean $secure The secure
     *
     * @return $this Fluent Builder
     */
    public function setSecure($secure)
    {
        $this->options['secure'] = $secure;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Trunking.V1.UpdateTrunkOptions '.implode(' ', $options).']';
    }
}