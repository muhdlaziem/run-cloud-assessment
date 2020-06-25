<?php
    namespace RunCloud;

    abstract class Plan {
        abstract public function getName():string;
        abstract public function getServerLimit():int;
    }
