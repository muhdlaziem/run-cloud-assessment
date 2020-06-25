<?php
    namespace RunCloud;

    use RunCloud\Plan;

    class ProPlan extends Plan{
        public function getName():string{
            return 'Pro Plan';
        }
        public function getServerLimit():int{
            return PHP_INT_MAX;
        }
    }
