<?php
    namespace RunCloud;
  
    class User {
        public $name;
        public $subscription;
        public $connectedServer = array();
        
        public function subscribe($plan){
            print "Action: Subscribing to Plan " . $plan->getName() . "\n";
            print "Subscribed to Plan " . $plan->getName() . "\n\n";

            $this->subscription = $plan;
        }
        public function showDetails(){
            print "\n";
            print "+-----------------+------------------------\n";
            print "|User's Name      | " . $this -> name . "\n";
            print "+-----------------+------------------------\n";
            print "|Current Plan     | " . $this -> subscription -> getName() . "\n";
            print "+-----------------+------------------------\n";
            print "|Connected Server | " ;
            $showServer ='';
            foreach ($this -> connectedServer as $server){
                $showServer .= $server -> name . " [" . $server -> ipAddress . "], ";
            }
            $showServer = rtrim($showServer,', ');
            print $showServer;
            print "\n+-----------------+------------------------\n";
            print "\n\n";

        }
        public function connectServer($server){
            print "Action: Connecting to Server " . $server ->name . "...\n";

            if(!$this -> subscription){
                print "Error => User is not Subscribe to Any Plan !\n\n";
            }
            elseif(count($this -> connectedServer) < $this -> subscription -> getServerLimit()){
                print "Action => Server " . $server ->name . " is connected !\n\n";

                array_push($this ->connectedServer, $server);
                $this -> showDetails();

            }
            else {
                print "Error => User Exceeded Server Limit allowed for Plan " . $this -> subscription -> getName() . "\n\n";
            }
        }

        public function unsubscribe(){
            print "Action: Canceling Subscription to Plan " . $this -> subscription -> getName() . "...\n\n";
            print "You have successfully unsubscribed from plan " . $this -> subscription -> getName() . ".\n";
            $this -> subscription = null;
            $this -> subscription = array();
            print "Thank you for using RunCloud.\n\n";
        }
    }
