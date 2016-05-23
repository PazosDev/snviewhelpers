<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class FilenameViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    
    
    /**
    * @param string $filename
    * @param int $option
    **/
    
  
 
    public function render($filename, $option)
        {
            $explode = explode(".", $filename); 
            
            
            
            
            switch ($option) {
                case 1:
                    $content = $explode[0];
                    break;
                case 2:
                    $content = $explode[1];
                    break;
                case 3:
                    $content = $explode[0].".".$explode[1];
                    break;
                default:
                    $content = "Fehler: Nur Option 1 - 3 erlaubt!";
                    break;
            }
            return $content;
        }
        
     
   }
?>

