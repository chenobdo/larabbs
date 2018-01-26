<?php
    define( 'BOOSTER', 5 );
    define( 'CAPSULE', 2 );
    define( 'MINUTE', 60 );
    define( 'STAGE', 3 );
    define( 'PRODUCTION', 1000 );
     
    class Part {
        function Part() {
            $this->build( MINUTE );
        }
         
        function build( $delay = 0 ) {
            if ( $delay <= 0 )
                return;
                 
            while ( $delay-- > 0 ) {
            }
        }
    }
     
    class Capsule extends Part {
        function Capsule() {
          parent::Part();
            $this->build( CAPSULE * MINUTE );
        }
    }
     
    class Booster extends Part {
        function Booster() {
          parent::Part();
            $this->build( BOOSTER * MINUTE );
        }
    }
     
    class Stage extends Part {
        function Stage() {
          parent::Part();
          $this->build( STAGE * MINUTE );
        }
    }
     
    class SpaceShip {
        var $booster;
        var $capsule; 
        var $stages;
         
        function SpaceShip( $numberStages = 3 ) {
            $this->booster = new Booster();
            $this->capsule = new Capsule();
            $this->stages = array();
             
            while ( $numberStages-- >= 0 ) {
                $stages[$numberStages] = new Stage();
            }
        }
    }
     
    $toys = array();
    $count = PRODUCTION;
     
    while ( $count-- >= 0  ) {
      $toys[] = new SpaceShip( 2 );
    }
?>
 
<html>
<head>
<title>
Toy Factory Output
</title>
</head>
<body>
  <h1>Toy Production</h1>
  <p>Built <? echo PRODUCTION . ' toys' ?></p>
</body>
</html>
