<?php

namespace Barcode;

use DBmysql;

use Glpi\Event\Item\PostCreateItemEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event trigerred when an item has just been created.
 */
class HelloEventSubscriber implements EventSubscriberInterface {

   /**
    * @var DBmysql
    */
   private $db;

   public function __construct(DBmysql $db) {

      $this->db = $db;
   }

   public static function getSubscribedEvents() {

      return [
         PostCreateItemEvent::NAME => 'hello',
      ];
   }

   public function hello(PostCreateItemEvent $event) {

      \Toolbox::logDebug('I am here!');
   }
}
