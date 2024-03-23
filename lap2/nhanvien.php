/* The above PHP class defines a member with properties such as full name, email, and a unique ID
generated using an external function. */
<?php

// Require the 'hotro.php' file to use the idcontinue() function
require_once("hotro.php");

/**
 * Define a class member to represent members.
 */
class member{

    // Properties of the member class
    private $fullname;
    private $email;
    private $idmember;

    /**
     * Constructor of the member class.
     * @param string $fullname The full name of the member.
     * @param string $email The email address of the member.
     */
    public function __construct($fullname, $email){
        $this -> fullname = $fullname;
        $this -> email = $email;

        // Assign a unique ID to the member using the idcontinue() function from hotro.php
        $this -> idmember = idcontinue();
    }

    /**
     * Destructor of the member class.
     * Used to release resources when the object is no longer in use.
     */
    public function __destruct(){
        $this -> fullname = NULL;
        $this -> email = NULL;
        $this -> idmember = NULL;
    }

    /**
     * Method to get the full name of the member.
     * @return string The full name of the member.
     */
    public function get_fullname(){
        return $this -> fullname;
    }

    /**
     * Method to get the email address of the member.
     * @return string The email address of the member.
     */
    public function get_email(){
        return $this -> email;
    }

    /**
     * Method to get the ID of the member.
     * @return int The ID of the member.
     */
    public function get_id(){
        return $this -> idmember;
    }
}
?>
