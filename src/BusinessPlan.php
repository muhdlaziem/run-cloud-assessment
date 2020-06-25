<?php
    namespace RunCloud;

    use RunCloud\Plan;

    class BusinessPlan extends Plan{
        public function getName(): string{
            return 'Business Plan';
        }
        public function getServerLimit():int{
            return PHP_INT_MAX;
        }
    }
