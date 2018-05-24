<?php
   for ($i=1; $i<101; $i++) {
       if ($i%3==0 and $i%5==0) {
           $name="FizzBuzz";
       }
       else if ($i%3==0) {
           $name="Fizz" ;
       }
       else if ($i%5==0) {
           $name="Buzz" ;
       }
       else {
           $name=$i ;
       }
    
    print $name ;
    print "<br>";
   }
   