<?php
class calculate
{
  
    Public $result;
    public $x;
    public $y;
 
 
    function __construct($first_value,$second_value,$operator)
    {
        $this->x = $first_value;
        $this->y = $second_value;
        
        if ($this->y==0)
        {
            echo '0';
        }

        else
          {

            switch($operator)
        {
            case '+':
             $this->result = $this->x + $this->y;

            break;

            case '-':

             $this->result = $this->x - $this->y;

            break;

            case '*':

             $this->result = $this->x * $this->y;

            break;

            case '/':

             $this->result = $this->x / $this->y;

            break;

            default:
             0;
        }   
           }
 
 
    }    
    function show_result()
    {
        echo "Your Answer is ".$this->result."\n";

    }
}
     
$calculate_obj= new calculate(100,20,'+');
$calculate_obj->show_result();
     
 
?>