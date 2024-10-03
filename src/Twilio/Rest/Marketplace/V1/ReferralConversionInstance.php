<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Marketplace
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Marketplace\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $convertedAccountSid
 */
class ReferralConversionInstance extends InstanceResource
{
    /**
     * Initialize the ReferralConversionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'convertedAccountSid' => Values::array_get($payload, 'converted_account_sid'),
        ];

        $this->solution = [];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ReferralConversionContext Context for this ReferralConversionInstance
     */
    protected function proxy(): ReferralConversionContext
    {
        if (!$this->context) {
            $this->context = new ReferralConversionContext(
                $this->version
            );
        }

        return $this->context;
    }

    /**
     * Create the ReferralConversionInstance
     *
     * @param CreateReferralConversionRequest $createReferralConversionRequest
     * @return ReferralConversionInstance Created ReferralConversionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(CreateReferralConversionRequest $createReferralConversionRequest): ReferralConversionInstance
    {

        return $this->proxy()->create($createReferralConversionRequest);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Marketplace.V1.ReferralConversionInstance ' . \implode(' ', $context) . ']';
    }
}
