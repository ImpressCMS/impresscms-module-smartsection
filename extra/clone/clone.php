<?php

/*

Usage:
	
	Copy clone.php in <xoops_root>
	Change current working directory to <xoops_root>
	Update mappings as per new modulename.

	php -q clone.php 

*/

// ##########################################################
//	Define your mapping here
// ##########################################################
$patterns = array(
  // first one must be module directory name
  'smartsection'  => 'mysection', 
  'SMARTSECTION'  => 'MYSECTION',
  'SmartSection'  => 'MySection',
  'Smart Section' => 'My Section',
  'SSECTION'      => 'MSECTION',
  'Smartsection'  => 'Mysection' 
);

$patKeys = array_keys($patterns);
$patValues = array_values($patterns);

// work around for PHP < 5.0.x
if(!function_exists('file_put_contents')) {
  function file_put_contents($filename, $data, $file_append = false) {
    $fp = fopen($filename, (!$file_append ? 'w+' : 'a+'));
    if(!$fp) {
      trigger_error('file_put_contents cannot write in file.', E_USER_ERROR);
      return;
    }
    fputs($fp, $data);
    fclose($fp);
  }
}

// recursive clonning script
function cloneFileFolder($path) 
{
  global $patKeys;
  global $patValues;
  
  $newPath = str_replace($patKeys[0], $patValues[0], $path);

  if (is_dir($path)) 
  {
    // create new dir
    mkdir($newPath);
    
    // check all files in dir, and process it
    if ($handle = opendir($path))
    {
      while ($file = readdir($handle)) 
      {
        if ($file != '.' && $file != '..') 
        {
          cloneFileFolder("$path/$file");
        }
      }
      closedir($handle);  
    }
  } 
  else 
  {
    if(preg_match('/(.jpg|.gif|.png|.zip)$/i', $path)) 
    {
      copy($path, $newPath);
    } 
    else 
    {
      // file, read it
      $content = file_get_contents($path);
      $content = str_replace($patKeys, $patValues, $content);
      file_put_contents($newPath, $content);
    }
  }
}

cloneFileFolder('modules/smartsection');

echo "Happy cloning...\n";
echo "check directory modules/" . $patterns['smartsection'] . " for cloned module \n";
echo "Consider modifying new module by editing language/english/modinfo.php and images/mysection_slogo.png manually (if you care)\n";

?>