<?php
namespace Oro\Component\MessageQueue\ZeroConfig;

interface TopicSubscriber
{
    /**
     * * ['topicName']
     * * ['topicName' => ['processorName' => 'processor', 'destinationName' => 'destination']]
     * processorName, destinationName - optional.
     *
     * @return array
     */
    public static function getSubscribedTopics();
}