<?php
/**
 * Kapitchi Zend Framework 2 Modules (http://kapitchi.com/)
 *
 * @copyright Copyright (c) 2012-2013 Kapitchi Open Source Team (http://kapitchi.com/open-source-team)
 * @license   http://opensource.org/licenses/LGPL-3.0 LGPL 3.0
 */

namespace KapAngularTheme\Mvc\Controller\Plugin;

/**
 *
 * @author Matus Zeman <mz@kapitchi.com>
 */
class Angular extends \Zend\Mvc\Controller\Plugin\AbstractPlugin
{
    public function __invoke()
    {
        return $this;
    }
    
    public function isTemplateRequest()
    {
        $accept = $this->getController()->getRequest()->getHeaders()->get('accept');
        $matchedFormat = $accept->match('text/ng-template')->getFormat();
        
        if($matchedFormat == 'ng-template') {
            return true;
        }
        
        return false;
    }
}