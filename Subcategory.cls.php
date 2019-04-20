<?php

class Subcategory 
{
    private $subcategoryId;
    private $englishDesc;
    private $frenchDesc;
    
    function __construct($subcategoryId=null,$englishDesc=null, $frenchDesc=null)
    {
        
        $this->subcategoryId = $subcategoryId;
        $this->englishDesc = $englishDesc;
        $this->frenchDesc = $frenchDesc;
    }
    
    /**
     * @return string
     */
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * @return string
     */
    public function getEnglishDesc()
    {
        return $this->englishDesc;
    }

    /**
     * @return string
     */
    public function getFrenchDesc()
    {
        return $this->frenchDesc;
    }

    /**
     * @param string $subcategoryId
     */
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;
    }

    /**
     * @param string $englishDesc
     */
    public function setEnglishDesc($englishDesc)
    {
        $this->englishDesc = $englishDesc;
    }

    /**
     * @param string $frenchDesc
     */
    public function setFrenchDesc($frenchDesc)
    {
        $this->frenchDesc = $frenchDesc;
    }

    
  
    
    public function getSubcategory($connection, $categoryId) 
    {
        $counter=0;
        $sqlCmd="Select * from subcategory where CategoryID=".$categoryId;
        
        foreach ($connection->query($sqlCmd) as $oneRec)
        {
            $subcatId=$oneRec["SubCategoryID"];
            $engDesc = $oneRec["Desc_Eng"];
            $freDesc = $oneRec["Desc_Fre"];
            
            
            $oneCategory = new Subcategory($subcatId,$engDesc,$freDesc);
            $arrSubCategory[$counter++]=$oneCategory;
            
        }
        return  $arrSubCategory;
    }
    
    
    
}

?>