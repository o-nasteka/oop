<?php

/**
 *  SOLID
 * S - принцип единственнной обязанности (ответственности)
 * Single Responsibility Principle
 */

    $logger = new Logger();
    $product = new Product($logger);
    $product->setPrice(10);



