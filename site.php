<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
</head>
<body>




     <?php 
        
        class Student {
            var $name;
            var $major;
            var $gpa; 

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            
            function isStem(){
                if($this->major == "Science" || $this->major == "Technology" || $this->major == "Engineering" || $this->major == "Mathematics"){
                    return true;
                }
                return false;
            }
            
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Science", 3.6);

        
        function stemStudent($student){
         if($student->isStem()){
            echo "You are a STEM major!";
            } else {
            echo "You are not a STEM major.";
         }
        }

        stemStudent($student2);

     ?> 
    
    
</body>
</html> 