<?php

/**
 * SOLID
 * L - принцип подстановки Барбары Лисков
 * Liskov - Liskov Substitution Principle, LSP
 */

//    $bird = new Bird();
    $bird = new Duck();

    $birdRun = new BirdRun($bird);
    $birdRun->run();



