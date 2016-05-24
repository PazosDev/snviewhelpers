<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class TitleViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    /**
    * @param strin $adress
    **/
    
    
    public function render($adress)
        {
            if( ($sHTML = file_get_contents($adress)) &&  preg_match("/<title>(.+)<\/title>/i", $sHTML, $aTitle))  
            {
                $content = trim($aTitle[1]);
            }
            else 
            {
                $content = "ERROR";
            } 
            return $content;
        }
   }
?>



