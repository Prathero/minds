<?php
/**
 * Scrapers don't lend themselves to testing very well yet
 */

class ScraperTest extends Minds_PHPUnit_Framework_TestCase {

        protected function setUp() {
                // required by ElggEntity when setting the owner/container
                //_elgg_services()->setValue('session', new ElggSession(new Elgg_Http_MockSessionStorage()));
        }

        public function testCanConstructWithoutArguments() {
           //     $this->assertNotNull(new ElggBlog());
        }


}