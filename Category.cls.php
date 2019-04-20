<?php

class Category
{
    private $categoryId;
    private $englishDesc;
    private $frenchDesc;
    
    function __construct($categoryId=null,$englishDesc=null, $frenchDesc=null)
    {
        $this->categoryId=$categoryId;
        $this->englishDesc = $englishDesc;
        $this->frenchDesc = $frenchDesc;
    }
    
    
    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return mixed
     */
    public function getEnglishDesc()
    {
        return $this->englishDesc;
    }

    /**
     * @return mixed
     */
    public function getFrenchDesc()
    {
        return $this->frenchDesc;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @param mixed $englishDesc
     */
    public function setEnglishDesc($englishDesc)
    {
        $this->englishDesc = $englishDesc;
    }

    /**
     * @param mixed $frenchDesc
     */
    public function setFrenchDesc($frenchDesc)
    {
        $this->frenchDesc = $frenchDesc;
    }

    public function getCategory($connection)
    {
        $counter=0;
        $sqlCmd="Select * from category";
        
        foreach ($connection->query($sqlCmd) as $oneRec)
        {
            $catId=$oneRec["CategoryID"];
            $engDesc = $oneRec["Desc_Eng"];
            $freDesc = $oneRec["Desc_Fre"];
            
            
            $oneCategory = new Category($catId,$engDesc,$freDesc);
            $arrCategory[$counter++]=$oneCategory;
            
        }
        return $arrCategory;
    }
    
}

?>