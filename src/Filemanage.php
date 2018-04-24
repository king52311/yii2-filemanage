<?php

namespace king52311\filemanage;

/**
 * Class Filemanage
 * @package king52311\filemanage
 */
class Filemanage
{
    /**
     * @param $url
     * @param string $subPath
     * @param string $filterFileName
     * @return array
     */
    public static function showFileList($url,$subPath='',$filterFileName='')
    {
        $array=[];
        $i=0;
        foreach (glob("{$url}*") as $key => $file){
            $file_name = substr($file,strrpos($file,'/')+1);

            if($filterFileName){
                if(strpos($file_name, $filterFileName) === false){
                    continue;
                }
            }
            $array[$i]['file_path']=substr($file,strlen($subPath));
            $array[$i]['file_name']=$file_name;
            if(is_dir($file)){
                $array[$i]['file_path'] = $array[$key]['file_path'].'/';
                $array[$i]['file_type']=2;//文件夹
            }else{
                $array[$i]['file_type']=1;//文件
            }
            $array[$i]['file_ids']='';
            $i++;
        }
        return $array;
    }
}
