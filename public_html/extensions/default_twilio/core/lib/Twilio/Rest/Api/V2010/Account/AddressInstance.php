<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string    accountSid
 * @property string    city
 * @property string    customerName
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string    friendlyName
 * @property string    isoCountry
 * @property string    postalCode
 * @property string    region
 * @property string    sid
 * @property string    street
 * @property string    uri
 * @property boolean   emergencyEnabled
 * @property boolean   validated
 */
class AddressInstance extends InstanceResource
{
    protected $_dependentPhoneNumbers = null;

    /**
     * Initialize the AddressInstance
     *
     * @param \Twilio\Version $version    Version that contains the resource
     * @param mixed[]         $payload    The response payload
     * @param string          $accountSid The account_sid
     * @param string          $sid        The sid
     *
     * @return \Twilio\Rest\Api\V2010\Account\AddressInstance
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid'       => Values::array_get($payload, 'account_sid'),
            'city'             => Values::array_get($payload, 'city'),
            'customerName'     => Values::array_get($payload, 'customer_name'),
            'dateCreated'      => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated'      => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName'     => Values::array_get($payload, 'friendly_name'),
            'isoCountry'       => Values::array_get($payload, 'iso_country'),
            'postalCode'       => Values::array_get($payload, 'postal_code'),
            'region'           => Values::array_get($payload, 'region'),
            'sid'              => Values::array_get($payload, 'sid'),
            'street'           => Values::array_get($payload, 'street'),
            'uri'              => Values::array_get($payload, 'uri'),
            'emergencyEnabled' => Values::array_get($payload, 'emergency_enabled'),
            'validated'        => Values::array_get($payload, 'validated'),
        );

        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'],);
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Api\V2010\Account\AddressContext Context for this
     *                                                       AddressInstance
     */
    protected function proxy()
    {
        if (!$this->context) {
            $this->context = new AddressContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Deletes the AddressInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete()
    {
        return $this->proxy()->delete();
    }

    /**
     * Fetch a AddressInstance
     *
     * @return AddressInstance Fetched AddressInstance
     */
    public function fetch()
    {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AddressInstance
     *
     * @param array|Options $options Optional Arguments
     *
     * @return AddressInstance Updated AddressInstance
     */
    public function update($options = array())
    {
        return $this->proxy()->update($options);
    }

    /**
     * Access the dependentPhoneNumbers
     *
     * @return \Twilio\Rest\Api\V2010\Account\Address\DependentPhoneNumberList
     */
    protected function getDependentPhoneNumbers()
    {
        return $this->proxy()->dependentPhoneNumbers;
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
        return '[Twilio.Api.V2010.AddressInstance '.implode(' ', $context).']';
    }
}