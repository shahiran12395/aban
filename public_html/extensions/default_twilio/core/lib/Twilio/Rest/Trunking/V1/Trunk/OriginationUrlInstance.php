<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Trunking\V1\Trunk;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string    accountSid
 * @property string    sid
 * @property string    trunkSid
 * @property integer   weight
 * @property boolean   enabled
 * @property string    sipUrl
 * @property string    friendlyName
 * @property integer   priority
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string    url
 */
class OriginationUrlInstance extends InstanceResource
{
    /**
     * Initialize the OriginationUrlInstance
     *
     * @param \Twilio\Version $version  Version that contains the resource
     * @param mixed[]         $payload  The response payload
     * @param string          $trunkSid The trunk_sid
     * @param string          $sid      The sid
     *
     * @return \Twilio\Rest\Trunking\V1\Trunk\OriginationUrlInstance
     */
    public function __construct(Version $version, array $payload, $trunkSid, $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid'   => Values::array_get($payload, 'account_sid'),
            'sid'          => Values::array_get($payload, 'sid'),
            'trunkSid'     => Values::array_get($payload, 'trunk_sid'),
            'weight'       => Values::array_get($payload, 'weight'),
            'enabled'      => Values::array_get($payload, 'enabled'),
            'sipUrl'       => Values::array_get($payload, 'sip_url'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'priority'     => Values::array_get($payload, 'priority'),
            'dateCreated'  => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated'  => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url'          => Values::array_get($payload, 'url'),
        );

        $this->solution = array('trunkSid' => $trunkSid, 'sid' => $sid ?: $this->properties['sid'],);
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Trunking\V1\Trunk\OriginationUrlContext Context for
     *                                                              this
     *                                                              OriginationUrlInstance
     */
    protected function proxy()
    {
        if (!$this->context) {
            $this->context = new OriginationUrlContext(
                $this->version,
                $this->solution['trunkSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a OriginationUrlInstance
     *
     * @return OriginationUrlInstance Fetched OriginationUrlInstance
     */
    public function fetch()
    {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the OriginationUrlInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete()
    {
        return $this->proxy()->delete();
    }

    /**
     * Update the OriginationUrlInstance
     *
     * @param array|Options $options Optional Arguments
     *
     * @return OriginationUrlInstance Updated OriginationUrlInstance
     */
    public function update($options = array())
    {
        return $this->proxy()->update($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     *
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_'.$name)) {
            $method = 'get'.ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: '.$name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Trunking.V1.OriginationUrlInstance '.implode(' ', $context).']';
    }
}