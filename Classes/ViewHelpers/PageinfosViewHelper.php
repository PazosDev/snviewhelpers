<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class PageinfosViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper 
{
    
    /**
    * @param int $option
    **/
   
   
   // Optionen:
   // 1 = Get only the Page-tItle
   // 2 = Get only the Page-uid
   // 3 = Get only the Language-id
   // 4 = Get all Infos
    
    
    public function render($option)
        {
           switch ($option)
           {
              case 1:
                echo "Seitentitel = ".$GLOBALS[TSFE]->page[title];
                break;
              case 2:
                echo "Seiten ID = ".$GLOBALS[TSFE]->page[uid];
                break;
              case 3:
                echo "Sprach ID = ".$GLOBALS[TSFE]->sys_language_content;
                break;
              case 4:
                echo "Seitentitel = ".$GLOBALS[TSFE]->page[title]."<br/>Seiten ID = ". $GLOBALS[TSFE]->page[uid]."<br/>Sprach ID = ".$GLOBALS[TSFE]->sys_language_content;  
                break;
              default:
                echo "Fehler";
                break;
           }
           
           
            
        }
 }
?>



