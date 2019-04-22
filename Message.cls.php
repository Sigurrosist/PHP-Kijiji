<?php

class Message 
{
    private $messageId;
    private $title;
    private $message;
    private $createDate;
    private $sender;
    private $receiver;
    
    function __construct( $title=null,$message=null,$sender=null,$receiver=null)
    {
        $this->title=$title;
        $this->message=$message;
        $this->createDate=new DateTime();
        $this->sender =$sender;
        $this->receiver=$receiver;
    }
    
    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    public function sendMessage($connection)
    {
        $title=$this->title;
        $message=$this->message;
        $createDate=new DateTime('now');
        $timeAsString = $createDate->format('Y-m-d H:i:s');
        $sender=$this->sender;
        $receiver=$this->receiver;
        
        
        $sqlCmd="Insert into message  (Title,Message,CreateDate,Sender,Receiver) values('$title','$message', '$timeAsString',$sender,$receiver)";
        
        $result = $connection->exec($sqlCmd);
        return  $result;
    }
    
    


}
?>