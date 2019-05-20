<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Pause extends TwiML {
    /**
     * Pause constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = array()) {
        parent::__construct('Pause', null, $attributes);
    }

    /**
     * Add Length attribute.
     *
     * @param int $length Length in seconds to pause
     * @return static $this.
     */
    public function setLength($length) {
        return $this->setAttribute('length', $length);
    }
}
