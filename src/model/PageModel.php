<?php

/**
 * This file is part of the DocPHT project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * @copyright (c) Craig Crosby <creecros@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 *
 * 
 * connect()
 * connectPageData($path)
 * create($topic, $filename)
 * getPhpPath($id)
 * getJsonPath($id)
 * getId($path)
 * getTopic($id)
 * getFilename($id)
 * getPageData($id)
 * putPageData($id, $data)
 * addPageData($id, $array)
 * modifyPageData($id, $index, $array)
 * removePageData($id, $index)
 * insertPageData($id, $index, $before_or_after, $array)
 * remove($id)
 * disconnect($data)
 */
namespace DocPHT\Model;

use Instant\Core\Model\AbstractModel;


class PageModel extends AbstractModel
{
    const DB = 'data/pages.json';
    
    /**
     * connect
     *
     *
     * @return array
     */
    public function connect()
    {
		if(!file_exists(self::DB))
		{
		    file_put_contents(self::DB,[]);
		} 
		
		return json_decode(file_get_contents(self::DB),true);
    }
    
    /**
     * connectPageData
     *
     *
     * @return array
     */
    public function connectPageData($id)
    {
        $path = $this->getJsonPath($id);
        
        if (!file_exists(pathinfo($path, PATHINFO_DIRNAME))) {
            mkdir(pathinfo($path, PATHINFO_DIRNAME), 0755, true);
        }
        
		if(!file_exists($path))
		{
		    file_put_contents($path,array(
		        
		        ));
		} 
		
		return json_decode(file_get_contents(realpath($path)),true);
    }
    
    /**
     * create
     *
     * @param  string $topic
     * @param  string $filename
     *
     * @return string
     */
    public function create($topic, $filename)
    {
        $data = $this->connect();
        $id = uniqid();
        $topic = strtolower(str_replace(' ', '-', pathinfo($topic, PATHINFO_FILENAME) ));
		$filename = strtolower(str_replace(' ', '-', pathinfo($filename, PATHINFO_FILENAME)));
		$phpPath = 'pages/'.strtolower(str_replace(' ', '-', pathinfo($topic, PATHINFO_FILENAME) )).'/'.$filename.'.php';
        $jsonPath = 'data/'.strtolower(str_replace(' ', '-', pathinfo($topic, PATHINFO_FILENAME) )).'/'.$filename.'.json';
        
        $data[] = array(
            'pages' => [
                    'id' => $id,
                    'topic' => $topic,
                    'filename' => $filename,
                    'phppath' => $phpPath,
                    'jsonpath' => $jsonPath
            ]);
            
        $this->disconnect(self::DB, $data);
        
		return $id;
    }
    
    /**
     * getPhpPath
     *
     * @param  string $id
     *
     * @return string
     */
    public function getPhpPath($id)
    {
        $data = $this->connect();
        $key = array_search($id, array_column($data, 'id'));

        return $data[$key]['pages']['phppath'];
    }
    
    /**
     * getJsonPath
     *
     * @param  string $id
     *
     * @return string
     */
    public function getJsonPath($id)
    {
        $data = $this->connect();
        $key = array_search($id, array_column($data, 'id'));
        
        return $data[$key]['pages']['jsonpath'];
    }
    
    /**
     * getId
     *
     * @param  string $path
     *
     * @return string
     */
    public function getId($path)
    {
        $data = $this->connect();
        $key = array_search($path, array_column($data, 'phppath'));
        
        return $data[$key]['pages']['id'];
    }
    
    /**
     * getTopic
     *
     * @param  string $id
     *
     * @return string
     */
    public function getTopic($id)
    {
        $data = $this->connect();
        $key = array_search($id, array_column($data, 'id'));
        
        return $data[$key]['pages']['topic'];
    }
    
    /**
     * getFilename
     *
     * @param  string $id
     *
     * @return string
     */
    public function getFilename($id)
    {
        $data = $this->connect();
        $key = array_search($id, array_column($data, 'id'));
        
        return $data[$key]['pages']['filename'];
    }
    
    /**
     * getPageData
     *
     * @param  string $id
     *
     * @return array
     */
    public function getPageData($id)
    {
        $data = $this->connectPageData($id);

        return $data;
    }
    
    /**
     * putPageData
     *
     * @param  string $id
     * @param  array $data
     *
     * @return array
     */
    public function putPageData($id, $data)
    {
        $path = $this->getJsonPath($id);

        return file_put_contents($path, json_encode($data));
    }
    
    /**
     * addPageData
     *
     * @param  string $id
     * @param  array $array
     *
     * @return array
     */
    public function addPageData($id, $array)
    {
        $data = $this->getPageData($id);
        $data[] = array(
            'key' => $array['key'],
            'v1' => $array['v1'],
            'v2' => $array['v2'],
            'v3' => $array['v3'],
            'v4' => $array['v4']
            );
            
        return $this->putPageData($id, $data);
    }
    
    /**
     * modifyPageData
     *
     * @param  string $id
     * @param  integer $index
     * @param  array $array
     *
     * @return array
     */
    public function modifyPageData($id, $index, $array)
    {
        $data = $this->getPageData($id);
        $data[$index] = array(
            'key' => $array['key'],
            'v1' => $array['v1'],
            'v2' => $array['v2'],
            'v3' => $array['v3'],
            'v4' => $array['v4']
            );
            
        return $this->putPageData($id, $data);
    }
    
    /**
     * removePageData
     *
     * @param  string $id
     * @param  integer $index
     *
     * @return array
     */
    public function removePageData($id, $index)
    {
        $data = $this->getPageData($id);
        array_splice($data, $index, 1);

            
        return $this->putPageData($id, $data);
    }
    
    /**
     * insertPageData
     *
     * @param  string $id
     * @param  integer $index
     * @param  string $before_or_after
     * @param  array $array
     *
     * @return array
     */
    public function insertPageData($id, $index, $before_or_after, $array)
    {
        $data = $this->getPageData($id);
        
        array_splice($data, ($before_or_after == 'b') ? (int)$index : (int)$index + 1, 0, array([
            'key' => $array['key'],
            'v1' => $array['v1'],
            'v2' => $array['v2'],
            'v3' => $array['v3'],
            'v4' => $array['v4']
            ]));

        return $this->putPageData($id, $data);
    }
    
    
    /**
     * remove
     *
     * @param  string $id
     *
     * @return string
     */
    public function remove($id)
    {
        $data = $this->connect();
        $key = $this->findKey($data, $id);
        
        if ($key !== false) {
        array_splice($data, $key, 1);
        }
        
        return $this->disconnect(self::DB, $data);
    }
    
    /**
     * disconnect
     *
     * @param  string $path
     * @param  array $data
     *
     * @return array
     */
    public function disconnect($path, $data)
    {
        return file_put_contents($path, json_encode($data));
    }
    
    /**
     * findKey
     *
     * @param  string $id
     *
     * @return int bool
     */
    public function findKey($data, $search)
    {
        $x = 0;
        foreach ($data as $array) {
            if ($array['pages']['id'] == $search) $key = $x;
            $x++;
        }
        
        return isset($key) ? $key : false;
    }
    
    
}