<?php

namespace App\Contracts;

interface Tariff
{

    public function getId();

    public function getAccessTimeAsTimestamp();

    public function getAccessTimeAsDatetime();

}
