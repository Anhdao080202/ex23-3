/* The staff class extends from the character class and represents staff members with properties such
as staffcode and department. */
<?php
// Require the 'character.php' file to use the character class
require_once("character.php");

/**
 * Define a class staff to represent staff members.
 * This class extends from the character class.
 */
class staff extends character{
    // Properties of the staff class
    private $staffcode;
    private $part;

    /**
     * Constructor of the staff class.
     * @param string $fullname_staff The full name of the staff member.
     * @param string $countrycode The country code of the staff member.
     * @param string $part The department of the staff member.
     */
    public function __contruct($fullname_staff, $countrycode, $part)
    {
        // Call the constructor of the parent class and pass the corresponding parameters
        parent::__construct($fullname_staff, $countrycode);

        // Assign value to the $part property
        $this -> part = $part;

        // Call the function to generate a new staffcode and assign value to the $staffcode property
        $this -> staffcode = $this -> staffcode_continue();
    }

    /**
     * Method to get the staffcode of the staff member.
     * @return int The staffcode of the staff member.
     */
    public function get_staffcode(){
        return $this->staffcode;
    }

    /**
     * Method to get the department of the staff member.
     * @return string The department of the staff member.
     */
    public function get_part(){
        return $this->part;
    }

    /**
     * Private method to generate a unique staffcode for the staff member.
     * @return int The new staffcode.
     */
    final private function staffcode_continue(){
        static $makecode =1;
        return $makecode++;
    }
}
?>
