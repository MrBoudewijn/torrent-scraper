<?php

namespace Xurumelous\TorrentScraper\Entity;

class SearchResult
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $seeders;

    /**
     * @var int
     */
    protected $leechers;

    /**
     * @var string
     */
    protected $torrentUrl;

    /**
     * @var string
     */
    protected $magnetUrl;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $seeders
     */
    public function setSeeders($seeders)
    {
        $this->seeders = $seeders;
    }

    /**
     * @return int
     */
    public function getSeeders()
    {
        return $this->seeders;
    }

    /**
     * @param int $leechers
     */
    public function setLeechers($leechers)
    {
        $this->leechers = $leechers;
    }

    /**
     * @return int
     */
    public function getLeechers()
    {
        return $this->leechers;
    }

    /**
     * @param string $torrentUrl
     */
    public function setTorrentUrl($torrentUrl)
    {
        $this->torrentUrl = $torrentUrl;
    }

    /**
     * @return string
     */
    public function getTorrentUrl()
    {
        return $this->torrentUrl;
    }

    /**
     * @param string $magnetUrl
     */
    public function setMagnetUrl($magnetUrl)
    {
        $this->magnetUrl = $magnetUrl;
    }

    /**
     * @return string
     */
    public function getMagnetUrl()
    {
        return $this->magnetUrl;
    }
}
