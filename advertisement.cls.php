<?php

class Advertisement 
{
    private $advertId;
    private $advertDesc;
    private $regDate;
    private $expDate;
    
    function __construct($advertDesc,$regDate,$expDate)
    {
        $this->advertId = self::$sequence++;
        $this->advertDesc = $advertDesc;
        $this->regDate = $regDate;
        $this->expDate = $expDate;
        
        
    }
    
    /**
     * @return mixed
     */
    public function getAdvertId()
    {
        return $this->advertId;
    }

    /**
     * @return mixed
     */
    public function getAdvertDesc()
    {
        return $this->advertDesc;
    }

    /**
     * @return mixed
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * @return mixed
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * @param mixed $advertId
     */
    public function setAdvertId($advertId)
    {
        $this->advertId = $advertId;
    }

    /**
     * @param mixed $advertDesc
     */
    public function setAdvertDesc($advertDesc)
    {
        $this->advertDesc = $advertDesc;
    }

    /**
     * @param mixed $regDate
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
    }

    /**
     * @param mixed $expDate
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
    }
    
    

    
    
    
    
}

?>