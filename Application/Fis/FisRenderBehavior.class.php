<?php
namespace Fis;

use FISResource;
/**
 * ϵͳ��Ϊ��չ����̬����д��
 */
class FisRenderBehavior {

    // ��Ϊ��չ��ִ����ڱ�����run
    public function run(&$content){
        if(!class_exists('FISResource', false))
            return;
        $content = FISResource::renderResponse($content);
    }
}