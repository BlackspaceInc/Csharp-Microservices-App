<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Hipstershop;

/**
 * ---------------Recommendation service----------
 *
 */
class RecommendationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Hipstershop\ListRecommendationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListRecommendations(\Hipstershop\ListRecommendationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/hipstershop.RecommendationService/ListRecommendations',
        $argument,
        ['\Hipstershop\ListRecommendationsResponse', 'decode'],
        $metadata, $options);
    }

}
