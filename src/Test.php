<?php
/**
 * Created by Phpstom.
 * User: YangJiafei
 * Date: 2020/3/21
 * Time: 17:12
 */

namespace yangjiafei\helloword;

class Test
{
    protected $params = [];

    public function setParam($params)
    {
        $this->params = $params;
        return $this;
    }

    public function getParam()
    {
        return $this->params;
    }
}