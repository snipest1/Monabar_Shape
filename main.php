<!DOCTYPE html>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php


$handle = fopen('data.csv', 'r') or die('cannot read file');
$shapes = array();
$rows = array();
$rectangle = new Rectangle;
$index = new ShapeIndex;

$rectangle->calculateArea($shapes);

$index->findShapeIndex($shapes,$rows);

//build array of shapes, and array of rows
while (false != ( $row = fgetcsv($handle, 0, ';') )) {
    //extract row from the first column
    //this should match the last word before the comma, if there is a comma
    preg_match('~([^\s]+)(?:,.*)?$~', $row[0], $m);
    preg_match('~([^\s]+)(?:,.*)?$~', $row[0], $m);

   
       $shapes[] = $m[0];
       $rows[] = $row[0];
   
}


//Closes file

fclose($handle);

//sort array of rows by surname using our array of surnames
array_multisort($shapes,$rows);

print_r($shapes);
//you could write $rows back to a file here if you wanted.

?>
        
        <?php
/*
 * retrieves Rectangle area calculation
 */
     
        class Rectangle {
        protected $width;
        protected $height;
        
        //Constructor for Rectangle
        
        function construct($width, $height){
            $this->width = $width;
            $this->height = $height;
            
        }
        
            //specifies which object to apply Rectangle area 
        //Used to find Rectangle length/width

        function calculateArea(){
            return $this->width * $this->height;
        }
        
        function getArea($shapes){
        {return $shapes->calculateArea();
                
        }
}
        function sortByArea( $shapes){
            if(calculateArea()== TRUE){
                sort($shapes);
            }
        }
        }
        
        class Circle {
    protected $radius;
    
    
    //specifies which object to apply shapes 
      ////Used to find Circle radius
       //sorts by shapes' area
       
    public function sortByArea($radius){
    $this->radius = $radius;    
        }
   
                
    //Constructor for Circle

        public function getArea(){
        
        return $radius = (3.14 * ($radius * $radius));    

        }
}
        
        class ShapeIndex{
   function findShapeIndex($instance, $shapes){
       //Use to find the shapes index
       //it uses ID as the key identifier
       //will sort based on ID
       $id = 'ID';
       $type = 'type';
       $radius = 'radius';
       $widht = 'width/height';
       //$this->$shapes = new shape();
       //$shapes.getArea($shapes);
       $shape_array_index = array($id =>[0], $type => [1], $radius => [2], $widht => [3]);
       
       $shape_array = array(
           $instance => [$id]);
      
       //Searches '0' index and sorts file by ID
       do{
            $shape_array -> $shape_array_index[0];
        ksort($shape_array_index,$sort_flags = $id);
       //$shape_array = [$id]; 
           
       } 
       //As it searches it moves to the next index
       //until it arrives at the shape type and 
       //then it sorts the file by the shape type
       while ($instance == 0);{
              $shape_array -> $shape_array_index[0];
        sort($shape_array_index,$sort_flags = $id);
          }
        
        if ($instance == 1) {
            $shape_array -> $shape_array_index[1];  
        ksort($shape_array_index,$sort_flags = $type);
 
          }
          elseif ($instance == 2) {
          ksort($shape_array_index,$sort_flags = $radius);

          } 
          
          //Default index sorts the file by the area
          
      elseif ($instance == 3) {
          $shape_array -> $shape_array_index[3];    
          ksort($shape_array,$sort_flags = $widht);
      }
          return $shape_array_index->$shapes;
          
   } 
     
     
}
?>

    </body>
</html>