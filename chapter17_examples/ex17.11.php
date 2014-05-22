  <?php
  
   // Define the parent or super class
  class Person {
     public $name;
     public $address;
     public $phone;
     // Define the methods
     function printPersonInfo(){
       echo "<hr><b>Person Info</b><br>";
       echo $this->name . "<br>\n";
       echo $this->address . "<br>\n";
       echo $this->phone . "<br>\n";
     }
     }
  class EmployedPerson extends Person {
     public $ocupation;
     public $company_name;
     public $business_phone;
     function printPersonInfo() // overriding
     {
       parent::printPersonInfo();
       echo $this->occupation . "<br>\n";
       echo $this->company_name . "<br>\n";
       echo $this->business_phone . "<br>\n";
     }
  }
  
  $kid = new Person();
  $kid->name = "Jimmy";
  $kid->address = "12 Elm Street";
  $kid->phone = "555-5555";$adult = new EmployedPerson();
  $adult->name = "Jimmy's Father";
  $adult->address = "12 Elm Street";
  $adult->phone = "555-5555";
  $adult->occupation = "Programmer";
  $adult->company_name = "Software Developer, Ltd.";
  $adult->business_phone = "444-4444";
  $kid->printPersonInfo();
  $adult->printPersonInfo();

?>
