<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class ArrayrandomViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    
    /**
    * @param array $text
    * @param int $anzahl
    **/
    //text der dann bei Leerschlägen gesplittet wird.
    //Optional kann noch die anzahl der gewünschten array mitgegeben werden

    public function render($text, $anzahl = NULL)
        {
             
            if($anzahl == NULL) $anzahl = count($text);
            shuffle($text);
            for($x = 0; $x < $anzahl; $x++)
            {
                $content .= $text[$x]." ";
            }
            return $content;
        }
        
     
   }
?>

