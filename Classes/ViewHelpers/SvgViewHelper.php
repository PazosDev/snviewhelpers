<?php
namespace Sesamnet\Snviewhelpers\ViewHelpers;



class SvgViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {
    
    /**
    * @param string $filename
    * @param int $option
    * @param string $alternatename
    **/
    
    public function render($filename, $option = NULL, $alternatename = NULL)
        {
            
            if(strpos($filename, '.svg'))$filename = substr($filename, 0 ,-4);
            if(strpos($alternatename, '.jpg') ||strpos($alternatename, '.png')) $alternatename = substr($alternatename, 0 ,-4);
            if(strpos($alternatename, '.jpeg'))$alternatename = substr($alternatename, 0 ,-5);
            $patharray = explode("/",$filename);
            $count = count($patharray);
            for($x = 1; $x <= $count; $x++)
            {
                if($x == $count)$filename = $patharray[$x];
                else $path .= $patharray[$x-1]."/";
            }
            $typ = 'jpg';
            if($alternatename == NULL)  $alternatename = $filename;
            if($option == '2') $typ = 'png'; 
            
            $content = '<img src="'.$path.$filename.'.svg" onerror="this.src=\''.$path.$alternatename.'.'.$typ.'\'">';
            
            //           <img src="image.svg" onerror="this.src='image.png'">
    
            return $content;
        }
   }
?>