<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class PageinfosViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper 
{
    
    /**
    * @param int $option
    **/
   
    
    
    public function render($option)
        {
           switch ($option)
           {
              case 1:
                echo $GLOBALS[TSFE]->page[title];
                break;
              case 2:
                echo $GLOBALS[TSFE]->page[uid];
                break;
              case 3:
                echo $GLOBALS[TSFE]->rootLine[0][title];  //NI
                break;
              case 4:
                echo "Seitentitel = ".$GLOBALS[TSFE]->page[title]."<br/>Seiten ID = ". $GLOBALS[TSFE]->page[uid];  
                break;
              case 5:
                echo "<pre>";
                print_r($GLOBALS);
                echo "</pre>";
                break;
              default:
                echo "Fehler";
                break;
           }
           
           
            
        }
 }
?>



