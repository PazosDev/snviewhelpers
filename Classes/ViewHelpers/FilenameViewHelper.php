<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class FilenameViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    
    /**
    * @param string $name
    * @param int $option
    **/
    
    public function render($name, $option)
        {
            $explode = explode(".", $name); 
            if($option == 1)
            {
               $content = $explode[0];
            }
            else 
            {
                if($option == 2)
                {
                    $content = $explode[1];
                }
                else
                {
                    if($option == 3)
                    {
                        $content = $explode[0].".".$explode[1];
                    }
                    else {
                        $content = "Fehler: Parameter option darf nur 1 bis 3 sein!";
                    }
                    
                }
            }
            
            return $content;
        }
        
     
   }
?>

