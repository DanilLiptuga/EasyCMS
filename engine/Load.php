<?php

namespace Engine;

class Load
{
    const MASK_MODEL     = '\%s\Models\%s';

    /**
     * @param $modelName
     * @param bool $modelDir
     * @return \stdClass
     */
    public function model($modelName)
    {
        global $di;
        $modelName  = ucfirst($modelName);
        $namespace = sprintf(
            self::MASK_MODEL,
            VERT, $modelName
        );
        $model  = new $namespace($di);
        return $model;
    }
}