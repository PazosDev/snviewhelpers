<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class LoremipsumViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    
    /**
    * @param int $anzahl
    **/
    
    public function render($anzahl = NULL)
        {
            $lorem = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
            
            if($anzahl > 100)
            {
                do{
                    $content .= $lorem;
                    $anzahl = $anzahl - 100;
                }while ($anzahl <= 100);
                $content .= substr($lorem, 0, $anzahl);
            }
            else 
            {
                $content = substr($lorem, 0, $anzahl);
            }
            
            return $content;
        }
        
     
   }
?>

