<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class ArrayrondomViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    
    /**
    * @param string $filename
    * @param int $option
    **/
    //text der dann bei Leerschlägen gesplittet wird.

    public function render($text)
        {
            $explode = explode(" ", $text); 
            $anzahl = count($explode);
            shuffle($explode);
            for($x = 0; $x < $anzahl; $x++)
            {
                $content .= $explode[$x]." ";
            }
            return $content;
        }
        
     
   }
?>

