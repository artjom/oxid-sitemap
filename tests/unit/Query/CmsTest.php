<?php
declare(strict_types=1);

namespace IvobaOxid\OxidSiteMap\Tests\Query\Cms;

use IvobaOxid\OxidSiteMap\Query\Cms;
use PHPUnit\Framework\TestCase;

class CmsTest extends TestCase
{

    public function testGetPages()
    {
        //doesnt work because we cant include oxLegacyDb
//        $db = $this->prophesize('\oxLegacyDb');
//        $query = new Cms(
//            $db->reveal(),
//            'siteurl',
//            '1',
//            'daily'
//        );
//
//        $this->assertInstanceOf(Cms::class, $query);
    }
}
