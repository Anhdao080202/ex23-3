/* This PHP class represents a character with its full name and country code, providing methods to
retrieve this information. */
<?php
/**
 * specifies the character class that will be used to represent a character together with its whole name and country code.
 */
class character
{
    /**
     * @var string $fullname Full name of the character.
     */
    private $fullname;
    
    /**
     * @var string $countrycode Character's country code.
     */
    private $countrycode;
    
    /**
     * character constructor.
     *
     * @param string $fullname Full name of the character.
     * @param string $countrycode Character's country code.
     */
    public function __construct($fullname, $countrycode)
    {
        $this->fullname = $fullname;
        $this->countrycode = $countrycode;
    }
    
    /**
     * Returns the full name of the character.
     *
     * @return string
     */
    public function get_fullname()
    {
        return $this->fullname;
    }
    
    /**
     * Returns the character's country code.
     *
     * @return string
     */
    public function get_countrycode()
    {
        return $this->countrycode;
    }
}
?>
