<?php
 namespace amqphp\protocol\v0_9_1\queue; class PurgeQueueField extends \amqphp\protocol\v0_9_1\QueueNameDomain implements \amqphp\protocol\abstrakt\XmlSpecField { function getSpecFieldName() { return 'queue'; } function getSpecFieldDomain() { return 'queue-name'; } }