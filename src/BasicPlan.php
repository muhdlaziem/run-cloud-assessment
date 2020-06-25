<?php
    namespace RunCloud;

    use RunCloud\Plan;

    class BasicPlan extends Plan{
        public function getName(): string{
            return 'Basic Plan';
        }
        public function getServerLimit(): int{
            return 1;
        }
    }
