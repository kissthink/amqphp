<?php
 namespace amqphp\protocol\v0_9_1\basic; class TypeField extends \amqphp\protocol\v0_9_1\ShortstrDomain implements \amqphp\protocol\abstrakt\XmlSpecField { function getSpecFieldName() { return 'type'; } function getSpecFieldDomain() { return 'shortstr'; } }