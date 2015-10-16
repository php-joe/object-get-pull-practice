<?php
  class Employees {
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $employeeArray;

    public function __construct($firstName, $lastName, $email) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->employeeArray();
    }

    public function employeeArray(){
      $this->employeeArray = array($this->firstName, $this->lastName, $this->email);
    }

    public function sampleEmployee() {
      echo $this->firstName . " ";
      echo $this->lastName . " | ";
      echo $this->email;
    }

    //get variable firstName
    public function getFirstName() {
      return $this->firstName;
      }

    //get lastName
    public function getLastName() {
      return $this->lastName;
    }

    //get email
    public function getEmail() {
      return $this->email;
    }

    //get array
    public function getEmployeeArray() {
      return $this->employeeArray;
    }

    //set email
    public function setEmail($email) {
      $this->email = $email;
      $this->employeeArray();
    }

    //set firstName
    public function setFirstName($firstName) {
      $this->firstName = $firstName;
      $this->employeeArray();
    }

    //set lastName
    public function setLastName($lastName) {
      $this->lastName = $lastName;
      $this->employeeArray();
    }

    //master set function
    public function setEmployee($firstName, $lastName, $email) {
      $this->setFirstName($firstName);
      $this->setLastName($lastName);
      $this->setEmail($email);
    }

    //master getter
    public function getEmployee() {
      $this -> getFirstName();
      $this -> getLastName();
      $this -> getEmail();
    }

}

//joe employee in Employees class
$joe = new Employees('joe', 'schumacher', 'something@something.com');
print_r($joe);
echo "<br><br>";
$joe -> sampleEmployee();

$joe -> setEmployee('Joseph', 'Schumacher', 'joseph@schnauzerdesign.com');

$joe -> sampleEmployee();

$joe -> setEmail('test@test.com');

echo "<br>" . $joe -> getFirstName() . "<br>";

$stormie = new Employees('Stormie', 'Schumacher', 'eastersaint@yahoo.com');
$heinz = new Employees('Heinz', 'Schumacher', 'heinz@gmail.com');


var_dump( (array) $joe);

$stormieArray = json_decode(json_encode($stormie), true);

echo "<br>";

foreach ($joe as $key => $value) {
  echo "$key => $value\n";
  # code...
}
echo "\n";
echo "<br><br>";
print_r($joe);
echo "<br><br>";
print_r($stormie);
echo "<br><br>";
$stormie -> setEmployee("Storm", "Schuma", "stormie@stormie.com");
echo "<br><br>";
print_r($stormie);
echo "<br><br>";
$stormie -> sampleEmployee();
echo "<br><br>Stormie Array<br>";
foreach ($stormie->getEmployeeArray() as $key => $value) {
  echo "$key => $value\n" ."<br>";
}
