<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Filesystem\Filesystem as File;


class CssCtrl extends Controller
{
    /**
	 * Instance of the File class
	 *
	 * @var \Illuminate\Filesystem\Filesystem
	 */
    protected $file;
    /**
	 * Instance of the Config class
	 *
	 * @var \Illuminate\Config\Repository
	 */
	protected $repository;
    /**
	 * Cache of configuration contents
	 *
	 * @var string
	 */
    protected $contentsCache;
    /**
	 * Creates the PackageInstaller Instance
	 *
	 * @param Illuminate\Filesystem\Filesystem $file
	 */
	public function __construct(File $file, Config $config)
	{
		$this->file = $file;
		$this->config = $config;
	}

    protected function configColorUpdate()
    {
        // $this->getConfigContents();
        $array = $this->getNewConfig();
        $this->replaceConfig($array);
        $this->putConfigContents();
    }
    // protected function getConfig()
    // {
    //     $string = str_replace('];','',$this->contentsCache);
    //     $string = str_replace('[','',$string);
    //     $string = str_replace(']','',$string);
    //     $string = trim($string);
    //     $array = explode(',',$string);
    //     return $array;
    // }
    protected function getNewConfig()
	{
		$color = array();
        foreach(\App\Models\ColorMd::all() as $k => $v)
        {
            $color['--c-primary'] = $v->primary;
            $color['--c-secondary'] = $v->secondary;
            $color['--btn-primary'] = $v->button_primary;
            $color['--btn-secondary'] = $v->button_secondary;
            if($v->info!='') $color['--c-info'] = $v->info;
            if($v->light!='') $color['--c-light'] = $v->light;
            if($v->dark!='') $color['--c-dark'] = $v->dark;
            if($v->warning!='') $color['--c-warning'] = $v->warning;
            if($v->danger!='') $color['--c-danger'] = $v->danger;
            if($v->success!='') $color['--c-success'] = $v->success;
        }
		
        return $color;
	}

	protected function putConfigContents()
	{
		return $this->file->put($this->getConfigPath(), $this->contentsCache);
	}

    protected function replaceConfig($array)
	{
        $replace = $this->getNewConfigContents($array);
		$this->contentsCache = $replace;
	}

	protected function getNewConfigContents($array)
	{
        $header = ":root{\n";
        // foreach($array as $k => $v){
        //     print_r($v);
        // }
        // die();
        $values = NULL;
        foreach($array as $k => $v){
            $values.="  $k: $v;\n";
        }
        $content = $header.$values."}";
		return $content;
	}

	protected function getConfigContents()
	{
		if(!isset($this->contentsCache)) {
			$this->contentsCache = $this->file->get($this->getConfigPath());
		}
		return $this->contentsCache;
    }

    protected function getConfigPath()
	{
        $prefix = config('web.folder_prefix');
		return public_path("$prefix/css/color.css");
	}
}
