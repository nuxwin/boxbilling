<?php
/**
 * BoxBilling
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file LICENSE.txt
 * It is also available through the world-wide-web at this URL:
 * http://www.boxbilling.com/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@boxbilling.com so we can send you a copy immediately.
 *
 * @copyright Copyright (c) 2010-2012 BoxBilling (http://www.boxbilling.com)
 * @license   http://www.boxbilling.com/LICENSE.txt
 * @version   $Id$
 */
class Server_Package
{
    private $name                   = 'BoxBilling';
    private $quota                  = NULL;
    private $bandwidth              = NULL;
    
    private $maxdomains             = NULL;
    private $maxsubdomains          = NULL;
    private $maxparkeddomains       = NULL;
    private $maxftp                 = NULL;
    private $maxsql                 = NULL;
    private $maxpop                 = NULL;
    
    private $custom                 = array();
    
    public function setCustomValues(array $param)
    {
        $this->custom = $param;
        return $this;
    }
    
    public function setCustomValue($param, $value)
    {
        $this->custom[$param] = $value;
        return $this;
    }

    /**
     * @param string $param
     */
    public function getCustomValue($param)
    {
        return isset($this->custom[$param]) ? $this->custom[$param] : NULL;
    }
    
    public function setName($param)
    {
        $this->name = $param;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setQuota($param)
    {
        $this->quota = $param;
        return $this;
    }

    public function getQuota()
    {
        return $this->quota;
    }

    public function setBandwidth($param)
    {
        $this->bandwidth = $param;
        return $this;
    }

    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    public function setMaxDomains($param)
    {
        $this->maxdomains = $param;
        return $this;
    }

    public function getMaxDomains()
    {
        return $this->maxdomains;
    }
    
    public function setMaxSubdomains($param)
    {
        $this->maxsubdomains = $param;
        return $this;
    }

    public function getMaxSubdomains()
    {
        return $this->maxsubdomains;
    }

    public function setMaxParkedDomains($param)
    {
        $this->maxparkeddomains = $param;
        return $this;
    }

    public function getMaxParkedDomains()
    {
        return $this->maxparkeddomains;
    }

    public function setMaxFtp($param)
    {
        $this->maxftp = $param;
        return $this;
    }

    public function getMaxFtp()
    {
        return $this->maxftp;
    }

    public function setMaxSql($param)
    {
        $this->maxsql = $param;
        return $this;
    }

    public function getMaxSql()
    {
        return $this->maxsql;
    }

    public function setMaxPop($param)
    {
        $this->maxpop = $param;
        return $this;
    }

    public function getMaxPop()
    {
        return $this->maxpop;
    }
}