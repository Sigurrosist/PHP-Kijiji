<?php

class LuckyMember extends Member
{
   private $luckyMemberId;
   private $regDate;
   private $expDate;
   private $discountRate;
   
   function __construct($regDate,$expDate,$discountRate)
   {
       parent::__construct();
       
       $this->luckyMemberId = self::$sequence++;
       $this->regDate = $regDate;
       $this->expDate = $expDate;
       $this->discountRate = $discountRate;

   }
   
   
   function __construct($name,$address,$city,$state,$phone,$email,$password,$memberType,$regDate,$expDate,$discountRate)
   {
       parent::__construct($name,$address,$city,$state,$phone,$email,$password,$memberType);
       
       $this->luckyMemberId = self::$sequence++;
       $this->regDate = $regDate;
       $this->expDate = $expDate;
       $this->discountRate = $discountRate;
       
       
   }
   
/**
     * @return mixed
     */
    public function getLuckyMemberId()
    {
        return $this->luckyMemberId;
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
     * @return mixed
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

/**
     * @param mixed $luckyMemberId
     */
    public function setLuckyMemberId($luckyMemberId)
    {
        $this->luckyMemberId = $luckyMemberId;
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

/**
     * @param mixed $discountRate
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;
    }

   
    
    
   
}
?>