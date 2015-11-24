<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class ApplicationList extends ListResource {
    /**
     * Construct the ApplicationList
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid A string that uniquely identifies this resource
     * @return ApplicationList 
     */
    public function __construct(Version $version, $accountSid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
        );
        $this->uri = '/Accounts/' . $accountSid . '/Applications.json';
    }

    /**
     * Create a new ApplicationInstance
     * 
     * @param string $friendlyName Human readable description of this resource
     * @return ApplicationInstance Newly created ApplicationInstance
     */
    public function create($friendlyName, $options) {
        $data = Values::of(array(
            'FriendlyName' => $friendlyName,
            'ApiVersion' => $options['apiVersion'],
            'VoiceUrl' => $options['voiceUrl'],
            'VoiceMethod' => $options['voiceMethod'],
            'VoiceFallbackUrl' => $options['voiceFallbackUrl'],
            'VoiceFallbackMethod' => $options['voiceFallbackMethod'],
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
            'VoiceCallerIdLookup' => $options['voiceCallerIdLookup'],
            'SmsUrl' => $options['smsUrl'],
            'SmsMethod' => $options['smsMethod'],
            'SmsFallbackUrl' => $options['smsFallbackUrl'],
            'SmsFallbackMethod' => $options['smsFallbackMethod'],
            'SmsStatusCallback' => $options['smsStatusCallback'],
            'MessageStatusCallback' => $options['messageStatusCallback'],
        ));
        
        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new ApplicationInstance(
            $this->version,
            $payload,
            $this->solution['accountSid']
        );
    }

    /**
     * Constructs a ApplicationContext
     * 
     * @param string $sid Fetch by unique Application Sid
     * @return ApplicationContext 
     */
    public function getContext($sid) {
        return new ApplicationContext(
            $this->version,
            $this->solution['accountSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.ApplicationList]';
    }
}