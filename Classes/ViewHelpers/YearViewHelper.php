<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;

class YearViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    public function render()
        {
            $content = date("Y");
            return $content;
        }
   }
?>